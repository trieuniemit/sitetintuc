<?php

namespace App\Http\Controllers;
use App\Post;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $randomPosts = Post::orderByRaw("RAND()")->get();
        $randomPosts->load("category");

        dd($randomPosts);
        return view('index', compact('randomPosts'));
    }
}
