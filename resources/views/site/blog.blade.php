@extends('site.master')
@section('main-content')

    <!--================Home Banner Area =================-->
    <section class="home_banner_area blog_banner">
        <div class="banner_inner d-flex align-items-center">
            <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
            <div class="container">
                <div class="blog_b_text text-center">
                    <h2>با شما همراهیم</h2>
                    <p>از جدیدترین مطالب آموزشی بهره مند شوید</p>
                    <a class="white_bg_btn" href="#">بیشتر ببینید</a>
                </div>
            </div>
        </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!--================Blog Categorie Area =================-->
    <section class="blog_categorie_area">
        <div class="container">
            <div class="row">
                @foreach($categories as $category)
                <div class="col-lg-4">
                    <div class="categories_post">
                        <img src="{{asset('site/img/thumbb2014102115377972.gif')}}" alt="post">
                        <div class="categories_details">
                            <div class="categories_text">
                                <a href="blog-details.html"><h5>{{$category->title}}</h5></a>
                                <div class="border_line"></div>
                                <p>{{$category->body}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--================Blog Categorie Area =================-->

    <!--================Blog Area =================-->
    <section class="blog_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog_left_sidebar">
                        @foreach($posts as $post)
                        <article class="row blog_item">
                            <div class="col-md-3">
                                <div class="blog_info text-right">
                                    <div class="post_tag">
                                        @foreach($categories as $category)
                                        <a href="#">{{$category->title}},</a>
                                        @endforeach
                                    </div>
                                    <ul class="blog_meta list" dir="ltr">
                                        <li><a href="#" >رضا شهریاری<i class="lnr lnr-user"></i></a></li>
                                        <li><a href="#" >  بهمن ۱۳۹۷<i class="lnr lnr-calendar-full"></i></a></li>
                                        <li><a href="#" >بازدید ۲ میلیون <i class="lnr lnr-eye"></i></a></li>
                                        <li><a href="#" >  کامنت ۶ عدد <i class="lnr lnr-bubble"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="blog_post">
                                    <img src="{{asset('uploads/'.$post->image)}}" alt="">
                                    <div class="blog_details">
                                        <a href="single-blog.html"><h2>{{$post->title}}</h2></a>
                                        <p>{{$post->body}}</p>
                                        <a href="single-blog.html" class="white_bg_btn">ادامه مطلب</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                        @endforeach

                        <nav class="blog-pagination justify-content-center d-flex">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Previous">
		                                    <span aria-hidden="true">
		                                        <span class="lnr lnr-chevron-right"></span>
		                                    </span>
                                    </a>
                                </li>
                                <li class="page-item"><a href="#" class="page-link">۰۱</a></li>
                                <li class="page-item active"><a href="#" class="page-link">۰۲</a></li>
                                <li class="page-item"><a href="#" class="page-link">۰۳</a></li>
                                <li class="page-item"><a href="#" class="page-link">۰۴</a></li>
                                <li class="page-item"><a href="#" class="page-link">۰۹</a></li>
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Next">
		                                    <span aria-hidden="true">
		                                        <span class="lnr lnr-chevron-left"></span>
		                                    </span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">

                        <aside class="single_sidebar_widget post_category_widget">
                            <h4 class="widget_title">دسته بندی پست ها</h4>
                            <ul class="list cat-list">
                                @foreach($categories as $category)
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>{{$category->title}}</p>
                                        <p>{{$category->posts->count()}}</p>
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                            <div class="br"></div>
                        </aside>


                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->



@endsection
