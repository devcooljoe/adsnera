<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Custom;
use App\Post;

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

    public function make_payment() {
        
        $paymentLink = Custom::make_payment(Session::get('payment-title'), Session::get('payment-price'), route('index').'/promoter/activate/verify');
        return redirect($paymentLink); 
    }

    public function new_post() {
        return view('forms.new_post');
    }

    public function add_new_post() 
    {
        $data = request()->validate([
            'title' => ['required', 'max:1000'],
            'body' => ['required', 'max:10000'],
            'file' => ['required', 'image', 'max:5000'],
            'category' => ['required'],
        ]);
        
        $picture_path = request()->file('file')->store('pictures', 'public');

        $title = $data['title'];
        $id = preg_replace('/ /', '-', substr(strtolower($title), 0, 50));
        $id = preg_replace('/[^A-Za-z0-9]|\-/', '-', $id);

        auth()->user()->post()->create([
            'custom_id' => $id.'-'.uniqid(),
            'title' => $data['title'],
            'picture' => $picture_path,
            'body' => $data['body'],
            'category' => $data['category'],
            'status' => 'approved',
        ]); 
        $last_post = Post::orderBy('id', 'DESC')->first();
        $last_post->update(['custom_id'=>$id.'-'.$last_post->id]);


        Custom::clear_alert_session();
        $msg = "Post <b>'".$data['title']."'</b> has been created successfully!";
        Session::put('alert-msg', $msg);
        return redirect('/admin?alert='.uniqid());

    }

    public function edit_post($id) 
    {
        $post = Post::findOrFail($id);
        $this->authorize('update', $post);
        return view('forms.edit_post', ['post'=>$post]);

    }

    public function add_edit_post($id) 
    {
        $post = Post::findOrFail($id);
        $this->authorize('update', $post);
        $data = request()->validate([
            'title' => ['required', 'max:1000'],
            'body' => ['required', 'max:10000'],
            'category' => ['required'],
        ]);

        $post->update([
            'title' => $data['title'],
            'body' => $data['body'],
            'category' => $data['category'],
            'status' => 'approved',
        ]);
        $id = preg_replace('/ /', '-', substr(strtolower($data['title']), 0, 50));
        $id = preg_replace('/[^A-Za-z0-9]|\-/', '-', $id);

        $post->update(['custom_id'=>$id.'-'.$post->id]);
        
        Custom::clear_alert_session();
        $msg = "Post <b>'".$data['title']."'</b> has been edited successfully!";
        Session::put('alert-msg', $msg);
        return redirect('/admin?alert='.uniqid());

    }

    public function delete_post($id) 
    {
        $post = Post::findOrFail($id);
        $this->authorize('update', $post);
        $post->delete();
        Custom::clear_alert_session();
        $msg = "Post <b>'".$post->title."'</b> has been deleted successfully!";
        Session::put('alert-msg', $msg);
        return redirect('/admin?alert='.uniqid());
    }


    public function view_admin() {

        $posts = auth()->user()->post()->get();
        $page_num = floor($posts->count() / 20);
        if (request()->page) {
            $page = request()->page * 20;
            $posts = auth()->user()->post()->orderBy('id', 'DESC')->skip($page)->take(20)->get();
        }else {
            $posts = auth()->user()->post()->orderBy('id', 'DESC')->paginate(20);
        }
        return view('general.admin', [
            'posts' => $posts,
            'page' => request()->page ?? 0,
            'page_num' => $page_num,
        ]);
    }
}
