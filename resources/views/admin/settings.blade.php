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
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">تنظیمات</h3>
                            </div>
                            <!-- .nk-block-head-content -->
                        </div>
                        <!-- .nk-block-between -->
                    </div>
                    <!-- .nk-block-head -->

                    <div class="nk-block" data-select2-id="31">
                        <!--card-->
                        <form id="update-setting" class="gy-3 form-settings" method="POST" action="{{ route('a_Update_Settings', 'settings') }}" enctype="multipart/form-data">
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
                                                        <label class="form-label" for="name">نام وب سایت</label>
                                                        <input type="text" class="form-control" id="name"
                                                               name="site_name_fa"
                                                               value="{{ $configs['site_name_fa'] }}">
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="domin">دامنه</label>
                                                        <input type="text" class="form-control" id="domin"
                                                               name="domin"
                                                               value="{{ $configs['domin'] }}">
                                                    </div>
                                                </div>

                                                <br>

                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label class="form-label" for="site_keywords">کلمات کلیدی</label>
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
                                                        <label class="form-label" for="site_desc">توضیحات</label>
                                                        <input type="text" class="form-control" id="site_desc"
                                                               name="site_desc"
                                                               value="{{ $configs['site_desc'] }}">
                                                    </div>
                                                </div>

                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label class="form-label" for="social_telegram">تلگرام</label>
                                                            <input type="text" class="form-control"
                                                                   id="social_telegram"
                                                                   name="social_telegram"
                                                                   value="{{ $configs['social_telegram'] }}">

                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label class="form-label" for="social_instagram">اینستاگرام</label>
                                                            <input type="text" class="form-control"
                                                                   id="social_instagram"
                                                                   name="social_instagram"
                                                                   value="{{ $configs['social_instagram'] }}">

                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label class="form-label" for="social_whatsapp">واتس اپ</label>
                                                            <input type="text" class="form-control"
                                                                   id="social_whatsapp"
                                                                   name="social_whatsapp"
                                                                   value="{{ $configs['social_whatsapp'] }}">

                                                    </div>
                                                </div>



                                                <hr>

                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="site_email">ایمیل</label>
                                                        <input type="text" class="form-control"
                                                               id="site_email"
                                                               name="site_email"
                                                               value="{{ $configs['site_email'] }}">

                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="site_phone">شماره تماس</label>
                                                        <input type="text" class="form-control"
                                                               id="site_phone"
                                                               name="site_phone"
                                                               value="{{ $configs['site_phone'] }}">

                                                    </div>
                                                </div>



                                                <hr>

                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label class="form-label" for="google_tag_id">گوگل تگ منیجر ID</label>
                                                        <input type="text" class="form-control"
                                                               id="google_tag_id"
                                                               name="google_tag_id"
                                                               value="{{ $configs['google_tag_id'] }}">

                                                    </div>
                                                </div>


                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <ul class="align-center flex-wrap flex-sm-nowrap gx-4 mt-1">
                                                            <li>
                                                                <button type="submit" class="btn btn-primary" onclick="sendupdate_settingform()">
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
