<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function getAdmin (){
        $currPage = 'dashboard';
        $title = 'Bảng tin';
        $users = User::all();
        return view('admin/admin', compact('users', 'currPage', 'title'));
    }

    public function postAdmin () {

    }
}
