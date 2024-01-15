@php use App\Models\User; @endphp
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
                </div>
                <!-- .row -->
            </div>
        </div>
        <!-- .row -->
    </div>
    <!-- .nk-block -->
@endsection
