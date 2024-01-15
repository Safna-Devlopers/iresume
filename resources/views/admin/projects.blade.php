@php use App\Models\User; @endphp
@php use Morilog\Jalali\Jalalian; @endphp
@extends('admin.header')

@section('content')
    <div class="nk-content">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">لیست پروژه ها</h3>
                                <div class="nk-block-des text-soft">
                                    <p>تعداد پروژه ها {{ $projects_cou }}</p>
                                </div>
                            </div>
                            <!-- .nk-block-head-content -->
                            <div class="nk-block-head-content">
                                <div class="toggle-wrap nk-block-tools-toggle">
                                    <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1"
                                       data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                                    <div class="toggle-expand-content" data-content="pageMenu">
                                        <ul class="nk-block-tools g-3">
                                            <li>
                                                <a href="#" class="btn btn-white btn-outline-light" disabled
                                                   data-bs-toggle="tooltip" data-bs-placement="top" title="بزودی"><em
                                                        class="icon ni ni-download-cloud"></em>
                                                    <span>
                                                        خروجی
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="nk-block-tools-opt">
                                                <div class="drodown" data-bs-toggle="tooltip" data-bs-placement="top"
                                                     title="ایجاد">
                                                    <a data-bs-toggle="modal" data-bs-target="#addProject"
                                                       class="btn btn-icon btn-primary"><em
                                                            class="icon ni ni-plus"></em></a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- .toggle-wrap -->
                            </div>
                            <!-- .nk-block-head-content -->
                        </div>
                        <!-- .nk-block-between -->
                    </div>
                    <!-- .nk-block-head -->
                    <div class="nk-block">
                        <div class="card card-bordered card-stretch">
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
                            <!-- .card -->
                        </div>
                        <!-- .nk-block -->
                    </div>
                    <div class="nk-block">
                        <div class="card card-bordered card-stretch">
                            <div class="card-inner-group">
                                <div class="card-inner position-relative card-tools-toggle">
                                    <!-- .card-inner -->
                                    <div class="card-inner p-0">
                                        <div class="nk-tb-list nk-tb-ulist">
                                            <div class="nk-tb-item nk-tb-head">

                                                <div class="nk-tb-col">
                                                    <span class="sub-text">عنوان</span>
                                                </div>
                                                <div class="nk-tb-col tb-col-mb">
                                                    <span class="sub-text">کارفرما</span>
                                                </div>
                                                <div class="nk-tb-col tb-col-lg">
                                                    <span class="sub-text">وضعیت</span>
                                                </div>
                                                <div class="nk-tb-col tb-col-lg">
                                                    <span class="sub-text">تاریخ پایان</span>
                                                </div>
                                                <div class="nk-tb-col tb-col-md">
                                                    <span class="sub-text">مدیریت</span>
                                                </div>

                                            </div>
                                            <!-- .nk-tb-item -->
                                            @foreach ($projects as $project)
                                                <div class="nk-tb-item">
                                                    <div class="nk-tb-col">
                                                        <a>
                                                            <div class="user-card">
                                                                <div class="user-info">
                                                                    <span class="tb-lead">{{ $project->title }}
                                                                        <span
                                                                            class="dot dot-success d-md-none ms-1"></span></span>
                                                                    <span>{{ $project->dec }}</span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="nk-tb-col tb-col-mb">
                                                        <span>{{ $project->customer }}</span>
                                                    </div>
                                                    <div class="nk-tb-col tb-col-mb">
                                                        @if($project->active == 1)
                                                            <span class="text-success">فعال</span>
                                                        @else
                                                            <span class="text-danger">غیرفعال</span>
                                                        @endif

                                                    </div>
                                                    <div class="nk-tb-col tb-col-lg">
                                                        <span>
                                                            {{ $project->finish_date }}
                                                        </span>
                                                    </div>
                                                    <div class="nk-tb-col nk-tb-col-tools">
                                                        <ul class="nk-tb-actions gx-1">
                                                            <li>
                                                                <div class="drodown">
                                                                    <a href="#"
                                                                       class="dropdown-toggle btn btn-icon btn-trigger"
                                                                       data-bs-toggle="dropdown"><em
                                                                            class="icon ni ni-more-h"></em></a>
                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                        <ul class="link-list-opt no-bdr">
                                                                            <li>
                                                                                <a
                                                                                    href=" {{ route('a_Show_Projects', ['id' => $project->id]) }}"><em
                                                                                        class="icon ni ni-eye"></em>
                                                                                    <span>
                                                                                        نمایش
                                                                                    </span>
                                                                                </a>
                                                                            </li>
                                                                            <li class="divider"></li>
                                                                            <li>
                                                                                <a href="{{ route('a_d_project', ['id' => $project->id] ) }}"><em
                                                                                        class="icon ni ni-trash"></em>
                                                                                    <span>
                                                                                            حذف
                                                                                        </span>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            @endforeach

                                        </div>
                                        <!-- .nk-tb-list -->
                                    </div>
                                    <!-- .card-inner -->
                                    <div class="card-inner">
                                        {{ $projects->links() }}
                                        <!-- .nk-block-between -->
                                    </div>
                                    <!-- .card-inner -->
                                </div>
                                <!-- .card-inner-group -->
                            </div>
                            <!-- .card -->
                        </div>
                        <!-- .nk-block -->
                    </div>
                </div>
            </div>


            <div class="modal fade" id="addProject">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content" data-select2-id="22">
                        <a href="#" class="close" data-bs-dismiss="modal" aria-label="بستن">
                            <em class="icon ni ni-cross-sm"></em>
                        </a>
                        <div class="modal-body modal-body-md">
                            <h5 class="modal-title">افزودن پروژه</h5>
                            <form method="POST" id="c-p-form">
                                @csrf
                                @method('POST')
                                <label for="user_id_create"></label>
                                <input type="text" class="form-control" id="user_id_create"
                                       value="{{ Auth::user()->id }}" name="user_id_create" hidden>
                                <div class="row g-gs">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="title">نام</label>
                                            <div class="form-control-wrap">
                                                <input type="text" class="form-control" id="title"
                                                       placeholder="نام پروژه" value="" name="title">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="active">وضعیت</label>
                                            <div class="form-control-wrap">
                                                <select class="form-select js-select2 select2-hidden-accessible"
                                                        id="active" tabindex="-1" aria-hidden="true" name="active">
                                                    <option name="active" value="1" selected>فعال</option>
                                                    <option name="active" value="0">غیرفعال</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-label" for="customer">مشتری</label>
                                            <div class="form-control-wrap">
                                                <input type="text" class="form-control" id="customer" placeholder=""
                                                       value="" name="customer">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-label" for="dec">توضیحات</label>
                                            <div class="form-control-wrap">
                                                <input type="text" class="form-control" id="dec" placeholder=""
                                                       value="" name="dec">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="finish_date">تاریخ پایان</label>
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
                                            <label class="form-label" for="finish_time">ساعت پایان</label>
                                            <div class="form-control-wrap has-timepicker">
                                                <input type="text" class="form-control" placeholder="مثال: 13:20:00"
                                                       id="finish_time" value="" name="finish_time">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary" onclick="sendcpform()">افزودن
                                                پروژه
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <script>
                                // $(document).ready(function () {
                                //     $("#c-p-form").submit(function (event) {
                                //         event.preventDefault();
                                //     })
                                // })

                                function sendcpform() {
                                    $.ajax({
                                        type: "POST",
                                        url: "{{ route('a_Create_Projects') }}",
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
                                            $("#addProject").modal("hide")
                                            NioApp.Toast('<h5>به روز رسانی موفقیت آمیز</h5><p>تنظیمات با موفقیت به روز رسانی شد.</p>', 'success', {position: 'top-right'},
                                                setTimeout(function () {
                                                    location.reload()
                                                }, 1000),
                                            );
                                        },
                                        error: function () {
                                            $("#addProject").modal("hide")
                                            NioApp.Toast('<h5>به روز رسانی خطا</h5><p>تنظیمات با موفقیت به روز رسانی نشد.</p>', 'error', {position: 'top-right'},
                                                setTimeout(function () {
                                                    location.reload()
                                                }, 1000),
                                            );
                                        },
                                    });
                                }
                            </script>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
