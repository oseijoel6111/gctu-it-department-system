<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - GCTU IT Department</title>

    <link rel="stylesheet" href="{{ asset('/assets/css/fontawesome-6.css') }}">
    <!-- swiper Css 10.2.0 -->
    <link rel="stylesheet" href="{{ asset('/assets/css/swiper.min.css') }}">
    <!-- magnific popup css -->
    <link rel="stylesheet" href="{{ asset('/assets/css/magnific-popup.css') }}">
    <!-- Bootstrap 5.0.2 -->
    <link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}">
    <!-- jquery ui css -->
    <link rel="stylesheet" href="{{ asset('/assets/css/jquery-ui.css') }}">
    <!-- metismenu scss -->
    <link rel="stylesheet" href="{{ asset('/assets/css/metismenu.css') }}">
    <!-- custom style css -->
    <link rel="stylesheet" href="{{ asset('/assets/css/style.css') }}">
</head>

<body  class="login-page">

    <div class="header-transparent">
        <div class="container">

        </div>
    </div>


    @yield('content')


    <!-- header style two -->
    <div id="side-bar" class="side-bar header-two">
        <button class="close-icon-menu"><i class="far fa-times"></i></button>
        <!-- inner menu area desktop start -->
        <div class="inner-main-wrapper-desk">
            <div class="thumbnail">
                <img src="images/04.jpg" alt="elevate">
            </div>
            <div class="inner-content">
                <h4 class="title">We Build Building and Great Constructive Homes.</h4>
                <p class="disc">
                    We successfully cope with tasks of varying complexity, provide long-term guarantees and regularly master new technologies.
                </p>
                <div class="footer">
                    <h4 class="title">Got a project in mind?</h4>
                    <a href="contact.html" class="rts-btn btn-primary">Let's talk</a>
                </div>
            </div>
        </div>

    </div>

    <!-- modal -->
    <div id="myModal-1" class="modal fade" role="dialog">
        <div class="modal-dialog bg_image">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-bs-dismiss="modal"><i class="fa-light fa-x"></i></button>
                </div>
                <div class="modal-body text-center">
                    <div class="inner-content">
                        <div class="title-area">
                            <span class="pre">Get Our Courses Free</span>
                            <h4 class="title">Wonderful for Learning</h4>
                        </div>
                        <form action="#">
                            <input type="text" placeholder="Your Mail.." required="">
                            <button>Download Now</button>
                            <span>Your information will never be shared with any third party</span>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts backto top start -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path>
        </svg>
    </div>
    <!-- rts backto top end -->

    <!-- offcanvase search -->
    <div class="search-input-area">
        <div class="container">
            <div class="search-input-inner">
                <div class="input-div">
                    <input class="search-input autocomplete" type="text" placeholder="Search by keyword or #">
                    <button><i class="far fa-search"></i></button>
                </div>
            </div>
        </div>
        <div id="close" class="search-close-icon"><i class="far fa-times"></i></div>
    </div>
    <!-- offcanvase search -->
    <div id="anywhere-home" class="">
    </div>

     <!-- jquery min js -->
     <script src="{{asset('/assets/js/jquery.min.js')}}"></script>
     <!-- jquery ui js -->
     <script src="{{asset('/assets/js/jquery-ui.js')}}"></script>
     <!-- metismenu js -->
     <script src="{{asset('/assets/js/metismenu.js')}}"></script>
     <!-- magnific popup js-->
     <script src="{{asset('/assets/js/magnifying-popup.js')}}"></script>
     <!-- swiper JS 10.2.0 -->
     <script src="{{asset('/assets/js/swiper.js')}}"></script>
     <!-- counterup js -->
     <script src="{{asset('/assets/js/counterup.js')}}"></script>
     <!-- waypoint js -->
     <script src="{{asset('/assets/js/waypoint.js')}}"></script>
     <!-- wow js -->
     <script src="{{asset('/assets/js/waw.js')}}"></script>
     <!-- isotop mesonary -->
     <script src="{{asset('/assets/js/isotop.js')}}"></script>
     <!-- jquery imageloaded -->
     <script src="{{asset('/assets/js/imagesloaded.pkgd.min.js')}}"></script>
     <!-- resize sensor js -->
     <script src="{{asset('/assets/js/resizer-sensor.js')}}"></script>
     <!-- sticky sidebar -->
     <script src="{{asset('/assets/js/sticky-sidebar.js')}}"></script>
     <!-- gsap twinmax js -->
     <script src="{{asset('/assets/js/twinmax.js')}}"></script>
     <!-- chroma js -->
     <script src="{{asset('/assets/js/chroma.min.js')}}"></script>
     <!-- bootstrap 5.0.2 -->
     <script src="{{asset('/assets/js/bootstrap.min.js')}}"></script>
     <!-- dymanic Contact Form -->
     <script src="{{asset('/assets/js/contact.form.js')}}"></script>
     <!-- calender js -->
     <script src="{{asset('/assets/js/calender.js')}}"></script>
     <!-- main Js -->
     <script src="{{asset('/assets/js/main.js')}}"></script>

</body>

</html>
