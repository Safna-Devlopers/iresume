@extends('admin.header')

@section('content')
    @if(session('success'))
        <script>
            window.addEventListener('load', function() {
                NioApp.Toast('<h5>به روز رسانی موفقیت آمیز</h5><p>تنظیمات با موفقیت به روز رسانی شد.</p>', 'success', {position: 'top-right'}, 3000);
            });
        </script>
    @endif
    <div class="nk-content">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <div class="nk-block-head-sub">
                                    <a class="back-to" href="{{ route('a_Dashborad') }}"><em
                                            class="icon ni ni-arrow-left"></em><span>{{ __('back') }}</span></a>
                                </div>
                                <h3 class="nk-block-title page-title">لیست سرویس ها</h3>
                                <div class="nk-block-des text-soft">
                                    <p>شما در مجموع {{ $service_cou }} سرویس دارید.</p>
                                </div>
                            </div>
                            <!-- .nk-block-head-content -->
                            <div class="nk-block-head-content">
                                <div class="toggle-wrap nk-block-tools-toggle">
                                    <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1"
                                       data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                                    <div class="toggle-expand-content" data-content="pageMenu">
                                        <ul class="nk-block-tools g-3">
                                            <li class="nk-block-tools-opt">
                                                <a href="#" data-target="addService"
                                                   class="toggle btn btn-icon btn-primary d-md-none"><em
                                                        class="icon ni ni-plus"></em></a>
                                                <a href="#" data-target="addService"
                                                   class="toggle btn btn-primary d-none d-md-inline-flex"><em
                                                        class="icon ni ni-plus"></em><span>افزودن سرویس</span></a>
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
                            <div class="card-inner-group">
                                <div class="card-inner position-relative card-tools-toggle">
                                    <!-- .card-inner -->
                                    <div class="card-inner p-0">
                                        <div class="nk-tb-list nk-tb-ulist">
                                            <div class="nk-tb-item nk-tb-head">

                                                <div class="nk-tb-col">
                                                    <span class="sub-text">عنوان</span>
                                                </div>
                                                <div class="nk-tb-col">
                                                    <span class="sub-text">توضیحات</span>
                                                </div>
                                                <div class="nk-tb-col tb-col-md">
                                                    <span class="sub-text">آیکون / نماد</span>
                                                </div>
                                                <div class="nk-tb-col tb-col-md">
                                                    <span class="sub-text">وضعیت</span>
                                                </div>
                                                <div class="nk-tb-col tb-col-lg">
                                                    <span class="sub-text">تاریخ ایجاد</span>
                                                </div>
                                                <div class="nk-tb-col tb-col-lg">
                                                    <span class="sub-text">آخرین تغییر</span>
                                                </div>
                                                <div class="nk-tb-col tb-col-md">
                                                    <span class="sub-text">عملیات</span>
                                                </div>

                                            </div>
                                            <!-- .nk-tb-item -->
                                            @foreach ($services as $service)
                                                <div class="nk-tb-item">
                                                    <div class="nk-tb-col">
                                                        <span class="title">{{ $service->title }}</span>
                                                    </div>
                                                    <div class="nk-tb-col tb-col-mb">
                                                        <span>{{ $service->dec }}</span>
                                                    </div>
                                                    <div class="nk-tb-col tb-col-lg">
                                                        <span><i class="fa-solid fa-{{ $service->icon }} fa-2xl"></i> | {{ $service->icon }}</span>
                                                    </div>
                                                    <div class="nk-tb-col tb-col-lg">
                                                        @if ($service->active == 1)
                                                            <span
                                                                class="tb-status text-success">فعال</span>
                                                        @else
                                                            <span
                                                                class="tb-status text-danger">غیرفعال</span>
                                                        @endif
                                                    </div>
                                                    <div class="nk-tb-col tb-col-lg">
                                                        <span>{{ jdate($service->created_at) }}</span>
                                                    </div>
                                                    <div class="nk-tb-col tb-col-lg">
                                                        <span>{{ jdate($service->updated_at) }}</span>
                                                    </div>
                                                    <div class="nk-tb-col nk-tb-col-tools">
                                                        <ul class="nk-tb-actions gx-1">
                                                            <li class="nk-tb-action-hidden">
                                                                <a href="{{ route('a_show_services', $service->id) }}"
                                                                   class="btn btn-trigger btn-icon">
                                                                    <em class="icon ni ni-edit"></em>
                                                                </a>
                                                            </li>
                                                            <li class="nk-tb-action-hidden">
                                                                <a href="{{ route('a_delate_services', $service->id) }}"
                                                                   class="btn btn-trigger btn-icon"
                                                                   onclick="event.preventDefault();
                                                                document.getElementById('delate_service_{{ $service->id }}').submit();">
                                                                    <em class="icon ni ni-trash"></em>
                                                                </a>
                                                                <form id="delate_service_{{ $service->id }}"
                                                                      action="{{ route('a_delate_services', $service->id) }}"
                                                                      method="POST" class="d-none">
                                                                    @csrf
                                                                </form>
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
                                        {{ $services->links() }}
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


                    <!-- .nk-block -->
                    <div class="nk-add-product toggle-slide toggle-slide-right" data-content="addService"
                         data-toggle-screen="any" data-toggle-overlay="true" data-toggle-body="true" data-simplebar>
                        <div class="nk-block-head">
                            <div class="nk-block-head-content">
                                <h5 class="nk-block-title">سرویس جدید</h5>
                                <div class="nk-block-des">
                                    <p>اطلاعات سرویس جدید را وارد کنید</p>
                                </div>
                            </div>
                        </div>
                        <!-- .nk-block-head -->

                        <form action="{{ route('a_create_services') }}" method="POST" enctype="multipart/form-data">
                            @method('POST')
                            @csrf
                            <div class="nk-block">
                                <div class="row g-3">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label class="form-label" for="title">عنوان</label>
                                            <div class="form-control-wrap">
                                                <input type="text" class="form-control" id="title"
                                                       name="title"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-label" for="dec">توضیحات</label>
                                            <div class="form-control-wrap">
                                                <input type="text" class="form-control" id="dec"
                                                       name="dec"/>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-12">
                                        <button class="btn btn-primary"><em class="icon ni ni-send"></em>
                                            <span>
                                                افزودن
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <!-- .nk-block -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
