@extends('admin.header')

@section('content')
    <div class="nk-content">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">ویرایش سرویس</h3>
                            </div>
                            <!-- .nk-block-head-content -->
                        </div>
                        <!-- .nk-block-between -->
                    </div>
                    <!-- .nk-block-head -->
                    <div class="nk-block">
                        <form action="{{ route('a_edit_services', $service->id) }}" method="POST">
                            @csrf
                            @method('POST')
                            <div class="row g-gs">
                                <!-- .col -->
                                <div class="col-lg-12">
                                    <div class="card card-bordered">
                                        <div class="card-inner">
                                            <form action="#">
                                                <div class="row g-gs">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label class="form-label" for="title">عنوان</label>
                                                            <input type="text" class="form-control" id="title"
                                                                name="title" value="{{ $service->title }}">
                                                        </div>
                                                    </div>


                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label class="form-label" for="dec_en">توضیحات</label>
                                                            <input type="text" class="form-control" id="dec_en"
                                                                name="dec" value="{{ $service->dec }}">
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label class="form-label" for="icon">آیکون / نماد</label>
                                                            <input type="text" class="form-control" id="icon"
                                                                   name="icon" value="{{ $service->icon }}">
                                                            <span class="text-soft" style="font-size: 12px">
                                                                آیکون ها از پکیج
                                                                <code>فونت آواسوم</code>
                                                                استفاده می شود . نسبت به محتویات داخل پکیج آیکون خود را
                                                                اننخاب نمایید.
                                                            </span>
                                                        </div>
                                                    </div>


                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <ul class="align-center flex-wrap flex-sm-nowrap gx-4 mt-1">
                                                                <li>
                                                                    <button type="submit"
                                                                        class="btn btn-primary">ارسال</button>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- .card -->
                                </div>
                            </div>
                        </form>
                        <!-- .row -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
