@extends('admin/index')

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
        <div class="col-md-12">
            <div class="card">
            <div class="card-header card-header-primary">
                <div class="fleft">
                    <h4 class="card-title">Danh sách các bài viết</h4>
                    {{-- <p class="card-category">Complete your profile</p> --}}
                </div>
                <ul class="nav nav-tabs fright" data-tabs="tabs">
                    <li class="nav-item ">
                        <a class="nav-link active" href="{{route('posts.create')}}">
                        <i class="material-icons">bug_report</i> Thêm mới
                        <div class="ripple-container"></div>
                        </a>
                    </li>
                </ul>
                <div class="clear"></div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead class="">
                            <th width="20%">Tiêu đề</th>
                            <th>Miêu tả</th>
                            <th>Ảnh</th>
                            <th>slug</th>
                            <th>Loại tin</th>
                            <th>Tác giả</th>
                            <th>Ngày viết</th>
                            <th>Ngày cập nhập gần nhất</th>
                        </thead>
                        <tbody>
                        @foreach ($posts as $post)
                            <tr>
                                <td>{{ $post->title }}</td>
                                <td width="50%">{{ $post->desc }} </td>
                                <td><img src="{{ $post->thumb }}" /></td>
                                <td>{{ $post->slug }}</td>
                                <td>{{ $post->category->name }}</td>
                                <td>{{ $post->user->fullname }}</td>
                                <td>{{ $post->created_at }}</td>
                                <td>{{ $post->updated_at }}</td>
                                <td class="td-actions text-right">
                                    <button type="button" rel="tooltip" title="" class="btn btn-primary btn-link btn-sm" data-original-title="Edit Task" aria-describedby="tooltip535830">
                                        <i class="material-icons">edit</i>
                                    </button>
                                    <button type="button" rel="tooltip" title="" class="btn btn-danger btn-link btn-sm" data-original-title="Remove">
                                        <i class="material-icons">close</i>
                                    </button>
                                </td>
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

