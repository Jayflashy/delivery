<!DOCTYPE html>
<html lang="en">

    <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title') - {{get_setting('title')}}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{my_asset(get_setting('favicon'))}}">
    <!-- CSS here -->
    <link rel="stylesheet" href="{{static_asset('front/css/preloader.css')}}">
    <link rel="stylesheet" href="{{static_asset('front/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{static_asset('front/css/meanmenu.css')}}">
    <link rel="stylesheet" href="{{static_asset('front/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{static_asset('front/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{static_asset('front/css/swiper-bundle.css')}}">
    <link rel="stylesheet" href="{{static_asset('front/css/backToTop.css')}}">
    <link rel="stylesheet" href="{{static_asset('front/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{static_asset('front/css/ui-range-slider.css')}}">
    <link rel="stylesheet" href="{{static_asset('front/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{static_asset('front/css/fontAwesome5Pro.css')}}">
    <link rel="stylesheet" href="{{static_asset('front/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{static_asset('front/css/default.css')}}">
    <link rel="stylesheet" href="{{static_asset('front/css/style.css')}}">

    @yield('styles')
    </head>

    <body>
        <!-- Preloader start -->
        <div class="preloader">
            <img src="{{my_asset(get_setting('logo'))}}" alt="preloader-icon">
        </div>
        @include('front.layouts.header')

        <main>
            @yield('page-header')
            @yield('content')
        </main>

        {{-- Footer --}}
        @include('front.layouts.footer')

        <!-- back to top start -->
        <div class="progress-wrap">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div>
        <!-- back to top end -->
        <!-- JS here -->
        <script src="{{static_asset('front/js/vendor/jquery-3.6.0.min.js')}}"></script>
        <script src="{{static_asset('front/js/vendor/waypoints.min.js')}}"></script>
        <script src="{{static_asset('front/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{static_asset('front/js/meanmenu.js')}}"></script>
        <script src="{{static_asset('front/js/swiper-bundle.min.js')}}"></script>
        <script src="{{static_asset('front/js/owl.carousel.min.js')}}"></script>
        <script src="{{static_asset('front/js/magnific-popup.min.js')}}"></script>
        <script src="{{static_asset('front/js/parallax.min.js')}}"></script>
        <script src="{{static_asset('front/js/backToTop.js')}}"></script>
        <script src="{{static_asset('front/js/jquery-ui-slider-range.js')}}"></script>
        <script src="{{static_asset('front/js/nice-select.min.js')}}"></script>
        <script src="{{static_asset('front/js/counterup.min.js')}}"></script>
        <script src="{{static_asset('front/js/ajax-form.js')}}"></script>
        <script src="{{static_asset('front/js/wow.min.js')}}"></script>
        <script src="{{static_asset('front/js/isotope.pkgd.min.js')}}"></script>
        <script src="{{static_asset('front/js/imagesloaded.pkgd.min.js')}}"></script>
        <script src="{{static_asset('front/js/rangeslider-js.min.js')}}"></script>
        <script src="{{static_asset('front/js/main.js')}}"></script>
    </body>
</html>
