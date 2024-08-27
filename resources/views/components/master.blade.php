<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}} - GCTU IT Department</title>
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

<body>

    @include($headerSection)

    {{ $slot }}

    @include('admin.layouts.footer')

    <!-- jquery min js -->
    <script src="{{ asset('/assets/js/jquery.min.js') }}"></script>
    <!-- jquery ui js -->
    <script src="{{ asset('/assets/js/jquery-ui.js') }}"></script>
    <!-- metismenu js -->
    <script src="{{ asset('/assets/js/metismenu.js') }}"></script>
    <!-- magnific popup js-->
    <script src="{{ asset('/assets/js/magnifying-popup.js') }}"></script>
    <!-- swiper JS 10.2.0 -->
    <script src="{{ asset('/assets/js/swiper.js') }}"></script>
    <!-- counterup js -->
    <script src="{{ asset('/assets/js/counterup.js') }}"></script>
    <!-- waypoint js -->
    <script src="{{ asset('/assets/js/waypoint.js') }}"></script>
    <!-- wow js -->
    <script src="{{ asset('/assets/js/waw.js') }}"></script>
    <!-- isotop mesonary -->
    <script src="{{ asset('/assets/js/isotop.js') }}"></script>
    <!-- jquery imageloaded -->
    <script src="{{ asset('/assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <!-- resize sensor js -->
    <script src="{{ asset('/assets/js/resizer-sensor.js') }}"></script>
    <!-- sticky sidebar -->
    <script src="{{ asset('/assets/js/sticky-sidebar.js') }}"></script>
    <!-- gsap twinmax js -->
    <script src="{{ asset('/assets/js/twinmax.js') }}"></script>
    <!-- chroma js -->
    <script src="{{ asset('/assets/js/chroma.min.js') }}"></script>
    <!-- bootstrap 5.0.2 -->
    <script src="{{ asset('/assets/js/bootstrap.min.js') }}"></script>
    <!-- dymanic Contact Form -->
    <script src="{{ asset('/assets/js/contact.form.js') }}"></script>
    <!-- calender js -->
    <script src="{{ asset('/assets/js/calender.js') }}"></script>
    <!-- main Js -->
    <script src="{{ asset('/assets/js/main.js') }}"></script>
</body>

</html>
