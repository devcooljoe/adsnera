<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class GuestController extends Controller
{
    public function index($user_id = false) 
    {
        return view('index');
    }

    public function viewpost($task_id, $promoter_id = false) 
    {
        if ($promoter_id == false) {
            $task = Task::find($task_id);
            return view('guest.viewcampaign', ['task' => $task]);
        }else {
            
        }
        
    }
}