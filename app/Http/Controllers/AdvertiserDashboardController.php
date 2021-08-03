<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdvertiserDashboardController extends Controller
{
    public function view_dashboard() 
    {
        return view('advertiser.dashboard');
    }
    public function view_campaigns() 
    {
        return view('advertiser.campaigns');
    }
    public function view_wallet() 
    {
        return view('advertiser.wallet');
    }
}
