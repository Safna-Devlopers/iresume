@php
    $configs = \App\Models\Configs::pluck('value', 'name');
@endphp

@extends('public.'. $configs['theme'] . '.layouts.main')

@section('title')
    رزومه
@endsection

@section('content')
    <div class="scr-bar_container">
        <div class="content" data-pagetitle="داستان من" data-pagesubtitle="رزومه">
            <div class="bg-top"></div>
            <div class="bg-bottom"></div>
            <!--section  -->
            <section>
                <div class="section-title fl-wrap">
                    <h3>رزومه حرفه ای</h3>
                </div>
                <div class="box-text-wrap fl-wrap">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="fl-wrap content-box single_pb cb_dec">
                                <p>{{ $configs['r_info'] }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--section end-->
            <!--section  -->
            <section>
                <div class="row">
                    <div class="col-md-6">
                        <div class="section-title fl-wrap">
                            <h3>سابقه کاری</h3>
                        </div>
                        <div class="resume-item-container fl-wrap">
                            @foreach($works as $work)
                                <!--resume-item-->
                                <div class="resume-item fl-wrap">
                                    <h4>{{ $work->title }}</h4>
                                    <h5>{{ $work->work_title }}</h5>
                                    <p>{{ $work->dec }}</p>
                                    <span class="resume-date">{{ $work->time }}</span>
                                </div>
                                <!--resume-item end-->
                            @endforeach

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="section-title fl-wrap">
                            <h3>تحصیلات</h3>
                        </div>
                        <div class="resume-item-container ric_nom fl-wrap">
                            @foreach($edus as $edu)
                                <!--resume-item-->
                                <div class="resume-item fl-wrap">
                                    <h4>{{ $edu->title }}</h4>
                                    <h5>{{ $edu->work_title }}</h5>
                                    <p>{{ $edu->dec }}</p>
                                    <span class="resume-date">{{ $edu->time }}</span>
                                </div>
                                <!--resume-item end-->
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>
            <!--section end-->
            <div class="to-top-wrap">
                <div class="to-top color-bg"><i class="fas fa-caret-up"></i></div>
            </div>
        </div>
    </div>
@endsection
