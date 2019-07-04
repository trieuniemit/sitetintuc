<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function getUser () {
        $users = User::all();
        return view('admin/user', compact('users'));
    }

    public function postUser () {

    }
}
