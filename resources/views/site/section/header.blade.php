<!doctype >
<html lang="fa">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img/favicon.png" type="image/png">
    <title>private site</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('site/css/bootstrap-rtl.min.css')}}">
    <link rel="stylesheet" href="{{asset('site/vendors/linericon/style.css')}}">
    <link rel="stylesheet" href="{{asset('site/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('site/vendors/owl-carousel/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('site/vendors/lightbox/simpleLightbox.css')}}">
    <link rel="stylesheet" href="{{asset('site/vendors/nice-select/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('site/vendors/animate-css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('site/vendors/popup/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('site/vendors/flaticon/flaticon.css')}}">
    <!-- main css -->
    <link rel="stylesheet" href="{{asset('site/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('site/css/responsive.css')}}">
</head>
<body>

<!--================Header Menu Area =================-->
<header class="header_area">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container box_1620">
                <!-- Brand and toggle get grouped for better mobile display -->
                <b><a class="navbar-brand " href="{{route('home')}}" style="color: white;">آشناشو</a></b>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent" >
                    <ul class="nav navbar-nav menu_nav mr-auto"  >
                        <li class="nav-item active"><a class="nav-link" href="{{route('home')}}">خانه</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('about')}}">درباره ما</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('offer')}}">خدمات</a></li>
                        <li class="nav-item submenu dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">صفحه ها</a>
                            <ul class="dropdown-menu" >
                                <li class="nav-item"><a class="nav-link txt-alg-hd" href="{{route('project')}}">پروژه ها</a></li>
                            </ul>
                        </li>
                        <li class="nav-item submenu dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="margin-left:30px;" >وبلاگ</a>
                            <ul class="dropdown-menu "  >
                                <li class="nav-item"><a class="nav-link txt-alg-hd" href="{{route('blog')}}" >وبلاگ</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="{{route('contact')}}"  >تماس با ما</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
<!--================Header Menu Area =================-->
