<header>
{{--    <a href="{{asset(App::getLocale())}}"> <div class="logo">--}}
{{--       <img src="{{asset('site/img/itlogo.png')}}" alt="">--}}
{{--    </div></a>--}}


    <!-- preloader Start -->
    <div id="preloader">
        <div id="status_1">
            <img src="{{asset('front/images/header/loader.gif')}}" id="preloader_image" alt="loader">
        </div>
    </div>
    <div class="ne_top_header_main_wrapper">
        <div class="container">
            <div class="ne_left_sec_main_wrapper">
                <div id="day_and_time">
                    <p id="date"></p>
                </div>
                <div class="ne_top_about_btn hidden-xs"> <a href="{{asset(app()->getLocale().'/contact')}}">contact us</a></div>
            </div>
            <div class="ne_right_sec_main_wrapper">
                <ul>
                    <li class="hidden-xs"><a href="#">Subscribe</a>
                    </li>
                    <li class="hidden-xs"><a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li class="hidden-xs"><a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li class="hidden-xs"><a href="#"><i class="fa fa-linkedin"></i></a>
                    </li>
{{--                    <li class="hidden-xs"><a href="login.html">login &nbsp;<i class="fa fa-user"></i></a></li>--}}
                    <li class="hidden-xs">

                                <div class="lang">
                                    <?php $i = 0;  ?>
                                    @foreach(config('lang') as $key=>$item)
                                        @if($item['code'] != app()->getLocale())
                                            <?php $i++;  ?>
                                            <a href="{{Route("switchLang",$item['code'])}}"  class="montserat">
                                                {{$item['nam']}} @if($i == 1) / @endif
                                            </a>
                                        @endif
                                    @endforeach
                                </div>

                    </li>
                    <li><a href="#" class="second-nav-toggler mee">menu &nbsp;<i class="flaticon-text"></i></a>
                    </li>
                </ul>
                <div id="mobile-nav" data-prevent-default="true" data-mouse-events="true">
                    <div class="mobail_nav_overlay"></div>
                    <div class="mobile-nav-box">
                        <div class="mobile-logo">
                            <a href="index.html" class="mobile-main-logo">
                                <img src="{{asset('front/images/header/logo4.png')}}" alt="logo" class="img-responsiv">
                            </a> <a href="#" class="manu-close"><i class="fa fa-times"></i></a>
                        </div>
                        <ul class="mobile-list-nav">
                            <li><a href="#">WORLD NEWS</a>
                            </li>
                            <li><a href="#">SPORT NEWS</a>
                            </li>
                            <li><a href="#">MUSIC NEWS</a>
                            </li>
                            <li><a href="#">BUSINESS NEWS</a>
                            </li>
                            <li><a href="#">TECHNOLOGICAL</a>
                            </li>
                            <li><a href="#">TRAVEL NEWS</a>
                            </li>
                            <li><a href="#">MECIAL NEWS</a>
                            </li>
                            <li><a href="#">WORLD NEWS</a>
                            </li>
                            <li><a href="#">SPORT NEWS</a>
                            </li>
                            <li><a href="#">MUSIC NEWS</a>
                            </li>
                            <li><a href="#">BUSINESS NEWS</a>
                            </li>
                            <li><a href="#">TECHNOLOGICAL</a>
                            </li>
                            <li><a href="#">TRAVEL NEWS</a>
                            </li>
                            <li><a href="#">MECIAL NEWS</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- prs navigation Start -->
    <div class="prs_navigation_main_wrapper">
        <div class="container">
            <div class="serach-header">
                <div class="searchbox">
                    <button class="close">×</button>
                    <form>
                        <input type="search" placeholder="Search …">
                        <button type="submit"><i class="fa fa-search"></i>
                        </button>
                    </form>
                </div>
            </div>
            <div class="prs_navi_left_main_wrapper">
                <div class="prs_logo_main_wrapper">
                    <a href="{{asset('/')}}">
                        <img src="{{asset('front/images/header/logo.png')}}" alt="logo" class="img-responsive hidden-xs">
                        <img src="{{asset('front/images/header/logo.png')}}" alt="logo" class="visible-xs">
                    </a>
                </div>
                <div class="prs_menu_main_wrapper">
                    <nav class="navbar navbar-default">
                        <div id="dl-menu" class="xv-menuwrapper responsive-menu">
                            <button class="dl-trigger">
                                <img src="{{asset('front/images/header/bars.png')}}" alt="bar_png">
                            </button>
                            <div class="clearfix"></div>
                            <div class="searchd"><i class="fa fa-search"></i>
                            </div>
                            <ul class="dl-menu">
{{--                                <li class="parent megamenu"><a href="{{asset('/')}}" class="effect_nav">Գլխավոր</a></li>--}}
                                <li class="parent megamenu"><a href="{{asset(app()->getLocale().'/service')}}" class="effect_nav">Բեռնակիրներ</a></li>
                                <li class="parent megamenu"><a href="{{asset(app()->getLocale().'/service')}}" class="effect_nav">Գները</a></li>
                                <li class="parent megamenu"><a href="{{asset('/')}}" class="effect_nav">Թափուր աշխատատեղեր</a></li>
                                <li class="parent megamenu"><a href="{{asset('/')}}" class="effect_nav">Ընկերություն</a></li>
                                @if(isset($category) && !$category->isEmpty())
                                @foreach($category as $cat)
{{--                                        <li class="parent megamenu"><a href="#" class="effect_nav">{{$cat->translate[0]->title}}</a>--}}
{{--                                            <ul class="lg-submenu">--}}
{{--                                                <li><a>Post Samples</a>--}}
{{--                                                    <ul class="lg-submenu">--}}
{{--                                                        @if($cat->submenu->isEmpty())--}}
{{--                                                            @foreach($category as $cat)--}}
{{--                                                                @dd($cat->submenu[0]->translate[0]->title,$cat)--}}
{{--                                                            @if(isset($cat->submenu[0]->translate[0]->title))--}}
{{--                                                                <li class="ar_left"><i class="fa fa-newspaper-o hidden-xs"></i><a href="#">--}}
{{--                                                                        {{isset($cat->submenu[0]->translate[0]->title)?$cat->submenu[0]->translate[0]->title:' '}}--}}
{{--                                                                    </a>--}}
{{--                                                                    @endif--}}
{{--                                                            @endforeach--}}
{{--                                                        @endif--}}
{{--                                                        </li>--}}
{{--                                                    </ul>--}}
{{--                                                </li>--}}
{{--                                            </ul>--}}
{{--                                        </li>--}}
                                        <li class="parent"><a href="#" class="effect_nav">{{$cat->translate[0]->title}}</a>
                                            <ul class="lg-submenu">
                                                <li class="parent"><a href="#">Blog</a>
                                                    <ul class="lg-submenu">
                                                        <li><a href="{{asset(app()->getLocale().'/blog')}}">Blog-Category</a>
                                                        </li>
                                                        <li><a href="{{asset(app()->getLocale().'/blog_single')}}">Blog-Single</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="parent"><a href="#">Gallery</a>
                                                    <ul class="lg-submenu">
                                                        <li><a href="{{asset(app()->getLocale().'/gallery')}}">Gallery</a>
                                                        </li>
                                                        <li><a href="{{asset(app()->getLocale().'/gallery_single')}}">Gallery-Single</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li><a href="{{asset(app()->getLocale().'/404')}}">404_error</a>
                                                </li>
                                                <li><a href="{{asset(app()->getLocale().'/life_style')}}">Life-Style</a>
                                                </li>
                                                <li><a href="{{asset(app()->getLocale().'/sport')}}">Sport</a>
                                                </li>
                                                <li><a href="{{asset(app()->getLocale().'/technology')}}">Technology</a>
                                                </li>
                                                <li><a href="{{asset(app()->getLocale().'/author')}}">Author</a>
                                                </li>
                                                <li><a href="login.html">Login</a>
                                                </li>
                                                <li><a href="register.html">Register</a>
                                                </li>
{{--                                                @dd($cat)--}}
                                            @if(!$cat->submenu->isEmpty())
                                                    {{--                                                @foreach($category as $cat)--}}
                                                @foreach($cat->submenu as $sub)

                                                    @if(isset($sub->translate[0]->title))
                                                                <li><a href="#">
                                                                        {{isset($sub->translate[0]->title)?$sub->translate[0]->title:' '}}
                                                                    </a>
                                                            @endif
{{--                                                        @endforeach--}}
                                                    @endforeach
                                                @endif
                                            </ul>
                                        </li>
                                    @endforeach
                                @endif
{{--                                <li class="parent"><a href="#" class="effect_nav">pages</a>--}}
{{--                                    <ul class="lg-submenu">--}}
{{--                                        <li class="parent"><a href="#">Blog</a>--}}
{{--                                            <ul class="lg-submenu">--}}
{{--                                                <li><a href="{{asset(app()->getLocale().'/blog')}}">Blog-Category</a>--}}
{{--                                                </li>--}}
{{--                                                <li><a href="{{asset(app()->getLocale().'/blog_single')}}">Blog-Single</a>--}}
{{--                                                </li>--}}
{{--                                            </ul>--}}
{{--                                        </li>--}}
{{--                                        <li class="parent"><a href="#">Gallery</a>--}}
{{--                                            <ul class="lg-submenu">--}}
{{--                                                <li><a href="{{asset(app()->getLocale().'/gallery')}}">Gallery</a>--}}
{{--                                                </li>--}}
{{--                                                <li><a href="{{asset(app()->getLocale().'/gallery_single')}}">Gallery-Single</a>--}}
{{--                                                </li>--}}
{{--                                            </ul>--}}
{{--                                        </li>--}}
{{--                                        <li><a href="{{asset(app()->getLocale().'/404')}}">404_error</a>--}}
{{--                                        </li>--}}
{{--                                        <li><a href="{{asset(app()->getLocale().'/life_style')}}">Life-Style</a>--}}
{{--                                        </li>--}}
{{--                                        <li><a href="{{asset(app()->getLocale().'/sport')}}">Sport</a>--}}
{{--                                        </li>--}}
{{--                                        <li><a href="{{asset(app()->getLocale().'/technology')}}">Technology</a>--}}
{{--                                        </li>--}}
{{--                                        <li><a href="{{asset(app()->getLocale().'/author')}}">Author</a>--}}
{{--                                        </li>--}}
{{--                                        <li><a href="login.html">Login</a>--}}
{{--                                        </li>--}}
{{--                                        <li><a href="register.html">Register</a>--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
{{--                                </li>--}}







{{--                                <li class="parent megamenu"><a href="#" class="effect_nav">features</a>--}}
{{--                                    <ul class="lg-submenu">--}}
{{--                                        <li><a>Post Samples</a>--}}
{{--                                            <ul class="lg-submenu">--}}
{{--                                                <li class="ar_left"><i class="fa fa-newspaper-o hidden-xs"></i><a href="#">Parallax</a>--}}
{{--                                                </li>--}}
{{--                                                <li class="ar_left"><i class="fa fa-newspaper-o hidden-xs"></i><a href="#">Lightbox </a>--}}
{{--                                                </li>--}}
{{--                                                <li class="ar_left"><i class="fa fa-newspaper-o hidden-xs"></i><a href="#">Images </a>--}}
{{--                                                </li>--}}
{{--                                                <li class="ar_left"><i class="fa fa-newspaper-o hidden-xs"></i><a href="#">Video Post</a>--}}
{{--                                                </li>--}}
{{--                                                <li class="ar_left"><i class="fa fa-newspaper-o hidden-xs"></i><a href="#">Self Hosted </a>--}}
{{--                                                </li>--}}
{{--                                                <li class="ar_left"><i class="fa fa-newspaper-o hidden-xs"></i><a href="#">Self Hosted </a>--}}
{{--                                                </li>--}}
{{--                                                <li class="ar_left"><i class="fa fa-newspaper-o hidden-xs"></i><a href="#">SoundCloud</a>--}}
{{--                                                </li>--}}
{{--                                                <li class="ar_left"><i class="fa fa-newspaper-o hidden-xs"></i><a href="#">Google Map</a>--}}
{{--                                                </li>--}}
{{--                                            </ul>--}}
{{--                                        </li>--}}
{{--                                        <li><a>Reviews</a>--}}
{{--                                            <ul class="lg-submenu">--}}
{{--                                                <li class="ar_left"><i class="fa fa-newspaper-o hidden-xs"></i><a href="#">Stars</a>--}}
{{--                                                </li>--}}
{{--                                                <li class="ar_left"><i class="fa fa-newspaper-o hidden-xs"></i><a href="#">Points</a>--}}
{{--                                                </li>--}}
{{--                                                <li class="ar_left"><i class="fa fa-newspaper-o hidden-xs"></i><a href="#">Percent</a>--}}
{{--                                                </li>--}}
{{--                                                <li class="ar_left"><i class="fa fa-newspaper-o hidden-xs"></i><a href="#">Position</a>--}}
{{--                                                </li>--}}
{{--                                                <li class="ar_left"><i class="fa fa-newspaper-o hidden-xs"></i><a href="#">Position post</a>--}}
{{--                                                </li>--}}
{{--                                                <li class="ar_left"><i class="fa fa-newspaper-o hidden-xs"></i><a href="#">Position Custom</a>--}}
{{--                                                </li>--}}
{{--                                                <li class="ar_left"><i class="fa fa-newspaper-o hidden-xs"></i><a href="#">Best Reviews</a>--}}
{{--                                                </li>--}}
{{--                                            </ul>--}}
{{--                                        </li>--}}
{{--                                        <li><a>Shortcodes</a>--}}
{{--                                            <ul class="lg-submenu">--}}
{{--                                                <li class="ar_left"><i class="fa fa-newspaper-o hidden-xs"></i><a href="#">Boxes</a>--}}
{{--                                                </li>--}}
{{--                                                <li class="ar_left"><i class="fa fa-newspaper-o hidden-xs"></i><a href="#">Buttons</a>--}}
{{--                                                </li>--}}
{{--                                                <li class="ar_left"><i class="fa fa-newspaper-o hidden-xs"></i><a href="#">Columns</a>--}}
{{--                                                </li>--}}
{{--                                                <li class="ar_left"><i class="fa fa-newspaper-o hidden-xs"></i><a href="#">Social  </a>--}}
{{--                                                </li>--}}
{{--                                                <li class="ar_left"><i class="fa fa-newspaper-o hidden-xs"></i><a href="#">Tabs </a>--}}
{{--                                                </li>--}}
{{--                                                <li class="ar_left"><i class="fa fa-newspaper-o hidden-xs"></i><a href="#">Text Lists </a>--}}
{{--                                                </li>--}}
{{--                                                <li class="ar_left"><i class="fa fa-newspaper-o hidden-xs"></i><a href="#">Lightbox</a>--}}
{{--                                                </li>--}}
{{--                                                <li class="ar_left"><i class="fa fa-newspaper-o hidden-xs"></i><a href="#">Content </a>--}}
{{--                                                </li>--}}
{{--                                                <li class="ar_left"><i class="fa fa-newspaper-o hidden-xs"></i><a href="#">Audio and Video</a>--}}
{{--                                                </li>--}}
{{--                                            </ul>--}}
{{--                                        </li>--}}
{{--                                        <li><a>Page Templates</a>--}}
{{--                                            <ul class="lg-submenu">--}}
{{--                                                <li class="ar_left"><i class="fa fa-newspaper-o hidden-xs"></i><a href="#">Masonry </a>--}}
{{--                                                </li>--}}
{{--                                                <li class="ar_left"><i class="fa fa-newspaper-o hidden-xs"></i><a href="#">Media </a>--}}
{{--                                                </li>--}}
{{--                                                <li class="ar_left"><i class="fa fa-newspaper-o hidden-xs"></i><a href="#">Authors</a>--}}
{{--                                                </li>--}}
{{--                                                <li class="ar_left"><i class="fa fa-newspaper-o hidden-xs"></i><a href="#">Blog List </a>--}}
{{--                                                </li>--}}
{{--                                                <li class="ar_left"><i class="fa fa-newspaper-o hidden-xs"></i><a href="#">Best Reviews</a>--}}
{{--                                                </li>--}}
{{--                                                <li class="ar_left"><i class="fa fa-newspaper-o hidden-xs"></i><a href="#">Login Page </a>--}}
{{--                                                </li>--}}
{{--                                                <li class="ar_left"><i class="fa fa-newspaper-o hidden-xs"></i><a href="#">Sitemap Page</a>--}}
{{--                                                </li>--}}
{{--                                                <li class="ar_left"><i class="fa fa-newspaper-o hidden-xs"></i><a href="#">Tags</a>--}}
{{--                                                </li>--}}
{{--                                                <li class="ar_left"><i class="fa fa-newspaper-o hidden-xs"></i><a href="#">Timeline page</a>--}}
{{--                                                </li>--}}
{{--                                            </ul>--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
{{--                                </li>--}}
{{--                                <li class="parent megamenu"><a href="{{asset(app()->getLocale().'/sport')}}" class="effect_nav"> sport </a>--}}
{{--                                    <ul class="lg-submenu prs_navi_video_wrapper">--}}
{{--                                        <li class=" prs_vp_hover_overlay">--}}
{{--                                            <div class="ne_re_left_top_main_wrapper">--}}
{{--                                                <div class="ne_re_left_img_main_wrapper">--}}

{{--                                                    <img src="{{asset('front/images/content/bs1.jpg')}}" alt="img">--}}

{{--                                                    <h2>Bussiness</h2>--}}
{{--                                                </div>--}}
{{--                                                <div class="ne_re_left_img_cont_main_wrapper">--}}
{{--                                                    <h3><a href="#">Award of the year</a></h3>--}}
{{--                                                    <ul class="ne_re_social1_wrapper">--}}
{{--                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>--}}
{{--                                                        </li>--}}

{{--                                                    </ul>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </li>--}}
{{--                                        <li class=" prs_vp_hover_overlay">--}}
{{--                                            <div class="ne_re_left_top_main_wrapper">--}}
{{--                                                <div class="ne_re_left_img_main_wrapper">--}}
{{--                                                    <img src="{{asset('front/images/content/bs2.jpg')}}" alt="img">--}}
{{--                                                    <h2>technology</h2>--}}
{{--                                                </div>--}}
{{--                                                <div class="ne_re_left_img_cont_main_wrapper">--}}
{{--                                                    <h3><a href="#">Google vote-shifting</a></h3>--}}
{{--                                                    <ul class="ne_re_social1_wrapper">--}}
{{--                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 Nov, 2020</a>--}}
{{--                                                        </li>--}}

{{--                                                    </ul>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </li>--}}
{{--                                        <li class=" prs_vp_hover_overlay">--}}
{{--                                            <div class="ne_re_left_top_main_wrapper">--}}
{{--                                                <div class="ne_re_left_img_main_wrapper">--}}
{{--                                                    <img src="{{asset('front/images/content/bs3.jpg')}}" alt="img">--}}
{{--                                                    <h2>travel</h2>--}}
{{--                                                </div>--}}
{{--                                                <div class="ne_re_left_img_cont_main_wrapper">--}}
{{--                                                    <h3><a href="#">Tourism Dubai tourist</a></h3>--}}
{{--                                                    <ul class="ne_re_social1_wrapper">--}}
{{--                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 Feb, 2020</a>--}}
{{--                                                        </li>--}}

{{--                                                    </ul>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </li>--}}
{{--                                        <li class=" prs_vp_hover_overlay">--}}
{{--                                            <div class="ne_re_left_top_main_wrapper">--}}
{{--                                                <div class="ne_re_left_img_main_wrapper">--}}
{{--                                                    <img src="{{asset('front/images/content/bs4.jpg')}}" alt="img">--}}
{{--                                                    <h2>health</h2>--}}
{{--                                                </div>--}}
{{--                                                <div class="ne_re_left_img_cont_main_wrapper">--}}
{{--                                                    <h3><a href="#">They are backed Kennedy </a></h3>--}}
{{--                                                    <ul class="ne_re_social1_wrapper">--}}
{{--                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 Mar, 2020</a>--}}
{{--                                                        </li>--}}

{{--                                                    </ul>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
{{--                                </li>--}}
{{--                                <li class="parent megamenu"><a href="#" class="effect_nav"> technology </a>--}}
{{--                                    <ul class="lg-submenu prs_navi_video_wrapper">--}}
{{--                                        <li class="prs_vp_hover_overlay">--}}
{{--                                            <div class="ne_re_left_top_main_wrapper">--}}
{{--                                                <div class="ne_re_left_img_main_wrapper">--}}
{{--                                                    <img src="{{asset('front/images/content/bs1.jpg')}}" alt="img">--}}
{{--                                                    <h2>health</h2>--}}
{{--                                                </div>--}}
{{--                                                <div class="ne_re_left_img_cont_main_wrapper">--}}
{{--                                                    <h3><a href="#">They are backed Kennedy </a></h3>--}}
{{--                                                    <ul class="ne_re_social1_wrapper">--}}
{{--                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 Feb, 2020</a>--}}
{{--                                                        </li>--}}

{{--                                                    </ul>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </li>--}}
{{--                                        <li class="prs_vp_hover_overlay">--}}
{{--                                            <div class="ne_re_left_top_main_wrapper">--}}
{{--                                                <div class="ne_re_left_img_main_wrapper">--}}
{{--                                                    <img src="{{asset('front/images/content/bs3.jpg')}}" alt="img">--}}
{{--                                                    <h2>travel</h2>--}}
{{--                                                </div>--}}
{{--                                                <div class="ne_re_left_img_cont_main_wrapper">--}}
{{--                                                    <h3><a href="#">Tourism Dubai tourist</a></h3>--}}
{{--                                                    <ul class="ne_re_social1_wrapper">--}}
{{--                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 Jun, 2020</a>--}}
{{--                                                        </li>--}}

{{--                                                    </ul>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </li>--}}
{{--                                        <li class="prs_vp_hover_overlay">--}}
{{--                                            <div class="ne_re_left_top_main_wrapper">--}}
{{--                                                <div class="ne_re_left_img_main_wrapper">--}}
{{--                                                    <img src="{{asset('front/images/content/bs2.jpg')}}" alt="img">--}}
{{--                                                    <h2>technology</h2>--}}
{{--                                                </div>--}}
{{--                                                <div class="ne_re_left_img_cont_main_wrapper">--}}
{{--                                                    <h3><a href="#">Google vote-shifting</a></h3>--}}
{{--                                                    <ul class="ne_re_social1_wrapper">--}}
{{--                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 Dec, 2020</a>--}}
{{--                                                        </li>--}}

{{--                                                    </ul>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </li>--}}
{{--                                        <li class="prs_vp_hover_overlay">--}}
{{--                                            <div class="ne_re_left_top_main_wrapper">--}}
{{--                                                <div class="ne_re_left_img_main_wrapper">--}}
{{--                                                    <img src="{{asset('front/images/content/bs1.jpg')}}" alt="img">--}}
{{--                                                    <h2>Bussiness</h2>--}}
{{--                                                </div>--}}
{{--                                                <div class="ne_re_left_img_cont_main_wrapper">--}}
{{--                                                    <h3><a href="#">Award of the year</a></h3>--}}
{{--                                                    <ul class="ne_re_social1_wrapper">--}}
{{--                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 A, 2020</a>--}}
{{--                                                        </li>--}}

{{--                                                    </ul>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
{{--                                </li>--}}
{{--                                <li class="parent"><a href="#" class="effect_nav">pages</a>--}}
{{--                                    <ul class="lg-submenu">--}}
{{--                                        <li class="parent"><a href="#">Blog</a>--}}
{{--                                            <ul class="lg-submenu">--}}
{{--                                                <li><a href="{{asset(app()->getLocale().'/blog')}}">Blog-Category</a>--}}
{{--                                                </li>--}}
{{--                                                <li><a href="{{asset(app()->getLocale().'/blog_single')}}">Blog-Single</a>--}}
{{--                                                </li>--}}
{{--                                            </ul>--}}
{{--                                        </li>--}}
{{--                                        <li class="parent"><a href="#">Gallery</a>--}}
{{--                                            <ul class="lg-submenu">--}}
{{--                                                <li><a href="{{asset(app()->getLocale().'/gallery')}}">Gallery</a>--}}
{{--                                                </li>--}}
{{--                                                <li><a href="{{asset(app()->getLocale().'/gallery_single')}}">Gallery-Single</a>--}}
{{--                                                </li>--}}
{{--                                            </ul>--}}
{{--                                        </li>--}}
{{--                                        <li><a href="{{asset(app()->getLocale().'/404')}}">404_error</a>--}}
{{--                                        </li>--}}
{{--                                        <li><a href="{{asset(app()->getLocale().'/life_style')}}">Life-Style</a>--}}
{{--                                        </li>--}}
{{--                                        <li><a href="{{asset(app()->getLocale().'/sport')}}">Sport</a>--}}
{{--                                        </li>--}}
{{--                                        <li><a href="{{asset(app()->getLocale().'/technology')}}">Technology</a>--}}
{{--                                        </li>--}}
{{--                                        <li><a href="{{asset(app()->getLocale().'/author')}}">Author</a>--}}
{{--                                        </li>--}}
{{--                                        <li><a href="login.html">Login</a>--}}
{{--                                        </li>--}}
{{--                                        <li><a href="register.html">Register</a>--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
{{--                                </li>--}}
                                <li class="parent"><a href="{{asset(app()->getLocale().'/contact')}}" class="effect_nav">Կապ մեզ հետ</a>
                                </li>
                            </ul>
                        </div>
                        <!-- /dl-menuwrapper -->
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- prs navigation End -->

</header>
