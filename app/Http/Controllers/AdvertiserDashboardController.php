<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Custom;
use App\Task;

class AdvertiserDashboardController extends Controller
{

    public function view_dashboard() 
    {
        $tasks = auth()->user()->task()->orderBy('id', 'DESC')->get();
        $leads = auth()->user()->lead()->orderBy('id', 'DESC')->get();
        return view('advertiser.dashboard', [
            'tasks' => $tasks,
            'leads' => $leads,
        ]);
    }
    public function view_campaigns()
    {
        $tasks = auth()->user()->task()->orderBy('id', 'DESC')->get();
        return view('advertiser.campaigns', ['tasks' => $tasks]);
    }
    public function view_wallet()
    {
        $deposits = auth()->user()->deposit()->orderBy('id', 'DESC')->get();
        return view('advertiser.wallet', ['deposits'=>$deposits]);
    }
    public function view_new_campaign() 
    {
        $amount = auth()->user()->wallet()->first()->amount;
        if ($amount < 1000) {
            Custom::clear_alert_session();
            $msg = "Your balance is too low! You need a minimum of ₦1,000 to start a campaign. Scroll down to fund your wallet now.";
            Session::put('alert-msg', $msg);
            return redirect('/advertiser/wallet?alert='.uniqid());
        }
        return view('forms.new_campaign');
    }

    public function add_new_campaign(Request $request) 
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'file' => ['required', 'image'],
        ]);
        if (!empty(request('link'))) {
            $request->validate([
                'link'=> ['string', 'url'],
            ]);
            $link = $request->link;
        }else {
            $link = null;
        }
        $picture_path = request()->file('file')->store('pictures', 'public');
        auth()->user()->task()->create([
            'name' => $data['name'],
            'picture' => $picture_path,
            'link' => $link,
            'status' => 'pending',
        ]);

        Custom::clear_alert_session();
        $msg = "Campaign <b>'".$data['name']."'</b> has been created successfully!";
        Session::put('alert-msg', $msg);
        return redirect('/advertiser/campaigns?alert='.uniqid());

    }

    public function view_edit_campaign($task_id) 
    {
        $task = Task::findOrFail($task_id);
        $this->authorize('update', $task);
        return view('forms.edit_campaign', ['task' => $task]);
    }

    public function add_edit_campaign($task_id) 
    {
        $task = Task::findOrFail($task_id);
        $data = request()->validate([
            'name' => ['required', 'string', 'max:100'],
        ]);
        if (!empty(request('link'))) 
        {
            request()->validate([
                'link'=> ['string', 'url'],
            ]);
            $link = request()->link;
        }else {
            $link = null;
        }

        $task->update([
            'name' => $data['name'],
            'link' => $link,
        ]);

        Custom::clear_alert_session();
        if ($task->name == $data['name'] && $task->caption == $data['caption'] && $task->link == $link) {
            $msg = "You have made no change!";
            Session::put('alert-msg', $msg);
            return redirect('/advertiser/campaigns/'.$task->id.'/edit?alert='.uniqid());
        }else {
            $msg = "Campaign <b>'".$data['name']."'</b> has been Updated successfully!";
            Session::put('alert-msg', $msg);
            return redirect('/advertiser/campaigns?alert='.uniqid());
        }
    }


    public function disable_campaign($task_id) 
    {
        $task = Task::findOrFail($task_id);
        $this->authorize('update', $task);
        if ($task->status == 'active') {
            $task->update(['status' => 'disabled']);
        }
        return redirect('/advertiser/campaigns');
    }
    public function enable_campaign($task_id) {
        $task = Task::findOrFail($task_id);
        $this->authorize('update', $task);
        if ($task->status == 'disabled') {
            $task->update(['status' => 'active']);
        }
        return redirect('/advertiser/campaigns');
    }

    public function fund() 
    {
        $amount = preg_replace('/[^0-9]/', '', request()->amount);
        if ($amount >= 1000) {
            $payment_link = Custom::make_payment('Funding your Adsnera wallet', $amount, route('index').'/advertiser/wallet/fund/verify');
            return redirect($payment_link);
        }else {
            return redirect('/advertiser/wallet#fund-wallet')->with('response-error', 'You need to fund your wallet with a minimum of ₦1,000.');
        }
    }

    public function verify_fund()
    {
        $status = request()->status;
        if ($status == 'cancelled') {
            $msg = 'Your funding transaction was cancelled!';
            Custom::clear_alert_session();
            Session::put('alert-msg', $msg);
            return redirect('/advertiser/wallet?alert='.uniqid());
        }else {
            $transaction_id = request()->transaction_id;
            $verified_amount = Custom::verify_payment($transaction_id);
            if ($verified_amount != false) {
                $old_amount = auth()->user()->wallet()->first()->amount;
                $new_amount = $old_amount+$verified_amount;
                auth()->user()->wallet()->update(['amount'=>$new_amount]);
                auth()->user()->account()->update(['status'=>'active']);
                auth()->user()->deposit()->create([
                    'amount' => $verified_amount,
                    'status' => 'successful',
                ]);
                $msg = 'Transaction succesful! you have successfully funded your wallet.';
                Custom::clear_alert_session();
                Session::put('alert-msg', $msg);
                return redirect('/advertiser/wallet?alert='.uniqid());
            }else {
                $msg = 'Transaction was not succesful, we detected a fraud action!';
                Custom::clear_alert_session();
                Session::put('alert-msg', $msg);
                return redirect('/advertiser/wallet?alert='.uniqid());
            }

        }
    }







}
