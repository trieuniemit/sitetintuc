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
                        <a class="nav-link active" href="{{route('categories.create')}}">
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
                            <th>Tên</th>
                            <th>Miêu tả</th>
                            <th>Slug</th>
                            <th>Parent</th>
                            <th>Ngày tạo</th>
                            <th>Ngày cập nhập gần nhất</th>
                        </thead>
                        <tbody>
                        @foreach ($categories as $category)
                            <tr>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->desc }} </td>
                                <td>{{ $category->slug }}</td>
                                <td>{{ $category->parent }}</td>
                                <td>{{ $category->created_at }}</td>
                                <td>{{ $category->updated_at }}</td>
                                <td class="td-actions text-right">
                                    <a href="" rel="tooltip" title="" class="btn btn-primary btn-link btn-sm" style="margin-right: 10px"  data-original-title="Edit Task"  aria-describedby="tooltip535830">
                                        <i class="material-icons">edit</i>
                                    </a>
                                    <a href="" rel="tooltip" title="" class="btn btn-danger btn-link btn-sm" data-original-title="Remove" >
                                        <i class="material-icons">close</i>
                                    </a>
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

