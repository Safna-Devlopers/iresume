@php use App\Models\User; @endphp
@php use Morilog\Jalali\Jalalian; @endphp
@php use Illuminate\Support\HtmlString; @endphp


@extends('admin.header')

@section('content')
    <div class="nk-content">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between g-3">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">
                                    همه پروژه ها /
                                    <strong class="text-primary small" id="box_name3">{{ $project->title }}</strong>
                                </h3>
                                <div class="nk-block-des text-soft">
                                    <ul class="list-inline">
                                        <li>{{ __('all.project_id') }}: <span class="text-base">{{ $project->id }}</span>
                                        </li>
                                        <li>
                                            {{ __('all.project_update') }}:
                                            <span class="text-base" id="box_edit"
                                                  style="text-align: left">{{ jdate($project->updated_at) }}</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- .nk-block-head -->
                    <div class="nk-block mb-1" id="res" hidden>
                        <div class="card card-bordered card-stretch">

                            <div class="alert alert-success alert-icon">
                                <em class="icon ni ni-check-circle"></em>
                                موفقیت آمیز
                            </div>

                        </div>
                        <!-- .card -->
                    </div>
                    <!-- .nk-block -->
                </div>

                <div class="nk-block">
                    <div class="card card-bordered">
                        <div class="card-aside-wrap">
                            <div class="card-content">
                                <ul class="nav nav-tabs nav-tabs-mb-icon nav-tabs-card">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#tabItem1"><em
                                                class="icon ni ni-info"></em>
                                            <span>
                                                مشخصات
                                            </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#tabItem2"><em
                                                class="icon ni ni-img-fill"></em>
                                            <span>
                                                گالری
                                            </span>
                                        </a>
                                    </li>

                                </ul>
                                <!-- .nav-tabs -->

                                <div class="tab-content">
                                    <div class="card-inner tab-pane active" id="tabItem1">
                                        <div class="nk-block">
                                            <div class="nk-block-head nk-block-head-sm nk-block-between">
                                                <h4 class="title"> مشخصات</h4>

                                                <button type="button" class="btn btn-round btn-sm btn-outline-primary"
                                                        data-bs-toggle="modal" data-bs-target="#editProject"><em
                                                        class="icon ni ni-edit"></em> ویرایش
                                                </button>
                                            </div>
                                            <!-- .nk-block-head -->
                                            <div class="profile-ud-list">
                                                <div class="profile-ud-item">
                                                    <div class="profile-ud wider">
                                                        <span
                                                            class="profile-ud-label">نام</span>
                                                        <span class="profile-ud-value"
                                                              id="box_name">{{ $project->title }}</span>
                                                    </div>
                                                </div>
                                                <div class="profile-ud-item">
                                                    <div class="profile-ud wider">
                                                        <span
                                                            class="profile-ud-label">آیدی</span>
                                                        <span class="profile-ud-value" id="box_pass_id">{{ $project->id }}</span>
                                                    </div>
                                                </div>
                                                <div class="profile-ud-item">
                                                    <div class="profile-ud wider">
                                                        <span
                                                            class="profile-ud-label">تاریخ ایجاد</span>
                                                        <span class="profile-ud-value"
                                                              id="box_year">{{ Jalalian::forge($project->created_at)->format('Y/m/d') }}</span>
                                                    </div>
                                                </div>
                                                <div class="profile-ud-item">
                                                    <div class="profile-ud wider">
                                                        <span
                                                            class="profile-ud-label">مشتزی</span>
                                                        <span class="profile-ud-value"
                                                              id="box_name2">{{ $project->customer }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- .profile-ud-list -->
                                        </div>
                                        <!-- .nk-block -->
                                        <div class="nk-block">
                                            <div class="nk-block-head nk-block-head-line">
                                                <h6 class="title overline-title text-base">
                                                    تکمیلی
                                                </h6>
                                            </div>
                                            <!-- .nk-block-head -->
                                            <div class="profile-ud-list">
                                                <div class="profile-ud-item">
                                                    <div class="profile-ud wider">
                                                        <span
                                                            class="profile-ud-label">وضعیت</span>
                                                        @if($project->active == "0")
                                                            <span
                                                                class="profile-ud-value text-danger">غیرفعال</span>
                                                        @elseif($project->active == "1")
                                                            <span
                                                                class="profile-ud-value text-success">فعال</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="profile-ud-item">
                                                    <div class="profile-ud wider">
                                                        <span
                                                            class="profile-ud-label">تاریخ پایان</span>
                                                        <span
                                                            class="profile-ud-value">{{ $project->finish_date }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- .profile-ud-list -->
                                        </div>
                                        <!-- .nk-block -->
                                        <div class="nk-divider divider md"></div>
                                    </div>

                                    <div class="card-inner tab-pane" id="tabItem2">
                                        <div class="nk-block">
                                            <div class="nk-block-head nk-block-head-sm nk-block-between">
                                                <h4 class="title"> گالری پروژه</h4>

                                                <button type="button" class="btn btn-round btn-sm btn-outline-primary"
                                                        data-bs-toggle="modal" data-bs-target="#addProjectPhoto"><em
                                                        class="icon ni ni-plus"></em> ایجاد
                                                </button>
                                            </div>
                                        </div>
                                        <div class="nk-block">
                                            <div class="row g-gs">
                                                @foreach($sliders as $slider)
                                                    @php
                                                        $id = $slider->user_id;
                                                        $find = User::find($id);
                                                        $up_user = new HtmlString('<span class="lead-text"> ' . $find->name .  '</span>');

                                                        if ($slider->user_id == Auth::user()->id) {
                                                            $status = new HtmlString('<span class="sub-text text-success">آپلود شده توسط شما</span>');
                                                        } else {
                                                            $status = '';
                                                        }
                                                    @endphp
                                                    <div class="col-sm-6 col-lg-4 col-xxl-3">
                                                        <div class="gallery card card-bordered">
                                                            <a class="gallery-image popup-image" href="{{ asset('upload/works/' . $slider->photo_url) }}">
                                                                <img class="w-100 rounded-top" src="{{ asset('upload/works/' . $slider->photo_url) }}" alt="{{ $slider->id }}">
                                                            </a>
                                                            <div class="gallery-body card-inner align-center justify-between flex-wrap g-2">
                                                                <div class="user-card">
                                                                    <div class="user-avatar">
                                                                        <em class="icon ni ni-user-alt"></em>
                                                                    </div>
                                                                    <div class="user-info">
                                                                        {{ $up_user }}
                                                                        {{ $status }}
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <a class="btn btn-p-0 btn-nofocus" onclick="event.preventDefault();
                                                                document.getElementById('delete_slider_{{ $slider->id }}').submit();">
                                                                        <em class="icon ni ni-trash"></em>
                                                                    </a>
                                                                    <form id="delete_slider_{{ $slider->id }}" action="{{ route('delete_project_photo', ['photo_id' => $slider->id] ) }}" method="POST" class="d-none">
                                                                        @csrf
                                                                        <input type="text" name="p_id" value="{{ $project->id }}" class="d-none">
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach

                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <!-- .card-inner -->
                            </div>
                            <!-- .card-content -->
                        </div>
                        <!-- .card-aside-wrap -->
                    </div>
                    <!-- .card -->
                </div>
                <!-- .nk-block -->
            </div>

            <div class="modal zoom" id="editProject">
                <div class="modal-dialog modal-box" role="document" >
                    <div class="modal-content" data-select2-id="22">
                        <a href="#" class="close" data-bs-dismiss="modal" aria-label="بستن">
                            <em class="icon ni ni-cross-sm"></em>
                        </a>
                        <div class="modal-body modal-body-md">
                            <h5 class="modal-title">{{ __('all.edit') }} {{ __('all.project_id') }}</h5>
                            <form method="POST" id="e-p-form">
                                @csrf
                                @method('POST')
                                <label for="user_id_create"></label>
                                <input type="text" class="form-control" id="user_id_create"
                                       value="{{ Auth::user()->id }}" name="user_id_create" hidden>
                                <div class="row g-gs">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="title">عنوان</label>
                                            <div class="form-control-wrap">
                                                <input type="text" class="form-control" id="title"
                                                       placeholder="{{ __('all.project_name') }}"
                                                       value="{{ $project->title }}" name="title">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label"
                                                   for="active">وضعیت</label>
                                            <div class="form-control-wrap">
                                                <select class="form-select js-select2 select2-hidden-accessible"
                                                        id="active" tabindex="-1" aria-hidden="true" name="active">
                                                    <option name="active" value="1"
                                                            @if ($project->active == 1) selected @endif >فعال</option>
                                                    <option name="active" value="0"
                                                            @if ($project->active == 0) selected @endif >غیرفعال</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>



                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-label" for="dec">{{ __('all.project_dec') }}</label>
                                            <div class="form-control-wrap">
                                                <input type="text" class="form-control" id="dec" placeholder=""
                                                       value="{{ $project->dec }}" name="dec">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-label" for="customer">مشتری</label>
                                            <div class="form-control-wrap">
                                                <input type="text" class="form-control" id="customer" placeholder=""
                                                       value="{{ $project->customer }}" name="customer">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label"
                                                   for="finish_date">تاریخ پایان</label>
                                            <div class="form-control-wrap">
                                                <div class="form-icon form-icon-right">
                                                    <em class="icon ni ni-calendar-alt"></em>
                                                </div>
                                                <input type="text"
                                                       class="form-control date pwt-datepicker-input-element"
                                                       id="finish_date" value="" name="finish_date"
                                                       placeholder="روز/ماه/سال">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="finish_time">{{ __('all.project_finish') }}
                                                Time</label>
                                            <div class="form-control-wrap has-timepicker">
                                                <input type="text" class="form-control" placeholder="مثال: 13:20:00"
                                                       id="finish_time" value="" name="finish_time">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary" onclick="sendepform()">
                                                {{ __('all.edit') }}
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <script>
                                $(document).ready(function () {
                                    $("#e-p-form").submit(function (event) {
                                        event.preventDefault();
                                    })
                                })

                                function sendepform() {
                                    $.ajax({
                                        type: "POST",
                                        url: "{{ route('a_Edit_Projects', $project->id ) }}",
                                        data: {
                                            "_token": "{{ csrf_token() }}",
                                            user_id_create: $('#user_id_create').val(),
                                            title: $('#title').val(),
                                            dec: $('#dec').val(),
                                            finish_date: $('#finish_date').val(),
                                            finish_time: $('#finish_time').val(),
                                            customer: $('#customer').val(),
                                            active: $('#active').val(),
                                        },
                                        success: function () {
                                            $("#editProject").modal("hide")
                                            NioApp.Toast('' +
                                                '<h5>موفقیت آمیز</h5>' +
                                                '<p>پروژه با موفقیت ادیت شد</p>',
                                                'success', {
                                                    position: 'top-right'
                                                }, 1000
                                            );
                                        },
                                        error: function () {
                                            $("#editProject").modal("hide")
                                            NioApp.Toast('' +
                                                '<h5>خطا</h5>' +
                                                '<p>پروژه با موفقیت ادیت نشد</p>',
                                                'danger', {
                                                    position: 'top-right'
                                                }, 1000
                                            );
                                        },
                                    });
                                }
                            </script>
                        </div>

                    </div>
                </div>
            </div>
            <div class="modal zoom" id="addProjectPhoto">
                <div class="modal-dialog modal-box" role="document">
                    <div class="modal-content" data-select2-id="22">
                        <a href="#" class="close" data-bs-dismiss="modal" aria-label="بستن">
                            <em class="icon ni ni-cross-sm"></em>
                        </a>
                        <div class="modal-body modal-body-md">
                            <h5 class="modal-title">{{ __('all.create') }}</h5>
                            <form method="POST" id="add-p-img-form" action="{{ route('add_project_photo', ['project_id' => $project->id]) }}" enctype="multipart/form-data">
                                @csrf
                                @method('POST')
                                <label for="user_id_create"></label>
                                <div class="row gy-1">
                                    <div class="col-12">
                                        <div class="form-control-wrap">
                                            <label class="form-label" for="p_photo">بارگذاری فایل</label>
                                            <div class="form-file">
                                                <input type="file" class="form-file-input" id="p_photo" name="photo"/>
                                                <label class="form-file-label" for="p_photo" >انتخاب فایل</label>
                                            </div>
                                        </div>


                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary">
                                                ایجاد
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
