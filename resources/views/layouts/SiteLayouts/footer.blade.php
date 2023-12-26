<footer>

{{--    <div class="subscribePart">--}}

{{--        <div class="subscribe label">--}}
{{--            <span class="floating-label">@lang('varius.subscribe')</span>--}}
{{--            <p class="line"></p>--}}
{{--        </div>--}}
{{--        @if ($errors->has('sub_email'))--}}
{{--            <span class="valid-error">{{$errors->first('sub_email')}}</span>--}}
{{--        @endif--}}
{{--        @if (session('flash_message_success') == 'not_subscribe')--}}
{{--            <span class="valid-error">@lang('varius.not_subscribe')</span>--}}
{{--        @endif--}}
{{--        <form action="{{url(App::getLocale().'/subscribe-mail')}}#subscribe" method="POST" id="subscribe">--}}
{{--            @csrf--}}
{{--            @method('POST')--}}

{{--            <input type="text" name="url" value="{{URL::current()}}" style="display: none">--}}
{{--            <input type="hidden" value="subscribe" name="footer">--}}


{{--            <input type="email" name="sub_email" class="email" placeholder="@lang('varius.mail')*">--}}
{{--            <input type="email" class="email" placeholder="E-mail">--}}
{{--            <button><img src="{{asset('site/img/enter.png')}}" alt=""></button>--}}

{{--        </form>--}}
{{--        <p>    <p>@lang('varius.workers_please')</p>--}}
{{--        </p>--}}
{{--    </div>--}}
{{--    <div class="socials">--}}
{{--        <a href="https://www.facebook.com/ITResources.am" target="_blank"><img src="{{asset('site/img/fb.png')}}" alt=""></a>--}}
{{--        <a href="https://www.instagram.com/itresources_web/" target="_blank"><img src="{{asset('site/img/inst.png')}}" alt=""></a>--}}
{{--        <a href="https://www.linkedin.com/company/itresourcesllc/" target="_blank"><img src="{{asset('site/img/link.png')}}" alt=""></a>--}}
{{--    </div>--}}
{{--    <div class="faqPrivacy">--}}
{{--        <a href="">@lang('varius.faq')</a>--}}
{{--        <a href="{{url(App::getLocale().'/privacy_policy')}}">@lang('varius.privacy_police')</a>--}}
{{--    </div>--}}
{{--    <div class="privacy">--}}
{{--        <p>@lang('varius.all_right_reserved')</p>--}}
{{--        <p>&copy;    2021 Workers</p>--}}
{{--        <p>@lang('varius.powered_itr') </p>--}}
{{--    </div>--}}

<!--footer news Start-->
    <div class="ne_footer_main_wrapper">
        <div class="ne_footer_img_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="ne_footer_first_section">
                        <img src="{{asset('front/images/header/logo.png')}}" alt="img" class="img-responsive">
                        <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
                            <br>
                            <br>This is Photoshop's version of Lorem Ipsum</p>
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
                        <h2>POPULAR POST</h2>
                        <div class="ns_footer_rp_main_wrapper">
                            <div class="ns_footer_rp_img_wrapper">
                                <img src="{{asset('front/images/content/footer_recent1.png')}}" alt="img">
                            </div>
                            <div class="ns_footer_rp_img_cont_wrapper">
                                <h3><a href="#">These Are the 10 Color</a></h3>
                                <p><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>
                                </p>
                            </div>
                        </div>
                        <div class="ns_footer_rp_main_wrapper ns_footer_rp_main_wrapper2">
                            <div class="ns_footer_rp_img_wrapper">
                                <img src="{{asset('front/images/content/footer_recent2.png')}}" alt="img">
                            </div>
                            <div class="ns_footer_rp_img_cont_wrapper">
                                <h3><a href="#">These Are the 10 Color</a></h3>
                                <p><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="ne_footer_second_section">
                        <h2>POPULAR TAGS</h2>
                        <div class="ns_footer_tag_main_wrapper">
                            <ul>
                                <li><a href="#">Business</a>
                                </li>
                                <li><a href="#">Corporate</a>
                                </li>
                                <li><a href="#">Services</a>
                                </li>
                                <li><a href="#">Customer</a>
                                </li>
                                <li><a href="#">Money</a>
                                </li>
                                <li><a href="#">Html</a>
                                </li>
                                <li><a href="#">Partners</a>
                                </li>
                                <li><a href="#">Wordpress</a>
                                </li>
                                <li><a href="#">Money</a>
                                </li>
                                <li><a href="#">Customer</a>
                                </li>
                                <li><a href="#">Money</a>
                                </li>
                                <li><a href="#">Html</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="ne_footer_second_section">
                        <h2>POPULAR CATEGORY</h2>
                        <div class="ns_footer_cate_main_wrapper">
                            <ul>
                                <li><a href="#">Make-up <span>12</span></a>
                                </li>
                                <li><a href="#">Weird <span>17</span></a>
                                </li>
                                <li><a href="#">Travel <span>22</span></a>
                                </li>
                                <li><a href="#">Food <span>82</span></a>
                                </li>
                                <li><a href="#">Audio <span>42</span></a>
                                </li>
                                <li><a href="#">Gadgets <span>56</span></a>
                                </li>
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
                            <p>© Copyright 2020-21 by 365 Days - Design By <a href="#">Webstrot</a>
                            </p>
                        </div>
                    </div>
                    <div class="footer_cards_warpper">
                        <div class="footer_cards">
                            <ul>
                                <li><a href="#"><i class="fa fa-cc"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-cc-visa"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-cc-mastercard"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-cc-paypal"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-cc-stripe"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-cc-amex"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-cc-discover"></i></a>
                                </li>
                            </ul>
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
