@php
    $configs = App\Models\Configs::pluck('value', 'name');
@endphp
    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="js" dir="rtl">

<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="author" content="{{ $configs['author'] }}">
    <meta name="description" content="{{ $configs['site_desc'] }}">
    <meta name="keywords" content="{{ $configs['site_keywords'] }}">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <script src="{{ asset('admin/js/jquery/jquery-3.7.0.min.js') }}"></script>


    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}"/>
    <!-- Page Title  -->
    <title>{{ $configs['site_name_fa'] }}</title>
    <!-- StyleSheets  -->

    <link rel="stylesheet" href="{{ asset('admin/css/dashlite.rtl.css') }}"/>
    <link rel="stylesheet" href="{{ asset('admin/css/persian-datepicker.css') }}"/>
    <link rel="stylesheet" href="{{ asset('admin/css/persiandate.css') }}"/>
    <link rel="stylesheet" href="{{ asset('admin/css/editors/summernote.rtl.css') }}"/>

    <link id="skin-default" rel="stylesheet" href="{{ asset('admin/css/theme.css') }}"/>
</head>

<body class="has-rtl nk-body bg-lighter npc-general has-sidebar">
<div class="js-preloader">
    <div class="loading-animation tri-ring">
    </div>
</div>
<div class="nk-app-root">
    <!-- main @s -->
    <div class="nk-main">
        <!-- sidebar @s -->
        <div class="nk-sidebar nk-sidebar-fixed is-theme" data-content="sidebarMenu">
            <div class="nk-sidebar-element nk-sidebar-head">
                <div class="nk-menu-trigger">
                    <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none"
                       data-target="sidebarMenu"><em class="icon ni ni-arrow-left"></em></a>
                    <a href="#" class="nk-nav-compact nk-quick-nav-icon d-none d-xl-inline-flex"
                       data-target="sidebarMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                </div>
                <div class="nk-sidebar-brand">
                    <a href="" class="logo-link nk-sidebar-logo">
                        <img class="logo-light logo-img" src="{{ asset('assets/images/favicon.ico') }}"
                             srcset="{{ asset('assets/images/favicon.ico') }}" alt="لوگو"/>
                        <img class="logo-dark logo-img" src="{{ asset('assets/images/favicon.ico') }}"
                             srcset="{{ asset('assets/images/favicon.ico') }}" alt="لوگوی تاریک"/>
                    </a>
                </div>
                <div class="nk-header-app-info" style="margin: 0 10px">
                        <span class="lead-text">
                                {{ $configs['site_name_fa'] }}
                        </span>
                    <span class="sub-text">داشبورد</span>

                </div>
            </div>
            <!-- .nk-sidebar-element -->
            <div class="nk-sidebar-element nk-sidebar-body">
                <div class="nk-sidebar-content">
                    <div class="nk-sidebar-menu" data-simplebar>
                        <ul class="nk-menu">
                            <li class="nk-menu-heading">
                                <h6 class="overline-title text-primary-alt">
                                    منو
                                </h6>
                            </li>
                            <!-- .nk-menu-item -->
                            <li class="nk-menu-item">
                                <a href="{{ route('a_Dashborad') }}" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-dashboard"></em></span>
                                    <span class="nk-menu-text">داشبورد</span>
                                </a>
                            </li>
                            <!-- .nk-menu-item -->

                            <!-- .nk-menu-item -->
                            <li class="nk-menu-heading">
                                <h6 class="overline-title text-primary-alt">
                                    مدیریت
                                </h6>
                            </li>

                        </ul>
                        <!-- .nk-menu -->
                    </div>
                    <!-- .nk-sidebar-menu -->
                </div>
                <!-- .nk-sidebar-content -->
            </div>
            <!-- .nk-sidebar-element -->
        </div>
        <!-- sidebar @e -->
        <!-- wrap @s -->
        <div class="nk-wrap">
            <!-- main header @s -->
            <div class="nk-header nk-header-fixed is-light">
                <div class="container-fluid">
                    <div class="nk-header-wrap">
                        <div class="nk-menu-trigger d-xl-none ms-n1">
                            <a href="#" class="nk-nav-toggle nk-quick-nav-icon"
                               data-target="sidebarMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                        </div>
                        <div class="nk-header-brand d-xl-none">
                            <a href="#" class="logo-link">
                                <img class="logo-light logo-img" src="{{ asset('assets/images/favicon.ico') }}"
                                     srcset="{{ asset('assets/images/favicon.ico') }}" alt="لوگو"/>
                                <img class="logo-dark logo-img" src="{{ asset('assets/images/favicon.ico') }}"
                                     srcset="{{ asset('assets/images/favicon.ico') }}" alt="لوگوی تاریک"/>
                            </a>
                        </div>

                        <!-- .nk-header-brand -->
                        <div class="nk-header-tools">
                            <ul class="nk-quick-nav">
                                <!-- .dropdown -->
                                <li class="dropdown user-dropdown">
                                    <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">
                                        <div class="user-toggle">
                                            <div class="user-avatar sm">
                                                <em class="icon ni ni-user-alt"></em>
                                            </div>
                                            <div class="user-info d-none d-md-block">
                                                <div class="user-status">
                                                    ادمین
                                                </div>
                                                <div class="user-name dropdown-indicator">
                                                    {{ Auth::user()->name }}
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-md dropdown-menu-end dropdown-menu-s1">
                                        <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                            <div class="user-card">
                                                <div class="user-avatar">
                                                    <em class="icon ni ni-user-alt"></em>
                                                </div>
                                                <div class="user-info">
                                                    <span class="lead-text">{{ Auth::user()->name }}</span>
                                                    <span class="sub-text">{{ Auth::user()->email }}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="dropdown-inner">
                                            <ul class="link-list">
                                                <li>
                                                    <a class="dark-switch" onclick="" href="#"><em
                                                            class="icon ni ni-moon"></em><span>حالت شب</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="dropdown-inner">
                                            <ul class="link-list">
                                                <li>
                                                    <a href="{{ route('index') }}">
                                                        <em class="icon ni ni-swap-alt-fill"></em>
                                                        <span>بازدید از وب سایت</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="dropdown-inner">
                                            <ul class="link-list">
                                                <li>
                                                    <a href="{{ route('logout') }}"><em
                                                            class="icon ni ni-signout"></em><span>خروج</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <!-- .nk-quick-nav -->
                        </div>
                        <!-- .nk-header-tools -->
                    </div>
                    <!-- .nk-header-wrap -->
                </div>
                <!-- .container-fliud -->
            </div>
            <!-- main header @e -->

            <!-- content @s -->
            @yield('content')
            <!-- content @e -->

            <!-- wrap @e -->
            <!-- footer @s -->
            <div class="nk-footer">
                <div class="container-fluid">
                    <div class="nk-footer-wrap">
                        <div class="nk-footer-copyright">
                            {{ $configs['site_footer_fa'] }} {{ jdate()->getYear() }}
                        </div>
                    </div>
                </div>
            </div>
            <!-- footer @e -->
        </div>
        <!-- main @e -->
    </div>
</div>
<!-- app-root @e -->

<!-- select region modal -->
<!-- .modal -->
<!-- JavaScript -->


<script src="{{ asset('admin/js/bundle.js') }}"></script>
<script src="{{ asset('admin/js/scripts.js') }}"></script>
<script src="{{ asset('admin/js/charts/gd-default.js') }}"></script>
<script src="{{ asset('admin/js/persian-date.js') }}"></script>
<script src="{{ asset('admin/js/persian-datepicker.js') }}"></script>
<link rel="stylesheet" href="{{ asset('admin/css/editors/summernote.rtl.css') }}"/>
<script src="{{ asset('admin/js/libs/editors/summernote.js') }}"></script>
<script src="{{ asset('admin/js/editors.js') }}"></script>
<script src="{{ asset('admin/js/libs/jqvmap.js') }}"></script>
<script src="{{ asset('admin/js/wersy-chart.js') }}"></script>


</body>

</html>
