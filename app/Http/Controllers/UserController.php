<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function getUser () {
        $users = User::all();
        $currPage = 'users';
        $title = 'Quản trị viên';
        return view('admin/user', compact('users', 'currPage','title'));
    }

    public function getProfile () {
        $currPage = 'users';
        $title = 'Hồ sơ';
        return view('admin/profile', compact('currPage','title'));
    }
    public function postUser () {

    }
}
