@php
    $configs = App\Models\Configs::pluck('value', 'name');
@endphp

@extends('admin.header')

@section('content')
    @if(session('success'))
        <script>
            window.addEventListener('load', function() {
                NioApp.Toast('<h5>به روز رسانی موفقیت آمیز</h5><p>تنظیمات با موفقیت به روز رسانی شد.</p>', 'success', {position: 'top-right'}, 3000);
            });
        </script>
    @endif
    <div class="nk-content" data-select2-id="35">
        <div class="container-fluid" data-select2-id="34">
            <div class="nk-content-inner" data-select2-id="33">
                <div class="nk-content-body" data-select2-id="32">
                    <div class="nk-block-head nk-block-head-sm box-animatin">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">شبکه های اجتماعی</h3>
                                <nav>
                                    <ul class="breadcrumb breadcrumb-arrow">
                                        <li class="breadcrumb-item active"><a href="{{ route('a_Dashborad') }}">پنل مدیریت</a></li>
                                        <li class="breadcrumb-item active">تنظیمات</li>
                                        <li class="breadcrumb-item">شبکه های اجتماعی</li>
                                    </ul>
                                </nav>
                            </div>
                            <!-- .nk-block-head-content -->
                        </div>
                        <!-- .nk-block-between -->
                    </div>
                    <!-- .nk-block-head -->

                    <div class="nk-block box-animatin" data-select2-id="31">
                        <!--card-->
                        <form id="update-setting" class="gy-3 form-settings form-validate" method="POST" action="{{ route('a_Update_Settings', 'social') }}" enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                            <div class="row g-gs">
                                <!-- .col -->
                                <div class="col-lg-12">
                                    <div class="card card-bordered">
                                        <div class="card-inner">
                                            <div class="row g-gs">
                                                <div class="col-sm-4">
                                                    <div class="form-group" data-bs-toggle="popover"  title="تلگرام" data-bs-content="پیام رسان تلگرام که معمولاً به عنوان تلگرام شناخته می شود، یک سرویس پیام رسانی فوری مبتنی بر ابر و چند پلتفرمی است.">
                                                        <label class="form-label" for="social_telegram">
                                                            <em class="icon ni ni-telegram"></em>
                                                            تلگرام</label>
                                                            <input type="text" class="form-control"
                                                                   id="social_telegram"
                                                                   name="social_telegram" placeholder="نام کاربری بدون @"
                                                                   value="{{ $configs['social_telegram'] }}">
                                                    </div>
                                                </div>

                                                <div class="col-sm-4">
                                                    <div class="form-group" data-bs-toggle="popover"  title="اینستاگرام" data-bs-content="اینستاگرام یک سرویس شبکه اجتماعی اشتراک‌گذاری عکس و ویدیو آمریکایی است که متعلق به Meta Platforms است.">
                                                        <label class="form-label" for="social_instagram">
                                                            <em class="icon ni ni-instagram"></em>
                                                            اینستاگرام</label>
                                                            <input type="text" class="form-control"
                                                                   id="social_instagram"
                                                                   name="social_instagram" placeholder="نام کاربری بدون @"
                                                                   value="{{ $configs['social_instagram'] }}">
                                                    </div>
                                                </div>

                                                <div class="col-sm-4">
                                                    <div class="form-group" data-bs-toggle="popover"  title="واتس اپ" data-bs-content="واتس‌اپ یک سرویس پیام‌رسانی فوری و صوتی از طریق IP است که متعلق به مجموعه فناوری Meta Platforms است.">
                                                        <label class="form-label" for="social_whatsapp">
                                                            <em class="icon ni ni-whatsapp"></em>
                                                            واتس اپ</label>
                                                            <input type="text" class="form-control"
                                                                   id="social_whatsapp"
                                                                   name="social_whatsapp" placeholder="+989120000000"
                                                                   value="{{ $configs['social_whatsapp'] }}">
                                                    </div>
                                                </div>

                                                <div class="col-sm-4">
                                                    <div class="form-group" data-bs-toggle="popover"  title="فیس بوک" data-bs-content="متا پلتفرمز، شرکت، که به عنوان متا تجارت می کند و قبلاً Facebook، Inc. و TheFacebook، Inc. نامیده می شد، یک شرکت فناوری چندملیتی آمریکایی است که در منلو پارک، کالیفرنیا مستقر است. این شرکت مالک و اداره کننده فیس بوک، اینستاگرام، Threads و WhatsApp و سایر محصولات و خدمات است">
                                                        <label class="form-label" for="social_facebook">
                                                            <em class="icon ni ni-facebook-circle"></em>
                                                            فیس بوک</label>
                                                            <input type="text" class="form-control"
                                                                   id="social_facebook"
                                                                   name="social_facebook" placeholder="لینک کامل"
                                                                   value="{{ $configs['social_facebook'] }}">
                                                    </div>
                                                </div>

                                                <div class="col-sm-4">
                                                    <div class="form-group" data-bs-toggle="popover"  title="لینکدین" data-bs-content="لینکدین یک پلتفرم رسانه اجتماعی متمرکز بر مشاغل و اشتغال است که از طریق وب سایت ها و برنامه های تلفن همراه کار می کند.">
                                                        <label class="form-label" for="social_linkdin">
                                                            <em class="icon ni ni-linkedin"></em>
                                                            لینکدین</label>
                                                            <input type="text" class="form-control"
                                                                   id="social_linkdin"
                                                                   name="social_linkedin" placeholder="لیتک کامل"
                                                                   value="{{ $configs['social_linkedin'] }}">
                                                    </div>
                                                </div>

                                                <div class="col-sm-4">
                                                    <div class="form-group" data-bs-toggle="popover"  title="ایکس (توییتر)" data-bs-content="نام فعلی شرکت x است، Twitter, Inc. یک شرکت رسانه اجتماعی آمریکایی مستقر در سانفرانسیسکو، کالیفرنیا بود. این شرکت سرویس شبکه اجتماعی توییتر و قبلاً برنامه ویدیوی کوتاه Vine و سرویس پخش زنده Periscope را اداره می کرد.">
                                                        <label class="form-label" for="social_x">
                                                            <em class="icon ni ni-twitter"></em>
                                                            توییتر (ایکس)</label>
                                                        <input type="text" class="form-control"
                                                               id="social_x"
                                                               name="social_x" placeholder="لینک کامل"
                                                               value="{{ $configs['social_x'] }}">
                                                    </div>
                                                </div>

                                                <hr>

                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <ul class="align-center flex-wrap flex-sm-nowrap gx-4 mt-1">
                                                            <li>
                                                                <button type="submit" class="btn btn-primary">
                                                                    ارسال
                                                                </button>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- .card -->
                                </div>
                            </div>
                        </form>
                    </div>
                    <!--nk-block-->
                </div>
            </div>
        </div>
    </div>
@endsection
