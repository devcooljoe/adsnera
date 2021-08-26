<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use Illuminate\Support\Facades\Session;

class GuestController extends Controller
{
    public function index($user_id = false) 
    {
        if ($user_id != false) {
            Session::put('referral_id', $user_id);
        }
        return view('index');
    }

    public function viewpost($post_id, $promoter_id) 
    {
        return view('guest.viewpost');
        
    }
}
