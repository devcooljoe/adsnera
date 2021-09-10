<?php

namespace App\Http\Controllers;

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
        $earnings = auth()->user()->earning()->orderBy('id', 'DESC')->get();
        $page_num = floor($earnings->count() / 20);
        if (request()->page) {
            $page = request()->page * 20;
            $earnings_part = auth()->user()->earning()->orderBy('id', 'DESC')->skip($page)->take(20)->get();
        }else {
            $earnings_part = auth()->user()->earning()->orderBy('id', 'DESC')->paginate(20);
        }

        $task_ids = [];
        foreach ($earnings as $earning) {
            array_push($task_ids, $earning->task_id);
        }
        $task_ids = array_unique($task_ids);
        $tasks = Task::whereIn('id', $task_ids)->get();
        $page_num_l = floor($tasks->count() / 20);
        if (request()->page_l) {
            $page_l = request()->page_l * 20;
            $tasks = Task::orderBy('id', 'DESC')->whereIn('id', $task_ids)->skip($page_l)->take(20)->get();
        }else {
            $tasks = Task::orderBy('id', 'DESC')->whereIn('id', $task_ids)->paginate(20);
        }



        return view('promoter.dashboard', [
            'earnings'=>$earnings_part,
            'page_num' => $page_num,
            'page' => request()->page ?? 0,
            'tasks'=>$tasks,
            'page_num_l' => $page_num_l,
            'page_l' => request()->page_l ?? 0,
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
        $posts = Post::orderBy('id', 'DESC')->get();

        $page_num = floor($posts->count() / 20);
        if (request()->page) {
            $page = request()->page * 20;
            $posts = Post::orderBy('id', 'DESC')->skip($page)->take(20)->get();
        }else {
            $posts = Post::orderBy('id', 'DESC')->paginate(20);
        }
        
        return view('promoter.tasks', [
            'tasks'=>$posts, 
            'count'=>$count,
            'page' => request()->page ?? 0,
            'page_num' => $page_num,
        ]);
    }
    public function view_wallet() 
    {
        $withdrawals = auth()->user()->withdrawal()->orderBy('id', 'DESC')->get();
        $page_num = floor($withdrawals->count() / 20);
        if (request()->page) {
            $page = request()->page * 20;
            $withdrawals = auth()->user()->withdrawal()->orderBy('id', 'DESC')->skip($page)->take(20)->get();
        }else {
            $withdrawals = auth()->user()->withdrawal()->orderBy('id', 'DESC')->paginate(20);
        }
        return view('promoter.wallet', [
            'withdrawals'=>$withdrawals,
            'page_num' => $page_num,
            'page' => request()->page ?? 0,
        ]);
    }
    
    public function view_referrals() 
    {
        $refs = auth()->user()->referral()->get();
        $page_num = floor($refs->count() / 20);
        if (request()->page) {
            $page = request()->page * 20;
            $refs = auth()->user()->referral()->orderBy('id', 'DESC')->skip($page)->take(20)->get();
        }else {
            $refs = auth()->user()->referral()->orderBy('id', 'DESC')->paginate(20);
        }
        return view('promoter.referrals', [
            'refs'=>$refs,
            'page' => request()->page ?? 0,
            'page_num' => $page_num,
        ]);
    }

    public function view_activate() 
    {
        if (auth()->user()->account()->first()->status == 'active') {
            return redirect()->back();
        }
        Session::put('payment-title', 'Activate your Adsnera account.');
        Session::put('payment-price', '500');
        return view('forms.payment');
    }

    public function verify_activation()
    {
        $status = request()->status;
        if ($status == 'cancelled') {
            $msg = 'Your activation transaction was cancelled!';
            Custom::clear_alert_session();
            Session::put('alert-msg', $msg);
            return redirect('/account/activate?alert='.uniqid());
        }else {
            $transaction_id = request()->transaction_id;
            $verified_amount = Custom::verify_payment($transaction_id);
            if ($verified_amount != false) {
                auth()->user()->account()->update(['status'=>'active']);
                auth()->user()->wallet()->update(['amount'=>150]);
                auth()->user()->deposit()->create([
                    'amount' => $verified_amount,
                    'status' => 'successful',
                ]);

                $msg = 'Transaction succesful! you have successfully activated your account. You\'ve just earned ₦150 as a signup bonus.';
                Custom::clear_alert_session();
                Session::put('alert-msg', $msg);
                $ref = Referral::where('account_id', auth()->user()->id)->first();
                if ($ref != null) {
                    $user = User::find($ref->user_id);
                    $old_amount = $user->wallet()->first()->amount;
                    $new_amount = $old_amount+250;
                    $user->wallet()->update(['amount'=>$new_amount]);
                    $ref->update(['paid'=> true]);
                    $ref->update(['account_status'=> 'active']);
                }
                return redirect('/promoter/dashboard?alert='.uniqid());
            }else {
                $msg = 'Transaction was not succesful, we detected a fraud action!';
                Custom::clear_alert_session();
                Session::put('alert-msg', $msg);
                return redirect('/promoter/dashboard?alert='.uniqid());
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
            if ($amount >= 3000) {
                if ($amount <= auth()->user()->wallet()->first()->amount) {
                    $amount_to_receive = $amount - ((7.5/100) * $amount);

                    $status = Custom::make_transfer($bank_code, $account_number, $amount_to_receive, route('index').'/');
                    if (strtolower($status) != 'failed') {
                        auth()->user()->withdrawal()->create([
                            'amount' => $amount_to_receive,
                            'status' => 'successful',
                        ]);
                        $old_amount = auth()->user()->wallet()->first()->amount;
                        $new_amount = $old_amount-$amount;
                        auth()->user()->wallet()->update(['amount'=>$new_amount]);
                        Custom::clear_alert_session();
                        $msg = "Your withdrawal request has been sent succesfully! Your account will be credited within the next few minutes.";
                        Session::put('alert-msg', $msg);
                        return redirect('/promoter/wallet?alert='.uniqid());
                    }else {
                        Custom::clear_alert_session();
                        $msg = "Your withdrawal request was not successful. You may check your bank details carefully then try again!";
                        Session::put('alert-msg', $msg);
                        return redirect('/promoter/wallet?alert='.uniqid());
                    }

                }else {
                    return redirect('/promoter/wallet#withdraw')->with('response-error', "Your balance is not up to ₦".number_format($amount, 2));
                }
                
            }else {
                return redirect('/promoter/wallet#withdraw')->with('response-error', 'You can only withdraw a minimum of ₦3,000.');
            }
        }else {
            Custom::clear_alert_session();
            $msg = "Sorry, you have not submitted your bank account details, go to your profile and submit your bank account details.";
            $link = "/account/profile/new_bank";
            Session::put('alert-msg', $msg);
            Session::put('alert-link', $link);
            return redirect('/promoter/wallet?alert='.uniqid());
        }
        
    }

}
