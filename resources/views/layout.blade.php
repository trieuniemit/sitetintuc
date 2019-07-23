<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Viral Story - Viral News Magazine Template</title>

    <!-- Favicon -->
    <link rel="icon" href="{{url('img/core-img/favicon.ico')}}">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="{{url('style.css')}}">

</head>

<body>
    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area -->
        <div class="top-header-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="top-header-content d-flex align-items-center justify-content-between">
                            <!-- Breaking News Area -->
                            <div class="top-breaking-news-area">
                                <div id="breakingNewsTicker" class="ticker">
                                    <ul>
                                        <li><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></li>
                                        <li><a href="#">Welcome to Colorlib Family.</a></li>
                                        <li><a href="#">Nam eu metus sitsit amet, consec!</a></li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Social Info Area-->
                            <div class="top-social-info-area">
                                <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar Area -->
        <div class="viral-news-main-menu" id="stickyMenu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="viralnewsNav">

                        <!-- Logo -->
                        <a class="nav-brand" href="/"><img src="{{url('img/core-img/logo.png')}}" alt="Logo"></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    @php($index = 0)
                                    @foreach ($menuItems as $item)
                                      <li {{$index==0?'class=active': ''}}><a href="{{$item['link']}}">{{$item['name']}}</a></li>
                                      @php($index++)
                                    @endforeach
                                </ul>

                                <!-- Search Button -->
                                <div class="search-btn">
                                    <i id="searchbtn" class="fa fa-search" aria-hidden="true"></i>
                                </div>

                                <!-- Search Form -->
                                <div class="viral-search-form">
                                    <form id="search" action="#" method="get">
                                        <input type="text" name="search-terms" placeholder="Enter your keywords ...">
                                        <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                    </form>
                                </div>

                                <!-- Video Post Button -->
                                {{-- <div class="add-post-button">
                                    <a href="#" class="btn add-post-btn">Add Post</a>
                                </div> --}}

                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->
    @if(\Request::route()->getName() == 'home')
        @include('home_slider')
    @endif
    
  <div class="viral-story-blog-post section-padding-0-50" style="margin-top: 20px;">
      <div class="container">
          <div class="row">
              <!-- Blog Posts Area -->
              <div class="col-12 col-lg-8">
                @yield('main-section')
            </div>
              @include('sidebar')
          </div>
      </div>
    </div>
    <!-- ##### Blog Post Area End ##### -->
    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <!-- Bottom Footer Area -->
        <div class="bottom-footer-area">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <!-- Copywrite -->
                        <p><a href="#"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Files ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="{{url('js/jquery/jquery-2.2.4.min.js')}}"></script>
    <!-- Popper js -->
    <script src="{{url('js/bootstrap/popper.min.js')}}"></script>
    <!-- Bootstrap js -->
    <script src="{{url('js/bootstrap/bootstrap.min.js')}}"></script>
    <!-- All Plugins js -->
    <script src="{{url('js/plugins/plugins.js')}}"></script>
    <!-- Active js -->
    <script src="{{url('js/active.js')}}"></script>
</body>

</html>