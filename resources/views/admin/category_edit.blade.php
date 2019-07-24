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
                <h4 class="card-title fleft">Sửa thể loại tin</h4>
            </div>

            <div class="card-body">
            <form method="POST" action="{{ route('categories.update',['id'=>$category->id]) }}">
                @csrf
                {{ method_field('PUT') }})
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">Tên thể loại</label>
                    <input type="text" class="form-control" name="name" value="{{$category->name}}">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">Mô tả</label>
                      <input type="text" class="form-control" name="desc" value="{{$category->desc}}">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="bmd-label-floating">slug</label>
                      <input type="text" class="form-control" name="slug" value="{{$category->slug}}">
                    </div>
                  </div>
                </div>
                <!-- <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="bmd-label-floating">Parent</label>
                        <input type="text" class="form-control" name="parent" value="{{$category->parent}}">
                      </div>
                    </div>
                  </div> -->
                <button type="submit" class="btn btn-primary pull-right">Sửa tin</button>
                
                <div class="clearfix"></div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
