@php
    $configs = App\Models\Configs::pluck('value', 'name');
@endphp

@extends('admin.header')

@section('content')
    <div class="nk-content" data-select2-id="35">
        <div class="container-fluid" data-select2-id="34">
            <div class="nk-content-inner" data-select2-id="33">
                <div class="nk-content-body" data-select2-id="32">
                    <div class="nk-block-head nk-block-head-sm box-animatin">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">پایه</h3>
                                <nav>
                                    <ul class="breadcrumb breadcrumb-arrow">
                                        <li class="breadcrumb-item active"><a href="{{ route('a_Dashborad') }}">پنل مدیریت</a></li>
                                        <li class="breadcrumb-item active">تنظیمات</li>
                                        <li class="breadcrumb-item">پایه</li>
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
                        <form id="update-setting" class="gy-3 form-settings form-validate" method="POST" action="{{ route('a_Update_Settings', 'settings') }}" enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                            <div class="row g-gs">
                                <!-- .col -->
                                <div class="col-lg-12">
                                    <div class="card card-bordered">
                                        <div class="card-inner">

                                            <div class="row g-gs">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="name">
                                                            <em class="icon ni ni-dot"></em>
                                                            نام وب سایت</label>
                                                        <input type="text" class="form-control" id="name"
                                                               name="site_name_fa"
                                                               value="{{ $configs['site_name_fa'] }}">
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="domin">
                                                            <em class="icon ni ni-policy"></em>
                                                            دامنه</label>
                                                        <input type="text" class="form-control" id="domin"
                                                               name="domin"
                                                               value="{{ $configs['domin'] }}">
                                                    </div>
                                                </div>

                                                <br>

                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label class="form-label" for="site_keywords">
                                                            <em class="icon ni ni-tags"></em>
                                                            کلمات کلیدی</label>
                                                        <textarea class="form-control" id="site_keywords"
                                                                  name="site_keywords">{{ $configs['site_keywords'] }}</textarea>
                                                        <span class="text-soft" style="font-size: 12px">
                                                              از (,) برای جدا سازی استفاده نمایید
                                                        </span>
                                                    </div>
                                                </div>

                                                <hr>

                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label class="form-label" for="site_desc">
                                                            <em class="icon ni ni-quote-right"></em>
                                                            توضیحات</label>
                                                        <input type="text" class="form-control" id="site_desc"
                                                               name="site_desc"
                                                               value="{{ $configs['site_desc'] }}">
                                                    </div>
                                                </div>

                                                <hr>

                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label class="form-label" for="video_url">
                                                            <em class="icon ni ni-video"></em>
                                                            ویدئو پلیر
                                                        </label>
                                                        <input type="text" class="form-control" id="video_url"
                                                               name="video_url" placeholder="لینک کامل، مثال: آپارات و یوتوب و یا لینک mp4"
                                                               value="{{ $configs['video_url'] }}">
                                                    </div>
                                                </div>

                                                <hr>

                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label class="form-label" for="site_email">
                                                            <em class="icon ni ni-emails"></em>
                                                            ایمیل</label>
                                                        <input type="text" class="form-control"
                                                               id="site_email"
                                                               name="site_email" placeholder="نمونه: example@gmail.com"
                                                               value="{{ $configs['site_email'] }}">

                                                    </div>
                                                </div>

                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label class="form-label" for="site_phone">
                                                            <em class="icon ni ni-call-fill"></em>
                                                            شماره تماس</label>
                                                        <input type="text" class="form-control"
                                                               id="site_phone"
                                                               name="site_phone" placeholder="09121234567"
                                                               value="{{ $configs['site_phone'] }}">

                                                    </div>
                                                </div>

                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label class="form-label" for="site_phone2">
                                                            <em class="icon ni ni-call-fill"></em>
                                                            شماره تماس 2</label>
                                                        <input type="text" class="form-control"
                                                               id="site_phone2"
                                                               name="site_phone2" placeholder="09121234567"
                                                               value="{{ $configs['site_phone2'] }}">

                                                    </div>
                                                </div>

                                                <hr>

                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label class="form-label" for="google_tag_id">
                                                            <em class="icon ni ni-cloud-fill"></em>
                                                            گوگل تگ منیجر ID</label>
                                                        <input type="text" class="form-control"
                                                               id="google_tag_id"
                                                               name="google_tag_id"
                                                               value="{{ $configs['google_tag_id'] }}">

                                                    </div>
                                                </div>

                                                <hr>

                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="logo">
                                                            <em class="icon ni ni-color-palette-fill"></em>
                                                            لوگو</label>
                                                        <div class="form-control-wrap">
                                                            <div class="form-file">
                                                                <input type="file" accept="image/png" class="form-file-input" id="logo" name="logo">
                                                                <label class="form-file-label" for="logo">انتخاب فایل</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="icon">
                                                            <em class="icon ni ni-color-palette-fill"></em>
                                                            فایل آیکون</label>
                                                        <div class="form-control-wrap">
                                                            <div class="form-file">
                                                                <input type="file" accept="image/png" class="form-file-input" id="icon" name="icon">
                                                                <label class="form-file-label" for="icon">انتخاب فایل</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


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
    @if(session('success'))
        <script>
            window.addEventListener('load', function() {
                NioApp.Toast('<h5>به روز رسانی موفقیت آمیز</h5><p>تنظیمات با موفقیت به روز رسانی شد.</p>', 'success', {position: 'top-right'}, 3000);
            });
        </script>
    @endif
@endsection
