@php
    $configs = \App\Models\Configs::pluck('value', 'name');
@endphp

@extends('public.'. $configs['theme'] . '.layouts.main')

@section('title')
    نمونه کار ها
@endsection

@section('content')
    <div class="scr-bar_container" dir="rtl">
        <div class="content" data-pagetitle="نمونه کار" data-pagesubtitle="نمونه کار">
            <div class="bg-top"></div>
            <div class="bg-bottom"></div>
            <!--section  -->
            <section>
                <div class="section-title fl-wrap">
                    <h3>{{ $work->title }}</h3>
                </div>
                <div class="center-carousel-wrap fl-wrap">
                    <div class="center-carousel fl-wrap">
                        <div class="swiper-container">
                            <div class="swiper-wrapper lightgallery">
                                @foreach($work->slider as $slider)
                                    <!--swiper-slide  -->
                                    <div class="swiper-slide hov_zoom">
                                        <img src="{{ asset('upload/works/') }}/{{ $slider->photo_url }}" alt=""><a href="{{ asset('upload/works/') }}/{{ $slider->photo_url }}" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                                    </div>
                                    <!--swiper-slide end -->
                                @endforeach

                            </div>
                        </div>
                    </div>
                    <div class="ts-controls">
                        <div class="tc-button  ccsw-next"><i class="fal fa-angle-right"></i></div>
                        <div class="tc-button  ccsw-prev"><i class="fal fa-angle-left"></i></div>
                    </div>
                    <div class="ss-pagination-wrap">
                        <div class="tc-pagination2 slider-pag"></div>
                    </div>
                </div>
                <div class="box-text-wrap fl-wrap">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="fl-wrap content-box single_pb">
                                <h4 class="bold-title">اطلاعات پروژه</h4>
                                <p>{{ $work->dec }}</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="box-text-wrap_item content-box">
                                <h5>جزئیات پروژه</h5>
                                <ul>
                                    <li><span>تاریخ : {{ $work->created_at }}</span></li>
                                    <li><span>مشتری : {{ $work->customer }}</span></li>
                                </ul>
                            </div>
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
