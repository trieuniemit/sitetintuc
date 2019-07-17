@extends('admin/index')

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
            <div class="card-header card-header-warning card-header-icon">
                <div class="card-icon">
                <i class="material-icons">content_copy</i>
                </div>
                <p class="card-category">Used Space</p>
                <h3 class="card-title">49/50
                <small>GB</small>
                </h3>
            </div>
            <div class="card-footer">
                <div class="stats">
                <i class="material-icons text-danger">warning</i>
                <a href="#pablo">Get More Space...</a>
                </div>
            </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
            <div class="card-header card-header-success card-header-icon">
                <div class="card-icon">
                <i class="material-icons">store</i>
                </div>
                <p class="card-category">Revenue</p>
                <h3 class="card-title">$34,245</h3>
            </div>
            <div class="card-footer">
                <div class="stats">
                <i class="material-icons">date_range</i> Last 24 Hours
                </div>
            </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
            <div class="card-header card-header-danger card-header-icon">
                <div class="card-icon">
                <i class="material-icons">info_outline</i>
                </div>
                <p class="card-category">Fixed Issues</p>
                <h3 class="card-title">75</h3>
            </div>
            <div class="card-footer">
                <div class="stats">
                <i class="material-icons">local_offer</i> Tracked from Github
                </div>
            </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
            <div class="card-header card-header-info card-header-icon">
                <div class="card-icon">
                <i class="fa fa-twitter"></i>
                </div>
                <p class="card-category">Followers</p>
                <h3 class="card-title">+245</h3>
            </div>
            <div class="card-footer">
                <div class="stats">
                <i class="material-icons">update</i> Just Updated
                </div>
            </div>
            </div>
        </div>
        </div>
        <div class="row">
        <div class="col-lg-6 col-md-12">
            <div class="card">
            <div class="card-header card-header-tabs card-header-primary">
                <div class="nav-tabs-navigation">
                <div class="nav-tabs-wrapper">
                    <h4 class="nav-tabs-title">Các bài viết</h4>
                    <ul class="nav nav-tabs fright" data-tabs="tabs">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{route('posts.create')}}" >
                            <i class="material-icons">bug_report</i> Thêm mới
                            <div class="ripple-container"></div>
                            </a>
                        </li>
                    </ul>
                    <div class="clear"></div>
                </div>
                </div>
            </div>
            <div class="card-body">
                <div class="tab-content">
                <div class="tab-pane active" id="profile">
                    <table class="table">
                    <tbody>
                        <tr>

                        @foreach ($posts as $post)  {{--xuat bai title ra trang--}}
                            <td>
                                <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" value="">
                                    <span class="form-check-sign">
                                    <span class="check"></span>
                                    </span>
                                </label>
                                </div>
                            </td>
                            <td><a href="">{{ $post->title }}</a>
                            <td class="td-actions text-right">
                                <a href="" title="" class="btn btn-primary btn-link btn-sm" style="margin-right: 10px"  data-original-title="Edit Task"  aria-describedby="tooltip198149">
                                    <i class="material-icons">edit</i>
                                </a>
                                <a href="" title="" class="btn btn-danger btn-link btn-sm" data-original-title="Remove" >
                                    <i class="material-icons">close</i>
                                </a>
                            </td>
                            </tr>
                            <tr>
                        @endforeach

                    </tbody>
                    </table>
                </div>
                </div>
            </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-12">
            <div class="card">
            <div class="card-header card-header-warning">
                <h4 class="card-title">Danh sách 3 quản trị viên có bài đăng nhiều nhất</h4>
                {{-- <p class="card-category">New employees on 15th September, 2016</p> --}}
            </div>
            <div class="card-body table-responsive">
                <table class="table table-hover">
                <thead class="text-warning">
                    <th>ID</th>
                    <th>Tên</th>
                    {{-- <th>Salary</th> --}}
                    <th>Số bài viết</th>
                </thead>
                <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->username }}</td>
                        <td>3</td>
                    </tr>
                @endforeach
                </tbody>
                </table>
            </div>
            </div>
        </div>
        </div>
    </div>
</div>

@endsection
