@extends('admin/index')

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
        <div class="col-md-10">
            <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title fleft">Đổi mật khẩu</h4>
            </div>

            <div class="card-body">
                <form>
                    <div class="row">
                        <div class="col-md-6">
                        <div class="form-group">
                            <label class="bmd-label-floating">Username</label>
                            <input type="text" class="form-control">
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                            <label class="bmd-label-floating">Email</label>
                            <input type="email" class="form-control">
                        </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                        <div class="form-group">
                            <label class="bmd-label-floating">Họ và tên</label>
                            <input type="text" class="form-control">
                        </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                        <div class="form-group">
                            <label class="bmd-label-floating">Số điện thoại</label>
                            <input type="text" class="form-control">
                        </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right">Đổi mật khẩu</button>
                    <div class="clearfix"></div>
                </form>
            </div>
            </div>
        </div>
        </div>
    </div>
</div>
@endsection
