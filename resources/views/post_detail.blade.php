@extends('layout')

@section('main-section')
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.3&appId=156321928365097&autoLogAppEvents=1"></script>

<div class="blog-posts-area">
    <!-- Single Featured Post -->
    <div class="single-blog-post-details">
        <div class="post-thumb">
            <img style="width: 100%;" src="{{$post->thumb}}" alt="">
        </div>
        <div class="post-data">
            <a href="/{{$post->category->slug}}" class="post-catagory">{{$post->category->name}}</a>
            <h2 class="post-title">{{$post->title}}</h2>
            <div class="post-meta">

                <!-- Post Details Meta Data -->
                <div class="post-details-meta-data d-flex align-items-center justify-content-between" style="margin-bottom: 20px">
                    <!-- Post Author & Date -->
                    <div class="post-authors-date">
                        <p class="post-author">Đăng bởi <a href="/author_{{$post->user->username}}.html">{{$post->user->fullname}}</a></p>
                        @php
                            $dffHours = $post->created_at->diffInHours(Carbon\Carbon::now(), false);
                        @endphp
                        <p class="post-date">{{$dffHours<=24? $dffHours.' giờ trước': date('H:i d/m/Y', strtotime($post->created_at))}}</p>
                    </div>
                    <!-- View Comments -->
                    <div class="view-comments">
                        <p class="views">Lượt xem: {{$post->views}}</p>
                    </div>
                </div>
                <div class="post-content">
                    {{$post->content}}
                </div>
                <div class="fb-comment" style="margin: 40px -5px 20px; width: 100%">
                    <div class="fb-comments" data-href="{{Request::url()}}" data-width="100%" data-numposts="5"></div>
                </div>
            </div>
        </div>
        <!-- Login with Facebook to post comments -->
        <div class="login-with-facebook my-5">
            
        </div>
    </div>

    <!-- Related Articles Area -->
    <div class="related-articles-">
        <h4 style="margin-bottom: 15px;">Bài viết liên quan</h4>

        <div class="row">
            @foreach ($relatedPosts as $post)
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
</div>
@endsection