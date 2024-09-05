<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> - GCTU IT Department</title>

    <link rel="stylesheet" href="{{asset('/assets/css/fontawesome-6.css')}}">
    <!-- swiper Css 10.2.0 -->
    <link rel="stylesheet" href="{{asset('/assets/css/swiper.min.css')}}">
    <!-- magnific popup css -->
    <link rel="stylesheet" href="{{asset('/assets/css/magnific-popup.css')}}">
    <!-- Bootstrap 5.0.2 -->
    <link rel="stylesheet" href="{{asset('/assets/css/bootstrap.min.css')}}">
    <!-- jquery ui css -->
    <link rel="stylesheet" href="{{asset('/assets/css/jquery-ui.css')}}">
    <!-- metismenu scss -->
    <link rel="stylesheet" href="{{asset('/assets/css/metismenu.css')}}">
    <!-- custom style css -->
    <link rel="stylesheet" href="{{asset('/assets/css/style.css')}}">

</head>
<body>
     <!-- header style one -->
    @include('frontend.layouts.header')

    <div class="banner-area-one shape-move">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 order-xl-1 order-lg-1 order-sm-2 order-2">
                    <div class="banner-content-one">
                        <div class="inner">
                            <div class="pre-title-banner">
                                <img src="{{asset('/assets/images/bulb.png')}}" width="22" alt="icon">
                                <span>Knowledge Comes From Learning</span>
                            </div>
                            <h1 class="title-banner">
                                Unlock Your Potential <br>

                                <img src="{{asset('/assets/images/02.png')}}" alt="banner">
                            </h1>
                            <p class="disc">Discover a world of knowledge and opportunities for yourself
                                at Ghana Communication Technology University.</p>
                            <div class="banner-btn-author-wrapper">
                                <a href="course-five.html" class="rts-btn btn-primary with-arrow">View All Course <i class="fa-regular fa-arrow-right"></i></a>
                                <div class="sm-image-wrapper">
                                    <div class="images-wrap">
                                        <img src="{{asset('/assets/images/06_1.png')}}" alt="banner">
                                        <img class="two" src="{{asset('/assets/images/07.png')}}" alt="banner">
                                        <img class="three" src="{{asset('/assets/images/08.png')}}" alt="banner">
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 order--xl-2 order-lg-2 order-sm-1 order-1">
                    <div class="banner-right-img">
                        <img src="{{asset('/assets/images/01_4.png')}}" alt="banner">
                    </div>
                </div>
            </div>
        </div>
        <div class="review-thumb">
            <!-- single review -->
            <div class="review-single">
                <img src="{{asset('/assets/images/03_1.png')}}" alt="banner">
                <div class="info-right">
                    <h6 class="title">4.5</h6>
                    <span>(2.4k Review)</span>
                </div>
            </div>
            <!-- single review end -->
            <!-- single review -->
            <div class="review-single two">
                <img src="{{asset('/assets/images/04_1.png')}}" alt="banner">
                <div class="info-right">
                    <h6 class="title">100+
                    </h6>
                    <span>Online Course</span>
                </div>
            </div>
            <!-- single review end -->
        </div>
        <div class="shape-image">
            <div class="shape one" data-speed="0.04" data-revert="true"><img src="{{asset('/assets/images/banner-shape01.svg')}}" alt="shape"></div>
            <div class="shape two" data-speed="0.04"><img src="{{asset('/assets/images/banner-shape02.svg')}}" alt="shape"></div>
            <div class="shape three" data-speed="0.04"><img src="{{asset('/assets/images/banner-shape03.svg')}}" alt="shape"></div>
        </div>
    </div>

    <div class="brand-area-one ptb--100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="brand-style-one ">
                        
                        <div class="swiper mySwiper-category-1 swiper-data" data-swiper="{
                            " spacebetween":30,="" "slidesperview":6,="" "loop":="" true,="" "speed":="" 1500,="" "autoplay":{="" "delay":"4000"="" },="" "breakpoints":{="" "0":{="" "slidesperview":2,="" "spacebetween":30},="" "320":{="" "480":{="" "slidesperview":3,="" "640":{="" "slidesperview":4,="" "840":{="" "1140":{="" "spacebetween":30}="" }="" }"="">
                            
                              
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



     <!-- footer call to action area start -->
     @include('frontend.layouts.footer')

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
