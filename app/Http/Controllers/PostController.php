<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        $posts = Post::first()->get();
        return view('eloquent.posts', compact('posts'));
    }
}
