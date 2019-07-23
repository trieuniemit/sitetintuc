@extends('layout')

@section('main-section')

    <div class="treading-articles-widget">
    <h4>Bài viết mới</h4>
    <div class="row">
        @foreach ($lastestPosts as $post)
        <!-- Single Blog Post -->
        <div class="col-12 col-lg-6">
            <div class="single-blog-post style-3">
                <!-- Post Thumb -->
                <div class="post-thumb">
                    <a href="/{{$post->category->slug}}/{{$post->slug}}_pid-{{$post->id}}.html"><img src="{{$post->thumb}}" alt="{{$post->title}}"></a>
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
    </div>
    </div>

    @foreach ($postInCats as $section)
        @if ($section['type'] == 'type-1')
            <div class="related-articles-">
                <h4 style="margin-bottom: 10px">{{$section['catname']}}</h4>
                <div class="row">
                    @foreach ($section['posts'] as $post)
                        <div class="col-12">
                            <div class="single-blog-post style-3 style-5 d-flex align-items-center mb-30">
                                <!-- Post Thumb -->
                                <div class="post-thumb">
                                    <a href="/{{$post->category->slug}}/{{$post->slug}}_pid-{{$post->id}}.html"><img src="{{$post->thumb}}" alt=""></a>
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
                </div>
            </div>
        @endif
    @endforeach

@endsection