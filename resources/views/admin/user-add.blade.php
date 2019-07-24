@extends('admin/index')

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
        <div class="col-md-10">
            <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title fleft">Thêm mới quản trị viên</h4>
            </div>

            <div class="card-body">
            <form method="POST" action="{{ route('users.store') }}">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                    <div class="form-group">
                        <label class="bmd-label-floating">Username</label>
                        <input type="text" class="form-control" name="username" value="hshuyhaui">
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                        <label class="bmd-label-floating">Email</label>
                        <input type="email" class="form-control" name="email" value="shhuyhuii@gmail.com">
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                    <div class="form-group">
                        <label class="bmd-label-floating">Mật khẩu</label>
                        <input type="password" name="newPassword" class="form-control" value="12345">
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                    <div class="form-group">
                        <label class="bmd-label-floating">Nhập lại mật khẩu</label>
                        <input type="password" name="retypeNewPassword" class="form-control" value="12345">
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                    <div class="form-group">
                        <label class="bmd-label-floating">Họ và tên</label>
                        <input type="text" class="form-control" name="fullname" value="huy ábasjdbdjb">
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                    <div class="form-group">
                        <label class="bmd-label-floating">Số điện thoại</label>
                        <input type="text" class="form-control" name="phone" value="0384255585">
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

