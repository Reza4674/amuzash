@extends('site.master')
@section('main-content')

    <section class="banner_area">
        <div class="box_1620">
            <div class="banner_inner d-flex align-items-center">
                <div class="container">
                    <div class="banner_content text-center">
                        <h2>پروژه ها</h2>
                        <div class="page_link">
                            <a href="{{route('home')}}">خانه</a>
                            <a href="{{route('project')}}">پروژه ها</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Home Banner Area =================-->

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
        </div>
    </section>
    <!--================End Home Gallery Area =================-->


@endsection
