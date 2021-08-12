<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PromoterDashboardController extends Controller
{

    public function view_dashboard() 
    {
        return view('promoter.dashboard');
    }

    public function view_tasks() 
    {
        return view('promoter.tasks');
    }
    public function view_wallet() 
    {
        return view('promoter.wallet');
    }
    public function view_referrals() 
    {
        return view('promoter.referrals');
    }

}
