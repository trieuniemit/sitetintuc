@extends('admin/index')

@section('content')
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js"></script>
<script>tinymce.init({selector:'textarea'});</script>

<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-10">
          <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title fleft">Thêm mới bài viết</h4>
                {{-- <p class="card-category">Complete your profile</p> 
                <ul class="nav nav-tabs fright" data-tabs="tabs">
                    <li class="nav-item ">
                        <a class="nav-link active" href="/admin/profile/editpassword" data-toggle="tab">
                        <i class="material-icons">bug_report</i> 
                        <div class="ripple-container">Thêm mới</div>
                        </a>
                    </li>
                </ul> 
                <div class="clear"></div> --}}
            </div>

            <div class="card-body">
            <form method="POST" action="{{ route('posts.store') }}">
                @csrf
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">Tiêu đề</label>
                      <input type="text" class="form-control" name="title">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">Miêu tả</label>
                      <input type="email" class="form-control" name="desc" >
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="bmd-label-floating">Ảnh</label>
                      <input type="text" class="form-control" name="thumb" >
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="bmd-label-floating">slug</label>
                      <input type="text" class="form-control" name="slug" >
                    </div>
                  </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="bmd-label-floating">Nội dung</label>
                        <textarea class="form-control" name="content" ></textarea>
                      </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <select class="form-control"  name="category">
                            @foreach ($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                        {{-- <input type="text" class="form-control" name="category" > --}}
                      </div>
                    </div>
                  </div>
                <button type="submit" class="btn btn-primary pull-right">thêm mới tin</button>
                
                <div class="clearfix"></div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
