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

//routes for admin
Route::prefix('admin')->group(function () {
    Route::get('/', 'AdminController@getAdmin')->name('admin');
    Route::get('/users', 'UserController@getUser')->name('user');
    Route::get('/profile', 'UserController@getProfile')->name('profile');
});

Route::get('/', function(){
    return view('index');
});
