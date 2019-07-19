@extends('admin/index')

@section('content')

<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-10">
          <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title fleft">Sửa bài viết</h4>
            </div>

            <div class="card-body">
            <form method="POST" action="{{ route('posts.update',['id'=>$post->id])}}">
                @csrf
                {{ method_field('PUT') }})
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                        <label class="bmd-label-floating">Tiêu đề</label>
                        <input type="text" class="form-control" name="title" value="{{$post->title}}">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                        <label class="bmd-label-floating">Mô tả</label>
                        <input type="text" class="form-control" name="desc" value="{{$post->desc}}">
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
                    <input type="text" class="form-control" name="slug" value="{{$post->slug}}">
                    </div>
                  </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                        <label class="bmd-label-floating">Nội dung</label>

                          <div class="form-group col-md-12">
                            <textarea name="content" class="form-control " id="editor1"></textarea>
                          </div>
                        
                        </div>
                    </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <select class="form-control"  name="category">
                          @foreach ($categories as $category)
                              <option value="{{$category->id}}">{{$category->name}}</option>
                          @endforeach
                      </select>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <select class="form-control"  name="userID">
                          @foreach ($users as $user)
                              <option value="{{$user->id}}">{{$user->username}}</option>
                          @endforeach
                      </select>
                    </div>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary pull-right">sửa tin</button>
                
                <div class="clearfix"></div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>

<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script> CKEDITOR.replace('editor1'); </script>

@endsection
