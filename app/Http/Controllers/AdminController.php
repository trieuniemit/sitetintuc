<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function getAdmin (){
        $currPage = 'dashboard';
        $title = 'Bảng tin';
        return view('admin/admin', compact('currPage','title'));
    }

    public function postAdmin () {

    }
}
