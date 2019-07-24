<!-- Sidebar Area -->
<div class="col-12 col-lg-4">
    <div class="sidebar-area">
        <!-- Newsletter Widget -->
        {{-- <div class="newsletter-widget mb-70">
            <h4>Sign up to <br>our newsletter</h4>
            <form action="#" method="post">
                <input type="text" name="text" placeholder="Name">
                <input type="email" name="email" placeholder="Email">
                <button type="submit" class="btn w-100">Subscribe</button>
            </form>
        </div> --}}

        <!-- Trending Articles Widget -->
        <div class="treading-articles-widget mb-70">
            <h4>Bài viết được quan tâm</h4>

            <!-- Single Trending Articles -->
            @php($index = 0)
            @foreach($trendingPosts as $post)    
                <div class="single-blog-post style-4">
                    <!-- Post Thumb -->
                    <div class="post-thumb">
                        <a href="/{{$post->category->slug}}/{{$post->slug}}_pid-{{$post->id}}.html"><img src="/uploads/{{$post->thumb}}" alt="{{$post->title}}"></a>
                        <span class="serial-number">{{++$index}}.</span>
                    </div>
                    <!-- Post Data -->
                    <div class="post-data">
                        <a href="/{{$post->category->slug}}/{{$post->slug}}_pid-{{$post->id}}.html" class="post-title">
                            <h6>{{$post->title}}</h6>
                        </a>
                        <div class="post-meta">
                            <p class="post-author">Đăng bởi <a href="/author_{{$post->user->username}}.html">{{$post->user->fullname}}</a></p>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

        <!-- Add Widget -->
        {{-- <div class="add-widget mb-70">
            <a href="#"><img src="img/bg-img/add.png" alt=""></a>
        </div> --}}

        <!-- Latest Comments -->
        {{-- <div class="latest-comments-widget">
            <h4>Latest Comments</h4>

            <!-- Single Comment Widget -->
            <div class="single-comments d-flex">
                <div class="comments-thumbnail">
                    <img src="img/bg-img/t1.jpg" alt="">
                </div>
                <div class="comments-text">
                    <a href="#"><span>Jamie Smith</span> on Facebook is offering facial recognition...</a>
                    <p>06:34 am, April 14, 2018</p>
                </div>
            </div>

            <!-- Single Comment Widget -->
            <div class="single-comments d-flex">
                <div class="comments-thumbnail">
                    <img src="img/bg-img/t2.jpg" alt="">
                </div>
                <div class="comments-text">
                    <a href="#"><span>Tania Heffner</span> on Facebook is offering facial recognition...</a>
                    <p>06:34 am, April 14, 2018</p>
                </div>
            </div>

            <!-- Single Comment Widget -->
            <div class="single-comments d-flex">
                <div class="comments-thumbnail">
                    <img src="img/bg-img/t3.jpg" alt="">
                </div>
                <div class="comments-text">
                    <a href="#"><span>Sandy Doe</span> on Facebook is offering facial recognition...</a>
                    <p>06:34 am, April 14, 2018</p>
                </div>
            </div>
        </div> --}}

    </div>
</div>