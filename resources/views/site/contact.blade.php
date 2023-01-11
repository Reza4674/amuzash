@extends('site.master')
@section('main-content')

    <!--================Home Banner Area =================-->
    <section class="banner_area">
        <div class="box_1620">
            <div class="banner_inner d-flex align-items-center">
                <div class="container">
                    <div class="banner_content text-center">
                        <h2>تماس با ما</h2>
                        <div class="page_link">
                            <a href="{{route('home')}}">خانه</a>
                            <a href="{{route('contact')}}">تماس با ما</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Home Banner Area =================-->
    <!--================Contact Area =================-->
    <section class="contact_area p_120">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="contact_info">
                        @foreach($abouts as $about)
                        <div class="info_item">
                            <i class="lnr lnr-home"></i>
                            <h6>{{$about->address}}</h6>
                        </div>
                        <div class="info_item mt-5">
                            <i class="lnr lnr-phone-handset"></i>
                            <h6><a href="#">{{$about->phone_number}}</a></h6>
                            <p>شنبه تا پنجشنبه ساعت ۹  تا ۱۴</p>
                        </div>
                        <div class="info_item mt-3">
                            <i class="lnr lnr-envelope"></i>
                            <h6><a href="#">{{$about->email}}</a></h6>
                            <p>نظرات خود را برای ما ارسال کنید</p>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-9">
                    <form class="row contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="name" name="name" placeholder="نام خود را وادر کنید">
                            </div>
                            <div class="form-group">
                                <input style="text-align: right;" type="email" class="form-control" id="email" name="email" placeholder="آدرس ایمیل خود را وارد کنید">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="subject" name="subject" placeholder="موضوع را وارد کنید">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <textarea class="form-control" name="message" id="message" rows="1" placeholder="نظر خد را وارد کنید"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12 text-right">
                            <button type="submit" value="submit" class="btn submit_btn" style="float: left;" >ارسال دیدگاه</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--================Contact Area =================-->

@endsection
