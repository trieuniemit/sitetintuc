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
                                <a href="#"><img src="img/bg-img/1.jpg" alt=""></a>
                            </div>
                            <div class="post-data">
                                <a href="/{{$post->slug}}.html" class="post-title">
                                  <h6>{{$post->title}}</h6>
                                </a>
                                <div class="post-meta">
                                  <p class="post-date">{{date('H:i d/mY', strtotime($post->created_at))}}</p>
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
  <!-- ##### Welcome Slide Area End ##### -->

  <!-- ##### Blog Post Area Start ##### -->
  <div class="viral-story-blog-post section-padding-0-50">
      <div class="container">
          <div class="row">
              <!-- Blog Posts Area -->
              <div class="col-12 col-lg-8">
                  <div class="row">

                      <!-- Single Blog Post -->
                      <div class="col-12 col-lg-6">
                          <div class="single-blog-post style-3">
                              <!-- Post Thumb -->
                              <div class="post-thumb">
                                  <a href="#"><img src="img/bg-img/7.jpg" alt=""></a>
                              </div>
                              <!-- Post Data -->
                              <div class="post-data">
                                  <a href="#" class="post-catagory">Finance</a>
                                  <a href="#" class="post-title">
                                      <h6>This Is How Notebooks Of An Artist Who Travels Around The World Look</h6>
                                  </a>
                                  <div class="post-meta">
                                      <p class="post-author">By <a href="#">Michael Smithson</a></p>
                                      <p class="post-date">5 Hours Ago</p>
                                  </div>
                              </div>
                          </div>
                      </div>

                      <!-- Single Blog Post -->
                      <div class="col-12 col-lg-6">
                          <div class="single-blog-post style-3">
                              <!-- Post Thumb -->
                              <div class="post-thumb">
                                  <a href="#"><img src="img/bg-img/8.jpg" alt=""></a>
                              </div>
                              <!-- Post Data -->
                              <div class="post-data">
                                  <a href="#" class="post-catagory cat-3">4 Fun</a>
                                  <a href="#" class="post-title">
                                      <h6>10 Tips on how to have the best pool party on a small budget</h6>
                                  </a>
                                  <div class="post-meta">
                                      <p class="post-author">By <a href="#">Michael Smithson</a></p>
                                      <p class="post-date">5 Hours Ago</p>
                                  </div>
                              </div>
                          </div>
                      </div>

                      <!-- Single Blog Post -->
                      <div class="col-12 col-lg-6">
                          <div class="single-blog-post style-3">
                              <!-- Post Thumb -->
                              <div class="post-thumb">
                                  <a href="#"><img src="img/bg-img/9.jpg" alt=""></a>
                              </div>
                              <!-- Post Data -->
                              <div class="post-data">
                                  <a href="#" class="post-catagory">Finance</a>
                                  <a href="#" class="post-title">
                                      <h6>This Is How Notebooks Of An Artist Who Travels Around The World Look</h6>
                                  </a>
                                  <div class="post-meta">
                                      <p class="post-author">By <a href="#">Michael Smithson</a></p>
                                      <p class="post-date">5 Hours Ago</p>
                                  </div>
                              </div>
                          </div>
                      </div>

                      <!-- Single Blog Post -->
                      <div class="col-12 col-lg-6">
                          <div class="single-blog-post style-3">
                              <!-- Post Thumb -->
                              <div class="post-thumb">
                                  <a href="#"><img src="img/bg-img/10.jpg" alt=""></a>
                              </div>
                              <!-- Post Data -->
                              <div class="post-data">
                                  <a href="#" class="post-catagory cat-3">4 Fun</a>
                                  <a href="#" class="post-title">
                                      <h6>10 Tips on how to have the best pool party on a small budget</h6>
                                  </a>
                                  <div class="post-meta">
                                      <p class="post-author">By <a href="#">Michael Smithson</a></p>
                                      <p class="post-date">5 Hours Ago</p>
                                  </div>
                              </div>
                          </div>
                      </div>

                      <!-- Single Blog Post -->
                      <div class="col-12 col-lg-6">
                          <div class="single-blog-post style-3">
                              <!-- Post Thumb -->
                              <div class="post-thumb">
                                  <a href="#"><img src="img/bg-img/11.jpg" alt=""></a>
                              </div>
                              <!-- Post Data -->
                              <div class="post-data">
                                  <a href="#" class="post-catagory cat-2">Travel</a>
                                  <a href="#" class="post-title">
                                      <h6>This Is How Notebooks Of An Artist Who Travels Around The World Look</h6>
                                  </a>
                                  <div class="post-meta">
                                      <p class="post-author">By <a href="#">Michael Smithson</a></p>
                                      <p class="post-date">5 Hours Ago</p>
                                  </div>
                              </div>
                          </div>
                      </div>

                      <!-- Single Blog Post -->
                      <div class="col-12 col-lg-6">
                          <div class="single-blog-post style-3">
                              <!-- Post Thumb -->
                              <div class="post-thumb">
                                  <a href="#"><img src="img/bg-img/12.jpg" alt=""></a>
                              </div>
                              <!-- Post Data -->
                              <div class="post-data">
                                  <a href="#" class="post-catagory cat-4">featured</a>
                                  <a href="#" class="post-title">
                                      <h6>10 Tips on how to have the best pool party on a small budget</h6>
                                  </a>
                                  <div class="post-meta">
                                      <p class="post-author">By <a href="#">Michael Smithson</a></p>
                                      <p class="post-date">5 Hours Ago</p>
                                  </div>
                              </div>
                          </div>
                      </div>

                      <!-- Single Blog Post -->
                      <div class="col-12 col-lg-6">
                          <div class="single-blog-post style-3">
                              <!-- Post Thumb -->
                              <div class="post-thumb">
                                  <a href="#"><img src="img/bg-img/13.jpg" alt=""></a>
                              </div>
                              <!-- Post Data -->
                              <div class="post-data">
                                  <a href="#" class="post-catagory">Finance</a>
                                  <a href="#" class="post-title">
                                      <h6>This Is How Notebooks Of An Artist Who Travels Around The World Look</h6>
                                  </a>
                                  <div class="post-meta">
                                      <p class="post-author">By <a href="#">Michael Smithson</a></p>
                                      <p class="post-date">5 Hours Ago</p>
                                  </div>
                              </div>
                          </div>
                      </div>

                      <!-- Single Blog Post -->
                      <div class="col-12 col-lg-6">
                          <div class="single-blog-post style-3">
                              <!-- Post Thumb -->
                              <div class="post-thumb">
                                  <a href="#"><img src="img/bg-img/14.jpg" alt=""></a>
                              </div>
                              <!-- Post Data -->
                              <div class="post-data">
                                  <a href="#" class="post-catagory cat-3">4 Fun</a>
                                  <a href="#" class="post-title">
                                      <h6>10 Tips on how to have the best pool party on a small budget</h6>
                                  </a>
                                  <div class="post-meta">
                                      <p class="post-author">By <a href="#">Michael Smithson</a></p>
                                      <p class="post-date">5 Hours Ago</p>
                                  </div>
                              </div>
                          </div>
                      </div>

                  </div>

                  <div class="row">
                      <div class="col-12">
                          <div class="viral-news-pagination">
                              <nav aria-label="Page navigation example">
                                  <ul class="pagination">
                                      <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                      <li class="page-item"><a class="page-link" href="#">01</a></li>
                                      <li class="page-item"><a class="page-link" href="#">02</a></li>
                                      <li class="page-item"><a class="page-link" href="#">03</a></li>
                                      <li class="page-item"><a class="page-link" href="#">04</a></li>
                                      <li class="page-item"><a class="page-link" href="#">05</a></li>
                                      <li class="page-item"><a class="page-link" href="#">...</a></li>
                                      <li class="page-item"><a class="page-link" href="#">15</a></li>
                                      <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                  </ul>
                              </nav>
                          </div>
                      </div>
                  </div>
              </div>

              @include('sidebar')
          </div>
      </div>
  </div>
  <!-- ##### Blog Post Area End ##### -->
@endsection