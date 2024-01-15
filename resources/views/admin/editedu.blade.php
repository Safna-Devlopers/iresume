@extends('admin.header')

@section('content')
    <div class="nk-content">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">ویرایش سابقه</h3>
                            </div>
                            <!-- .nk-block-head-content -->
                        </div>
                        <!-- .nk-block-between -->
                    </div>
                    <!-- .nk-block-head -->
                    <div class="nk-block">
                        <form action="{{ route('a_edit_eductions', $edu->id) }}" method="POST">
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
                                                                   name="title" value="{{ $edu->title }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label class="form-label" for="uni_title">آموزشگاه</label>
                                                            <input type="text" class="form-control" id="uni_title"
                                                                   name="uni_title" value="{{ $edu->uni_title }}">
                                                        </div>
                                                    </div>


                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label class="form-label" for="dec_en">توضیحات</label>
                                                            <input type="text" class="form-control" id="dec_en"
                                                                   name="dec" value="{{ $edu->dec }}">
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label class="form-label" for="time">سال</label>
                                                            <input type="text" class="form-control" id="time"
                                                                   name="time" value="{{ $edu->time }}">
                                                        </div>
                                                    </div>


                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <ul class="align-center flex-wrap flex-sm-nowrap gx-4 mt-1">
                                                                <li>
                                                                    <button type="submit"
                                                                            class="btn btn-primary">ارسال
                                                                    </button>
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
