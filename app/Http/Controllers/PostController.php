<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        $totalPosts = Post::count();
        
        return view('posts.index', compact('posts', 'totalPosts'));
    }

    public function show($id)
    {
        $post = Post::find($id);
        
        if (!$post) {
            abort(404);
        }
        
        return view('posts.show', compact('post'));
    }
}