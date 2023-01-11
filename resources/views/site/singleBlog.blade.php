@extends('site.master')
@section('main-content')

    <section class="banner_area">
        <div class="box_1620">
            <div class="banner_inner d-flex align-items-center">
                <div class="container">
                    <div class="banner_content text-center">
                        <h2>جزییات وبلاگ</h2>
                        <div class="page_link">
                            <a href="index.html">خانه</a>
                            <a href="blog.html" style="margin-left:30px ;">وبلاگ</a>
                            <a href="single-blog.html">جزییات وبلاگ</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!--================Blog Area =================-->
    <section class="blog_area single-post-area p_120">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 posts-list">
                    <div class="single-post row">
                        <div class="col-lg-12">
                            <div class="feature-img">
                                <img class="img-fluid" src="{{asset('site/img/blog/feature-img1.jpg')}}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-3  col-md-3">
                            <div class="blog_info text-right">
                                <div class="post_tag">
                                    <a href="#">غدا،</a>
                                    <a class="active" href="#">تکنولوژی,</a>
                                    <a href="#">سیاست، </a>
                                    <a href="#">زندگی</a>
                                </div>
                                <ul class="blog_meta list" dir="ltr">
                                    <li><a href="#" >محمد محمدی<i class="lnr lnr-user"></i></a></li>
                                    <li><a href="#" >  بهمن ۱۳۹۷<i class="lnr lnr-calendar-full"></i></a></li>
                                    <li><a href="#" >بازدید ۲ میلیون <i class="lnr lnr-eye"></i></a></li>
                                    <li><a href="#" >  کامنت ۶ عدد <i class="lnr lnr-bubble"></i></a></li>
                                </ul>
                                <ul class="social-links" dir="ltr">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-github"></i></a></li>
                                    <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-9 blog_details">
                            <h2>زیبایی های طبیعت در یک تصویر از زندگی</h2>
                            <p class="excert">
                                قدردانی از نعمت‌هایی که دارید، برای داشتن زندگی زیبا یک ضرورت است. اگر از کل فهرست فقط و فقط می‌توانید یک مورد را رعایت کنید،‌ همین مورد را انتخاب کنید. شکرگزاری نسبت به داشته‌هایتان کلید زندگی زیباست. وقتی که در شرایط سختِ زندگی شکرگزار نعمت‌ها باشید، زندگی‌تان شادتر می‌شود و احساس آرامش بیشتری خواهید داشت. این امر نه‌تنها زندگی شما، بلکه زندگی اطرافیان‌تان را هم زیباتر می‌کند.
                            </p>
                            <p>
                                کثر ما نسبت به خود دیدگاهی داریم. ولی کمتر کسی وجود دارد که خود را به‌طور دقیق بشناسد. «خودشناسی» برای داشتن یک زندگی فوق‌العاده بسیار ضروری است. برای شناختن خود باید نگاهی دقیق به خودتان بیندازید. چیزهایی را که سال‌ها انکار کرده‌اید یا ندیده‌اید، ببینید. خودشناسی به شما کمک می‌کند تا علایق، آرزوها، ترس‌ها و چیزهایی که آرامش را از شما سلب کرده‌اند، بهتر بشناسید. این کار شاید در نگاه اول آسان به نظر بیاید، ولی به این آسانی هم نیست
                            </p>
                            <p>
                                اگر باور دارید یک زندگی زیبا برای شما وجود دارد، وقت آن است که تغییراتی در زندگی‌تان ایجاد کنید. اگر کارهای قبلی را تکرار کنید، نتایج قبلی را به‌دست می‌آورید. کمی زمان می‌برد تا بفهمید چه چیزی در زندگی‌تان کم است یا چه چیزهایی را باید از زندگی‌تان حذف کنید.برای مثال اگر می‌خواهید هدف زندگی‌تان را پیدا کنید، بهتر است به جای وقت گذراندن با افرادی که شما را به عقب می‌رانند،‌ بیشتر با افرادی وقت بگذرانید که الهام‌بخش‌تان هستند
                            </p>
                        </div>
                        <div class="col-lg-12">
                            <div class="quotes">
                                بخشیدن بیش از اینکه باعث آسودگی خاطر دیگران شود، باعث آرامش خودتان می‌شود. بخشیدن دیگران استرس و فشاری را که بر روی‌تان قرار دارد، از بین می‌برد و به شما حس آسودگی می‌دهد. اگر اسیر خشم، کج‌خلقی و رنج‌ شوید، اینها خیلی زود شما را از داخل می‌خورند. به مرور در زندان احساسات خود اسیر می‌شوید و صدمه می‌بینید. به همین دلایل باید احساسات منفی‌تان را رها کنید و در مسیر داشتن زندگی زیبا گام بردارید.
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <img class="img-fluid" src="{{asset('site/img/blog/post-img1.jpg')}}" alt="">
                                </div>
                                <div class="col-6">
                                    <img class="img-fluid" src="{{asset('site/img/blog/post-img2.jpg')}}" alt="">
                                </div>
                                <div class="col-lg-12 mt-25">
                                    <p>
                                        اگر نسبت به مسائل مختلف ذهنی بسته و بدون انعطاف داشته باشید، شانس کمی برای تغییر و پیشرفت خواهید داشت، اما اگر ذهن‌تان باز و آماده‌ی پذیرفتن مسائل جدید باشد، راحت‌تر می‌توانید با مسائل و اتفاقات مختلف روبه‌رو شوید و فشار و استرس کمتری را تجربه خواهید کرد. با این طرز تفکر می‌توانید از اتفاقات پیشِ رو لذت ببرید و زندگی زیباتری را تجربه کنید.
                                    </p>
                                    <p>
                                        زندگی می‌تواند شبیه یک ترن هوایی باشد. در زندگی گاهی سربالایی و گاهی سرازیری وجود دارد. بعضی اتفاقات باعث سربلندی و شادی‌تان می‌شوند و بعضی اتفاقات احساس شکست و ناامیدی را به شما منتقل می‌کنند. وقتی که ما نسبت به دیگران و اتفاقات پیش رو انتظار بهترین‌ها را داشته باشیم.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="navigation-area">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">

                                <div class="arrow">
                                    <a href="#"><span class="lnr text-white lnr-arrow-right"></span></a>
                                </div>
                                <div class="detials" style="margin-right:10px ;">
                                    <p>پست قبلی</p>
                                    <a href="#" style="float: left;"><h4>دنیا علیزاده</h4></a>
                                </div>
                                <div class="thumb">
                                    <a href="#"><img class="img-fluid" src="{{asset('site/img/blog/prev.jpg')}}" alt=""></a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center" dir="ltr">
                                <div class="detials">
                                    <p>پست بعدی</p>
                                    <a href="#"><h4>آرمیتا دنیوی</h4></a>
                                </div>
                                <div class="arrow">
                                    <a href="#"><span class="lnr text-white lnr-arrow-left"></span></a>
                                </div>
                                <div class="thumb">
                                    <a href="#"><img class="img-fluid" src="{{asset('site/img/blog/next.jpg')}}" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="comments-area" >
                        <h4>  ۵ کامنت</h4>
                        <div class="comment-list">
                            <div class="single-comment justify-content-between d-flex">
                                <div class="user justify-content-between d-flex">
                                    <div class="thumb cm-padd">
                                        <img src="{{asset('site/img/blog/c1.jpg')}}" alt="">
                                    </div>
                                    <div class="desc">
                                        <h5><a href="#">مینا عابدی</a></h5>
                                        <p class="date">بهمن ۱۳۹۸ </p>
                                        <p class="comment">
                                            مطالب زیبا آموزنده و عالیه ممنون،
                                        </p>
                                    </div>
                                </div>
                                <div class="reply-btn">
                                    <a href="" class="btn-reply text-uppercase" style="text-align: left;">پاسخ</a>
                                </div>
                            </div>
                        </div>
                        <div class="comment-list ">
                            <div class="single-comment justify-content-between d-flex">
                                <div class="user justify-content-between d-flex">
                                    <div class="thumb cm-padd">
                                        <img src="{{asset('site/img/blog/c2.jpg')}}" alt="">
                                    </div>
                                    <div class="desc">
                                        <h5><a href="#">احمد محمدی</a></h5>
                                        <p class="date">بهمن ۱۳۹۸ </p>
                                        <p class="comment">
                                            دنیای اطرافو هر چه دقیق تر ببینم زیبا تره.
                                        </p>
                                    </div>
                                </div>
                                <div class="reply-btn">
                                    <a href="" class="btn-reply text-uppercase" style="text-align: left;" >پاسخ</a>
                                </div>
                            </div>
                        </div>
                        <div class="comment-list">
                            <div class="single-comment justify-content-between d-flex">
                                <div class="user justify-content-between d-flex">
                                    <div class="thumb cm-padd">
                                        <img src="{{asset('site/img/blog/c3.jpg')}}" alt="">
                                    </div>
                                    <div class="desc">
                                        <h5><a href="#">زهرا فاخر</a></h5>
                                        <p class="date">بهمن ۱۳۹۸ </p>
                                        <p class="comment">
                                            مطالب عالی و زیبا و دوست داشتنیه ادامه بدید
                                        </p>
                                    </div>
                                </div>
                                <div class="reply-btn">
                                    <a href="" class="btn-reply text-uppercase" style="text-align: left;">پاسخ</a>
                                </div>
                            </div>
                        </div>
                        <div class="comment-list">
                            <div class="single-comment justify-content-between d-flex">
                                <div class="user justify-content-between d-flex">
                                    <div class="thumb cm-padd">
                                        <img src="{{asset('site/img/blog/c4.jpg')}}" alt="">
                                    </div>
                                    <div class="desc">
                                        <h5><a href="#">غزل رنجبر</a></h5>
                                        <p class="date">بهمن ۱۳۹۸ </p>
                                        <p class="comment">
                                            آره واقع این سایت میتونه خیلی به آدم کمک کنه
                                        </p>
                                    </div>
                                </div>
                                <div class="reply-btn">
                                    <a href="" class="btn-reply text-uppercase" style="text-align:left ;">پاسخ</a>
                                </div>
                            </div>
                        </div>
                        <div class="comment-list">
                            <div class="single-comment justify-content-between d-flex">
                                <div class="user justify-content-between d-flex">
                                    <div class="thumb cm-padd">
                                        <img src="{{asset('site/img/blog/c5.jpg')}}" alt="">
                                    </div>
                                    <div class="desc" >
                                        <h5><a href="#">رضا فاخر</a></h5>
                                        <p class="date">بهمن ۱۳۹۸ </p>
                                        <p class="comment">
                                            بهتر از این زندگی هم هست آخه مگر میشود
                                        </p>
                                    </div>
                                </div>
                                <div class="reply-btn">
                                    <a href="" class="btn-reply text-uppercase" style="float: left;">پاسخ</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="comment-form">
                        <h4>ثبت بازخورد</h4>
                        <form>
                            <div class="form-group form-inline">
                                <div class="form-group col-lg-6 col-md-6 name">
                                    <input type="text" class="form-control" id="name" placeholder="نام " onfocus="this.placeholder = ''" onblur="this.placeholder = 'نام را وارد کنید'">
                                </div>
                                <div class="form-group col-lg-6 col-md-6 email" >
                                    <input type="email" class="form-control" id="email" placeholder="ایمیل" onfocus="this.placeholder = ''" onblur="this.placeholder = 'ایمیل خود را وارد کنید'"  >
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="subject" placeholder="موضوع" onfocus="this.placeholder = ''" onblur="this.placeholder = 'موضوع'">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control mb-10" rows="5" name="message" placeholder="متن پیام" onfocus="this.placeholder = ''" onblur="this.placeholder = 'پیام'" required=""></textarea>
                            </div>
                            <a href="#" class="primary-btn submit_btn">ارسال نظر</a>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">


                        <aside class="single_sidebar_widget post_category_widget">
                            <h4 class="widget_title">دسته بندی پست ها</h4>
                            <ul class="list cat-list">
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>تکنولوژی</p>
                                        <p>۳۷</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>زندگی</p>
                                        <p>۲۴</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>مد</p>
                                        <p>۵۹</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>هنر</p>
                                        <p>۲۹</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>غذا</p>
                                        <p>۱۵</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>معماری</p>
                                        <p>۰۹</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>ماجراجویی</p>
                                        <p>۴۴</p>
                                    </a>
                                </li>
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
