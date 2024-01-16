@php
    use App\Models\Configs;
@endphp
@php
    $config = Configs::pluck('value', 'name');
@endphp

    <!DOCTYPE html>
<html lang="fa" class="js" dir="rtl">
<head>
    <meta charset="utf-8"/>
    <meta name="author" content=""/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="{{ asset('upload/icon.png') }}"/>
    <!-- Page Title  -->
    <title>ورود | {{ $config['site_name_fa'] }}</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{ asset('admin/css/dashlite.rtl.css') }}"/>
    <link id="skin-default" rel="stylesheet" href="{{ asset('admin/css/theme.css') }}"/>
</head>

<body class="has-rtl nk-body bg-white npc-general pg-auth ui-shady">
<div class="nk-app-root">
    <!-- main @s -->
    <div class="nk-main">
        <!-- wrap @s -->
        <div class="nk-wrap nk-wrap-nosidebar">
            <!-- content @s -->
            <div class="nk-content">
                <div class="nk-block nk-block-middle nk-auth-body wide-xs">
                    <div class="brand-logo pb-4 text-center">
                        <a href="{{ route('index') }}" class="logo-link">
                            <img class="logo-light logo-img logo-img-lg"
                                 src="https://safna.net/storage/img/SQ_RGB.png"
                                 srcset="https://safna.net/storage/img/SQ_RGB.png 2x" alt="لوگو"/>
                            <img class="logo-dark logo-img logo-img-lg"
                                 src="https://safna.net/storage/img/SQ_RGB.png"
                                 srcset="https://safna.net/storage/img/SQ_RGB.png 2x" alt="لوگوی تاریک"/>
                        </a>
                    </div>
                    <div class="card card-bordered">
                        <div class="card-inner card-inner-lg">
                            <div class="nk-block-head">
                                <div class="nk-block-head-content">
                                    <h4 class="nk-block-title">ورود</h4>
                                    <div class="nk-block-des">
                                        <p>با استفاده از ایمیل و رمز عبور خود به پنل دسترسی پیدا کنید.</p>
                                    </div>
                                </div>
                            </div>
                            @error('email')
                            <div class="alert alert-danger alert-icon">
                                <em class="icon ni ni-cross-circle"></em>
                                <strong>{{ $message }}</strong>
                            </div>
                            @enderror
                            @error('password')
                            <div class="alert alert-danger alert-icon">
                                <em class="icon ni ni-cross-circle"></em>
                                <strong>{{ $message }}</strong>
                            </div>
                            @enderror

                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                    <div class="form-label-group">
                                        <label class="form-label" for="email">ایمیل</label>
                                    </div>
                                    <div class="form-control-wrap">
                                        <input id="email" type="email"
                                               class="form-control form-control-lg @error('email') bg-danger @enderror"
                                               name="email" placeholder="نشانی ایمیل خود را وارد کنید"
                                               value="{{ old('email') }}" required autocomplete="email" autofocus/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-label-group">
                                        <label class="form-label" for="password">رمز عبور</label>
                                    </div>
                                    <div class="form-control-wrap">
                                        <a href="#" class="form-icon form-icon-right passcode-switch lg"
                                           data-target="password">
                                            <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                            <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                        </a>
                                        <input type="password"
                                               class="form-control form-control-lg @error('password') bg-danger @enderror"
                                               id="password" placeholder="رمز عبور خود را وارد کنید" name="password"
                                               required autocomplete="current-password"/>
                                    </div>
                                </div>
                                <div class="form-group custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" name="remember"
                                           id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="custom-control-label" for="remember">
                                        من رو به یاد داشته باش
                                    </label>
                                </div>
                                <div class="form-group">
                                    <a class="btn btn-lg btn-primary btn-block" id="login-button">ورود</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="nk-footer nk-auth-footer-full">
                    <div class="container wide-lg">
                        <div class="row g-3">
                            <div class="col-lg-6 order-lg-last">
                                <ul class="nav nav-sm justify-content-center justify-content-lg-end">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('index') }}">
                                            بازگشت به صفحه اصلی
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <div class="nk-block-content text-center text-lg-start">
                                    <p class="text-soft">© تمام حقوق محفوظ است. 2023</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- wrap @e -->
        </div>
        <!-- content @e -->
    </div>
    <!-- main @e -->
</div>
<!-- app-root @e -->


<!-- JavaScript -->
<script src="{{ asset('admin/js/bundle.js') }}"></script>
<script src="{{ asset('admin/js/scripts.js') }}"></script>
</body>
</html>

