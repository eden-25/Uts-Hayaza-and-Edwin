<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $totalPosts = Post::count();
        
        return view('home', [
            'totalPosts' => $totalPosts
        ]);
    }
}