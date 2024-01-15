@extends('admin.header')

@section('content')
    <div class="nk-content">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">
                                    داشبورد
                                </h3>
                                <div class="nk-block-des text-soft">
                                    <p>به داشبورد خوش آمدید</p>
                                </div>
                            </div>
                            <!-- .nk-block-head-content -->
                            <div class="nk-block-head-content">
                                <div class="toggle-wrap nk-block-tools-toggle">
                                    <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1"
                                       data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                    <div class="toggle-expand-content" data-content="pageMenu">
                                        <ul class="nk-block-tools g-3">
                                            <li class="nk-block-tools-opt">
                                                <a href="" class="btn btn-secondary">
                                                    <em class="icon ni ni-send"></em>
                                                    <span>ارسال پیامک</span></a>
                                            </li>
                                            <li class="nk-block-tools-opt">
                                                <a href="" class="btn btn-primary"><em
                                                        class="icon ni ni-pen"></em><span>شخصی سازی</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- .nk-block-head-content -->
                        </div>
                        <!-- .nk-block-between -->
                    </div>
                    <div class="nk-block">
                        <div class="row g-gs">
                            <div class="col-sm-3">
                                <div class="card card-bordered">
                                    <div class="card-inner">
                                        <div class="card-title-group align-start mb-2">
                                            <div class="card-title">
                                                <h6 class="title">تعداد بازدید ها</h6>
                                            </div>
                                            <div class="card-tools">
                                                <em class="card-hint icon ni ni-help-fill"
                                                    data-bs-toggle="tooltip" data-bs-placement="right"
                                                    title="تعداد بازید های کاربران از صفحات"></em>
                                            </div>
                                        </div>
                                        <div class="align-end flex-sm-wrap g-4 flex-md-nowrap">
                                            <div class="nk-sale-data">
                                                <span class="amount">100</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- .card -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- .row -->
            </div>
        </div>
        <!-- .row -->
    </div>
    <!-- .nk-block -->
@endsection
