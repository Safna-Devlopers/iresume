@php
    $configs = \App\Models\Configs::pluck('value', 'name');
@endphp
    <!DOCTYPE HTML>
<html lang="fa" dir="rtl">

<head>
    <!--=============== basic  ===============-->
    <meta charset="UTF-8">
    <title>{{ $configs['site_name_fa'] }} | @yield('title')</title>
    <meta name="robots" content="index, follow"/>
    <meta name="keywords" content="{{ $configs['author'] }}"/>
    <meta name="description" content="{{ $configs['site_desc'] }}"/>
    <meta name="keywords" content="{{ $configs['site_keywords'] }}">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--=============== css  ===============-->
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/plugins.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/color.css') }}">
    <!--=============== favicons ===============-->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">
</head>

<body>
<!--Loader -->
<div class="body-preload">
    <div class="pl-spinner2"><span></span></div>
</div>
<!-- loader end  -->
<!-- main start  -->
<div id="main">
    <!--main-container -->
    <div class="main-container">
        <!--header -->
        <header class="main-header">
            <div class="header-titile">
                <h1>{{ $configs['r_name'] }}</h1>
                <h4>{{ $configs['r_work'] }}</h4>
            </div>
            <a data-src="{{ asset('upload/main.jpg') }}" class="image-popup header-popup color-bg"><i
                    class="fal fa-plus"></i></a>
            <div class="header-titile-img">
                <div class="bg" data-bg="{{ asset('upload/main.jpg') }}"></div>
            </div>
            <div class="main-menu-wrap">
                <!-- nav -->
                <nav class="nav-inner fl-wrap" id="menu">
                    <ul>
                        <li><a href="{{ route('index') }}" class="ajax"><i class="fal fa-home"></i> خانه</a></li>
                        <li><a href="{{ route('resume') }}" class="ajax"><i class="fal fa-address-card"></i> رزومه</a></li>
                        <li><a href="{{ route('works') }}" class="ajax"><i class="fal fa-images"></i>نمونه کار ها</a></li>
                        <li><a href="{{ route('contact') }}" class="ajax"><i class="fal fa-envelope"></i> تماس</a></li>
                    </ul>
                </nav>
                <!-- nav end-->
            </div>
            <a href="{{ asset('upload/resume.pdf') }}" download="{{ asset('upload/resume.pdf') }}" class="header_btn gradient-bg"><i
                    class="fas fa-download"></i> دانلود رزومه</a>
        </header>
        <!--header end-->
        <!-- top-opt -->
        <div class="top-opt">
            <div class="nav-button-wrap c_sb gradient-bg2">
                <div class="nav-button"><span></span><span></span><span></span></div>
            </div>
            <div class="page-subtitle"><a href="{{ route('index') }}" class="ajax"><i class="fal fa-home"></i></a><span></span>
            </div>
            <a href="{{ route('index') }}" class="ajax mob-logo"><span></span><strong></strong></a>
            <a href="{{ route('contact') }}" class="ajax to_contacts"><i class="far fa-envelope"></i> تماس بگیرید</a>
            <div class="share-btn show-share isShare gradient-bg2">
                <span>اشتراک گذاری</span>
                <i class="fas fa-share-alt"></i>
            </div>
        </div>
        <!-- top-opt end -->
        <!-- content-holder -->
        <div class="content-holder">
            <!--wrapper -->
            <div id="wrapper">
                <!--scroll-bar -->
                @yield('content')
                <!--scroll-bar end -->
                <!--share end -->
                <div class="share-wrapper">
                    <div class="share-container isShare"></div>
                </div>
                <!--share end -->
            </div>
            <!--wrapper end -->
            <!--page-load -->
            <div class="page-load">
                <div class="pl-spinner"><span></span></div>
            </div>
            <!--page-load end -->
        </div>
        <!-- content-holder end -->
        <!-- footer -->
        <footer class="main-footer">
            <div class="footer-social">
                <ul>
                    <li><a href="https://wa.me/{{ $configs['social_whatsapp'] }}/" target="_blank"><i class="fab fa-whatsapp"></i></a></li>
                    <li><a href="https://instagram.com/{{ $configs['social_instagram'] }}/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="https://{{ $configs['social_whatsapp'] }}.t.me/" target="_blank"><i class="fab fa-telegram"></i></a></li>
                </ul>
            </div>
            <div class="copyright">&#169; {{ $configs['site_name_fa'] }} . تمامی حقوق محفوظ است .</div>
        </footer>
        <!-- footer end -->
        <div class="nav-overlay"></div>
    </div>
    <!-- main-container end -->
    <!--body-bg -->
    <div class="body-bg">
        <div class="slider-thumb"></div>
        <div class="cavas-wrap">
            <canvas id="liquid"></canvas>
        </div>
        <div class="dynamic-title"><span>رزومه</span></div>
    </div>
    <!-- body-bg end -->
</div>
<!-- Main end -->
@extends('public.'. $configs['theme'] . '.layouts.footerJS')
</body>

</html>
