@extends('admin/index')

@section('content')
<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-10">
          <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title fleft">Sửa thông tin quản trị viên</h4>
                <div class="clear"></div>
            </div>
            <div class="card-body">
            <form method="POST" action="{{ route('users.update', $user->id) }}">
                @csrf
                {{ method_field('PUT') }}
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">Username</label>
                      <input type="text" class="form-control" name="username" value="{{ $user->username }}" disabled>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">Email</label>
                      <input type="email" class="form-control" name="email" value="{{ $user->email}}" >
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">Họ và tên</label>
                      <input type="text" class="form-control" name="fullname" value="{{ $user->fullname}}" >
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">Số điện thoại</label>
                      <input type="text" class="form-control" name="phone" value="{{ $user->phone}}" >
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="bmd-label-floating">Mật khẩu</label>
                      <input type="text" class="form-control" name="password" value="" placerholder="********">
                    </div>
                  </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        @if($errors->any())
                            <h3 style="color: red;">
                                @foreach ($errors->all() as $error)
                                    <p>{{ $error }}</p>
                                @endforeach
                            </h3>
                        @endif
                    </div>
                </div>
                <button type="submit" class="btn btn-primary pull-right">Cập nhật hồ sơ</button>
                <div class="clearfix"></div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection

