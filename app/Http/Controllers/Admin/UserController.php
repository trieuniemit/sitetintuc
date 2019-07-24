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
        return view('admin/user', compact('users', 'currPage', 'title'));
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
        $title = 'Thêm mới quản trị viên';
        return view('admin/user-add', compact('users', 'currPage', 'title'));
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
        $rule = [
            'username' => 'required|min:5',
            'email' => 'required|email',
            'fullname' => 'required|max:33|min:6',
            'phone' => 'required|regex:/(0)[0-9]{9}/',
            'newPassword' => 'required|min:5'
        ];

        $messenger = [
            'username.required' => 'Tên người dùng không được để trống.',
            'username.max' => 'Tên người dùng phải chứa ít nhất 5 ký tự.',
            'email.required' => 'Email không được để trống.',
            'email.email' => 'Email không đúng định dạng.',
            'fullname.required' => 'Họ tên người dùng không được để trống.',
            'fullname.max' => 'Họ tên người dùng chỉ được chứa tối đa 33 kí tự',
            'fullname.max' => 'Họ tên người dùng phải chứa ít nhất 6 kí tự',
            'phone.required' => 'Số điện thoại không được để trống.',
            'phone.max' => 'Số điện thoại chỉ chứa tối đa 10 chữ số.',
            'newPassword.required' => 'Mật khẩu không được để trống',
            'newPassword.min' => 'Mật khẩu phải chứa ít nhất 5 kí tự'
        ];

        $validator = Validator::make($request->all(),$rule,$messenger);

        if (!$validator->fails()) {
            $newUser = new User();
            $newUser->username = $request->username;
            $newUser->email = $request->email;
            $newUser->fullname = $request->fullname;
            $newUser->phone = $request->phone;
            if($request->input('newPassword') == $request->input('retypeNewPassword')){
                $newUser->password = bcrypt($request->input('newPassword'));

                $newUser->save();

                return redirect(route('users.index'));
            } else {
                $errors = new MessageBag(['errornotmatch' => 'Mật khẩu không trùng khớp']);
                return redirect()->back()->withInput()->withErrors($errors);
            }
        } else {
            // dd("failed");
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
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
        if(Auth::user()->id == 1) {
            $rules = [
                'email' => 'required|email',
                'phone' =>'required|regex:/(0)[0-9]{9}/',
                'fullname' => 'required|min:4|max:33'
            ];
            $messages = [
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
                // $user = User::where('id', Auth::user()->id)->first();
                $user = User::find($id);
                $user->email = $request->email;
                $user->phone = $request->phone;
                $user->fullname = $request->fullname;

                $user->update();
                return redirect(url('admin/users'));
            }
        }

        return redirect(url('admin/users'));

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
        $userDestroy = User::find($id);
        $userDestroy->delete();
        return redirect('/admin/users');
    }
}
