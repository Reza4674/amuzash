@extends('site.master')
@section('main-content')

    <section class="banner_area">
        <div class="box_1620">
            <div class="banner_inner d-flex align-items-center">
                <div class="container">
                    <div class="banner_content text-center">
                        <h2>خدمات</h2>
                        <div class="page_link">
                            <a href="{{route('home')}}">خانه</a>
                            <a href="{{route('offer')}}">خدمات</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!--================Feature Area =================-->
    <section class="feature_area p_120">
        <div class="container">
            <div class="main_title">
                <h2>پیشنهاد برای کاربران</h2>
                <p>اگر شما به دنبال بهترین طرح ها برای وب سایت خود هستید این سایت برای شما ساخته شده تا بتوانید ایده های خود را به اشتراک بگذارید و از ایده دیگر اعضا به راحتی کمک بگیرید</p>
            </div>
            <div class="feature_inner row">
                @foreach($offers as $offer)
                    <div class="col-lg-4 col-md-6">
                        <div class="feature_item">
                            <i class="flaticon-city"></i>
                            <h4>{{$offer->title}}</h4>
                            <p>{{$offer->body}} </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--================End Feature Area =================-->

    <!--================Testimonials Area =================-->
    <section class="testimonials_area p_120">
        <div class="container">
            <div class="main_title">
                <h2>رضایت کاربران</h2>
                <p>شما میتوانید در این قسمت ایده ها و نظرات کسانی را که با سایت ما آشنا شده اند را بخوانید و شما نیز نظرات خود را درباره ی موفقیت های خود بگذارید</p>
            </div>
            <div class="testi_inner">
                <div class="testi_slider owl-carousel">
                    @foreach($comments as $comment)
                        <div class="item">
                            <div class="testi_item" dir="rtl">
                                <p>{{$comment->body}}</p>
                                <h4>{{$comment->name}}</h4>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
            <div class="more_btn">
                <a  class="main_btn" href="{{route('about')}}">افزودن نظر</a>
            </div>
        </div>
    </section>
    <!--================End Testimonials Area =================-->

@endsection
