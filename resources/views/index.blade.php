@extends('layout')

@section('main-section')
  <!-- ##### Hero Area Start ##### -->
  <div class="hero-area">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <div class="hero-slides owl-carousel">
                      <!-- Single Blog Post -->
                      @foreach ($randomPosts as $post)
                        <div class="single-blog-post d-flex align-items-center mb-50">
                            <div class="post-thumb">
                                <a href="/{{$post->category->slug}}/{{$post->slug}}.html"><img src="{{$post->thumb}}" alt="{{$post->title}}"></a>
                            </div>
                            <div class="post-data">
                                <a href="/{{$post->category->slug}}/{{$post->slug}}.html" class="post-title">
                                  <h6>{{$post->title}}</h6>
                                </a>
                                <div class="post-meta">
                                  @php
                                    $dffHours = $post->created_at->diffInHours(Carbon\Carbon::now(), false);
                                  @endphp
                                  <p class="post-date">{{$dffHours<=24? $dffHours.' giờ trước': date('H:i d/m/Y', strtotime($post->created_at))}}</p>
                                </div>
                            </div>
                        </div>
                      @endforeach
                  </div>
              </div>

          </div>
      </div>
  </div>
  <!-- ##### Hero Area End ##### -->

  <!-- ##### Welcome Slide Area Start ##### -->
  <div class="welcome-slide-area">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <div class="welcome-slides owl-carousel">

                      <!-- Single Welcome Slide -->
                      <div class="single-welcome-slide">
                          <div class="row no-gutters">
                              <div class="col-12 col-lg-8">
                                  <!-- Welcome Post -->
                                  <div class="welcome-post">
                                      <img src="img/bg-img/bg1.jpg" alt="">
                                      <div class="post-content" data-animation="fadeInUp" data-duration="500ms">
                                          <a href="#" class="tag">Travel</a>
                                          <a href="#" class="post-title">10 Tips to travel in style for less</a>
                                          <p>1 day ago</p>
                                      </div>
                                  </div>
                              </div>

                              <div class="col-12 col-lg-4">
                                  <div class="welcome-posts--">
                                      <!-- Welcome Post -->
                                      <div class="welcome-post style-2">
                                          <img src="img/bg-img/bg2.jpg" alt="">
                                          <div class="post-content" data-animation="fadeInUp" data-delay="500ms" data-duration="500ms">
                                              <a href="#" class="tag tag-2">Celebs</a>
                                              <a href="#" class="post-title">Superstar spoted with new boyfriend</a>
                                              <p>1 day ago</p>
                                          </div>
                                      </div>

                                      <!-- Welcome Post -->
                                      <div class="welcome-post style-2">
                                          <img src="img/bg-img/bg3.jpg" alt="">
                                          <div class="post-content" data-animation="fadeInUp" data-delay="750ms" data-duration="500ms">
                                              <a href="#" class="tag tag-3">4 Fun</a>
                                              <a href="#" class="post-title">Festival looks for all the party people</a>
                                              <p>1 day ago</p>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>


                      <!-- Single Welcome Slide -->
                      <div class="single-welcome-slide">
                          <div class="row no-gutters">
                              <div class="col-12 col-lg-8">
                                  <!-- Welcome Post -->
                                  <div class="welcome-post">
                                      <img src="img/bg-img/bg1.jpg" alt="">
                                      <div class="post-content" data-animation="fadeInUp" data-duration="500ms">
                                          <a href="#" class="tag">Travel</a>
                                          <a href="#" class="post-title">10 Tips to travel in style for less</a>
                                          <p>1 day ago</p>
                                      </div>
                                  </div>
                              </div>

                              <div class="col-12 col-lg-4">
                                  <div class="welcome-posts--">
                                      <!-- Welcome Post -->
                                      <div class="welcome-post style-2">
                                          <img src="img/bg-img/bg2.jpg" alt="">
                                          <div class="post-content" data-animation="fadeInUp" data-delay="500ms" data-duration="500ms">
                                              <a href="#" class="tag tag-2">Celebs</a>
                                              <a href="#" class="post-title">Superstar spoted with new boyfriend</a>
                                              <p>1 day ago</p>
                                          </div>
                                      </div>

                                      <!-- Welcome Post -->
                                      <div class="welcome-post style-2">
                                          <img src="img/bg-img/bg3.jpg" alt="">
                                          <div class="post-content" data-animation="fadeInUp" data-delay="750ms" data-duration="500ms">
                                              <a href="#" class="tag tag-3">4 Fun</a>
                                              <a href="#" class="post-title">Festival looks for all the party people</a>
                                              <p>1 day ago</p>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>

                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="viral-story-blog-post section-padding-0-50">
      <div class="container">
          <div class="row">
              <!-- Blog Posts Area -->
              <div class="col-12 col-lg-8">
                  <div class="treading-articles-widget">
                    <h4>Bài viết mới</h4>
                    <div class="row">
                        @foreach ($lastestPosts as $post)
                        <!-- Single Blog Post -->
                        <div class="col-12 col-lg-6">
                            <div class="single-blog-post style-3">
                                <!-- Post Thumb -->
                                <div class="post-thumb">
                                    <a href="/{{$post->category->slug}}/{{$post->slug}}.html"><img src="{{$post->thumb}}" alt="{{$post->title}}"></a>
                                </div>
                                <!-- Post Data -->
                                <div class="post-data">
                                    <a href="/{{$post->category->slug}}" class="post-catagory">{{$post->category->name}}</a>
                                    <a href="/{{$post->category->slug}}/{{$post->slug}}.html" class="post-title">
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
                    <div class="row">
                        <div class="col-12">
                            <div class="viral-news-pagination">
                                <nav aria-label="Page navigation example">
                                    {{$lastestPosts->links()}}
                                </nav>
                            </div>
                        </div>
                    </div>
                  </div>

                @foreach ($postInCats as $section)
                    @if ($section['type'] == 'type-1')
                        <div class="related-articles-">
                            <h4 style="margin-bottom: 10px">{{$section['catname']}}</h4>
                            <div class="row">
                                @foreach ($section['posts'] as $post)
                                    <div class="col-12">
                                        <div class="single-blog-post style-3 style-5 d-flex align-items-center mb-50">
                                            <!-- Post Thumb -->
                                            <div class="post-thumb">
                                                <a href="/{{$post->category->slug}}/{{$post->slug}}.html"><img src="img/bg-img/19.jpg" alt=""></a>
                                            </div>
                                            <!-- Post Data -->
                                            <div class="post-data">
                                                <a href="/{{$post->category->slug}}" class="post-catagory">{{$post->category->name}}</a>
                                                <a href="/{{$post->category->slug}}/{{$post->slug}}.html" class="post-title">
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
                    @else
                        
                    @endif
                @endforeach
               
            </div>
              @include('sidebar')
          </div>
      </div>
  </div>
  <!-- ##### Blog Post Area End ##### -->
@endsection