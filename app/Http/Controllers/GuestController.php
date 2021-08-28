<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\Post;
use Illuminate\Support\Facades\Session;

class GuestController extends Controller
{
    public function index() 
    {
        $posts = Post::orderBy('id', 'DESC')->where('status', 'approved')->get();
        return view('guest.post', ['posts'=>$posts]);
    }

    public function viewpost($post_id, $promoter_id = false) 
    {
        $post = Post::findOrFail($post_id);
        return view('guest.viewpost', ['post'=> $post]);
        
    }
}
