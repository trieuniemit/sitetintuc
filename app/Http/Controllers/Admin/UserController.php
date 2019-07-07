<?php

namespace App\Http\Controllers;

use App\User;
use Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct () {
        $this->middleware('auth');
    }
    //
    public function getUser () {
        $users = User::all();
        $currPage = 'users';
        $title = 'Quản trị viên';
        return view('admin/user', compact('users', 'currPage', 'title'));
    }

    public function getProfile () {
        $currPage = 'users';
        $title = 'Hồ sơ';
        $user = User::where('id', Auth::user()->id)->first();
        return view('admin/profile', compact('user', 'currPage', 'title'));
    }

    public function postProfile (Request $request) {
        $rules = [
            'username' =>'required|min:3',
    		'email' => 'required|email',
    		'phone' =>'required|regex:/(0)[0-9]{9}/', //min:10|max:10|
    		'fullname' => 'required|min:4|max:33'
    	];
    	$messages = [
    		'username.required' => 'Username là trường bắt buộc',
    		'username.min' => 'Username phải chứa ít nhất 3 kí tự',
    		'email.required' => 'Email là trường bắt buộc',
            'email.email' => 'Email chưa đúng định dạng',
            'phone.required' => 'Số điện thoại là trường bắt buộc',
            'phone.email' => 'Số điện thoại chưa đúng định dạng',
            'fullname.required' => 'Họ và tên là trường bắt buộc',
            'fullname.min' => 'Họ và tên chứa ít nhất 4 kí tự',
            'fullname.max' => 'Họ và tên chỉ chứa tối đa 33 kí tự'
    	];
    	$validator = Validator::make($request->all(), $rules, $messages);

    	if ($validator->fails()) {
    		return redirect()->back()->withErrors($validator)->withInput();
    	} else {
            $email = $request->input('email');
            $phone = $request->input('phone');
    		$username = $request->input('username');
    		$fullname = $request->input('fullname');

            if( Auth::attempt(['username' =>$username, 'password' =>$password]) ||
                Auth::attempt(['email' =>$email, 'password' =>$password])) {
                //dang nhap thang cong
    			return redirect()->intended('/admin');
    		} else {
                //dang nhap loi
                $errors = new MessageBag(['errorlogin' => 'Username hoặc mật khẩu không đúng']);
                // dd($errors);
                return redirect()->back()->withInput()->withErrors($errors);
    		}
    	}
    }

    public function getPassword () {
        $currPage = 'users';
        $title = 'Đổi mật khẩu';
        $users = User::all();
        return view('admin/profile', compact('users', 'currPage', 'title'));
    }

    public function postUser () {

    }
}
