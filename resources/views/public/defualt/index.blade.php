@php
    $configs = \App\Models\Configs::pluck('value', 'name');
@endphp

@extends('public.'. $configs['theme'] . '.layouts.main')

@section('title')
    صفحه اصلی
@endsection

@section('content')
    <div class="scr-bar_container">
        <div class="content" data-pagetitle="درباره من" data-pagesubtitle="خانه">
            <div class="bg-top"></div>
            <div class="bg-bottom"></div>
            <!--section   -->
            <section class="hero-section">
                <div class="bg-wrap hero-section_bg">
                    <div class="bg" data-bg="{{ asset('assets/images/bg/1.jpg') }}"></div>
                </div>
                <div class="hero-section-title">
                    <div class="row">
                        <div class="col-md-7">
                            <h2>به وب سایت من خوش آمدید</h2>
                        </div>
                    </div>
                </div>
            </section>
            <!-- section end  -->
            <!--section   -->
            <section>
                <div class="row">
                    <div class="col-md-7">
                        <p>{{ $configs['r_info'] }}</p>
                        <div class="facts-container fl-wrap">
                            <!-- inline-facts -->
                            <div class="inline-facts-wrap">
                                <div class="inline-facts">
                                    <div class="milestone-counter">
                                        <div class="stats animaper">
                                            <div class="num" data-content="0" data-num="{{ $configs['r_complate_project'] }}">0</div>
                                        </div>
                                    </div>
                                    <h6>پروژه های تکمیل</h6>
                                </div>
                            </div>
                            <!-- inline-facts end -->
                            <!-- inline-facts  -->
                            <div class="inline-facts-wrap">
                                <div class="inline-facts">
                                    <div class="milestone-counter">
                                        <div class="stats animaper">
                                            <div class="num" data-content="0" data-num="{{ $configs['r_work_houses'] }}">0</div>
                                        </div>
                                    </div>
                                    <h6>ساعات کاری</h6>
                                </div>
                            </div>
                            <!-- inline-facts end -->
                            <!-- inline-facts  -->
                            <div class="inline-facts-wrap">
                                <div class="inline-facts">
                                    <div class="milestone-counter">
                                        <div class="stats animaper">
                                            <div class="num" data-content="0" data-num="{{ $configs['r_archivment'] }}">0</div>
                                        </div>
                                    </div>
                                    <h6>جوایز</h6>
                                </div>
                            </div>
                            <!-- inline-facts end -->
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="hero-info-list fl-wrap">
                            <ul>
                                <li><strong>سن</strong><span>{{ $configs['r_age'] }}</span></li>
                                <li><strong>فریلنسر</strong><span>{{ $configs['r_freelancer'] }}</span></li>
                                <li><strong>کشور</strong><span>{{ $configs['r_country'] }}</span></li>
                                <li><strong>سرگرمی</strong><span>{{ $configs['r_enter'] }}</span></li>
                            </ul>
                            <a href="#" class="btn ajax fl-btn color-bg"><span>نمونه کارهای من</span></a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- section end  -->
            <section class="serv-sec">
                <div class="section-title fl-wrap">
                    <h3>خدماتی که ارائه می دهم</h3>
                </div>
                <div class="row">
                    @foreach($services as $service)
                        <div class="col-md-6">
                            <div class="column-wrapper_text services-item fl-wrap">
                                <span class="serv-number">{{ $service->id }}.</span>
                                <i class="fal fa-{{ $service->icon }}"></i>
                                <h4>{{ $service->title }}</h4>
                                <p>{{ $service->dec }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </section>
            <!--section  -->
            <div class="to-top-wrap">
                <div class="to-top color-bg"><i class="fas fa-caret-up"></i></div>
            </div>
        </div>
    </div>
@endsection
