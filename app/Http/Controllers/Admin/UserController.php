<?php

namespace App\Http\Controllers;

use App\User;
use Auth;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\MessageBag;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct () {
        $this->middleware('auth');
    }
    public function index()
    {
        //
        $users = User::all();
        $currPage = 'users';
        $title = 'Quản trị viên';
        $user = User::where('id', Auth::user()->id)->first();
        return view('admin/user', compact('user','users', 'currPage', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $users = User::all();
        $currPage = 'users';
        $user = User::where('id', Auth::user()->id)->first();
        $title = 'Thêm mới quản trị viên';
        return view('admin/user-add', compact('user','users', 'currPage', 'title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $user = User::find($id);
        $currPage = 'users';
        $title = 'Sửa thông tin quản trị viên';
        return view('admin/user-edit', compact('user', 'currPage', 'title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $user = User::find($id);
        $currPage = 'users';
        if(Auth::user()->id == 1) {
            // moi duoc sua
            $rules = [
                // 'username' =>'required|min:3',
                'email' => 'required|email',
                'phone' =>'required|regex:/(0)[0-9]{9}/', //min:10|max:10|
                'fullname' => 'required|min:4|max:33'
            ];
            $messages = [
                // 'username.required' => 'Username là trường bắt buộc',
                // 'username.min' => 'Username phải chứa ít nhất 3 kí tự',
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
                // dd($request->all());
                return redirect()->back()->withErrors($validator)->withInput();
            } else {
                $user = User::where('id', Auth::user()->id)->first();

                $user->email = $request->email;
                $user->phone = $request->phone;
                $user->fullname = $request->fullname;

                $user->save();
                return redirect(view('admin/user'));
            }
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
