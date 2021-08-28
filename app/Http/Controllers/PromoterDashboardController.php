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
        $earnings = auth()->user()->earning()->get();
        $task_ids = [];
        foreach ($earnings as $earning) {
            array_push($task_ids, $earning->task_id);
        }
        $task_ids = array_unique($task_ids);
        $tasks = Task::whereIn('id', $task_ids)->get();


        return view('promoter.dashboard', [
            'tasks'=>$tasks,
            'earnings'=>$earnings,
        ]);
    }

    public function view_tasks()
    {

        $tasks = Task::orderBy('id', 'DESC')->where('status', 'active')->get();
        $count = 0;
        foreach ($tasks as $task) {
            if ($task->user()->first()->wallet()->first()->amount > 200) {
                $count++;
            }
        }
        $posts = Post::orderBy('id', 'DESC')->paginate(20);
        
        return view('promoter.tasks', ['tasks'=>$posts, 'count'=>$count]);
    }
    public function view_wallet() 
    {
        $withdrawals = auth()->user()->withdrawal()->orderBy('id', 'DESC')->get();
        return view('promoter.wallet', ['withdrawals'=>$withdrawals]);
    }
    public function view_referrals() 
    {
        $refs = auth()->user()->referral()->get();
        return view('promoter.referrals', ['refs'=>$refs]);
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
                auth()->user()->deposit()->create([
                    'amount' => $verified_amount,
                    'status' => 'successful',
                ]);
                $msg = 'Transaction succesful! you have successfully activated your account.';
                Custom::clear_alert_session();
                Session::put('alert-msg', $msg);
                $ref = Referral::where('account_id', auth()->user()->id)->first();
                if ($ref != null) {
                    $user = User::find($ref->user_id);
                    $old_amount = $user->wallet()->first()->amount;
                    $new_amount = $old_amount+500;
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

}
