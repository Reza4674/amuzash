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
    <section class="welcome_area p_120"  >
        <div class="container">
            <div class="row welcome_inner">
                <div class="col-lg-6">
                    <div class="welcome_text" >
                        <h4>درباره من</h4>
                        <p>یک شخصیت کم حرف دارم و به برنامه نویسی علاقه خیلی شدید دارم و لذت بخش ترین کار برای من طراحی صفحات وب و ترجمه صفحات وب هست و هر روز در حال یادگیری بیشتر در زمینه برنامه نویسی هستم</p>
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
                                        <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="skill_item">
                                <h4>سی اس اس <span class="counter">90</span>%</h4>
                                <div class="progress_br">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="skill_item">
                                <h4>پی اچ پی<span class="counter">95</span>%</h4>
                                <div class="progress_br">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="skill_item">
                                <h4>لاراول <span class="counter">78</span>%</h4>
                                <div class="progress_br">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="skill_item">
                                <h4>اسکچ <span class="counter">0</span>%</h4>
                                <div class="progress_br">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
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

    <!--================My Tabs Area =================-->
    <section class="mytabs_area p_120">
        <div class="container">
            <div class="tabs_inner">
                <ul class="nav nav-tabs" id="myTab" role="tablist">

                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">تحصیلات من</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <ul class="list" >
                            <li>
                                <span></span>
                                <div class="media">
                                    <div class="d-flex tabs-s">
                                        <p> بهمن ۱۳۹۸</p>
                                    </div>
                                    <div class="media-body">
                                        <h4>وب روبیک</h4>
                                        <p>مدیریت طراحی وب<br />استان فارس ،  شیراز</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <span></span>
                                <div class="media">
                                    <div class="d-flex tabs-s">
                                        <p>دی ۱۳۹۸</p>
                                    </div>
                                    <div class="media-body">
                                        <h4>وب روبیک</h4>
                                        <p>مدیریت طراحی وب <br />استان فارس ، شیراز</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <span></span>
                                <div class="media">
                                    <div class="d-flex tabs-s">
                                        <p>بهمن ۱۳۹۸</p>
                                    </div>
                                    <div class="media-body">
                                        <h4>وب روبیک</h4>
                                        <p>مدیریت طراحی وب <br />استان فارس ، شیراز</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <ul class="list" >
                            <li>
                                <span></span>
                                <div class="media">
                                    <div class="d-flex tabs-s">
                                        <p>بهمن ۱۳۹۷</p>
                                    </div>
                                    <div class="media-body">
                                        <h4>وب روبیک</h4>
                                        <p>مدیریت طراحی وب <br />استان فارس ، شیراز</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <span></span>
                                <div class="media">
                                    <div class="d-flex tabs-s">
                                        <p>بهمن ۱۳۹۸</p>
                                    </div>
                                    <div class="media-body">
                                        <h4>وب روبیک</h4>
                                        <p>مدیریت طراحی وب <br />استان فارس ، شیراز</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <span></span>
                                <div class="media">
                                    <div class="d-flex tabs-s">
                                        <p>بهمن ۱۳۹۸ </p>
                                    </div>
                                    <div class="media-body">
                                        <h4>وب روبیک</h4>
                                        <p>مدیریت طراحی وب <br />استان فارس ، شیراز</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End My Tabs Area =================-->

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

    <!--================Home Gallery Area =================-->
    <section class="home_gallery_area p_120">
        <div class="container">
            <div class="main_title">
                <h2>آخرین پروژه های ما</h2>
                <p>با جدیدترین پروژه های ایجاد شده توسط ما بیشتر آشنا شوید</p>
            </div>
        </div>
        <div class="container">
            <div class="gallery_f_inner row imageGallery1">
                @foreach($projects as $project)
                <div class="col-lg-4 col-md-4 col-sm-6 brand manipul design print">
                    <div class="h_gallery_item">
                        <div class="g_img_item">
                            <img class="img-fluid" src="{{asset('uploads/'.$project->image)}}" alt="">
                            <a class="light" href="{{asset('site/img/gallery/project-1.jpg')}}"><img src="{{asset('site/img/gallery/icon.png')}}" alt=""></a>
                        </div>
                        <div class="g_item_text">
                            <h4>{{$project->title}}</h4>
                            <p>{{$project->body}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="more_btn">
                <a class="main_btn" href="{{route('project')}}">پروژه های بیشتر</a>
            </div>
        </div>
    </section>
    <!--================End Home Gallery Area =================-->

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
