@extends('admin/index')

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
        <div class="col-md-12">
            <div class="card">
            <div class="card-header card-header-primary">
                <div class="fleft">
                    <h4 class="card-title">Danh sách quản trị viên</h4>
                </div>
                <ul class="nav nav-tabs fright" data-tabs="tabs">
                    <li class="nav-item ">
                        <a class="nav-link active" href="{{ route('users.create') }}">
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
                            <th>ID</th>
                            <th>Tên</th>
                            <th>Email</th>
                            <th>Ngày tạo</th>
                            <th></th>
                        </thead>
                        <tbody>
                        @foreach ($users as $user2)
                            <tr>
                                <td>{{ $user2->id }} </td>
                                <td>{{ $user2->username }}</td>
                                <td>{{ $user2->email }} </td>
                                <td>{{ $user2->created_at }}</td>
                                <td class="td-actions text-right">
                                    <button type="button" rel="tooltip" title="" class="btn btn-primary btn-link btn-sm" data-original-title="Edit Task">
                                        <a class="nav-link active" href="{{ route('users.edit', $user2->id )}}">
                                            <i class="material-icons">edit</i>
                                            <div class="ripple-container"></div>
                                        </a>
                                    </button>
                                    <button type="button" rel="tooltip" title="" class="btn btn-danger btn-link btn-sm" data-original-title="Remove">
                                        <a class="nav-link active" href="{{ route('users.destroy', $user2->id) }}">
                                            <i class="material-icons">close</i>
                                            <div class="ripple-container"></div>
                                        </a>
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

