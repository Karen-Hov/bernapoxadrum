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
                                <li><a href="{{url(app()->getLocale())}}">@lang('menu.home')</a></li>

                                {{--                                <li class="parent megamenu"><a href="{{asset('/')}}" class="effect_nav">Գլխավոր</a></li>--}}
{{--                                <li class="parent megamenu"><a href="{{asset(app()->getLocale().'/service')}}" class="effect_nav">Բեռնակիրներ</a></li>--}}
{{--                                <li class="parent megamenu"><a href="{{asset(app()->getLocale().'/service')}}" class="effect_nav">Գները</a></li>--}}


                                <li class="parent"><a href="{{asset(app()->getLocale().'/service')}}" class="effect_nav">@lang('menu.price')</a>
                                    <ul class="lg-submenu">
{{--                                        <li class="parent"><a href="#">Գները</a>--}}
{{--                                            <ul class="lg-submenu">--}}
{{--                                                <li><a href="{{asset(app()->getLocale().'/service')}}">Գները</a>--}}
{{--                                                </li>--}}
{{--                                                <li><a href="{{asset(app()->getLocale().'/service')}}">Գները</a>--}}
{{--                                                </li>--}}
{{--                                            </ul>--}}
{{--                                        </li>--}}
{{--                                        <li class="parent"><a href="#">Գները</a>--}}
{{--                                            <ul class="lg-submenu">--}}
{{--                                                <li><a href="{{asset(app()->getLocale().'/service')}}">Գները</a>--}}
{{--                                                </li>--}}
{{--                                                <li><a href="{{asset(app()->getLocale().'/service')}}">Գները</a>--}}
{{--                                                </li>--}}
{{--                                            </ul>--}}
{{--                                        </li>--}}


                                        @if(isset($menus) && $menus)
                                            @foreach($menus as $menu)
                                                @if(isset($menu) && $menu && $menu->translate[0]->title)
                                                    <li class=""><a href="{{asset(app()->getLocale().'/service/'.$menu->id)}}">{{$menu->translate[0]->title}}</a></li>
                                                @endif
                                            @endforeach
                                        @endif
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
                                    </ul>
                                </li>
{{--                                <li class="parent megamenu"><a href="{{asset('/')}}" class="effect_nav">Թափուր աշխատատեղեր</a></li>--}}
                                <li class="parent megamenu"><a href="{{asset('/')}}" class="effect_nav">@lang('menu.about_us')</a></li>
                                <li class="parent"><a href="{{asset(app()->getLocale().'/contact')}}" class="effect_nav">@lang('menu.contact_us')</a>
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
