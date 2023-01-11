@extends('site.master')
@section('main-content')

    <!--================Home Banner Area =================-->
    <section class="home_banner_area">
        <div class="container box_1620">
            <div class="banner_inner d-flex align-items-center">
                <div class="banner_content">
                    <div class="media">
                        @foreach($abouts as $about)
                        <div class="d-flex" style="padding-right: 0px!important;">
                            <img width="500px" src="{{asset('uploads/'. $about->image)}}" alt="">
                        </div>
                        <div class="media-body">

                            <div class="personal_text txt_al_ps">
                                <h6>سلام دوستان </h6>
                                <h3>{{$about->name}} </h3>
                                <h4>{{$about->title}} </h4>
                                <p>{{$about->body}}</p>
                                <ul class="list basic_info" style="text-align: right;">
                                    <li><a href="#"><i class="lnr lnr-calendar-full"></i><span class="spn_ic">{{$about->Date_of_birth}}</span></a>
                                    </li>
                                    <li><a href="#"><i class="lnr lnr-phone-handset"></i><span class="spn_ic"> {{$about->phone_number}}</span></a>
                                    </li>
                                    <li><a href="#"><i class="lnr lnr-envelope"></i> <span class="spn_ic">{{$about->email}}</span></a>
                                    </li>
                                    <li><a href="#"><i class="lnr lnr-home"></i><span class="spn_ic">{{$about->address}}</span></a>
                                    </li>
                                </ul>

                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!--================Welcome Area =================-->
    <section class="welcome_area p_120">
        <div class="container">
            <div class="row welcome_inner">
                <div class="col-lg-6">
                    <div class="welcome_text">
                        <h4>درباره من</h4>
                        <p>یک شخصیت کم حرف دارم و به برنامه نویسی علاقه خیلی شدید دارم و لذت بخش ترین کار برای من طراحی
                            صفحات وب و ترجمه صفحات وب هست و هر روز در حال یادگیری بیشتر در زمینه برنامه نویسی هستم</p>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="wel_item">
                                    <i class="lnr lnr-database"></i>
                                    <h4>100 درصد</h4>
                                    <p>علاقه به برنامه نویسی</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="wel_item">
                                    <i class="lnr lnr-book"></i>
                                    <h4>1400</h4>
                                    <p>استارت برنامه نویسی</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="wel_item">
                                    <i class="lnr lnr-users"></i>
                                    <h4>80 درصد</h4>
                                    <p>تجربه از طراحی وب</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="tools_expert">
                        <div class="skill_main">
                            <div class="skill_item">
                                <h4>اچ تی ام ال <span class="counter">90</span>%</h4>
                                <div class="progress_br">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="90"
                                             aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="skill_item">
                                <h4>سی اس اس <span class="counter">90</span>%</h4>
                                <div class="progress_br">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="90"
                                             aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="skill_item">
                                <h4>پی اچ پی<span class="counter">95</span>%</h4>
                                <div class="progress_br">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="95"
                                             aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="skill_item">
                                <h4>لاراول <span class="counter">78</span>%</h4>
                                <div class="progress_br">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="78"
                                             aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="skill_item">
                                <h4>اسکچ <span class="counter">0</span>%</h4>
                                <div class="progress_br">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0"
                                             aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Welcome Area =================-->

    <!--================Testimonials Area =================-->
    <section class="testimonials_area p_120">
        <div class="container">
            <div class="main_title">
                <h2>رضایت کاربران</h2>
                <p>شما میتوانید در این قسمت ایده ها و نظرات کسانی را که با سایت ما آشنا شده اند را بخوانید و شما نیز
                    نظرات خود را درباره ی موفقیت های خود بگذارید</p>
            </div>
            <div class="testi_inner">
                <div class="testi_slider owl-carousel">
                    @foreach($comments as $comment)
                    <div class="item">
                        <div class="testi_item" dir="rtl">
                            <p>{{$comment->body}}</p>
                            <h4>{{$comment->name}}</h4>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star-half-o flip_H"></i></a>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>
    <!--================End Testimonials Area =================-->

    <!--================add comment =================-->
    <section style="margin-top: 30px; margin-bottom: 30px;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="comment-form">
                        <h4>ثبت بازخورد</h4>
                        <form method="post" action="{{route('comment')}}">
                            @csrf
                            <div class="form-group form-inline">
                                <div class="form-group col-lg-6 col-md-6 name">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="نام " onfocus="this.placeholder = ''" onblur="this.placeholder = 'نام را وارد کنید'">
                                </div>
                                <div class="form-group col-lg-6 col-md-6 email" >
                                    <input type="email" class="form-control" id="email" name="email" placeholder="ایمیل" onfocus="this.placeholder = ''" onblur="this.placeholder = 'ایمیل خود را وارد کنید'"  >
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="title" name="title" placeholder="موضوع" onfocus="this.placeholder = ''" onblur="this.placeholder = 'موضوع'">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control mb-10" rows="5" name="body" id="body" placeholder="متن پیام" onfocus="this.placeholder = ''" onblur="this.placeholder = 'پیام'" required=""></textarea>
                            </div>
                            <button class="primary-btn submit_btn" type="submit">ارسال نظر</button>
                        </form>
                    </div>

                </div>

            </div>
        </div>
    </section>
    <!--================end add comment =================-->


@endsection
