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
                                <h3 class="nk-block-title page-title">اطلاعات رزومه</h3>
                            </div>
                            <!-- .nk-block-head-content -->
                        </div>
                        <!-- .nk-block-between -->
                    </div>
                    <!-- .nk-block-head -->

                    <div class="nk-block" data-select2-id="31">
                        <!--card-->
                        <form id="update-setting" class="gy-3 form-settings" method="POST" action="{{ route('a_Update_Settings', 'resume') }}" enctype="multipart/form-data">
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
                                                        <label class="form-label" for="name">نام و نام خانوادگی</label>
                                                        <input type="text" class="form-control" id="name"
                                                               name="name"
                                                               value="{{ $configs['r_name'] }}">
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="work">شغل/حرفه</label>
                                                        <input type="text" class="form-control" id="work"
                                                               name="work"
                                                               value="{{ $configs['r_work'] }}">
                                                    </div>
                                                </div>

                                                <br>

                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label class="form-label" for="info">توضیحات</label>
                                                        <textarea class="form-control" id="info"
                                                                  name="info">{{ $configs['r_info'] }}</textarea>
                                                    </div>
                                                </div>

                                                <hr>

                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label class="form-label" for="enter">سرگرمی ها</label>
                                                        <input type="text" class="form-control" id="enter"
                                                               name="enter"
                                                               value="{{ $configs['r_enter'] }}">
                                                        <span class="text-soft" style="font-size: 12px">
                                                              از (,) برای جدا سازی استفاده نمایید
                                                        </span>
                                                    </div>
                                                </div>

                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label class="form-label" for="age">سن</label>
                                                        <div class="form-control-wrap number-spinner-wrap">
                                                            <button
                                                                class="btn btn-icon btn-outline-light number-spinner-btn number-minus"
                                                                data-number="minus"><em class="icon ni ni-minus"></em>
                                                            </button>
                                                            <input type="number" class="form-control number-spinner"
                                                                   id="age"
                                                                   name="age"
                                                                   value="{{ $configs['r_age'] }}">
                                                            <button
                                                                class="btn btn-icon btn-outline-light number-spinner-btn number-plus"
                                                                data-number="plus"><em class="icon ni ni-plus"></em>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label class="form-label" for="freelancer">فری لنسر</label>
                                                        <input type="text" class="form-control" id="freelancer"
                                                               name="freelancer"
                                                               value="{{ $configs['r_freelancer'] }}">
                                                    </div>
                                                </div>

                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label class="form-label" for="country">کشور</label>
                                                        <input type="text" class="form-control" id="country"
                                                               name="country"
                                                               value="{{ $configs['r_country'] }}">
                                                    </div>
                                                </div>

                                                <hr>

                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label class="form-label" for="r_work_houses">ساعات کار
                                                            شده</label>
                                                        <div class="form-control-wrap number-spinner-wrap">
                                                            <button
                                                                class="btn btn-icon btn-outline-light number-spinner-btn number-minus"
                                                                data-number="minus"><em class="icon ni ni-minus"></em>
                                                            </button>
                                                            <input type="number" class="form-control number-spinner"
                                                                   id="r_work_houses"
                                                                   name="work_houses"
                                                                   value="{{ $configs['r_work_houses'] }}">
                                                            <button
                                                                class="btn btn-icon btn-outline-light number-spinner-btn number-plus"
                                                                data-number="plus"><em class="icon ni ni-plus"></em>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label class="form-label" for="r_archivment">دستاورد ها</label>
                                                        <div class="form-control-wrap number-spinner-wrap">
                                                            <button
                                                                class="btn btn-icon btn-outline-light number-spinner-btn number-minus"
                                                                data-number="minus"><em class="icon ni ni-minus"></em>
                                                            </button>
                                                            <input type="number" class="form-control number-spinner"
                                                                   id="r_archivment"
                                                                   name="archivment"
                                                                   value="{{ $configs['r_archivment'] }}">
                                                            <button
                                                                class="btn btn-icon btn-outline-light number-spinner-btn number-plus"
                                                                data-number="plus"><em class="icon ni ni-plus"></em>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label class="form-label" for="r_complate_project">پروژه های به
                                                            پایان رسیده</label>
                                                        <div class="form-control-wrap number-spinner-wrap">
                                                            <button
                                                                class="btn btn-icon btn-outline-light number-spinner-btn number-minus"
                                                                data-number="minus"><em class="icon ni ni-minus"></em>
                                                            </button>
                                                            <input type="number" class="form-control number-spinner"
                                                                   id="r_complate_project"
                                                                   name="complate_project"
                                                                   value="{{ $configs['r_complate_project'] }}">
                                                            <button
                                                                class="btn btn-icon btn-outline-light number-spinner-btn number-plus"
                                                                data-number="plus"><em class="icon ni ni-plus"></em>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>

                                                <hr>

                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="avatar">بنر</label>
                                                        <div class="form-control-wrap">
                                                            <div class="form-file">
                                                                <input type="file" class="form-file-input" id="avatar" name="avatar">
                                                                <label class="form-file-label" for="avatar">انتخاب فایل</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="pdf">فایل رزومه</label>
                                                        <div class="form-control-wrap">
                                                            <div class="form-file">
                                                                <input type="file" accept="application/pdf" class="form-file-input" id="pdf" name="pdf">
                                                                <label class="form-file-label" for="pdf">انتخاب فایل</label>
                                                            </div>
                                                        </div>
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
