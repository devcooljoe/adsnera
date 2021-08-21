<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

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
        return view('promoter.tasks', ['tasks'=>$tasks]);
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

}
