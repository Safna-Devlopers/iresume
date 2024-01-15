@php
    $configs = \App\Models\Configs::pluck('value', 'name');
@endphp

@extends('public.'. $configs['theme'] . '.layouts.main')

@section('title')
    نمونه کار ها
@endsection

@section('content')
    <div class="scr-bar_container">
        <div class="content" data-pagetitle="نمونه کارهای من" data-pagesubtitle="نمونه کار">
            <div class="bg-top"></div>
            <div class="bg-bottom"></div>
            <!--section  -->
            <section>
                <div class="section-title fl-wrap">
                    <h3>نمونه کار</h3>
                </div>
                <!-- portfolio start -->
                <div class="gallery-items min-pad hover-dir   fl-wrap  ">
                    @foreach($works as $work)
                        <!-- gallery-item-->
                        <div class="gallery-item">
                            <div class="grid-item-holder hov_zoom">
                                <img src="{{ asset('upload/works/') }}/{{ $work->slider[0]->photo_url }}" alt="{{ $work->title }}">
                                <div class="grid-det">
                                    <a href="{{ asset('upload/works/') }}/{{ $work->slider[0]->photo_url }}" class="grid-media-zoom   image-popup"><i class="far fa-search"></i></a>
                                    <div class="grid-det-item">
                                        <a href="{{ route('show_work', $work->id) }}" class="ajax grid-det_link">{{ $work->title }}<i class="fal fa-long-arrow-left"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- gallery-item end-->
                    @endforeach

                </div>
                <!-- portfolio end -->
            </section>
            <!--section end-->
            <div class="to-top-wrap">
                <div class="to-top color-bg"><i class="fas fa-caret-up"></i></div>
            </div>
        </div>
    </div>
@endsection
