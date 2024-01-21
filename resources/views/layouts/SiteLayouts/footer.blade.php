<footer>
<!--footer news Start-->
    <div class="ne_footer_main_wrapper">
        <div class="ne_footer_img_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="ne_footer_first_section">
                        <img src="{{asset('front/images/header/logo.png')}}" alt="img" class="img-responsive">
                        <ul>
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-youtube-play"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="ne_footer_second_section">
                        <h2>@lang('menu.menu')</h2>
                        <div class="ns_footer_rp_main_wrapper">

                            <div class="ns_footer_rp_main_wrapper ns_footer_rp_main_wrapper2">
                                <div class="ns_footer_rp_img_cont_wrapper">
                                    <h3><a href="{{url(app()->getLocale())}}">@lang('menu.home')</a></h3>
                                </div>
                            </div>
                            <div class="ns_footer_rp_img_cont_wrapper">
                                <h3><a href="{{asset(app()->getLocale())}}#about_us" class="effect_nav">@lang('menu.about_us')</a></h3>
                            </div>
                            <div class="ns_footer_rp_img_cont_wrapper">
                                <h3><a href="{{asset(app()->getLocale().'/service')}}" class="effect_nav">@lang('menu.price')</a></h3>
                            </div>
                            <div class="ns_footer_rp_img_cont_wrapper">
                                <h3><a href="{{asset(app()->getLocale().'/contact')}}" class="effect_nav">@lang('menu.contact_us')</a></h3>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="ne_footer_second_section">
                        <h2><a href="{{asset(app()->getLocale().'/service')}}" class="effect_nav">@lang('menu.price')</a></h2>
                        <div class="ns_footer_tag_main_wrapper">
                            <ul>

                                @if(isset($menus) && $menus)
                                    @foreach($menus as $menu)
                                        @if(isset($menu) && $menu && $menu->translate[0]->title)
                                            <li class=""><a href="{{asset(app()->getLocale().'/service/'.$menu->id)}}">{{$menu->translate[0]->title}}</a></li>
                                        @endif
                                    @endforeach
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Footer copyr Wrapper Start -->
    <div class="cc_footer_copyr_main_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="bottom_footer_main">
                        <div class="bottom_footer_wrapper">
                            <p>© Copyright 2024
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Footer copr Wrapper End -->
    <!--footer news End-->
</footer>
{{--@if(session('flash_message_success') && session('flash_message_success') != 'not_subscribe')--}}
{{--<div class=" modals thankyou">--}}
{{--    <div class="center">--}}
{{--        <div class="content">--}}
{{--            <p>@lang('varius.'.session('flash_message_success'))</p>--}}

{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--@endif--}}
