@php
    use App\Models\Configs;
@endphp
@php
    $config = Configs::pluck('value', 'name');
@endphp

<!DOCTYPE html>
<html lang="fa" class="js">
<head>
    <meta charset="utf-8"/>
    <meta name="author" content=""/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="{{ asset('admin-assets/images/favicon.png') }}"/>
    <!-- Page Title  -->
    <title>ثبت نام | {{ $config['site_name'] }}</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{ asset('admin-assets/css/dashlite.rtl.css') }}"/>
    <link id="skin-default" rel="stylesheet" href="{{ asset('admin-assets/assets/css/theme.css') }}"/>
</head>

<body class=" has-rtl nk-body bg-white npc-general pg-auth ui-shady">
<div class="nk-app-root">
    <!-- main @s -->
    <div class="nk-main">
        <!-- wrap @s -->
        <div class="nk-wrap nk-wrap-nosidebar">
            <!-- content @s -->
            <div class="nk-content">
                <div class="nk-block nk-block-middle nk-auth-body wide-xs">
                    <div class="brand-logo pb-4 text-center">
                        <a href="#" class="logo-link">
                            <img class="logo-light logo-img logo-img-lg"
                                 src="{{ asset('admin-assets/images/logo.png') }}"
                                 srcset="{{ asset('admin-assets/images/logo2x.png') }} 2x" alt="لوگو"/>
                            <img class="logo-dark logo-img logo-img-lg"
                                 src="{{ asset('admin-assets/images/logo-dark.png') }}"
                                 srcset="{{ asset('admin-assets/images/logo-dark2x.png') }} 2x" alt="لوگوی تاریک"/>
                        </a>
                    </div>
                    <div class="card card-bordered">
                        <div class="card-inner card-inner-lg">
                            <div class="nk-block-head">
                                <div class="nk-block-head-content">
                                    <h4 class="nk-block-title">ثبت نام</h4>
                                    <div class="nk-block-des">
                                        <p>برای استفاده از پلتفرم باید حساب کاربری ایجاد کنید.</p>
                                    </div>
                                </div>
                            </div>
                                                        @if (session('success'))
                                <div class="alert alert-success alert-icon">
                                    <em class="icon ni ni-check-circle"></em>
                                    {{ session('success') }}
                                </div>
                            @endif
                            @if ($errors->any())
                                <div class="alert alert-danger alert-icon">
                                    <em class="icon ni ni-check-circle"></em>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>

                                </div>
                            @endif

                            <form method="POST" action="{{ route('register') }}" class="form-validate is-alter">
                                @csrf
                                <div class="form-group">
                                    <div class="form-label-group">
                                        <label class="form-label" for="f_name">نام</label>
                                    </div>
                                    <div class="form-control-wrap">
                                        <input id="f_name" type="text"
                                               class="form-control form-control-lg"
                                               name="f_name" placeholder="نام"
                                               value="{{ old('f_name') }}" required autocomplete="first_name" autofocus data-msg="پیام خطا"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-label-group">
                                        <label class="form-label" for="l_name">نام خانوادگی</label>
                                    </div>
                                    <div class="form-control-wrap">
                                        <input id="l_name" type="text"
                                               class="form-control form-control-lg"
                                               name="l_name" placeholder="نام خانوادگی"
                                               value="{{ old('l_name') }}" required autocomplete="last_name" autofocus/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-label-group">
                                        <label class="form-label" for="p_number">شماره تلفن</label>
                                    </div>
                                    <div class="form-control-wrap">
                                        <input id="p_number" type="number"
                                               class="form-control form-control-lg"
                                               name="phone_number" placeholder="0912*******"
                                               value="{{ old('phone_number') }}" required autocomplete="phone_number" autofocus/>
                                    </div>
                                </div>
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
                                <div class="form-group">
                                    <div class="form-label-group">
                                        <label class="form-label" for="password-confirm">رمز عبور</label>
                                    </div>
                                    <div class="form-control-wrap">
                                        <a href="#" class="form-icon form-icon-right passcode-switch lg"
                                           data-target="password-confirm">
                                            <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                            <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                        </a>
                                        <input type="password"
                                               class="form-control form-control-lg @error('password') bg-danger @enderror"
                                               id="password-confirm" placeholder="رمز عبور خود را وارد کنید" name="password_confirmation"
                                               required autocomplete="new-password"/>
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
                                    <button class="btn btn-lg btn-primary btn-block">ورود</button>
                                </div>
                            </form>
                            <div class="form-note-s2 text-center pt-4">در پلتفرم ما دارای حساب هستید؟ <a
                                    href="{{ route('login') }}">وارد حساب خود شوید</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="nk-footer nk-auth-footer-full">
                    <div class="container wide-lg">
                        <div class="row g-3">
                            <div class="col-lg-6 order-lg-last">
                                <ul class="nav nav-sm justify-content-center justify-content-lg-end">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ $config['url_terms'] }}">شرایط و ضوابط</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ $config['url_shop'] }}">وب سایت فروشگاه</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('main') }}">بازگشت به صفحه اصلی</a>
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
<script src="{{ asset('admin-assets/assets/js/bundle.js') }}"></script>
<script src="{{ asset('admin-assets/assets/js/scripts.js') }}"></script>
</body>
</html>


