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
                @if($loginUser->id == 1)
                    <ul class="nav nav-tabs fright" data-tabs="tabs">
                        <li class="nav-item ">
                            <a class="nav-link active" href="{{ route('users.create') }}">
                                <i class="material-icons">bug_report</i> Thêm mới
                                <div class="ripple-container"></div>
                            </a>
                        </li>
                    </ul>
                @endif
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
                            @if($loginUser->id == 1)
                                <th></th>
                            @endif
                        </thead>
                        <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }} </td>
                                <td>{{ $user->username }}</td>
                                <td>{{ $user->email }} </td>
                                <td>{{ $user->created_at }}</td>
                                @if($loginUser->id == 1)
                                    <td class="td-actions text-right">
                                        <button type="button" rel="tooltip" title="" class="btn btn-primary btn-link btn-sm" data-original-title="Edit Task">
                                            <a class="nav-link active" href="{{ route('users.edit', $user->id )}}">
                                                <i class="material-icons">edit</i>
                                                <div class="ripple-container"></div>
                                            </a>
                                        </button>
                                        <button type="button" rel="tooltip" title="" class="btn btn-danger btn-link btn-sm" data-original-title="Remove">
                                            <a class="nav-link active" href="{{ route('users.destroy', $user->id) }}">
                                                <i class="material-icons">close</i>
                                                <div class="ripple-container"></div>
                                            </a>
                                        </button>
                                    </td>
                                @endif
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

