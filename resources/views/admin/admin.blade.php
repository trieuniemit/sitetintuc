@extends('admin/index')

@section('content')
<div class="content">
    <div class="container-fluid">
        {{-- <div class="row"> --}}
        {{-- <div class="col-lg-3 col-md-6 col-sm-6">
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
        </div> --}}
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
                            <i class="material-icons">person_add</i> Thêm mới
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
                            <td><a href="/{{$post->category->slug}}/{{$post->slug}}_pid-{{$post->id}}.html">{{ $post->title }}</a>
                            <td class="td-actions text-right">
                            <a href="{{route('posts.edit', ['id' => $post->id])}}" class="btn btn-primary btn-link btn-sm" style="margin-right: 10px"  data-original-title="Edit Task"  aria-describedby="tooltip198149">
                                    <i class="material-icons">edit</i>
                                </a>
                                <button type="submit" rel="tooltip" data-url="{{ route('posts.destroy',['id'=> $post->id ]) }}" class="btn btn-danger btn-link btn-sm delete">
                                    <i class="material-icons">close</i>
                                </button>
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
                <h4 class="card-title">Danh sách quản trị viên có bài đăng nhiều nhất</h4>
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
                @foreach ($usersRank as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->username }}</td>
                        <td>{{$user->postCount}}</td>
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

<script>
    $(document).ready(function() {
        $('button.delete').click(function(e) {
            e.preventDefault();
            _this = this;
            if(confirm('Bạn có chắc chắn muốn xóa?')) {
                $.ajax({
                    url: $(this).attr('data-url'),
                    success: function(data) {
                        $(_this).parent().parent().remove();
                        console.log('complate!');
                    }
                })
            }
        });
    });
</script>

@endsection
