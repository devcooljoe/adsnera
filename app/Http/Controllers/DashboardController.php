<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Custom;

class DashboardController extends Controller
{

    public function index() 
    {
        Custom::clear_alert_session();
        
        if (auth()->user()->advertiser()) {
            $msg = 'Welcome, You are logged in to the Advertiser Dashboard as <b>'.auth()->user()->name.'.</b>';
            Session::put('alert-msg', $msg);
            return redirect('/advertiser/dashboard?alert='.uniqid());
        } else {
            $msg = 'Welcome, You are logged in to the Promoter Dashboard as <b>'.auth()->user()->name.'.</b>';
            Session::put('alert-msg', $msg);
            return redirect('/promoter/dashboard?alert='.uniqid());
        }
    }

    public function checkuser() 
    {
        Session::put('userchecked', true);
        return redirect()->back();
    }
    
    public function view_profile() 
    {
        return view('general.profile');
    }
    public function view_settings() 
    {
        return view('general.settings');
    }



    public function view_new_bank() 
    {
        return view("forms.new_bank");
    }

    public function add_new_bank() 
    {
        $data = request()->validate([
            'account_name' => ['required', 'string', 'max:100'],
            'account_number' => ['required', 'string', 'max:100'],
            'bank_name' => ['required', 'string'],
            'account_type' => ['required', 'string'],
        ]);

        auth()->user()->bank()->update([
            'account_name' => $data['account_name'],
            'account_number' => $data['account_number'],
            'bank_name' => $data['bank_name'],
            'account_type' => $data['account_type'],
        ]);
        Custom::clear_alert_session();
        $msg = "Your Bank Account has been added successfully!";
        Session::put('alert-msg', $msg);
        return redirect('/account/profile?alert='.uniqid());
    }

    public function view_edit_bank() 
    {
        $bank = auth()->user()->bank()->first();
        return view("forms.edit_bank", ['bank'=> $bank]);
    }


    public function add_edit_bank() 
    {
        $data = request()->validate([
            'account_name' => ['required', 'string', 'max:100'],
            'account_number' => ['required', 'string', 'max:100'],
            'bank_name' => ['required', 'string'],
            'account_type' => ['required', 'string'],
        ]);

        auth()->user()->bank()->update([
            'account_name' => $data['account_name'],
            'account_number' => $data['account_number'],
            'bank_name' => $data['bank_name'],
            'account_type' => $data['account_type'],
        ]);
        Custom::clear_alert_session();
        $msg = "Your Bank Details has been updated successfully!";
        Session::put('alert-msg', $msg);
        return redirect('/account/profile?alert='.uniqid());
    }

    public function switch() 
    {
        if (auth()->user()->promoter()) {
            $type = 'advertiser';
            Custom::clear_alert_session();
            $msg = "You are now an advertiser!";
        }else {
            $type = 'promoter';
            Custom::clear_alert_session();
        $msg = "You are now a promoter!";
        }
            
        auth()->user()->account()->first()->update(['type'=>$type]);
        Session::put('alert-msg', $msg);
        return redirect('/account/profile?alert='.uniqid());
    }
}
