<?php

namespace App\Http\Controllers;

use App\Constant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Task;
use App\Post;
use App\Custom;
use App\Referral;
use App\User;

class PromoterDashboardController extends Controller
{

    public function view_dashboard()
    {
        $earnings = auth()->user()->earning()->orderBy('id', 'DESC')->paginate(20)->fragment('earnings');


        $task_ids = [];
        foreach ($earnings as $earning) {
            array_push($task_ids, $earning->task_id);
        }
        $task_ids = array_unique($task_ids);
        $tasks = Task::whereIn('id', $task_ids)->paginate(20)->fragment('tasks');




        return view('promoter.dashboard', [
            'earnings' => $earnings,
            'tasks' => $tasks,
        ]);
    }

    public function view_tasks()
    {

        $tasks = Task::orderBy('id', 'DESC')->where('status', 'active')->get();
        $count = 0;
        foreach ($tasks as $task) {
            if ($task->user()->first()->wallet()->first()->amount > 100) {
                $count++;
            }
        }
        $posts = Post::orderBy('id', 'DESC')->paginate(20);


        return view('promoter.tasks', [
            'tasks' => $posts,
            'count' => $count,
        ]);
    }
    public function view_wallet()
    {
        $withdrawals = auth()->user()->withdrawal()->orderBy('id', 'DESC')->paginate(20);

        return view('promoter.wallet', [
            'withdrawals' => $withdrawals,
        ]);
    }

    public function view_referrals()
    {
        $refs = auth()->user()->referral()->orderBy('id', 'DESC')->paginate(20);

        return view('promoter.referrals', [
            'refs' => $refs,
        ]);
    }

    public function view_activate()
    {
        if (auth()->user()->account()->first()->status == 'active') {
            return redirect()->back();
        }
        Session::put('payment-title', 'Activate your Adsnera account.');
        Session::put('payment-price',  Constant::ACTIVATION_FEE);
        return view('forms.payment');
    }

    public function verify_activation()
    {
        $status = request()->status;
        if ($status == 'cancelled') {
            $msg = 'Your activation transaction was cancelled!';
            Custom::clear_alert_session();
            Session::put('alert-msg', $msg);
            return redirect('/account/activate?alert=' . uniqid());
        } else {
            $transaction_id = request()->transaction_id;
            $verified_amount = Custom::verify_payment($transaction_id);
            if ($verified_amount != false) {
                auth()->user()->account()->update(['status' => 'active']);
                auth()->user()->wallet()->update(['amount' => Constant::SIGNUP_BONUS]);
                auth()->user()->deposit()->create([
                    'amount' => $verified_amount,
                    'status' => 'successful',
                ]);

                $msg = 'Transaction succesful! you have successfully activated your account. You\'ve just earned ₦' . Constant::SIGNUP_BONUS . ' as a signup bonus.';
                Custom::clear_alert_session();
                Session::put('alert-msg', $msg);
                $ref = Referral::where('account_id', auth()->user()->id)->first();
                if ($ref != null) {
                    $user = User::find($ref->user_id);
                    $old_amount = $user->wallet()->first()->amount;
                    $new_amount = $old_amount + Constant::REFERRAL_BONUS;
                    $user->wallet()->update(['amount' => $new_amount]);
                    $ref->update(['paid' => true]);
                    $ref->update(['account_status' => 'active']);
                }
                return redirect('/promoter/dashboard?alert=' . uniqid());
            } else {
                $msg = 'Transaction was not succesful, we detected a fraud action!';
                Custom::clear_alert_session();
                Session::put('alert-msg', $msg);
                return redirect('/promoter/dashboard?alert=' . uniqid());
            }
        }
    }


    public function withdraw()
    {
        $amount = preg_replace('/[^0-9]/', '', request()->amount);
        $account_name = auth()->user()->bank()->first()->account_name;
        $account_number = auth()->user()->bank()->first()->account_number;
        $bank_name = auth()->user()->bank()->first()->bank_name;
        $bank_code = preg_replace('/[^0-9]/', '', $bank_name);
        $account_type = auth()->user()->bank()->first()->account_type;
        if ($account_number != null && $bank_name != null) {
            $amount = preg_replace('/[^0-9]/', '', request()->amount);
            if ($amount >= Constant::MINIMUM_WITHDRAWAL_AMOUNT) {
                if ($amount <= auth()->user()->wallet()->first()->amount) {
                    $amount_to_receive = $amount - ((7.5 / 100) * $amount);

                    $status = Custom::make_transfer($bank_code, $account_number, $amount_to_receive, route('index') . '/');
                    if (strtolower($status) != 'failed') {
                        auth()->user()->withdrawal()->create([
                            'amount' => $amount_to_receive,
                            'status' => 'successful',
                        ]);
                        $old_amount = auth()->user()->wallet()->first()->amount;
                        $new_amount = $old_amount - $amount;
                        auth()->user()->wallet()->update(['amount' => $new_amount]);
                        Custom::clear_alert_session();
                        $msg = "Your withdrawal request has been sent succesfully! Your account will be credited within the next few minutes.";
                        Session::put('alert-msg', $msg);
                        return redirect('/promoter/wallet?alert=' . uniqid());
                    } else {
                        Custom::clear_alert_session();
                        $msg = "Your withdrawal request was not successful. You may check your bank details carefully then try again!";
                        Session::put('alert-msg', $msg);
                        return redirect('/promoter/wallet?alert=' . uniqid());
                    }
                } else {
                    return redirect('/promoter/wallet#withdraw')->with('response-error', "Your balance is not up to ₦" . number_format($amount, 2));
                }
            } else {
                return redirect('/promoter/wallet#withdraw')->with('response-error', 'You can only withdraw a minimum of ₦' . number_format(Constant::MINIMUM_WITHDRAWAL_AMOUNT, 2) . '.');
            }
        } else {
            Custom::clear_alert_session();
            $msg = "Sorry, you have not submitted your bank account details, go to your profile and submit your bank account details.";
            $link = "/account/profile/new_bank";
            Session::put('alert-msg', $msg);
            Session::put('alert-link', $link);
            return redirect('/promoter/wallet?alert=' . uniqid());
        }
    }
}
