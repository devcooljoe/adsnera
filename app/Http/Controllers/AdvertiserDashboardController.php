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
        return view('advertiser.dashboard');
    }
    public function view_campaigns()
    {
        $tasks = auth()->user()->task()->orderBy('id', 'DESC')->get();
        return view('advertiser.campaigns', ['tasks' => $tasks]);
    }
    public function view_wallet() 
    {
        return view('advertiser.wallet');
    }
    public function view_new_campaign() {
        return view('forms.new_campaign');
    }

    public function add_new_campaign(Request $request) {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'caption' => ['required', 'string', 'max:1000'],
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
            'caption' => $data['caption'],
            'picture' => $picture_path,
            'link' => $link,
            'status' => 'pending',
        ]);

        Custom::clear_alert_session();
        $msg = "Campaign <b>'".$data['name']."'</b> has been created successfully!";
        Session::put('alert-msg', $msg);
        return redirect('/advertiser/campaigns?alert='.uniqid());

    }

    public function view_edit_campaign($task_id) {
        $task = Task::find($task_id);
        return view('forms.edit_campaign', ['task' => $task]);
    }
}
