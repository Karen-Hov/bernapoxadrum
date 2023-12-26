@extends('layouts.SiteLayouts.index')
@section('styles')

@endsection
@section('navbar')
    @include('layouts.SiteLayouts.header')
@endsection

@section('content')

    <!-- ne inner title start -->
    <div class="ne_inner_title_main_section">
        <div class="ne_inner_title_img_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 hidden-xs">
                    <div class="ne_ts_inner_wrapper ne_ts_title_inner_wrapper">
                        <div class="ne_tran_label_wrapper">
                            <h3>Trending</h3>
                        </div>
                        <div class="ne_tranding_slider_wrapper">
                            <div class="owl-carousel owl-theme">
                                <div class="item">
                                    <div class="ne_ts_inner_content">
                                        <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh</p>
                                        <h3 class="hidden-sm"><i class="fa fa-calendar"></i> &nbsp;10 NOV, 2020</h3>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="ne_ts_inner_content">
                                        <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh</p>
                                        <h3 class="hidden-sm"><i class="fa fa-calendar"></i> &nbsp;10 NOV, 2020</h3>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="ne_ts_inner_content">
                                        <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh</p>
                                        <h3 class="hidden-sm"><i class="fa fa-calendar"></i> &nbsp;10 NOV, 2020</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="ne_inner_title_nev_wrapper">
                        <ul>
                            <li><i class="fa fa-home"></i> <a href="#">Home</a>&nbsp;&nbsp; ></li>
                            <li><i class="fa fa-folder-open"></i> CWG 2020 from today</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ne inner title End -->
    <!--resent news Start-->
    <div class="ne_recent_news_main_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="ne_recent_left_side_wrapper">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="ne_busness_main_slider_wrapper ne_busness_main_slider_wrapper_lifestyle">
                                            <div class="ne_recent_heading_main_wrapper">
                                                <h2>CWG today</h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="ne_sport_slider_wrapper ne_sport_slider_wrapper_single">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="ne_re_left_top_main_wrapper">
                                                        <div class="ne_re_left_img_main_wrapper yellow">
                                                            <img src="{{asset('front/images/content/swg1.jpg')}}" alt="img">
                                                            <h2>style</h2>
                                                        </div>
                                                        <div class="ne_re_left_img_cont_main_wrapper ne_re_left_img_cont_main_swg_blog_cont_wrapper">
                                                            <h3><a href="#">CWG 2020 from today</a></h3>
                                                            <ul class="ne_re_social1_wrapper">
                                                                <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-calendar"></i> &nbsp;10 NOV, 2020</a>
                                                                </li>
                                                                <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-clock-o"></i> &nbsp;07 : 00 am</a>
                                                                </li>
                                                                <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-thumbs-up"></i> &nbsp;5124 Like</a>
                                                                </li>
                                                                <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-comments"></i> &nbsp;645 Comments</a>
                                                                </li>
                                                            </ul>
                                                            <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. ean sollicitudin, lorem quis bibendum auctor, nisiipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. This is Photoshversion of Lorem Ipsum. Proin gavida nibh vel velit auctor aliquet. ean sollicitudin, lorem qibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odvulputat tis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor
                                                                <br> aliquesollicitudin, lorem quis bibendum auctor, nisi elit consequat isum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.Ipsum. Proin gravida nibh vel velit nec auctor aliquet. ean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit aucliquesollicitudinIpsum. Proin gravida nibh vel velit nec auctor aliquet. ean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                    <div class="ne_blog_today_img_left_wrapper">
                                                        <img src="{{asset('front/images/content/swg2.jpg')}}" alt="img">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                    <div class="ne_blog_today_img_cont_left_wrapper ne_blog_today_img_cont_left_wrapper_singlepage blog_single_para">
                                                        <h3>Award of the year</h3>
                                                        <p>auctor, nisi elit consequat ipsum, nec sem nibh id elit.Aenean sollicitudin, lorem quis bibendum auctor, nisi elit eneaollicitudin, lorem, nisi elit consequat ipsum, nec sem nibh id elit.Aenean sollicitudin, lorem quis bibendum auctor, nisi elit eneaollicitudin, lorem quis bibendum auctor,onsepsunit.Aenean sollicitudin, lorem quis em quis bibendum auctor,onsepsunit.Aenean sollicitudin, lorem quis elit eneaollicitudin, lorem quis bibendum auctor,onsepsuec Aenean sollicitu bibendum auctor, nisi elit eneaollicitudin, lorem quis bibendum auctor, nisi elit eneaollicitudin, lorem quis bibendum auctor,onsepsuec Aenean sollicitudin, lorem quis bibendubibendum auctor, ndi bibendum auctor, nisi elit eneaollicitudin, lorem quis bibendum auctor, nisi elit eneaollicitudin, lorem quis bibendum auctor,onsepsuec Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum,onsequat ipsum, nec sem nibh id elit.Aenean sollicitudin, lorem icitudin, lorem quis bibendum auctor,onsepsibh</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row ne_blog_to_margin_top hidden-sm hidden-xs">
                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                    <div class="ne_blog_today_img_cont_left_wrapper ne_blog_today_img_cont_left_wrapper_bottom ne_blog_today_img_cont_left_wrapper_singlepage blog_single_para">
                                                        <h3>Award of the year</h3>
                                                        <p>auctor, nisi elit consequat ipsum, nec sem nibh id elit.Aenean sollicitudin, lorem quis bibendum auctor, nisi elit eneaollicitudin, lorem quis bibendum auctor,onsepsuec Aenean sollicitudiorem quis bibendum auctor, nisi elit consequat ipsum, nec sem nibh id elit.Aenean sollicitudin, lorem quis bibendum auctor, nisi elit eneaollicitudin, lorem quis bibdin, lorem quis bibendubibendum auctor, nendum auctor,onsepsunit.Aenean sollicitudin, lorem quis bibendum auctor, nisi elit eneaollicitudin, lorem quis bibendum auctor, nisi elit eneaollicitudin, lorem quis bibendum auctor,onsepsuec Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sem nibh id elit.Aenean sollicitudin, lorem quis bibendum auctor, nisi elit eneaollicitudin, lorem quis bibendum auctor,onsepsibh id elit.Aenean sollicitudin, lorem quis bibendum auctor, nisi elit eneaollicitudin, lorem quis bibendubibendum auctor, nisi elit consequat </p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                    <div class="ne_blog_today_img_left_wrapper">
                                                        <img src="{{asset('front/images/content/swg3.jpg')}}" alt="img">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="pager_wrapper prs_blog_pagi_wrapper">
                                            <ul class="pagination">
                                                <li><a href="#"><i class="fa fa-angle-left"></i></a>
                                                </li>
                                                <li class="btc_shop_pagi"><a href="#">01</a>
                                                </li>
                                                <li class="btc_shop_pagi"><a href="#">02</a>
                                                </li>
                                                <li class="btc_third_pegi btc_shop_pagi"><a href="#">03</a>
                                                </li>
                                                <li class="hidden-xs btc_shop_pagi"><a href="#">04</a>
                                                </li>
                                                <li><a href="#"><i class="fa fa-angle-right"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 hidden-xs">
                                        <div class="ne_busness_main_slider_wrapper ne_busness_main_slider_wrapper_lifestyle_heading">
                                            <div class="ne_recent_heading_main_wrapper">
                                                <h2>Sharing is Caring</h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 hidden-xs">
                                        <div class="ne_blog_sidebar_shair_icon_main_wrapper">
                                            <div class="btc_blog_cate_inner_social_fb_wrapper"> <a href="#"><i class="fa fa-facebook"></i><br> 4.1 M<br>Fans</a>
                                            </div>
                                            <div class="btc_blog_cate_inner_social_tw_wrapper"> <a href="#"><i class="fa fa-twitter"></i><br> 178<br>Followers</a>
                                            </div>
                                            <div class="btc_blog_cate_inner_social_gp_wrapper"> <a href="#"><i class="fa fa-google-plus"></i><br> 884.0 K<br>Followers</a>
                                            </div>
                                            <div class="btc_blog_cate_inner_social_vimo_wrapper"> <a href="#"><i class="fa fa-vimeo"></i><br> 323 K<br>Subscriber</a>
                                            </div>
                                            <div class="btc_blog_cate_inner_social_yt_wrapper"> <a href="#"><i class="fa fa-youtube-play"></i><br> 323 K<br>Subscriber</a>
                                            </div>
                                            <div class="btc_blog_cate_inner_social_shair_wrapper"> <a href="#"><i class="fa fa-share-alt"></i><br> 7.4 K<br>Followers</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="ne_busness_main_slider_wrapper ne_busness_main_slider_wrapper_lifestyle_heading">
                                            <div class="ne_recent_heading_main_wrapper">
                                                <h2>About Author</h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="ne_blogto_testi_slider_wrapper">

                                            <div class="ne_boto_testi_content_wrapper">
                                                <div class="ne_boto_testi_img">
                                                    <img src="{{asset('front/images/content/blog_tesi_img.jpg')}}" alt="img">
                                                </div>
                                                <div class="ne_boto_testi_img_cont">
                                                    <h3><a href="#">Miss. Lisa Doe</a></h3>
                                                    <p class="ddddd"><a href="#"><i class="fa fa-user"></i> Administrator</a></p>
                                                    <h4>Phasellus eu scelerisque nisvinar vulputate ligula. Maecenas nec justo cinia, li. Nunc odio justo, laoreetarius antet pulvinar vulputate ligula. Maecenas nec justo cinia, luctus Maecenas justo.vinar vulputate ligula. Maecenas nec justo cinia, l Maecenas dolor.</h4>
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

                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="ne_busness_main_slider_wrapper ne_busness_main_slider_wrapper_lifestyle_heading">
                                            <div class="ne_recent_heading_main_wrapper">
                                                <h2>leave a comment</h2>
                                            </div>
                                        </div>
                                        <div class="ne_comment_list_wrapper">
                                            <ul>
                                                <li><a href="#">3 Comments</a>
                                                </li>
                                                <li><a href="#">New 24 Template</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="ne_comment_list_wrapper2">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-heart"></i> Recommend</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="ne_comment_list_main_secton_wrapper ne_comment_list_main_secton_wrapper1">
                                            <div class="ne_commnet_list_img_section">
                                                <img src="{{asset('front/images/content/bl1.jpg')}}" alt="img">
                                            </div>
                                            <div class="ne_commnet_list_img_cont_section">
                                                <h3>Vijay parmar</h3>
                                                <p>I believe Wolf SilverOak still sees the camera icon because he is allowing customers to post to his page and also has photos....<span><a href="#">See More</a></span>
                                                </p>
                                                <ul>
                                                    <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-share-alt"></i> &nbsp;Share</a>
                                                    </li>
                                                    <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-thumbs-up"></i> &nbsp;5124 Like</a>
                                                    </li>
                                                    <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-reply"></i> &nbsp;reply</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="ne_comment_list_main_secton_wrapper ne_comment_list_main_secton_wrapper2">
                                            <div class="ne_commnet_list_img_section">
                                                <img src="{{asset('front/images/content/bl2.jpg')}}" alt="img">
                                            </div>
                                            <div class="ne_commnet_list_img_cont_section">
                                                <h3>Vijay parmar</h3>
                                                <p>I believe Wolf SilverOak still sees the camera icon because he is allowing customers to post to his page and also has photos....<span><a href="#">See More</a></span>
                                                </p>
                                                <ul>
                                                    <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-share-alt"></i> &nbsp;Share</a>
                                                    </li>
                                                    <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-thumbs-up"></i> &nbsp;5124 Like</a>
                                                    </li>
                                                    <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-reply"></i> &nbsp;reply</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="ne_comment_list_main_secton_wrapper ne_comment_list_main_secton_wrapper2">
                                            <div class="ne_commnet_list_img_section">
                                                <img src="{{asset('front/images/content/bl3.jpg')}}" alt="img">
                                            </div>
                                            <div class="ne_commnet_list_img_cont_section">
                                                <h3>Vijay parmar</h3>
                                                <p>I believe Wolf SilverOak still sees the camera icon because he is allowing customers to post to his page and also has photos....<span><a href="#">See More</a></span>
                                                </p>
                                                <ul>
                                                    <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-share-alt"></i> &nbsp;Share</a>
                                                    </li>
                                                    <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-thumbs-up"></i> &nbsp;5124 Like</a>
                                                    </li>
                                                    <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-reply"></i> &nbsp;reply</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="ne_busness_main_slider_wrapper">
                                                    <div class="ne_recent_heading_main_wrapper">
                                                        <h2>Business</h2>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="neww_businees_slider_wrapper">
                                                    <div class="owl-carousel owl-theme">
                                                        <div class="item">
                                                            <div class="ne_re_left_top_main_wrapper">
                                                                <div class="ne_re_left_img_main_wrapper">
                                                                    <img src="{{asset('front/images/content/bs1.jpg')}}" alt="img">
                                                                    <h2>business</h2>
                                                                </div>
                                                                <div class="ne_re_left_img_cont_main_wrapper ne_buss_img_cont_main_wrapper">
                                                                    <h3><a href="#">Proin gravida nibh
                                                                            vel velit auctor.</a></h3>
                                                                    <ul class="ne_re_social1_wrapper">
                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-calendar"></i> &nbsp;10 NOV, 2020</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="ne_re_left_top_main_wrapper">
                                                                <div class="ne_re_left_img_main_wrapper">
                                                                    <img src="{{asset('front/images/content/bs2.jpg')}}" alt="img">
                                                                    <h2>team work</h2>
                                                                </div>
                                                                <div class="ne_re_left_img_cont_main_wrapper ne_buss_img_cont_main_wrapper">
                                                                    <h3><a href="#">Faangs diverge work as prospect</a></h3>
                                                                    <ul class="ne_re_social1_wrapper">
                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-calendar"></i> &nbsp;10 NOV, 2020</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="ne_re_left_top_main_wrapper">
                                                                <div class="ne_re_left_img_main_wrapper">
                                                                    <img src="{{asset('front/images/content/bs3.jpg')}}" alt="img">
                                                                    <h2>business</h2>
                                                                </div>
                                                                <div class="ne_re_left_img_cont_main_wrapper ne_buss_img_cont_main_wrapper">
                                                                    <h3><a href="#">
                                                                            Beats did something Apple today</a></h3>
                                                                    <ul class="ne_re_social1_wrapper">
                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-calendar"></i> &nbsp;10 NOV, 2020</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="ne_re_left_top_main_wrapper">
                                                                <div class="ne_re_left_img_main_wrapper">
                                                                    <img src="{{asset('front/images/content/bs3.jpg')}}" alt="img">
                                                                    <h2>business</h2>
                                                                </div>
                                                                <div class="ne_re_left_img_cont_main_wrapper ne_buss_img_cont_main_wrapper">
                                                                    <h3><a href="#">
                                                                            Hands on with the Apple today</a></h3>
                                                                    <ul class="ne_re_social1_wrapper">
                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-calendar"></i> &nbsp;10 NOV, 2020</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--resent news End-->
    <!-- prs patner slider Start -->
    <div class="prs_patner_main_section_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="prs_pn_slider_wraper">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="prs_pn_img_wrapper">
                                    <img src="{{asset('front/images/content/p1.jpg')}}" alt="patner_img">
                                </div>
                            </div>
                            <div class="item">
                                <div class="prs_pn_img_wrapper">
                                    <img src="{{asset('front/images/content/p2.jpg')}}" alt="patner_img">
                                </div>
                            </div>
                            <div class="item">
                                <div class="prs_pn_img_wrapper">
                                    <img src="{{asset('front/images/content/p3.jpg')}}" alt="patner_img">
                                </div>
                            </div>
                            <div class="item">
                                <div class="prs_pn_img_wrapper">
                                    <img src="{{asset('front/images/content/p4.jpg')}}" alt="patner_img">
                                </div>
                            </div>
                            <div class="item">
                                <div class="prs_pn_img_wrapper">
                                    <img src="{{asset('front/images/content/p5.jpg')}}" alt="patner_img">
                                </div>
                            </div>
                            <div class="item">
                                <div class="prs_pn_img_wrapper">
                                    <img src="{{asset('front/images/content/p6.jpg')}}" alt="patner_img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- prs patner slider End -->




@endsection

@section('footer')
    @include('layouts.SiteLayouts.footer')
@endsection

@section('scripts')

@endsection
