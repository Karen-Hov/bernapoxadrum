<!DOCTYPE html>
<html lang="{!! app()->getLocale(); !!}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"  initial-scale = 2.3, user-scalable = no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="mobile-web-app-capable" content="yes">
    <title>GoodNews</title>
{{--    <link rel="shortcut icon" href="{{asset('site/img/itlogo.png')}}" type="image/x-icon">--}}
    @include('layouts.SiteLayouts.styles')
    @yield('styles')
{{--    <link rel="stylesheet" href="{{asset('site/css/style.css')}}">--}}
{{--    <link rel="stylesheet" href="{{asset('site/css/media.css')}}">--}}
{{--    <script src="{{asset('site/js/jquery-3.2.1.js')}}"></script>--}}
    <meta charset="utf-8">
    <title>365 Days Responsive HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="description" content="New Express">
    <meta name="keywords" content="New Express">
    <meta name="author" content="">
    <meta name="MobileOptimized" content="320">
    <!--Template style -->
    <link rel="stylesheet" type="text/css" href="{{asset('front/css/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/css/fonts.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/css/font-awesome.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/css/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/css/owl.theme.default.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/css/dl-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/css/weather.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/css/flaticon.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/css/venobox.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/css/magnific-popup.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/css/responsive.css')}}">
    <!-- favicon links -->
{{--    <link rel="shortcut icon" type="image/png" href="{{asset('front/images/header/favicon.ico')}}">--}}
{{--    <script src='../../../google_analytics_auto.js'></script>--}}



    @yield('scripts')
    @include('layouts.SiteLayouts.scripts')
</head>
<body class="{!! app()->getLocale(); !!}" next="{{asset('site/img/bbxb.png')}}" prev="{{asset('site/img/bbb.png')}}">
<div class="content">
    @yield('navbar')

        @yield('content')

    @include('layouts.SiteLayouts.footer')
</div>
</body>

</html>
