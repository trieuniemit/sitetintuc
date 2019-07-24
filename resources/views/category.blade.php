@extends('layout')

@section('main-section')
<div class="row">
    <!-- Single Blog Post -->
    <div class="col-md-12">
        <h1 style="font-size: 28px; margin: 10px 0 20px">Chuyên mục: {{$cat->name}}</h1>
    </div>
    @foreach($posts as $post)
    <div class="col-12 col-lg-6">
        <div class="single-blog-post style-3">
            <!-- Post Thumb -->
            <div class="post-thumb">
                <a href="/{{$post->category->slug}}/{{$post->slug}}_pid-{{$post->id}}.html"><img src="/uploads/{{$post->thumb}}" alt="{{$post->title}}"></a>
            </div>
            <!-- Post Data -->
            <div class="post-data">
                <a href="/{{$post->category->slug}}" class="post-catagory">{{$post->category->name}}</a>
                <a href="/{{$post->category->slug}}/{{$post->slug}}_pid-{{$post->id}}.html" class="post-title">
                    <h6>{{$post->title}}</h6>
                </a>
                <div class="post-meta">
                    <p class="post-author">Đăng bởi <a href="/author_{{$post->user->username}}.html">{{$post->user->fullname}}</a></p>
                    @php
                        $dffHours = $post->created_at->diffInHours(Carbon\Carbon::now(), false);
                    @endphp
                    <p class="post-date">{{$dffHours<=24? $dffHours.' giờ trước': date('H:i d/m/Y', strtotime($post->created_at))}}</p>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    <div class="col-md-12">
        {{ $posts->links() }}
    </div>
</div>
@endsection