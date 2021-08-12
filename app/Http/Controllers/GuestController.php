<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index($user_id = false) 
    {
        return view('index');
    }

    public function viewpost($post_id, $promoter_id) 
    {
        return view('guest.viewpost');
    }
}
