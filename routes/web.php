<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/login', 'LoginController@getLogin')->name('login');
Route::post('/login', 'LoginController@postLogin')->name('login');

Route::get('/admin', 'AdminController@getAdmin')->name('admin');
Route::get('/user', 'UserController@getUser')->name('user');

Route::get('/', function(){
    return view('welcome');
});

Route:: get('/index', function () {
    return view('admin/index');
});
