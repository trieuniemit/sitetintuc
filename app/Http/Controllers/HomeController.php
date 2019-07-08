<?php

namespace App\Http\Controllers;
use App\Post;
use Carbon\Carbon;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        Carbon::setLocale('vi');
        
        $randomPosts = Post::orderByRaw("RAND()")->get();
        $randomPosts->load('category', 'user');
        
        $lastestPosts = Post::limit(10)->get();
        $lastestPosts->load('category', 'user');

        return view('index', compact('randomPosts', 'lastestPosts'));
    }

    public function getLastestPosts() {

    }
}
