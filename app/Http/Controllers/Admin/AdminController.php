<?php

namespace App\Http\Controllers;

use App\User;
use App\Post;
use Auth;
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
        $user = User::where('id', Auth::user()->id) ->first();
        return view('admin/admin', compact('user','users','posts', 'currPage', 'title'));
    }

    public function postAdmin () {

    }
}
