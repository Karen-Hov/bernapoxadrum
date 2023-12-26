@extends('layouts.SiteLayouts.index')
@section('styles')

@endsection
@section('navbar')
    @include('layouts.SiteLayouts.header')
@endsection

@section('content')

    <!-- prs navigation End -->
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
                                        <h3 class="hidden-sm"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</h3>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="ne_ts_inner_content">
                                        <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh</p>
                                        <h3 class="hidden-sm"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</h3>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="ne_ts_inner_content">
                                        <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh</p>
                                        <h3 class="hidden-sm"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</h3>
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
                            <li><i class="fa fa-folder-open"></i> Photo Gallary</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ne inner title End -->
    <!-- prs gallery wrapper Start -->
    <div class="prs_gallery_main_section_wrapper prs_gallery_main_section_wrapper_inner_photo">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="ne_busness_main_slider_wrapper ne_busness_main_slider_wrapper_gallery">
                        <div class="ne_recent_heading_main_wrapper">
                            <h2>photo gallary</h2>
                        </div>
                    </div>
                    <div class="ne_gallery_photo_social_wrapper">
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
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="ne_re_left_top_main_wrapper ne_re_left_top_main_wrapper_innerphoto_single_img">
                        <div class="ne_re_left_img_main_wrapper yellow">
                            <img src="{{asset('front/images/content/gallery/gi1.jpg')}}" alt="img">
                            <h2>style</h2>
                        </div>
                        <div class="ne_re_left_img_cont_main_wrapper">
                            <h3><a href="#">Award of the year</a></h3>
                            <ul class="ne_re_social1_wrapper">
                                <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>
                                </li>
                                <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-clock-o"></i> &nbsp;07 : 00 am</a>
                                </li>
                            </ul>
                            <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. ean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.</p>
                            <ul class="ne_re_social2_wrapper">
                                <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-thumbs-up"></i> &nbsp;5124 Like</a>
                                </li>
                                <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-comments"></i> &nbsp;645 Comments</a>
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
                                    <h2>related image</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="ne_businees_slider_wrapper">
                                <div class="owl-carousel owl-theme">
                                    <div class="item">
                                        <div class="ne_ineer_gallery_photo_wrapper">
                                            <div class="portfolio-thumb">
                                                <div class="gc_filter_cont_overlay_wrapper prs_ms_scene_slider_img">
                                                    <img src="{{asset('front/images/content/gallery/g1.jpg')}}" class="zoom image img-responsive" alt="service_img">
                                                    <div class="prs_ms_scene_img_overlay"> <a href="{{asset('front/images/content/gallery/g1.jpg')}}" class="venobox info" data-title="PORTFOLIO TITTLE" data-gall="gall12"><i class="flaticon-magnifier"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="ne_ineer_gallery_photo_wrapper">
                                            <div class="portfolio-thumb">
                                                <div class="gc_filter_cont_overlay_wrapper prs_ms_scene_slider_img">
                                                    <img src="{{asset('front/images/content/gallery/g2.jpg')}}" class="zoom image img-responsive" alt="service_img">
                                                    <div class="prs_ms_scene_img_overlay"> <a href="{{asset('front/images/content/gallery/g2.jpg')}}" class="venobox info" data-title="PORTFOLIO TITTLE" data-gall="gall12"><i class="flaticon-magnifier"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="ne_ineer_gallery_photo_wrapper">
                                            <div class="portfolio-thumb">
                                                <div class="gc_filter_cont_overlay_wrapper prs_ms_scene_slider_img">
                                                    <img src="{{asset('front/images/content/gallery/g3.jpg')}}" class="zoom image img-responsive" alt="service_img">
                                                    <div class="prs_ms_scene_img_overlay"> <a href="{{asset('front/images/content/gallery/g3.jpg')}}" class="venobox info" data-title="PORTFOLIO TITTLE" data-gall="gall12"><i class="flaticon-magnifier"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="ne_ineer_gallery_photo_wrapper">
                                            <div class="portfolio-thumb">
                                                <div class="gc_filter_cont_overlay_wrapper prs_ms_scene_slider_img">
                                                    <img src="{{asset('front/images/content/gallery/g4.jpg')}}" class="zoom image img-responsive" alt="service_img">
                                                    <div class="prs_ms_scene_img_overlay"> <a href="{{asset('front/images/content/gallery/g4.jpg')}}" class="venobox info" data-title="PORTFOLIO TITTLE" data-gall="gall12"><i class="flaticon-magnifier"></i></a>
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
        <!-- /.container -->
    </div>
    <!--/.portfolio-area-->
    <!-- prs gallery wrapper End -->
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
