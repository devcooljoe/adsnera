<?php

namespace App\Http\Controllers;

use App\Constant;
use App\Custom;
use App\Task;
use App\Post;
use App\User;
use App\Wallet;
use App\View;
use App\Lead;
use App\Earning;
use App\Subscriber;

class GuestController extends Controller
{
    public function index()
    {
        $posts_all = Post::orderBy('id', 'DESC')->where('status', 'approved')->get();
        $page_num = floor($posts_all->count() / 20);
        if (request()->page) {
            $page = request()->page * 20;
            $posts = Post::orderBy('id', 'DESC')->where('status', 'approved')->skip($page)->take(20)->get();
        } else {
            $posts = Post::orderBy('id', 'DESC')->where('status', 'approved')->paginate(20);
        }

        return view('guest.post', ['posts' => $posts, 'page' => request()->page ?? 0, 'page_num' => $page_num]);
    }

    public function viewpost($custom_id)
    {
        $post = Post::where('custom_id', $custom_id)->firstOrFail();

        $tasks = Task::where('status', 'active')->get();
        $user_id_list = [];
        foreach ($tasks as $task) {
            array_push($user_id_list, $task->user_id);
        }
        $user_id_list = array_unique($user_id_list);

        $valid_users = Wallet::whereIn('user_id', $user_id_list)->where('amount', '>=', 100)->get();
        $valid_user_id_list = [];
        foreach ($valid_users as $valid_user) {
            array_push($valid_user_id_list, $valid_user->user_id);
        }
        $valid_ads = Task::where('status', 'active')->whereIn('user_id', $valid_user_id_list)->get();
        $ads_id_list = [];
        foreach ($valid_ads as $valid_ad) {
            array_push($ads_id_list, $valid_ad->id);
        }
        $rand_id = rand(0, count($ads_id_list) - 1);
        $advert = Task::find($ads_id_list[$rand_id] ?? 0);
        if ($advert != null) {

            $user_agent = $_SERVER['HTTP_USER_AGENT'];
            $task_id = $advert->id;

            $check = View::where('task_id', $task_id)->where('user_agent', $user_agent)->first();
            if ($check == null) {
                $advertiser = User::find($advert->user_id);
                $old_balance = $advertiser->wallet()->first()->amount;
                $new_balance = $old_balance - Constant::PRICE_PER_VIEW;
                $advertiser->wallet()->first()->update(['amount' => $new_balance]);

                Lead::create([
                    'user_id' => $advert->user_id,
                    'task_id' => $task_id,
                    'user_agent' => $user_agent,
                    'billed' => true,
                ]);

                View::create([
                    'task_id' => $task_id,
                    'user_agent' => $user_agent,
                ]);

                if (request()->id) {
                    $user = User::find(request()->id);

                    if (!isset($_SERVER['HTTP_REFERER'])) {
                        Earning::create([
                            'user_id' => $user->id,
                            'task_id' => $task_id,
                            'user_agent' => $user_agent,
                            'paid' => true,
                        ]);
                        $old_balance = $user->wallet()->first()->amount;
                        $new_balance = $old_balance + Constant::PRICE_PER_VIEW;
                        $user->wallet()->first()->update(['amount' => $new_balance]);
                    }
                }
            }
        }

        return view('guest.viewpost', ['post' => $post, 'advert' => $advert]);
    }

    public function subscribe()
    {
        $email = request()->email;
        if (Subscriber::where('email', $email)->first() == null) {
            Subscriber::create(['email' => $email]);
        }
        return redirect()->back();
    }
}
