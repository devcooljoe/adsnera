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
}
