@php
    $configs = \App\Models\Configs::pluck('value', 'name');
@endphp

@extends('public.'. $configs['theme'] . '.layouts.main')

@section('title')
    تماس با ما
@endsection

@section('content')
    <div class="scr-bar_container">
        <div class="content" data-pagetitle="در تماس باشید" data-pagesubtitle="تماس با من">
            <div class="bg-top"></div>
            <div class="bg-bottom"></div>
            <section>
                <div class="section-title fl-wrap">
                    <h3>اطلاعات تماس</h3>
                </div>
                <div class="row">
                    <!--card-item -->
                    <div class="col-md-6">
                        <div class="card-item fl-wrap">
                            <i class="fal fa-envelope"></i>
                            <span class="card-item_num">01.</span>
                            <h4>ایمیل من</h4>
                            <p>ارتباط از طریق ایمیل</p>
                            <a href="mailto:{{ $configs['site_email'] }}" class="card-link">{{ $configs['site_email'] }}</a>
                        </div>
                    </div>
                    <!--card-item end -->
                    <!--card-item -->
                    <div class="col-md-6">
                        <div class="card-item fl-wrap">
                            <i class="fas fa-phone"></i>
                            <span class="card-item_num">02.</span>
                            <h4>شماره تماس</h4>
                            <p>ارتباط از طریق شماره تلفن</p>
                            @if(!empty($configs['site_phone']))
                                <a href="tell:{{ $configs['site_phone'] }}" dir="ltr" class="card-link">{{ $configs['site_phone'] }}</a>
                            @endif
                            @if(!empty($configs['site_phone2']))
                                <a href="tell:{{ $configs['site_phone2'] }}" dir="ltr" class="card-link">{{ $configs['site_phone2'] }}</a>
                            @endif
                        </div>
                    </div>
                    <!--card-item end -->
                </div>
            </section>
            <section>
                <div class="section-title fl-wrap">
                    <h3>برای من پیام بگذارید</h3>
                </div>
                <!--contact-form-wrap -->
                <div class="contact-form-wrap">
                    <div id="contact-form" class="contact-form fl-wrap">
                        <div id="message"></div>
                        <form class="custom-form" action="contact.php" name="contactform" id="contactform">
                            <fieldset>
                                <div class="input-wrap"><i class="far fa-user-plus"></i><input type="text" name="name" id="name" placeholder="نام شما *" value="" /></div>
                                <div class="input-wrap"><i class="far fa-envelope"></i><input type="text" name="email" id="email" placeholder="آدرس ایمیل *" value="" /></div>
                                <div class="input-wrap"><i class="far fa-comment-alt"></i><textarea name="comments" id="comments" cols="40" rows="3" placeholder="پیغام:"></textarea></div>
                            </fieldset>
                            <button class="btn float-btn color-bg" id="submit"> <span>ارسال پیام</span></button>
                        </form>
                    </div>
                    <!-- contact form  end-->
                </div>
                <!--contact-form-wrap end-->
            </section>
            <div class="to-top-wrap">
                <div class="to-top color-bg"><i class="fas fa-caret-up"></i></div>
            </div>
        </div>
    </div>
@endsection
