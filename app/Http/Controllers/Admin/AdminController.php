<?php

namespace App\Http\Controllers;

use App\User;
use App\Post;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function __construct () {
        $this->middleware('auth');
    }
    public function getAdmin (){
        $currPage = 'dashboard';
        $title = 'Bảng tin';
        $users = User::all();
        $posts = Post::all();
        return view('admin/admin', compact('users','posts', 'currPage', 'title'));
    }

    public function postAdmin () {

    }
}
