@extends('layouts.SiteLayouts.index')
@section('styles')

@endsection
@section('navbar')
    @include('layouts.SiteLayouts.header')
@endsection

@section('content')

    <!-- ne tranding slider Start -->
    <div class="ne_ts_main_section_wrapper hidden-xs">
        <div class="container">
            <div class="ne_ts_inner_wrapper">
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
                                <h3 class="hidden-sm"><i class="fa fa-calendar"></i> &nbsp;25 Nov, 2020</h3>
                            </div>
                        </div>
                        <div class="item">
                            <div class="ne_ts_inner_content">
                                <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh</p>
                                <h3 class="hidden-sm"><i class="fa fa-calendar"></i> &nbsp;25 Dec, 2020</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="ne_recent_news_main_wrapper">
        <div class="container">
            <h1>Грузчики в Кемерово от 130 руб/час и услуги рабочих</h1>
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12" style="width: 100%">
                    <div class="ne_recent_left_side_wrapper">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
                                        <div class="ne_busness_main_slider_wrapper">
                                            <div class="ne_recent_heading_main_wrapper" style="display: flex">
{{--                                                <h2>Business</h2>--}}
                                                <div class="item">
                                                    <div class="ne_re_left_top_main_wrapper">
                                                        <div class="ne_re_left_img_main_wrapper">
                                                            <img src="{{asset('front/images/img/worker_01.png')}}" alt="img">
                                                            <h2>Грузчик</h2>
                                                        </div>
                                                        <div class="ne_re_left_img_cont_main_wrapper ne_buss_img_cont_main_wrapper">
                                                            <h3><a href="{{asset(app()->getLocale().'/service')}}">Грузчик</a></h3>
                                                            <ul class="ne_re_social1_wrapper">
                                                                <li data-animation="animated fadeInLeft"><a href="#">1000 դրամ </a>
                                                            </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="ne_re_left_top_main_wrapper">
                                                        <div class="ne_re_left_img_main_wrapper">
                                                            <img src="{{asset('front/images/img/worker_02.png')}}" alt="img">
                                                            <h2>Такелажник</h2>
                                                        </div>
                                                        <div class="ne_re_left_img_cont_main_wrapper ne_buss_img_cont_main_wrapper">
                                                            <h3><a href="{{asset(app()->getLocale().'/service')}}">Такелажник</a></h3>
                                                            <ul class="ne_re_social1_wrapper">
                                                                <li data-animation="animated fadeInLeft"><a href="#">2000 դրամ</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="ne_re_left_top_main_wrapper">
                                                        <div class="ne_re_left_img_main_wrapper">
                                                            <img src="{{asset('front/images/img/worker_03.png')}}" alt="img">
                                                            <h2>экспедитор</h2>
                                                        </div>
                                                        <div class="ne_re_left_img_cont_main_wrapper ne_buss_img_cont_main_wrapper">
                                                            <h3><a href="{{asset(app()->getLocale().'/service')}}">Грузчик-экспедитор</a></h3>
                                                            <ul class="ne_re_social1_wrapper">
                                                                <li data-animation="animated fadeInLeft"><a href="#">3000 դրամ</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="ne_re_left_top_main_wrapper">
                                                        <div class="ne_re_left_img_main_wrapper">
                                                            <img src="{{asset('front/images/img/worker_04.png')}}" alt="img" style="margin-top: -50px">
                                                            <h2>Разнорабочий</h2>
                                                        </div>
                                                        <div class="ne_re_left_img_cont_main_wrapper ne_buss_img_cont_main_wrapper">
                                                            <h3><a href="{{asset(app()->getLocale().'/service')}}">Разнорабочий</a></h3>
                                                            <ul class="ne_re_social1_wrapper">
                                                                <li data-animation="animated fadeInLeft"><a href="#">4000 դրամ</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="ne_re_left_top_main_wrapper">
                                                        <div class="ne_re_left_img_main_wrapper">
                                                            <img src="{{asset('front/images/img/worker_05.png')}}" alt="img">
                                                            <h2>Фасовщик</h2>
                                                        </div>
                                                        <div class="ne_re_left_img_cont_main_wrapper ne_buss_img_cont_main_wrapper">
                                                            <h3><a href="{{asset(app()->getLocale().'/service')}}">Фасовщик</a></h3>
                                                            <ul class="ne_re_social1_wrapper">
                                                                <li data-animation="animated fadeInLeft"><a href="#">5000 դրամ</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
{{--                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">--}}
{{--                                        <div class="ne_businees_slider_wrapper">--}}
{{--                                            <div class="owl-carousel owl-theme">--}}
{{--                                                <div class="item">--}}
{{--                                                    <div class="ne_re_left_top_main_wrapper">--}}
{{--                                                        <div class="ne_re_left_img_main_wrapper">--}}
{{--                                                            <img src="{{asset('front/images/content/bs1.jpg')}}" alt="img">--}}
{{--                                                            <h2>business</h2>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="ne_re_left_img_cont_main_wrapper ne_buss_img_cont_main_wrapper">--}}
{{--                                                            <h3><a href="#">Proin gravida nibh--}}
{{--                                                                    vel velit auctor.</a></h3>--}}
{{--                                                            <ul class="ne_re_social1_wrapper">--}}
{{--                                                                <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-calendar"></i> &nbsp;2 DEC, 2020</a>--}}
{{--                                                                </li>--}}
{{--                                                            </ul>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="item">--}}
{{--                                                    <div class="ne_re_left_top_main_wrapper">--}}
{{--                                                        <div class="ne_re_left_img_main_wrapper">--}}
{{--                                                            <img src="{{asset('front/images/content/bs1.jpg')}}" alt="img">--}}
{{--                                                            <h2>business</h2>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="ne_re_left_img_cont_main_wrapper ne_buss_img_cont_main_wrapper">--}}
{{--                                                            <h3><a href="#">Proin gravida nibh--}}
{{--                                                                    vel velit auctor.</a></h3>--}}
{{--                                                            <ul class="ne_re_social1_wrapper">--}}
{{--                                                                <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-calendar"></i> &nbsp;2 DEC, 2020</a>--}}
{{--                                                                </li>--}}
{{--                                                            </ul>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="item">--}}
{{--                                                    <div class="ne_re_left_top_main_wrapper">--}}
{{--                                                        <div class="ne_re_left_img_main_wrapper">--}}
{{--                                                            <img src="{{asset('front/images/content/bs1.jpg')}}" alt="img">--}}
{{--                                                            <h2>business</h2>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="ne_re_left_img_cont_main_wrapper ne_buss_img_cont_main_wrapper">--}}
{{--                                                            <h3><a href="#">Proin gravida nibh--}}
{{--                                                                    vel velit auctor.</a></h3>--}}
{{--                                                            <ul class="ne_re_social1_wrapper">--}}
{{--                                                                <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-calendar"></i> &nbsp;2 DEC, 2020</a>--}}
{{--                                                                </li>--}}
{{--                                                            </ul>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="item">--}}
{{--                                                    <div class="ne_re_left_top_main_wrapper">--}}
{{--                                                        <div class="ne_re_left_img_main_wrapper">--}}
{{--                                                            <img src="{{asset('front/images/content/bs2.jpg')}}" alt="img">--}}
{{--                                                            <h2>team work</h2>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="ne_re_left_img_cont_main_wrapper ne_buss_img_cont_main_wrapper">--}}
{{--                                                            <h3><a href="#">Faangs diverge prospect</a></h3>--}}
{{--                                                            <ul class="ne_re_social1_wrapper">--}}
{{--                                                                <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-calendar"></i> &nbsp;5 JAN, 2020</a>--}}
{{--                                                                </li>--}}
{{--                                                            </ul>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="item">--}}
{{--                                                    <div class="ne_re_left_top_main_wrapper">--}}
{{--                                                        <div class="ne_re_left_img_main_wrapper">--}}
{{--                                                            <img src="{{asset('front/images/content/bs3.jpg')}}" alt="img">--}}
{{--                                                            <h2>business</h2>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="ne_re_left_img_cont_main_wrapper ne_buss_img_cont_main_wrapper">--}}
{{--                                                            <h3><a href="#">--}}
{{--                                                                    Beats did something today</a></h3>--}}
{{--                                                            <ul class="ne_re_social1_wrapper">--}}
{{--                                                                <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-calendar"></i> &nbsp;14 AUG, 2020</a>--}}
{{--                                                                </li>--}}
{{--                                                            </ul>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="ne_indx_sidebar_main_wrapper">
                        <div class="row">
                            <div class="block-price-all">
                                <div class="uk-container uk-container-center">
                                    <ul class="price-all uk-width-1-1 uk-width-xlarge-3-5 uk-align-center uk-text-center">
                                        <li><a href="/flat_pereezd.html">Квартирный переезд</a></li>
                                        <li><a href="/office_pereezd.html">Офисный переезд</a></li>
                                        <li><a href="/dacha_pereezd.html">Дачный переезд</a></li>

                                    </ul>
                                    <div class="uk-width-1-1 uk-width-medium-4-5 uk-widht-large-4-5 uk-width-xlarge-4-5 uk-align-center uk-text-center block-button-price">
                                        <a href="/price.html" class="uk-button uk-button-secondary">Цены на все услуги</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>



    <div class="ne_recent_news_main_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="ne_bottom_banner_main_wrapper">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="ne_sidebar_inner_social_wrapper ne_sidebar_second_inner_social_wrapper">

                                <div class="block-client-service">
                                    <h3 class="uk-text-center title-header">Почему клиенты выбирают <br class="uk-visible-xlarge">Грузчиков-Cервис?</h3>
                                    <div class="uk-grid">
                                        <div class="uk-width-2-3 uk-width-medium-2-5 uk-width-large-1-3 uk-width-xlarge-1-2">
                                            <div class="uk-grid">
                                                <div class="uk-width-4-7 uk-visible-xlarge">
                                                    <div class="uk-panel-background"></div>
                                                </div>
                                                <div class="uk-width-1-1 uk-width-xlarge-3-7">
                                                    <ul class="uk-list list-item">
                                                        <li>Все рабочие — Граждане РФ</li>
                                                        <li>Трезвые</li>
                                                        <li>Без нецензурной лексики</li>
                                                        <li>Без опозданий</li>
                                                        <li>Низкие цены</li>
                                                        <li>Без судимостей</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="uk-width-3-3 uk-width-medium-3-5 uk-width-large-2-3 uk-width-xlarge-1-2">
                                            <div class="uk-panel-background second"></div>
                                        </div>
                                    </div>
                                </div>                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="block-client-service">
        <h3 class="uk-text-center title-header">Почему клиенты выбирают <br class="uk-visible-xlarge">Грузчиков-Cервис?</h3>
        <div class="uk-grid">
            <div class="uk-width-2-3 uk-width-medium-2-5 uk-width-large-1-3 uk-width-xlarge-1-2">
                <div class="uk-grid">
                    <div class="uk-width-4-7 uk-visible-xlarge">
                        <div class="uk-panel-background"></div>
                    </div>
                    <div class="uk-width-1-1 uk-width-xlarge-3-7">
                        <ul class="uk-list list-item">
                            <li>Все рабочие — Граждане РФ</li>
                            <li>Трезвые</li>
                            <li>Без нецензурной лексики</li>
                            <li>Без опозданий</li>
                            <li>Низкие цены</li>
                            <li>Без судимостей</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="uk-width-3-3 uk-width-medium-3-5 uk-width-large-2-3 uk-width-xlarge-1-2">
                <div class="uk-panel-background second"></div>
            </div>
        </div>
    </div>

    <!-- ne tranding slider End -->
{{--    <div class="ss_addver_slider_wrapper">--}}
{{--        <div class="container">--}}
{{--            <div class="slider-area">--}}
{{--                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">--}}
{{--                    <div class="carousel-inner" role="listbox">--}}
{{--                        <div class="item active">--}}
{{--                            <div class="carousel-captions caption-1">--}}
{{--                                <div class="container">--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 hot_slider_custom_col_img_cont">--}}
{{--                                            <div class="content lr_banner_content_inner_wrapper">--}}
{{--                                                <h2 data-animation="animated bounceInLeft">Top news</h2>--}}
{{--                                                <h3 data-animation="animated fadeInLeft">Snow Blows Through Minnesota</h3>--}}
{{--                                                <ul>--}}
{{--                                                    <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>--}}
{{--                                                    </li>--}}
{{--                                                    <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-clock-o"></i> &nbsp;07 : 00 am</a>--}}
{{--                                                    </li>--}}
{{--                                                    <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-thumbs-up"></i> &nbsp;5124 Like</a>--}}
{{--                                                    </li>--}}
{{--                                                    <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-comments"></i> &nbsp;645 Comments</a>--}}
{{--                                                    </li>--}}
{{--                                                </ul>--}}
{{--                                                <div class="divider" data-animation="animated fadeInLeft"></div>--}}
{{--                                                <p data-animation="animated fadeInLeft">Rroin gravida nibh vel velit auctor aliquet aenean Sollicitudin, lorem quis--}}
{{--                                                    <br>bibendum auctor.</p>--}}
{{--                                                <div class="clear"></div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="item">--}}
{{--                            <div class=" carousel-captions caption-2">--}}
{{--                                <div class="container">--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 hot_slider_custom_col_img_cont">--}}
{{--                                            <div class="content lr_banner_content_inner_wrapper">--}}
{{--                                                <h2 data-animation="animated bounceInLeft">Top news</h2>--}}
{{--                                                <h3 data-animation="animated fadeInLeft">Snow Blows Through Minnesota</h3>--}}
{{--                                                <ul>--}}
{{--                                                    <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>--}}
{{--                                                    </li>--}}
{{--                                                    <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-clock-o"></i> &nbsp;07 : 00 am</a>--}}
{{--                                                    </li>--}}
{{--                                                    <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-thumbs-up"></i> &nbsp;5124 Like</a>--}}
{{--                                                    </li>--}}
{{--                                                    <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-comments"></i> &nbsp;645 Comments</a>--}}
{{--                                                    </li>--}}
{{--                                                </ul>--}}
{{--                                                <div class="divider" data-animation="animated fadeInLeft"></div>--}}
{{--                                                <p data-animation="animated fadeInLeft">Rroin gravida nibh vel velit auctor aliquet aenean Sollicitudin, lorem quis--}}
{{--                                                    <br>bibendum auctor.</p>--}}
{{--                                                <div class="clear"></div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="item">--}}
{{--                            <div class="carousel-captions caption-3">--}}
{{--                                <div class="container">--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 hot_slider_custom_col_img_cont">--}}
{{--                                            <div class="content lr_banner_content_inner_wrapper">--}}
{{--                                                <h2 data-animation="animated bounceInLeft">Top news</h2>--}}
{{--                                                <h3 data-animation="animated fadeInLeft">Snow Blows Through Minnesota</h3>--}}
{{--                                                <ul>--}}
{{--                                                    <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>--}}
{{--                                                    </li>--}}
{{--                                                    <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-clock-o"></i> &nbsp;07 : 00 am</a>--}}
{{--                                                    </li>--}}
{{--                                                    <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-thumbs-up"></i> &nbsp;5124 Like</a>--}}
{{--                                                    </li>--}}
{{--                                                    <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-comments"></i> &nbsp;645 Comments</a>--}}
{{--                                                    </li>--}}
{{--                                                </ul>--}}
{{--                                                <div class="divider" data-animation="animated fadeInLeft"></div>--}}
{{--                                                <p data-animation="animated fadeInLeft">Rroin gravida nibh vel velit auctor aliquet aenean Sollicitudin, lorem quis--}}
{{--                                                    <br>bibendum auctor.</p>--}}
{{--                                                <div class="clear"></div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="carousel-nevigation">--}}
{{--                            <a class="prev" href="#carousel-example-generic" role="button" data-slide="prev"> <i class="fa fa-angle-left"></i>--}}
{{--                            </a>--}}
{{--                            <a class="next" href="#carousel-example-generic" role="button" data-slide="next"> <i class="fa fa-angle-right"></i>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <!--main js file start-->--}}
{{--    <!--resent news Start-->--}}
{{--    <div class="ne_recent_news_main_wrapper">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">--}}
{{--                    <div class="ne_recent_left_side_wrapper">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">--}}
{{--                                <div class="ne_recent_tabs_main_wrapper">--}}
{{--                                    <div class="ne_recent_heading_main_wrapper">--}}
{{--                                        <h2>Recent news</h2>--}}
{{--                                    </div>--}}
{{--                                    <ul class="nav nav-tabs ne_recent_tabs" role="tablist">--}}
{{--                                        <li role="presentation" class="active"><a href="#best" aria-controls="best" role="tab" data-toggle="tab">all</a>--}}
{{--                                        </li>--}}
{{--                                        <li role="presentation"><a href="#hot" aria-controls="hot" role="tab" data-toggle="tab">politics</a>--}}
{{--                                        </li>--}}
{{--                                        <li role="presentation"><a href="#trand" aria-controls="trand" role="tab" data-toggle="tab">technology</a>--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                                <div class="tab-content">--}}
{{--                                    <div role="tabpanel" class="tab-pane fade in active" id="best">--}}
{{--                                        <div class="ss_featured_products">--}}
{{--                                            <div class="owl-carousel owl-theme">--}}
{{--                                                <div class="item">--}}
{{--                                                    <div class="row">--}}
{{--                                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">--}}
{{--                                                            <div class="ne_re_left_top_main_wrapper">--}}
{{--                                                                <div class="ne_re_left_img_main_wrapper">--}}
{{--                                                                    <img src="{{asset('front/images/content/r1.jpg')}}" alt="img">--}}
{{--                                                                    <h2>Bussiness</h2>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="ne_re_left_img_cont_main_wrapper">--}}
{{--                                                                    <h3><a href="#">Award of the year</a></h3>--}}
{{--                                                                    <ul class="ne_re_social1_wrapper">--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 DEC, 2020</a>--}}
{{--                                                                        </li>--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-clock-o"></i> &nbsp;07 : 00 am</a>--}}
{{--                                                                        </li>--}}
{{--                                                                    </ul>--}}
{{--                                                                    <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>--}}
{{--                                                                    <ul class="ne_re_social2_wrapper">--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-thumbs-up"></i> &nbsp;5124 Like</a>--}}
{{--                                                                        </li>--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-comments"></i> &nbsp;645 Comments</a>--}}
{{--                                                                        </li>--}}
{{--                                                                    </ul>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="ne_re_left_bottom_main_wrapper">--}}
{{--                                                                <div class="ne_re_bottom_img">--}}
{{--                                                                    <img src="{{asset('front/images/content/rs1.jpg')}}" alt="rs_img">--}}
{{--                                                                </div>--}}
{{--                                                                <div class="ne_re_bottom_img_cont">--}}
{{--                                                                    <h3><a href="#">These Are the 10 Color</a></h3>--}}
{{--                                                                    <p><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 FEB, 2020</a>--}}
{{--                                                                    </p>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="ne_re_left_bottom_main_wrapper">--}}
{{--                                                                <div class="ne_re_bottom_img">--}}
{{--                                                                    <img src="{{asset('front/images/content/rs2.jpg')}}" alt="rs_img">--}}
{{--                                                                </div>--}}
{{--                                                                <div class="ne_re_bottom_img_cont">--}}
{{--                                                                    <h3><a href="#">--}}
{{--                                                                            Hands on with the Apple </a></h3>--}}
{{--                                                                    <p><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>--}}
{{--                                                                    </p>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">--}}
{{--                                                            <div class="ne_re_left_top_main_wrapper">--}}
{{--                                                                <div class="ne_re_left_img_main_wrapper ne_re_left_img_main_wrapper2">--}}
{{--                                                                    <img src="{{asset('front/images/content/r2.jpg')}}" alt="img">--}}
{{--                                                                    <h2>Sport</h2>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="ne_re_left_img_cont_main_wrapper">--}}
{{--                                                                    <h3><a href="#">The clock is ticking </a></h3>--}}
{{--                                                                    <ul class="ne_re_social1_wrapper">--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 MAR, 2020</a>--}}
{{--                                                                        </li>--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-clock-o"></i> &nbsp;07 : 00 am</a>--}}
{{--                                                                        </li>--}}
{{--                                                                    </ul>--}}
{{--                                                                    <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>--}}
{{--                                                                    <ul class="ne_re_social2_wrapper">--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-thumbs-up"></i> &nbsp;5124 Like</a>--}}
{{--                                                                        </li>--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-comments"></i> &nbsp;645 Comments</a>--}}
{{--                                                                        </li>--}}
{{--                                                                    </ul>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="ne_re_left_bottom_main_wrapper">--}}
{{--                                                                <div class="ne_re_bottom_img">--}}
{{--                                                                    <img src="{{asset('front/images/content/rs3.jpg')}}" alt="rs_img">--}}
{{--                                                                </div>--}}
{{--                                                                <div class="ne_re_bottom_img_cont">--}}
{{--                                                                    <h3><a href="#">Tesla just lost its head </a></h3>--}}
{{--                                                                    <p><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 JAN, 2020</a>--}}
{{--                                                                    </p>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="ne_re_left_bottom_main_wrapper">--}}
{{--                                                                <div class="ne_re_bottom_img">--}}
{{--                                                                    <img src="{{asset('front/images/content/rs4.jpg')}}" alt="rs_img">--}}
{{--                                                                </div>--}}
{{--                                                                <div class="ne_re_bottom_img_cont">--}}
{{--                                                                    <h3><a href="#">Google shifting threatens </a></h3>--}}
{{--                                                                    <p><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 MAR, 2020</a>--}}
{{--                                                                    </p>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="item">--}}
{{--                                                    <div class="row">--}}
{{--                                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">--}}
{{--                                                            <div class="ne_re_left_top_main_wrapper">--}}
{{--                                                                <div class="ne_re_left_img_main_wrapper">--}}
{{--                                                                    <img src="{{asset('front/images/content/r1.jpg')}}" alt="img">--}}
{{--                                                                    <h2>Bussiness</h2>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="ne_re_left_img_cont_main_wrapper">--}}
{{--                                                                    <h3><a href="#">Award of the year</a></h3>--}}
{{--                                                                    <ul class="ne_re_social1_wrapper">--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>--}}
{{--                                                                        </li>--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-clock-o"></i> &nbsp;07 : 00 am</a>--}}
{{--                                                                        </li>--}}
{{--                                                                    </ul>--}}
{{--                                                                    <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>--}}
{{--                                                                    <ul class="ne_re_social2_wrapper">--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-thumbs-up"></i> &nbsp;5124 Like</a>--}}
{{--                                                                        </li>--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-comments"></i> &nbsp;645 Comments</a>--}}
{{--                                                                        </li>--}}
{{--                                                                    </ul>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="ne_re_left_bottom_main_wrapper">--}}
{{--                                                                <div class="ne_re_bottom_img">--}}
{{--                                                                    <img src="{{asset('front/images/content/rs1.jpg')}}" alt="rs_img">--}}
{{--                                                                </div>--}}
{{--                                                                <div class="ne_re_bottom_img_cont">--}}
{{--                                                                    <h3><a href="#">These Are the 10 Color</a></h3>--}}
{{--                                                                    <p><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 JUN, 2020</a>--}}
{{--                                                                    </p>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="ne_re_left_bottom_main_wrapper">--}}
{{--                                                                <div class="ne_re_bottom_img">--}}
{{--                                                                    <img src="{{asset('front/images/content/rs2.jpg')}}" alt="rs_img">--}}
{{--                                                                </div>--}}
{{--                                                                <div class="ne_re_bottom_img_cont">--}}
{{--                                                                    <h3><a href="#">--}}
{{--                                                                            Hands on with the Apple </a></h3>--}}
{{--                                                                    <p><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 AUG, 2020</a>--}}
{{--                                                                    </p>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">--}}
{{--                                                            <div class="ne_re_left_top_main_wrapper">--}}
{{--                                                                <div class="ne_re_left_img_main_wrapper ne_re_left_img_main_wrapper2">--}}
{{--                                                                    <img src="{{asset('front/images/content/r2.jpg')}}" alt="img">--}}
{{--                                                                    <h2>Sport</h2>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="ne_re_left_img_cont_main_wrapper">--}}
{{--                                                                    <h3><a href="#">The clock is ticking </a></h3>--}}
{{--                                                                    <ul class="ne_re_social1_wrapper">--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>--}}
{{--                                                                        </li>--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-clock-o"></i> &nbsp;07 : 00 am</a>--}}
{{--                                                                        </li>--}}
{{--                                                                    </ul>--}}
{{--                                                                    <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>--}}
{{--                                                                    <ul class="ne_re_social2_wrapper">--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-thumbs-up"></i> &nbsp;5124 Like</a>--}}
{{--                                                                        </li>--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-comments"></i> &nbsp;645 Comments</a>--}}
{{--                                                                        </li>--}}
{{--                                                                    </ul>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="ne_re_left_bottom_main_wrapper">--}}
{{--                                                                <div class="ne_re_bottom_img">--}}
{{--                                                                    <img src="{{asset('front/images/content/rs3.jpg')}}" alt="rs_img">--}}
{{--                                                                </div>--}}
{{--                                                                <div class="ne_re_bottom_img_cont">--}}
{{--                                                                    <h3><a href="#">Tesla just lost its head </a></h3>--}}
{{--                                                                    <p><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 SEP, 2020</a>--}}
{{--                                                                    </p>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="ne_re_left_bottom_main_wrapper">--}}
{{--                                                                <div class="ne_re_bottom_img">--}}
{{--                                                                    <img src="{{asset('front/images/content/rs4.jpg')}}" alt="rs_img">--}}
{{--                                                                </div>--}}
{{--                                                                <div class="ne_re_bottom_img_cont">--}}
{{--                                                                    <h3><a href="#">Google shifting threatens </a></h3>--}}
{{--                                                                    <p><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>--}}
{{--                                                                    </p>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="item">--}}
{{--                                                    <div class="row">--}}
{{--                                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">--}}
{{--                                                            <div class="ne_re_left_top_main_wrapper">--}}
{{--                                                                <div class="ne_re_left_img_main_wrapper">--}}
{{--                                                                    <img src="{{asset('front/images/content/r1.jpg')}}" alt="img">--}}
{{--                                                                    <h2>Bussiness</h2>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="ne_re_left_img_cont_main_wrapper">--}}
{{--                                                                    <h3><a href="#">Award of the year</a></h3>--}}
{{--                                                                    <ul class="ne_re_social1_wrapper">--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>--}}
{{--                                                                        </li>--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-clock-o"></i> &nbsp;07 : 00 am</a>--}}
{{--                                                                        </li>--}}
{{--                                                                    </ul>--}}
{{--                                                                    <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>--}}
{{--                                                                    <ul class="ne_re_social2_wrapper">--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-thumbs-up"></i> &nbsp;5124 Like</a>--}}
{{--                                                                        </li>--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-comments"></i> &nbsp;645 Comments</a>--}}
{{--                                                                        </li>--}}
{{--                                                                    </ul>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="ne_re_left_bottom_main_wrapper">--}}
{{--                                                                <div class="ne_re_bottom_img">--}}
{{--                                                                    <img src="{{asset('front/images/content/rs1.jpg')}}" alt="rs_img">--}}
{{--                                                                </div>--}}
{{--                                                                <div class="ne_re_bottom_img_cont">--}}
{{--                                                                    <h3><a href="#">These Are the 10 Color</a></h3>--}}
{{--                                                                    <p><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 FEB, 2020</a>--}}
{{--                                                                    </p>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="ne_re_left_bottom_main_wrapper">--}}
{{--                                                                <div class="ne_re_bottom_img">--}}
{{--                                                                    <img src="{{asset('front/images/content/rs2.jpg')}}" alt="rs_img">--}}
{{--                                                                </div>--}}
{{--                                                                <div class="ne_re_bottom_img_cont">--}}
{{--                                                                    <h3><a href="#">Google shifting threatens </a></h3>--}}
{{--                                                                    <p><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>--}}
{{--                                                                    </p>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">--}}
{{--                                                            <div class="ne_re_left_top_main_wrapper">--}}
{{--                                                                <div class="ne_re_left_img_main_wrapper ne_re_left_img_main_wrapper2">--}}
{{--                                                                    <img src="{{asset('front/images/content/r2.jpg')}}" alt="img">--}}
{{--                                                                    <h2>Sport</h2>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="ne_re_left_img_cont_main_wrapper">--}}
{{--                                                                    <h3><a href="#">The clock is ticking </a></h3>--}}
{{--                                                                    <ul class="ne_re_social1_wrapper">--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>--}}
{{--                                                                        </li>--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-clock-o"></i> &nbsp;07 : 00 am</a>--}}
{{--                                                                        </li>--}}
{{--                                                                    </ul>--}}
{{--                                                                    <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>--}}
{{--                                                                    <ul class="ne_re_social2_wrapper">--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-thumbs-up"></i> &nbsp;5124 Like</a>--}}
{{--                                                                        </li>--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-comments"></i> &nbsp;645 Comments</a>--}}
{{--                                                                        </li>--}}
{{--                                                                    </ul>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="ne_re_left_bottom_main_wrapper">--}}
{{--                                                                <div class="ne_re_bottom_img">--}}
{{--                                                                    <img src="{{asset('front/images/content/rs3.jpg')}}" alt="rs_img">--}}
{{--                                                                </div>--}}
{{--                                                                <div class="ne_re_bottom_img_cont">--}}
{{--                                                                    <h3><a href="#">Tesla just lost its head </a></h3>--}}
{{--                                                                    <p><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 APR, 2020</a>--}}
{{--                                                                    </p>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="ne_re_left_bottom_main_wrapper">--}}
{{--                                                                <div class="ne_re_bottom_img">--}}
{{--                                                                    <img src="{{asset('front/images/content/rs4.jpg')}}" alt="rs_img">--}}
{{--                                                                </div>--}}
{{--                                                                <div class="ne_re_bottom_img_cont">--}}
{{--                                                                    <h3><a href="#">--}}
{{--                                                                            Hands on with the Apple </a></h3>--}}
{{--                                                                    <p><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>--}}
{{--                                                                    </p>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="item">--}}
{{--                                                    <div class="row">--}}
{{--                                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">--}}
{{--                                                            <div class="ne_re_left_top_main_wrapper">--}}
{{--                                                                <div class="ne_re_left_img_main_wrapper">--}}
{{--                                                                    <img src="{{asset('front/images/content/r1.jpg')}}" alt="img">--}}
{{--                                                                    <h2>Bussiness</h2>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="ne_re_left_img_cont_main_wrapper">--}}
{{--                                                                    <h3><a href="#">Award of the year</a></h3>--}}
{{--                                                                    <ul class="ne_re_social1_wrapper">--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-calendar"></i> &nbsp;2 NOV, 2020</a>--}}
{{--                                                                        </li>--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-clock-o"></i> &nbsp;07 : 00 am</a>--}}
{{--                                                                        </li>--}}
{{--                                                                    </ul>--}}
{{--                                                                    <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>--}}
{{--                                                                    <ul class="ne_re_social2_wrapper">--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-thumbs-up"></i> &nbsp;5124 Like</a>--}}
{{--                                                                        </li>--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-comments"></i> &nbsp;645 Comments</a>--}}
{{--                                                                        </li>--}}
{{--                                                                    </ul>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="ne_re_left_bottom_main_wrapper">--}}
{{--                                                                <div class="ne_re_bottom_img">--}}
{{--                                                                    <img src="{{asset('front/images/content/rs1.jpg')}}" alt="rs_img">--}}
{{--                                                                </div>--}}
{{--                                                                <div class="ne_re_bottom_img_cont">--}}
{{--                                                                    <h3><a href="#">These Are the 10 Color</a></h3>--}}
{{--                                                                    <p><a href="#"><i class="fa fa-calendar"></i> &nbsp;5 MAR, 2020</a>--}}
{{--                                                                    </p>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="ne_re_left_bottom_main_wrapper">--}}
{{--                                                                <div class="ne_re_bottom_img">--}}
{{--                                                                    <img src="{{asset('front/images/content/rs2.jpg')}}" alt="rs_img">--}}
{{--                                                                </div>--}}
{{--                                                                <div class="ne_re_bottom_img_cont">--}}
{{--                                                                    <h3><a href="#">Google shifting threatens </a></h3>--}}
{{--                                                                    <p><a href="#"><i class="fa fa-calendar"></i> &nbsp;15 DEC, 2020</a>--}}
{{--                                                                    </p>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">--}}
{{--                                                            <div class="ne_re_left_top_main_wrapper">--}}
{{--                                                                <div class="ne_re_left_img_main_wrapper ne_re_left_img_main_wrapper2">--}}
{{--                                                                    <img src="{{asset('front/images/content/r2.jpg')}}" alt="img">--}}
{{--                                                                    <h2>Sport</h2>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="ne_re_left_img_cont_main_wrapper">--}}
{{--                                                                    <h3><a href="#">The clock is ticking </a></h3>--}}
{{--                                                                    <ul class="ne_re_social1_wrapper">--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>--}}
{{--                                                                        </li>--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-clock-o"></i> &nbsp;07 : 00 am</a>--}}
{{--                                                                        </li>--}}
{{--                                                                    </ul>--}}
{{--                                                                    <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>--}}
{{--                                                                    <ul class="ne_re_social2_wrapper">--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-thumbs-up"></i> &nbsp;5124 Like</a>--}}
{{--                                                                        </li>--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-comments"></i> &nbsp;645 Comments</a>--}}
{{--                                                                        </li>--}}
{{--                                                                    </ul>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="ne_re_left_bottom_main_wrapper">--}}
{{--                                                                <div class="ne_re_bottom_img">--}}
{{--                                                                    <img src="{{asset('front/images/content/rs3.jpg')}}" alt="rs_img">--}}
{{--                                                                </div>--}}
{{--                                                                <div class="ne_re_bottom_img_cont">--}}
{{--                                                                    <h3><a href="#">Tesla just lost its head </a></h3>--}}
{{--                                                                    <p><a href="#"><i class="fa fa-calendar"></i> &nbsp;14 NOV, 2020</a>--}}
{{--                                                                    </p>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="ne_re_left_bottom_main_wrapper">--}}
{{--                                                                <div class="ne_re_bottom_img">--}}
{{--                                                                    <img src="{{asset('front/images/content/rs4.jpg')}}" alt="rs_img">--}}
{{--                                                                </div>--}}
{{--                                                                <div class="ne_re_bottom_img_cont">--}}
{{--                                                                    <h3><a href="#">--}}
{{--                                                                            Hands on with the Apple  </a></h3>--}}
{{--                                                                    <p><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>--}}
{{--                                                                    </p>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="item">--}}
{{--                                                    <div class="row">--}}
{{--                                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">--}}
{{--                                                            <div class="ne_re_left_top_main_wrapper">--}}
{{--                                                                <div class="ne_re_left_img_main_wrapper">--}}
{{--                                                                    <img src="{{asset('front/images/content/r1.jpg')}}" alt="img">--}}
{{--                                                                    <h2>Bussiness</h2>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="ne_re_left_img_cont_main_wrapper">--}}
{{--                                                                    <h3><a href="#">Award of the year</a></h3>--}}
{{--                                                                    <ul class="ne_re_social1_wrapper">--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>--}}
{{--                                                                        </li>--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-clock-o"></i> &nbsp;07 : 00 am</a>--}}
{{--                                                                        </li>--}}
{{--                                                                    </ul>--}}
{{--                                                                    <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>--}}
{{--                                                                    <ul class="ne_re_social2_wrapper">--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-thumbs-up"></i> &nbsp;5124 Like</a>--}}
{{--                                                                        </li>--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-comments"></i> &nbsp;645 Comments</a>--}}
{{--                                                                        </li>--}}
{{--                                                                    </ul>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="ne_re_left_bottom_main_wrapper">--}}
{{--                                                                <div class="ne_re_bottom_img">--}}
{{--                                                                    <img src="{{asset('front/images/content/rs1.jpg')}}" alt="rs_img">--}}
{{--                                                                </div>--}}
{{--                                                                <div class="ne_re_bottom_img_cont">--}}
{{--                                                                    <h3><a href="#">These Are the 10 Color</a></h3>--}}
{{--                                                                    <p><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>--}}
{{--                                                                    </p>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="ne_re_left_bottom_main_wrapper">--}}
{{--                                                                <div class="ne_re_bottom_img">--}}
{{--                                                                    <img src="{{asset('front/images/content/rs2.jpg')}}" alt="rs_img">--}}
{{--                                                                </div>--}}
{{--                                                                <div class="ne_re_bottom_img_cont">--}}
{{--                                                                    <h3><a href="#">Google shifting threatens </a></h3>--}}
{{--                                                                    <p><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>--}}
{{--                                                                    </p>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">--}}
{{--                                                            <div class="ne_re_left_top_main_wrapper">--}}
{{--                                                                <div class="ne_re_left_img_main_wrapper ne_re_left_img_main_wrapper2">--}}
{{--                                                                    <img src="{{asset('front/images/content/r2.jpg')}}" alt="img">--}}
{{--                                                                    <h2>Sport</h2>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="ne_re_left_img_cont_main_wrapper">--}}
{{--                                                                    <h3><a href="#">The clock is ticking </a></h3>--}}
{{--                                                                    <ul class="ne_re_social1_wrapper">--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>--}}
{{--                                                                        </li>--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-clock-o"></i> &nbsp;07 : 00 am</a>--}}
{{--                                                                        </li>--}}
{{--                                                                    </ul>--}}
{{--                                                                    <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>--}}
{{--                                                                    <ul class="ne_re_social2_wrapper">--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-thumbs-up"></i> &nbsp;5124 Like</a>--}}
{{--                                                                        </li>--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-comments"></i> &nbsp;645 Comments</a>--}}
{{--                                                                        </li>--}}
{{--                                                                    </ul>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="ne_re_left_bottom_main_wrapper">--}}
{{--                                                                <div class="ne_re_bottom_img">--}}
{{--                                                                    <img src="{{asset('front/images/content/rs3.jpg')}}" alt="rs_img">--}}
{{--                                                                </div>--}}
{{--                                                                <div class="ne_re_bottom_img_cont">--}}
{{--                                                                    <h3><a href="#">Tesla just lost its head </a></h3>--}}
{{--                                                                    <p><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>--}}
{{--                                                                    </p>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="ne_re_left_bottom_main_wrapper">--}}
{{--                                                                <div class="ne_re_bottom_img">--}}
{{--                                                                    <img src="{{asset('front/images/content/rs4.jpg')}}" alt="rs_img">--}}
{{--                                                                </div>--}}
{{--                                                                <div class="ne_re_bottom_img_cont">--}}
{{--                                                                    <h3><a href="#">--}}
{{--                                                                            Hands on with the Apple </a></h3>--}}
{{--                                                                    <p><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>--}}
{{--                                                                    </p>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div role="tabpanel" class="tab-pane fade" id="hot">--}}
{{--                                        <div class="ss_featured_products">--}}
{{--                                            <div class="owl-carousel owl-theme">--}}
{{--                                                <div class="item">--}}
{{--                                                    <div class="row">--}}
{{--                                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">--}}
{{--                                                            <div class="ne_re_left_top_main_wrapper">--}}
{{--                                                                <div class="ne_re_left_img_main_wrapper">--}}
{{--                                                                    <img src="{{asset('front/images/content/r1.jpg')}}" alt="img">--}}
{{--                                                                    <h2>Bussiness</h2>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="ne_re_left_img_cont_main_wrapper">--}}
{{--                                                                    <h3><a href="#">Award of the year</a></h3>--}}
{{--                                                                    <ul class="ne_re_social1_wrapper">--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>--}}
{{--                                                                        </li>--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-clock-o"></i> &nbsp;07 : 00 am</a>--}}
{{--                                                                        </li>--}}
{{--                                                                    </ul>--}}
{{--                                                                    <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>--}}
{{--                                                                    <ul class="ne_re_social2_wrapper">--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-thumbs-up"></i> &nbsp;5124 Like</a>--}}
{{--                                                                        </li>--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-comments"></i> &nbsp;645 Comments</a>--}}
{{--                                                                        </li>--}}
{{--                                                                    </ul>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="ne_re_left_bottom_main_wrapper">--}}
{{--                                                                <div class="ne_re_bottom_img">--}}
{{--                                                                    <img src="{{asset('front/images/content/rs1.jpg')}}" alt="rs_img">--}}
{{--                                                                </div>--}}
{{--                                                                <div class="ne_re_bottom_img_cont">--}}
{{--                                                                    <h3><a href="#">Tesla just lost its head </a></h3>--}}
{{--                                                                    <p><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>--}}
{{--                                                                    </p>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="ne_re_left_bottom_main_wrapper">--}}
{{--                                                                <div class="ne_re_bottom_img">--}}
{{--                                                                    <img src="{{asset('front/images/content/rs2.jpg')}}" alt="rs_img">--}}
{{--                                                                </div>--}}
{{--                                                                <div class="ne_re_bottom_img_cont">--}}
{{--                                                                    <h3><a href="#">Google shifting threatens </a></h3>--}}
{{--                                                                    <p><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>--}}
{{--                                                                    </p>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">--}}
{{--                                                            <div class="ne_re_left_top_main_wrapper">--}}
{{--                                                                <div class="ne_re_left_img_main_wrapper ne_re_left_img_main_wrapper2">--}}
{{--                                                                    <img src="{{asset('front/images/content/r2.jpg')}}" alt="img">--}}
{{--                                                                    <h2>Sport</h2>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="ne_re_left_img_cont_main_wrapper">--}}
{{--                                                                    <h3><a href="#">The clock is ticking </a></h3>--}}
{{--                                                                    <ul class="ne_re_social1_wrapper">--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>--}}
{{--                                                                        </li>--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-clock-o"></i> &nbsp;07 : 00 am</a>--}}
{{--                                                                        </li>--}}
{{--                                                                    </ul>--}}
{{--                                                                    <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>--}}
{{--                                                                    <ul class="ne_re_social2_wrapper">--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-thumbs-up"></i> &nbsp;5124 Like</a>--}}
{{--                                                                        </li>--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-comments"></i> &nbsp;645 Comments</a>--}}
{{--                                                                        </li>--}}
{{--                                                                    </ul>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="ne_re_left_bottom_main_wrapper">--}}
{{--                                                                <div class="ne_re_bottom_img">--}}
{{--                                                                    <img src="{{asset('front/images/content/rs3.jpg')}}" alt="rs_img">--}}
{{--                                                                </div>--}}
{{--                                                                <div class="ne_re_bottom_img_cont">--}}
{{--                                                                    <h3><a href="#">Tesla just lost its head </a></h3>--}}
{{--                                                                    <p><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>--}}
{{--                                                                    </p>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="ne_re_left_bottom_main_wrapper">--}}
{{--                                                                <div class="ne_re_bottom_img">--}}
{{--                                                                    <img src="{{asset('front/images/content/rs4.jpg')}}" alt="rs_img">--}}
{{--                                                                </div>--}}
{{--                                                                <div class="ne_re_bottom_img_cont">--}}
{{--                                                                    <h3><a href="#">--}}
{{--                                                                            Hands on with the Apple </a></h3>--}}
{{--                                                                    <p><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>--}}
{{--                                                                    </p>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="item">--}}
{{--                                                    <div class="row">--}}
{{--                                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">--}}
{{--                                                            <div class="ne_re_left_top_main_wrapper">--}}
{{--                                                                <div class="ne_re_left_img_main_wrapper">--}}
{{--                                                                    <img src="{{asset('front/images/content/r1.jpg')}}" alt="img">--}}
{{--                                                                    <h2>Bussiness</h2>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="ne_re_left_img_cont_main_wrapper">--}}
{{--                                                                    <h3><a href="#">Award of the year</a></h3>--}}
{{--                                                                    <ul class="ne_re_social1_wrapper">--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>--}}
{{--                                                                        </li>--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-clock-o"></i> &nbsp;07 : 00 am</a>--}}
{{--                                                                        </li>--}}
{{--                                                                    </ul>--}}
{{--                                                                    <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>--}}
{{--                                                                    <ul class="ne_re_social2_wrapper">--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-thumbs-up"></i> &nbsp;5124 Like</a>--}}
{{--                                                                        </li>--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-comments"></i> &nbsp;645 Comments</a>--}}
{{--                                                                        </li>--}}
{{--                                                                    </ul>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="ne_re_left_bottom_main_wrapper">--}}
{{--                                                                <div class="ne_re_bottom_img">--}}
{{--                                                                    <img src="{{asset('front/images/content/rs1.jpg')}}" alt="rs_img">--}}
{{--                                                                </div>--}}
{{--                                                                <div class="ne_re_bottom_img_cont">--}}
{{--                                                                    <h3><a href="#">These Are the 10 Color</a></h3>--}}
{{--                                                                    <p><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>--}}
{{--                                                                    </p>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="ne_re_left_bottom_main_wrapper">--}}
{{--                                                                <div class="ne_re_bottom_img">--}}
{{--                                                                    <img src="{{asset('front/images/content/rs2.jpg')}}" alt="rs_img">--}}
{{--                                                                </div>--}}
{{--                                                                <div class="ne_re_bottom_img_cont">--}}
{{--                                                                    <h3><a href="#">Google shifting threatens </a></h3>--}}
{{--                                                                    <p><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>--}}
{{--                                                                    </p>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">--}}
{{--                                                            <div class="ne_re_left_top_main_wrapper">--}}
{{--                                                                <div class="ne_re_left_img_main_wrapper ne_re_left_img_main_wrapper2">--}}
{{--                                                                    <img src="{{asset('front/images/content/r2.jpg')}}" alt="img">--}}
{{--                                                                    <h2>Sport</h2>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="ne_re_left_img_cont_main_wrapper">--}}
{{--                                                                    <h3><a href="#">The clock is ticking </a></h3>--}}
{{--                                                                    <ul class="ne_re_social1_wrapper">--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>--}}
{{--                                                                        </li>--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-clock-o"></i> &nbsp;07 : 00 am</a>--}}
{{--                                                                        </li>--}}
{{--                                                                    </ul>--}}
{{--                                                                    <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>--}}
{{--                                                                    <ul class="ne_re_social2_wrapper">--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-thumbs-up"></i> &nbsp;5124 Like</a>--}}
{{--                                                                        </li>--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-comments"></i> &nbsp;645 Comments</a>--}}
{{--                                                                        </li>--}}
{{--                                                                    </ul>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="ne_re_left_bottom_main_wrapper">--}}
{{--                                                                <div class="ne_re_bottom_img">--}}
{{--                                                                    <img src="{{asset('front/images/content/rs3.jpg')}}" alt="rs_img">--}}
{{--                                                                </div>--}}
{{--                                                                <div class="ne_re_bottom_img_cont">--}}
{{--                                                                    <h3><a href="#">Tesla just lost its head </a></h3>--}}
{{--                                                                    <p><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>--}}
{{--                                                                    </p>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="ne_re_left_bottom_main_wrapper">--}}
{{--                                                                <div class="ne_re_bottom_img">--}}
{{--                                                                    <img src="{{asset('front/images/content/rs4.jpg')}}" alt="rs_img">--}}
{{--                                                                </div>--}}
{{--                                                                <div class="ne_re_bottom_img_cont">--}}
{{--                                                                    <h3><a href="#">--}}
{{--                                                                            Hands on with the Apple </a></h3>--}}
{{--                                                                    <p><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>--}}
{{--                                                                    </p>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="item">--}}
{{--                                                    <div class="row">--}}
{{--                                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">--}}
{{--                                                            <div class="ne_re_left_top_main_wrapper">--}}
{{--                                                                <div class="ne_re_left_img_main_wrapper">--}}
{{--                                                                    <img src="{{asset('front/images/content/r1.jpg')}}" alt="img">--}}
{{--                                                                    <h2>Bussiness</h2>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="ne_re_left_img_cont_main_wrapper">--}}
{{--                                                                    <h3><a href="#">Award of the year</a></h3>--}}
{{--                                                                    <ul class="ne_re_social1_wrapper">--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>--}}
{{--                                                                        </li>--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-clock-o"></i> &nbsp;07 : 00 am</a>--}}
{{--                                                                        </li>--}}
{{--                                                                    </ul>--}}
{{--                                                                    <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>--}}
{{--                                                                    <ul class="ne_re_social2_wrapper">--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-thumbs-up"></i> &nbsp;5124 Like</a>--}}
{{--                                                                        </li>--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-comments"></i> &nbsp;645 Comments</a>--}}
{{--                                                                        </li>--}}
{{--                                                                    </ul>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="ne_re_left_bottom_main_wrapper">--}}
{{--                                                                <div class="ne_re_bottom_img">--}}
{{--                                                                    <img src="{{asset('front/images/content/rs1.jpg')}}" alt="rs_img">--}}
{{--                                                                </div>--}}
{{--                                                                <div class="ne_re_bottom_img_cont">--}}
{{--                                                                    <h3><a href="#">Tesla just lost its head </a></h3>--}}
{{--                                                                    <p><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>--}}
{{--                                                                    </p>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="ne_re_left_bottom_main_wrapper">--}}
{{--                                                                <div class="ne_re_bottom_img">--}}
{{--                                                                    <img src="{{asset('front/images/content/rs2.jpg')}}" alt="rs_img">--}}
{{--                                                                </div>--}}
{{--                                                                <div class="ne_re_bottom_img_cont">--}}
{{--                                                                    <h3><a href="#">Google shifting threatens </a></h3>--}}
{{--                                                                    <p><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>--}}
{{--                                                                    </p>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">--}}
{{--                                                            <div class="ne_re_left_top_main_wrapper">--}}
{{--                                                                <div class="ne_re_left_img_main_wrapper ne_re_left_img_main_wrapper2">--}}
{{--                                                                    <img src="{{asset('front/images/content/r2.jpg')}}" alt="img">--}}
{{--                                                                    <h2>Sport</h2>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="ne_re_left_img_cont_main_wrapper">--}}
{{--                                                                    <h3><a href="#">The clock is ticking </a></h3>--}}
{{--                                                                    <ul class="ne_re_social1_wrapper">--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>--}}
{{--                                                                        </li>--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-clock-o"></i> &nbsp;07 : 00 am</a>--}}
{{--                                                                        </li>--}}
{{--                                                                    </ul>--}}
{{--                                                                    <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>--}}
{{--                                                                    <ul class="ne_re_social2_wrapper">--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-thumbs-up"></i> &nbsp;5124 Like</a>--}}
{{--                                                                        </li>--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-comments"></i> &nbsp;645 Comments</a>--}}
{{--                                                                        </li>--}}
{{--                                                                    </ul>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="ne_re_left_bottom_main_wrapper">--}}
{{--                                                                <div class="ne_re_bottom_img">--}}
{{--                                                                    <img src="{{asset('front/images/content/rs3.jpg')}}" alt="rs_img">--}}
{{--                                                                </div>--}}
{{--                                                                <div class="ne_re_bottom_img_cont">--}}
{{--                                                                    <h3><a href="#">Tesla just lost its head </a></h3>--}}
{{--                                                                    <p><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>--}}
{{--                                                                    </p>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="ne_re_left_bottom_main_wrapper">--}}
{{--                                                                <div class="ne_re_bottom_img">--}}
{{--                                                                    <img src="{{asset('front/images/content/rs4.jpg')}}" alt="rs_img">--}}
{{--                                                                </div>--}}
{{--                                                                <div class="ne_re_bottom_img_cont">--}}
{{--                                                                    <h3><a href="#">--}}
{{--                                                                            Hands on with the Apple </a></h3>--}}
{{--                                                                    <p><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>--}}
{{--                                                                    </p>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="item">--}}
{{--                                                    <div class="row">--}}
{{--                                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">--}}
{{--                                                            <div class="ne_re_left_top_main_wrapper">--}}
{{--                                                                <div class="ne_re_left_img_main_wrapper">--}}
{{--                                                                    <img src="{{asset('front/images/content/r1.jpg')}}" alt="img">--}}
{{--                                                                    <h2>Bussiness</h2>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="ne_re_left_img_cont_main_wrapper">--}}
{{--                                                                    <h3><a href="#">Award of the year</a></h3>--}}
{{--                                                                    <ul class="ne_re_social1_wrapper">--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>--}}
{{--                                                                        </li>--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-clock-o"></i> &nbsp;07 : 00 am</a>--}}
{{--                                                                        </li>--}}
{{--                                                                    </ul>--}}
{{--                                                                    <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>--}}
{{--                                                                    <ul class="ne_re_social2_wrapper">--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-thumbs-up"></i> &nbsp;5124 Like</a>--}}
{{--                                                                        </li>--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-comments"></i> &nbsp;645 Comments</a>--}}
{{--                                                                        </li>--}}
{{--                                                                    </ul>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="ne_re_left_bottom_main_wrapper">--}}
{{--                                                                <div class="ne_re_bottom_img">--}}
{{--                                                                    <img src="{{asset('front/images/content/rs1.jpg')}}" alt="rs_img">--}}
{{--                                                                </div>--}}
{{--                                                                <div class="ne_re_bottom_img_cont">--}}
{{--                                                                    <h3><a href="#">These Are the 10 Color</a></h3>--}}
{{--                                                                    <p><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>--}}
{{--                                                                    </p>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="ne_re_left_bottom_main_wrapper">--}}
{{--                                                                <div class="ne_re_bottom_img">--}}
{{--                                                                    <img src="{{asset('front/images/content/rs2.jpg')}}" alt="rs_img">--}}
{{--                                                                </div>--}}
{{--                                                                <div class="ne_re_bottom_img_cont">--}}
{{--                                                                    <h3><a href="#">Google shifting threatens </a></h3>--}}
{{--                                                                    <p><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>--}}
{{--                                                                    </p>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">--}}
{{--                                                            <div class="ne_re_left_top_main_wrapper">--}}
{{--                                                                <div class="ne_re_left_img_main_wrapper ne_re_left_img_main_wrapper2">--}}
{{--                                                                    <img src="{{asset('front/images/content/r2.jpg')}}" alt="img">--}}
{{--                                                                    <h2>Sport</h2>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="ne_re_left_img_cont_main_wrapper">--}}
{{--                                                                    <h3><a href="#">The clock is ticking </a></h3>--}}
{{--                                                                    <ul class="ne_re_social1_wrapper">--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>--}}
{{--                                                                        </li>--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-clock-o"></i> &nbsp;07 : 00 am</a>--}}
{{--                                                                        </li>--}}
{{--                                                                    </ul>--}}
{{--                                                                    <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>--}}
{{--                                                                    <ul class="ne_re_social2_wrapper">--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-thumbs-up"></i> &nbsp;5124 Like</a>--}}
{{--                                                                        </li>--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-comments"></i> &nbsp;645 Comments</a>--}}
{{--                                                                        </li>--}}
{{--                                                                    </ul>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="ne_re_left_bottom_main_wrapper">--}}
{{--                                                                <div class="ne_re_bottom_img">--}}
{{--                                                                    <img src="{{asset('front/images/content/rs3.jpg')}}" alt="rs_img">--}}
{{--                                                                </div>--}}
{{--                                                                <div class="ne_re_bottom_img_cont">--}}
{{--                                                                    <h3><a href="#">Tesla just lost its head </a></h3>--}}
{{--                                                                    <p><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>--}}
{{--                                                                    </p>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="ne_re_left_bottom_main_wrapper">--}}
{{--                                                                <div class="ne_re_bottom_img">--}}
{{--                                                                    <img src="{{asset('front/images/content/rs4.jpg')}}" alt="rs_img">--}}
{{--                                                                </div>--}}
{{--                                                                <div class="ne_re_bottom_img_cont">--}}
{{--                                                                    <h3><a href="#">--}}
{{--                                                                            Hands on with the Apple </a></h3>--}}
{{--                                                                    <p><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>--}}
{{--                                                                    </p>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="item">--}}
{{--                                                    <div class="row">--}}
{{--                                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">--}}
{{--                                                            <div class="ne_re_left_top_main_wrapper">--}}
{{--                                                                <div class="ne_re_left_img_main_wrapper">--}}
{{--                                                                    <img src="{{asset('front/images/content/r1.jpg')}}" alt="img">--}}
{{--                                                                    <h2>Bussiness</h2>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="ne_re_left_img_cont_main_wrapper">--}}
{{--                                                                    <h3><a href="#">Award of the year</a></h3>--}}
{{--                                                                    <ul class="ne_re_social1_wrapper">--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>--}}
{{--                                                                        </li>--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-clock-o"></i> &nbsp;07 : 00 am</a>--}}
{{--                                                                        </li>--}}
{{--                                                                    </ul>--}}
{{--                                                                    <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>--}}
{{--                                                                    <ul class="ne_re_social2_wrapper">--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-thumbs-up"></i> &nbsp;5124 Like</a>--}}
{{--                                                                        </li>--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-comments"></i> &nbsp;645 Comments</a>--}}
{{--                                                                        </li>--}}
{{--                                                                    </ul>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="ne_re_left_bottom_main_wrapper">--}}
{{--                                                                <div class="ne_re_bottom_img">--}}
{{--                                                                    <img src="{{asset('front/images/content/rs1.jpg')}}" alt="rs_img">--}}
{{--                                                                </div>--}}
{{--                                                                <div class="ne_re_bottom_img_cont">--}}
{{--                                                                    <h3><a href="#">These Are the 10 Color</a></h3>--}}
{{--                                                                    <p><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>--}}
{{--                                                                    </p>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="ne_re_left_bottom_main_wrapper">--}}
{{--                                                                <div class="ne_re_bottom_img">--}}
{{--                                                                    <img src="{{asset('front/images/content/rs2.jpg')}}" alt="rs_img">--}}
{{--                                                                </div>--}}
{{--                                                                <div class="ne_re_bottom_img_cont">--}}
{{--                                                                    <h3><a href="#">Google shifting threatens</a></h3>--}}
{{--                                                                    <p><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>--}}
{{--                                                                    </p>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">--}}
{{--                                                            <div class="ne_re_left_top_main_wrapper">--}}
{{--                                                                <div class="ne_re_left_img_main_wrapper ne_re_left_img_main_wrapper2">--}}
{{--                                                                    <img src="{{asset('front/images/content/r2.jpg')}}" alt="img">--}}
{{--                                                                    <h2>Sport</h2>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="ne_re_left_img_cont_main_wrapper">--}}
{{--                                                                    <h3><a href="#">The clock is ticking </a></h3>--}}
{{--                                                                    <ul class="ne_re_social1_wrapper">--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>--}}
{{--                                                                        </li>--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-clock-o"></i> &nbsp;07 : 00 am</a>--}}
{{--                                                                        </li>--}}
{{--                                                                    </ul>--}}
{{--                                                                    <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>--}}
{{--                                                                    <ul class="ne_re_social2_wrapper">--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-thumbs-up"></i> &nbsp;5124 Like</a>--}}
{{--                                                                        </li>--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-comments"></i> &nbsp;645 Comments</a>--}}
{{--                                                                        </li>--}}
{{--                                                                    </ul>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="ne_re_left_bottom_main_wrapper">--}}
{{--                                                                <div class="ne_re_bottom_img">--}}
{{--                                                                    <img src="{{asset('front/images/content/rs3.jpg')}}" alt="rs_img">--}}
{{--                                                                </div>--}}
{{--                                                                <div class="ne_re_bottom_img_cont">--}}
{{--                                                                    <h3><a href="#">Tesla just lost its head </a></h3>--}}
{{--                                                                    <p><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>--}}
{{--                                                                    </p>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="ne_re_left_bottom_main_wrapper">--}}
{{--                                                                <div class="ne_re_bottom_img">--}}
{{--                                                                    <img src="{{asset('front/images/content/rs4.jpg')}}" alt="rs_img">--}}
{{--                                                                </div>--}}
{{--                                                                <div class="ne_re_bottom_img_cont">--}}
{{--                                                                    <h3><a href="#">--}}
{{--                                                                            Hands on with the Apple </a></h3>--}}
{{--                                                                    <p><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>--}}
{{--                                                                    </p>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div role="tabpanel" class="tab-pane fade" id="trand">--}}
{{--                                        <div class="ss_featured_products">--}}
{{--                                            <div class="owl-carousel owl-theme">--}}
{{--                                                <div class="item">--}}
{{--                                                    <div class="row">--}}
{{--                                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">--}}
{{--                                                            <div class="ne_re_left_top_main_wrapper">--}}
{{--                                                                <div class="ne_re_left_img_main_wrapper">--}}
{{--                                                                    <img src="{{asset('front/images/content/r1.jpg')}}" alt="img">--}}
{{--                                                                    <h2>Bussiness</h2>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="ne_re_left_img_cont_main_wrapper">--}}
{{--                                                                    <h3><a href="#">Award of the year</a></h3>--}}
{{--                                                                    <ul class="ne_re_social1_wrapper">--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>--}}
{{--                                                                        </li>--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-clock-o"></i> &nbsp;07 : 00 am</a>--}}
{{--                                                                        </li>--}}
{{--                                                                    </ul>--}}
{{--                                                                    <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>--}}
{{--                                                                    <ul class="ne_re_social2_wrapper">--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-thumbs-up"></i> &nbsp;5124 Like</a>--}}
{{--                                                                        </li>--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-comments"></i> &nbsp;645 Comments</a>--}}
{{--                                                                        </li>--}}
{{--                                                                    </ul>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="ne_re_left_bottom_main_wrapper">--}}
{{--                                                                <div class="ne_re_bottom_img">--}}
{{--                                                                    <img src="{{asset('front/images/content/rs1.jpg')}}" alt="rs_img">--}}
{{--                                                                </div>--}}
{{--                                                                <div class="ne_re_bottom_img_cont">--}}
{{--                                                                    <h3><a href="#">These Are the 10 Color</a></h3>--}}
{{--                                                                    <p><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>--}}
{{--                                                                    </p>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="ne_re_left_bottom_main_wrapper">--}}
{{--                                                                <div class="ne_re_bottom_img">--}}
{{--                                                                    <img src="{{asset('front/images/content/rs2.jpg')}}" alt="rs_img">--}}
{{--                                                                </div>--}}
{{--                                                                <div class="ne_re_bottom_img_cont">--}}
{{--                                                                    <h3><a href="#">Google shifting threatens</a></h3>--}}
{{--                                                                    <p><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>--}}
{{--                                                                    </p>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">--}}
{{--                                                            <div class="ne_re_left_top_main_wrapper">--}}
{{--                                                                <div class="ne_re_left_img_main_wrapper ne_re_left_img_main_wrapper2">--}}
{{--                                                                    <img src="{{asset('front/images/content/r2.jpg')}}" alt="img">--}}
{{--                                                                    <h2>Sport</h2>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="ne_re_left_img_cont_main_wrapper">--}}
{{--                                                                    <h3><a href="#">The clock is ticking </a></h3>--}}
{{--                                                                    <ul class="ne_re_social1_wrapper">--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>--}}
{{--                                                                        </li>--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-clock-o"></i> &nbsp;07 : 00 am</a>--}}
{{--                                                                        </li>--}}
{{--                                                                    </ul>--}}
{{--                                                                    <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>--}}
{{--                                                                    <ul class="ne_re_social2_wrapper">--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-thumbs-up"></i> &nbsp;5124 Like</a>--}}
{{--                                                                        </li>--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-comments"></i> &nbsp;645 Comments</a>--}}
{{--                                                                        </li>--}}
{{--                                                                    </ul>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="ne_re_left_bottom_main_wrapper">--}}
{{--                                                                <div class="ne_re_bottom_img">--}}
{{--                                                                    <img src="{{asset('front/images/content/rs3.jpg')}}" alt="rs_img">--}}
{{--                                                                </div>--}}
{{--                                                                <div class="ne_re_bottom_img_cont">--}}
{{--                                                                    <h3><a href="#">Tesla just lost its head </a></h3>--}}
{{--                                                                    <p><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>--}}
{{--                                                                    </p>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="ne_re_left_bottom_main_wrapper">--}}
{{--                                                                <div class="ne_re_bottom_img">--}}
{{--                                                                    <img src="{{asset('front/images/content/rs4.jpg')}}" alt="rs_img">--}}
{{--                                                                </div>--}}
{{--                                                                <div class="ne_re_bottom_img_cont">--}}
{{--                                                                    <h3><a href="#">--}}
{{--                                                                            Hands on with the Apple </a></h3>--}}
{{--                                                                    <p><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>--}}
{{--                                                                    </p>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="item">--}}
{{--                                                    <div class="row">--}}
{{--                                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">--}}
{{--                                                            <div class="ne_re_left_top_main_wrapper">--}}
{{--                                                                <div class="ne_re_left_img_main_wrapper">--}}
{{--                                                                    <img src="{{asset('front/images/content/r1.jpg')}}" alt="img">--}}
{{--                                                                    <h2>Bussiness</h2>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="ne_re_left_img_cont_main_wrapper">--}}
{{--                                                                    <h3><a href="#">Award of the year</a></h3>--}}
{{--                                                                    <ul class="ne_re_social1_wrapper">--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>--}}
{{--                                                                        </li>--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-clock-o"></i> &nbsp;07 : 00 am</a>--}}
{{--                                                                        </li>--}}
{{--                                                                    </ul>--}}
{{--                                                                    <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>--}}
{{--                                                                    <ul class="ne_re_social2_wrapper">--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-thumbs-up"></i> &nbsp;5124 Like</a>--}}
{{--                                                                        </li>--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-comments"></i> &nbsp;645 Comments</a>--}}
{{--                                                                        </li>--}}
{{--                                                                    </ul>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="ne_re_left_bottom_main_wrapper">--}}
{{--                                                                <div class="ne_re_bottom_img">--}}
{{--                                                                    <img src="{{asset('front/images/content/rs1.jpg')}}" alt="rs_img">--}}
{{--                                                                </div>--}}
{{--                                                                <div class="ne_re_bottom_img_cont">--}}
{{--                                                                    <h3><a href="#">These Are the 10 Color</a></h3>--}}
{{--                                                                    <p><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>--}}
{{--                                                                    </p>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="ne_re_left_bottom_main_wrapper">--}}
{{--                                                                <div class="ne_re_bottom_img">--}}
{{--                                                                    <img src="{{asset('front/images/content/rs2.jpg')}}" alt="rs_img">--}}
{{--                                                                </div>--}}
{{--                                                                <div class="ne_re_bottom_img_cont">--}}
{{--                                                                    <h3><a href="#">Google shifting threatens</a></h3>--}}
{{--                                                                    <p><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>--}}
{{--                                                                    </p>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">--}}
{{--                                                            <div class="ne_re_left_top_main_wrapper">--}}
{{--                                                                <div class="ne_re_left_img_main_wrapper ne_re_left_img_main_wrapper2">--}}
{{--                                                                    <img src="{{asset('front/images/content/r2.jpg')}}" alt="img">--}}
{{--                                                                    <h2>Sport</h2>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="ne_re_left_img_cont_main_wrapper">--}}
{{--                                                                    <h3><a href="#">The clock is ticking </a></h3>--}}
{{--                                                                    <ul class="ne_re_social1_wrapper">--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>--}}
{{--                                                                        </li>--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-clock-o"></i> &nbsp;07 : 00 am</a>--}}
{{--                                                                        </li>--}}
{{--                                                                    </ul>--}}
{{--                                                                    <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>--}}
{{--                                                                    <ul class="ne_re_social2_wrapper">--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-thumbs-up"></i> &nbsp;5124 Like</a>--}}
{{--                                                                        </li>--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-comments"></i> &nbsp;645 Comments</a>--}}
{{--                                                                        </li>--}}
{{--                                                                    </ul>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="ne_re_left_bottom_main_wrapper">--}}
{{--                                                                <div class="ne_re_bottom_img">--}}
{{--                                                                    <img src="{{asset('front/images/content/rs3.jpg')}}" alt="rs_img">--}}
{{--                                                                </div>--}}
{{--                                                                <div class="ne_re_bottom_img_cont">--}}
{{--                                                                    <h3><a href="#">Tesla just lost its head </a></h3>--}}
{{--                                                                    <p><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>--}}
{{--                                                                    </p>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="ne_re_left_bottom_main_wrapper">--}}
{{--                                                                <div class="ne_re_bottom_img">--}}
{{--                                                                    <img src="{{asset('front/images/content/rs4.jpg')}}" alt="rs_img">--}}
{{--                                                                </div>--}}
{{--                                                                <div class="ne_re_bottom_img_cont">--}}
{{--                                                                    <h3><a href="#">--}}
{{--                                                                            Hands on with the Apple </a></h3>--}}
{{--                                                                    <p><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>--}}
{{--                                                                    </p>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="item">--}}
{{--                                                    <div class="row">--}}
{{--                                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">--}}
{{--                                                            <div class="ne_re_left_top_main_wrapper">--}}
{{--                                                                <div class="ne_re_left_img_main_wrapper">--}}
{{--                                                                    <img src="{{asset('front/images/content/r1.jpg')}}" alt="img">--}}
{{--                                                                    <h2>Bussiness</h2>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="ne_re_left_img_cont_main_wrapper">--}}
{{--                                                                    <h3><a href="#">Award of the year</a></h3>--}}
{{--                                                                    <ul class="ne_re_social1_wrapper">--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>--}}
{{--                                                                        </li>--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-clock-o"></i> &nbsp;07 : 00 am</a>--}}
{{--                                                                        </li>--}}
{{--                                                                    </ul>--}}
{{--                                                                    <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>--}}
{{--                                                                    <ul class="ne_re_social2_wrapper">--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-thumbs-up"></i> &nbsp;5124 Like</a>--}}
{{--                                                                        </li>--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-comments"></i> &nbsp;645 Comments</a>--}}
{{--                                                                        </li>--}}
{{--                                                                    </ul>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="ne_re_left_bottom_main_wrapper">--}}
{{--                                                                <div class="ne_re_bottom_img">--}}
{{--                                                                    <img src="{{asset('front/images/content/rs1.jpg')}}" alt="rs_img">--}}
{{--                                                                </div>--}}
{{--                                                                <div class="ne_re_bottom_img_cont">--}}
{{--                                                                    <h3><a href="#">These Are the 10 Color</a></h3>--}}
{{--                                                                    <p><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>--}}
{{--                                                                    </p>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="ne_re_left_bottom_main_wrapper">--}}
{{--                                                                <div class="ne_re_bottom_img">--}}
{{--                                                                    <img src="{{asset('front/images/content/rs2.jpg')}}" alt="rs_img">--}}
{{--                                                                </div>--}}
{{--                                                                <div class="ne_re_bottom_img_cont">--}}
{{--                                                                    <h3><a href="#">Google shifting threatens</a></h3>--}}
{{--                                                                    <p><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>--}}
{{--                                                                    </p>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">--}}
{{--                                                            <div class="ne_re_left_top_main_wrapper">--}}
{{--                                                                <div class="ne_re_left_img_main_wrapper ne_re_left_img_main_wrapper2">--}}
{{--                                                                    <img src="{{asset('front/images/content/r2.jpg')}}" alt="img">--}}
{{--                                                                    <h2>Sport</h2>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="ne_re_left_img_cont_main_wrapper">--}}
{{--                                                                    <h3><a href="#">The clock is ticking </a></h3>--}}
{{--                                                                    <ul class="ne_re_social1_wrapper">--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>--}}
{{--                                                                        </li>--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-clock-o"></i> &nbsp;07 : 00 am</a>--}}
{{--                                                                        </li>--}}
{{--                                                                    </ul>--}}
{{--                                                                    <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>--}}
{{--                                                                    <ul class="ne_re_social2_wrapper">--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-thumbs-up"></i> &nbsp;5124 Like</a>--}}
{{--                                                                        </li>--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-comments"></i> &nbsp;645 Comments</a>--}}
{{--                                                                        </li>--}}
{{--                                                                    </ul>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="ne_re_left_bottom_main_wrapper">--}}
{{--                                                                <div class="ne_re_bottom_img">--}}
{{--                                                                    <img src="{{asset('front/images/content/rs3.jpg')}}" alt="rs_img">--}}
{{--                                                                </div>--}}
{{--                                                                <div class="ne_re_bottom_img_cont">--}}
{{--                                                                    <h3><a href="#">Tesla just lost its head </a></h3>--}}
{{--                                                                    <p><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>--}}
{{--                                                                    </p>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="ne_re_left_bottom_main_wrapper">--}}
{{--                                                                <div class="ne_re_bottom_img">--}}
{{--                                                                    <img src="{{asset('front/images/content/rs4.jpg')}}" alt="rs_img">--}}
{{--                                                                </div>--}}
{{--                                                                <div class="ne_re_bottom_img_cont">--}}
{{--                                                                    <h3><a href="#">--}}
{{--                                                                            Hands on with the Apple </a></h3>--}}
{{--                                                                    <p><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>--}}
{{--                                                                    </p>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="item">--}}
{{--                                                    <div class="row">--}}
{{--                                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">--}}
{{--                                                            <div class="ne_re_left_top_main_wrapper">--}}
{{--                                                                <div class="ne_re_left_img_main_wrapper">--}}
{{--                                                                    <img src="{{asset('front/images/content/r1.jpg')}}" alt="img">--}}
{{--                                                                    <h2>Bussiness</h2>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="ne_re_left_img_cont_main_wrapper">--}}
{{--                                                                    <h3><a href="#">Award of the year</a></h3>--}}
{{--                                                                    <ul class="ne_re_social1_wrapper">--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>--}}
{{--                                                                        </li>--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-clock-o"></i> &nbsp;07 : 00 am</a>--}}
{{--                                                                        </li>--}}
{{--                                                                    </ul>--}}
{{--                                                                    <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>--}}
{{--                                                                    <ul class="ne_re_social2_wrapper">--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-thumbs-up"></i> &nbsp;5124 Like</a>--}}
{{--                                                                        </li>--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-comments"></i> &nbsp;645 Comments</a>--}}
{{--                                                                        </li>--}}
{{--                                                                    </ul>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="ne_re_left_bottom_main_wrapper">--}}
{{--                                                                <div class="ne_re_bottom_img">--}}
{{--                                                                    <img src="{{asset('front/images/content/rs1.jpg')}}" alt="rs_img">--}}
{{--                                                                </div>--}}
{{--                                                                <div class="ne_re_bottom_img_cont">--}}
{{--                                                                    <h3><a href="#">These Are the 10 Color</a></h3>--}}
{{--                                                                    <p><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>--}}
{{--                                                                    </p>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="ne_re_left_bottom_main_wrapper">--}}
{{--                                                                <div class="ne_re_bottom_img">--}}
{{--                                                                    <img src="{{asset('front/images/content/rs2.jpg')}}" alt="rs_img">--}}
{{--                                                                </div>--}}
{{--                                                                <div class="ne_re_bottom_img_cont">--}}
{{--                                                                    <h3><a href="#">Google shifting threatens</a></h3>--}}
{{--                                                                    <p><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>--}}
{{--                                                                    </p>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">--}}
{{--                                                            <div class="ne_re_left_top_main_wrapper">--}}
{{--                                                                <div class="ne_re_left_img_main_wrapper ne_re_left_img_main_wrapper2">--}}
{{--                                                                    <img src="{{asset('front/images/content/r2.jpg')}}" alt="img">--}}
{{--                                                                    <h2>Sport</h2>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="ne_re_left_img_cont_main_wrapper">--}}
{{--                                                                    <h3><a href="#">The clock is ticking </a></h3>--}}
{{--                                                                    <ul class="ne_re_social1_wrapper">--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>--}}
{{--                                                                        </li>--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-clock-o"></i> &nbsp;07 : 00 am</a>--}}
{{--                                                                        </li>--}}
{{--                                                                    </ul>--}}
{{--                                                                    <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>--}}
{{--                                                                    <ul class="ne_re_social2_wrapper">--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-thumbs-up"></i> &nbsp;5124 Like</a>--}}
{{--                                                                        </li>--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-comments"></i> &nbsp;645 Comments</a>--}}
{{--                                                                        </li>--}}
{{--                                                                    </ul>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="ne_re_left_bottom_main_wrapper">--}}
{{--                                                                <div class="ne_re_bottom_img">--}}
{{--                                                                    <img src="{{asset('front/images/content/rs3.jpg')}}" alt="rs_img">--}}
{{--                                                                </div>--}}
{{--                                                                <div class="ne_re_bottom_img_cont">--}}
{{--                                                                    <h3><a href="#">Tesla just lost its head </a></h3>--}}
{{--                                                                    <p><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>--}}
{{--                                                                    </p>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="ne_re_left_bottom_main_wrapper">--}}
{{--                                                                <div class="ne_re_bottom_img">--}}
{{--                                                                    <img src="{{asset('front/images/content/rs4.jpg')}}" alt="rs_img">--}}
{{--                                                                </div>--}}
{{--                                                                <div class="ne_re_bottom_img_cont">--}}
{{--                                                                    <h3><a href="#">--}}
{{--                                                                            Hands on with the Apple </a></h3>--}}
{{--                                                                    <p><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>--}}
{{--                                                                    </p>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="item">--}}
{{--                                                    <div class="row">--}}
{{--                                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">--}}
{{--                                                            <div class="ne_re_left_top_main_wrapper">--}}
{{--                                                                <div class="ne_re_left_img_main_wrapper">--}}
{{--                                                                    <img src="{{asset('front/images/content/r1.jpg')}}" alt="img">--}}
{{--                                                                    <h2>Bussiness</h2>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="ne_re_left_img_cont_main_wrapper">--}}
{{--                                                                    <h3><a href="#">Award of the year</a></h3>--}}
{{--                                                                    <ul class="ne_re_social1_wrapper">--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>--}}
{{--                                                                        </li>--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-clock-o"></i> &nbsp;07 : 00 am</a>--}}
{{--                                                                        </li>--}}
{{--                                                                    </ul>--}}
{{--                                                                    <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>--}}
{{--                                                                    <ul class="ne_re_social2_wrapper">--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-thumbs-up"></i> &nbsp;5124 Like</a>--}}
{{--                                                                        </li>--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-comments"></i> &nbsp;645 Comments</a>--}}
{{--                                                                        </li>--}}
{{--                                                                    </ul>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="ne_re_left_bottom_main_wrapper">--}}
{{--                                                                <div class="ne_re_bottom_img">--}}
{{--                                                                    <img src="{{asset('front/images/content/rs1.jpg')}}" alt="rs_img">--}}
{{--                                                                </div>--}}
{{--                                                                <div class="ne_re_bottom_img_cont">--}}
{{--                                                                    <h3><a href="#">These Are the 10 Color</a></h3>--}}
{{--                                                                    <p><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>--}}
{{--                                                                    </p>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="ne_re_left_bottom_main_wrapper">--}}
{{--                                                                <div class="ne_re_bottom_img">--}}
{{--                                                                    <img src="{{asset('front/images/content/rs2.jpg')}}" alt="rs_img">--}}
{{--                                                                </div>--}}
{{--                                                                <div class="ne_re_bottom_img_cont">--}}
{{--                                                                    <h3><a href="#">Google shifting threatens</a></h3>--}}
{{--                                                                    <p><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>--}}
{{--                                                                    </p>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">--}}
{{--                                                            <div class="ne_re_left_top_main_wrapper">--}}
{{--                                                                <div class="ne_re_left_img_main_wrapper ne_re_left_img_main_wrapper2">--}}
{{--                                                                    <img src="{{asset('front/images/content/r2.jpg')}}" alt="img">--}}
{{--                                                                    <h2>Sport</h2>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="ne_re_left_img_cont_main_wrapper">--}}
{{--                                                                    <h3><a href="#">The clock is ticking </a></h3>--}}
{{--                                                                    <ul class="ne_re_social1_wrapper">--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>--}}
{{--                                                                        </li>--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-clock-o"></i> &nbsp;07 : 00 am</a>--}}
{{--                                                                        </li>--}}
{{--                                                                    </ul>--}}
{{--                                                                    <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>--}}
{{--                                                                    <ul class="ne_re_social2_wrapper">--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-thumbs-up"></i> &nbsp;5124 Like</a>--}}
{{--                                                                        </li>--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-comments"></i> &nbsp;645 Comments</a>--}}
{{--                                                                        </li>--}}
{{--                                                                    </ul>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="ne_re_left_bottom_main_wrapper">--}}
{{--                                                                <div class="ne_re_bottom_img">--}}
{{--                                                                    <img src="{{asset('front/images/content/rs3.jpg')}}" alt="rs_img">--}}
{{--                                                                </div>--}}
{{--                                                                <div class="ne_re_bottom_img_cont">--}}
{{--                                                                    <h3><a href="#">Tesla just lost its head </a></h3>--}}
{{--                                                                    <p><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>--}}
{{--                                                                    </p>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="ne_re_left_bottom_main_wrapper">--}}
{{--                                                                <div class="ne_re_bottom_img">--}}
{{--                                                                    <img src="{{asset('front/images/content/rs4.jpg')}}" alt="rs_img">--}}
{{--                                                                </div>--}}
{{--                                                                <div class="ne_re_bottom_img_cont">--}}
{{--                                                                    <h3><a href="#">--}}
{{--                                                                            Hands on with the Apple </a></h3>--}}
{{--                                                                    <p><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>--}}
{{--                                                                    </p>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">--}}
{{--                                        <div class="ne_busness_main_slider_wrapper">--}}
{{--                                            <div class="ne_recent_heading_main_wrapper">--}}
{{--                                                <h2>Business</h2>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">--}}
{{--                                        <div class="ne_businees_slider_wrapper">--}}
{{--                                            <div class="owl-carousel owl-theme">--}}
{{--                                                <div class="item">--}}
{{--                                                    <div class="ne_re_left_top_main_wrapper">--}}
{{--                                                        <div class="ne_re_left_img_main_wrapper">--}}
{{--                                                            <img src="{{asset('front/images/content/bs1.jpg')}}" alt="img">--}}
{{--                                                            <h2>business</h2>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="ne_re_left_img_cont_main_wrapper ne_buss_img_cont_main_wrapper">--}}
{{--                                                            <h3><a href="#">Proin gravida nibh--}}
{{--                                                                    vel velit auctor.</a></h3>--}}
{{--                                                            <ul class="ne_re_social1_wrapper">--}}
{{--                                                                <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-calendar"></i> &nbsp;2 DEC, 2020</a>--}}
{{--                                                                </li>--}}
{{--                                                            </ul>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="item">--}}
{{--                                                    <div class="ne_re_left_top_main_wrapper">--}}
{{--                                                        <div class="ne_re_left_img_main_wrapper">--}}
{{--                                                            <img src="{{asset('front/images/content/bs2.jpg')}}" alt="img">--}}
{{--                                                            <h2>team work</h2>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="ne_re_left_img_cont_main_wrapper ne_buss_img_cont_main_wrapper">--}}
{{--                                                            <h3><a href="#">Faangs diverge prospect</a></h3>--}}
{{--                                                            <ul class="ne_re_social1_wrapper">--}}
{{--                                                                <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-calendar"></i> &nbsp;5 JAN, 2020</a>--}}
{{--                                                                </li>--}}
{{--                                                            </ul>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="item">--}}
{{--                                                    <div class="ne_re_left_top_main_wrapper">--}}
{{--                                                        <div class="ne_re_left_img_main_wrapper">--}}
{{--                                                            <img src="{{asset('front/images/content/bs3.jpg')}}" alt="img">--}}
{{--                                                            <h2>business</h2>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="ne_re_left_img_cont_main_wrapper ne_buss_img_cont_main_wrapper">--}}
{{--                                                            <h3><a href="#">--}}
{{--                                                                    Beats did something today</a></h3>--}}
{{--                                                            <ul class="ne_re_social1_wrapper">--}}
{{--                                                                <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-calendar"></i> &nbsp;14 AUG, 2020</a>--}}
{{--                                                                </li>--}}
{{--                                                            </ul>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">--}}
{{--                                        <div class="ne_busness_main_slider_wrapper">--}}
{{--                                            <div class="ne_recent_heading_main_wrapper">--}}
{{--                                                <h2>Sports</h2>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">--}}
{{--                                        <div class="ne_sport_slider_wrapper">--}}
{{--                                            <div class="owl-carousel owl-theme">--}}
{{--                                                <div class="item">--}}
{{--                                                    <div class="row">--}}
{{--                                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">--}}
{{--                                                            <div class="ne_re_left_top_main_wrapper">--}}
{{--                                                                <div class="ne_re_left_img_main_wrapper ne_re_left_img_main_wrapper2">--}}
{{--                                                                    <img src="{{asset('front/images/content/sp1.jpg')}}" alt="img">--}}
{{--                                                                    <h2>Sport</h2>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="ne_re_left_img_cont_main_wrapper">--}}
{{--                                                                    <h3><a href="#">Award of the year</a></h3>--}}
{{--                                                                    <ul class="ne_re_social1_wrapper">--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-calendar"></i> &nbsp;02 JAN, 2020</a>--}}
{{--                                                                        </li>--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-clock-o"></i> &nbsp;07 : 00 am</a>--}}
{{--                                                                        </li>--}}
{{--                                                                    </ul>--}}
{{--                                                                    <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>--}}
{{--                                                                    <ul class="ne_re_social2_wrapper qqq">--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-thumbs-up"></i> &nbsp;5124 Like</a>--}}
{{--                                                                        </li>--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-comments"></i> &nbsp;645 Comments</a>--}}
{{--                                                                        </li>--}}
{{--                                                                    </ul>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">--}}
{{--                                                            <div class="ne_re_left_bottom_main_wrapper ne_re_left_bottom_main_wrapper_top">--}}
{{--                                                                <div class="ne_re_bottom_img">--}}
{{--                                                                    <img src="{{asset('front/images/content/sp2.jpg')}}" alt="rs_img">--}}
{{--                                                                </div>--}}
{{--                                                                <div class="ne_re_bottom_img_cont">--}}
{{--                                                                    <h3><a href="#">These Are the 10 Color</a></h3>--}}
{{--                                                                    <p><a href="#"><i class="fa fa-calendar"></i> &nbsp;17 SEP, 2020</a>--}}
{{--                                                                    </p>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="ne_re_left_bottom_main_wrapper">--}}
{{--                                                                <div class="ne_re_bottom_img">--}}
{{--                                                                    <img src="{{asset('front/images/content/sp3.jpg')}}" alt="rs_img">--}}
{{--                                                                </div>--}}
{{--                                                                <div class="ne_re_bottom_img_cont">--}}
{{--                                                                    <h3><a href="#">--}}
{{--                                                                            Hands on with the Apple </a></h3>--}}
{{--                                                                    <p><a href="#"><i class="fa fa-calendar"></i> &nbsp;11 APR, 2020</a>--}}
{{--                                                                    </p>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="ne_re_left_bottom_main_wrapper">--}}
{{--                                                                <div class="ne_re_bottom_img">--}}
{{--                                                                    <img src="{{asset('front/images/content/sp4.jpg')}}" alt="rs_img">--}}
{{--                                                                </div>--}}
{{--                                                                <div class="ne_re_bottom_img_cont">--}}
{{--                                                                    <h3><a href="#">Google shifting threatens </a></h3>--}}
{{--                                                                    <p><a href="#"><i class="fa fa-calendar"></i> &nbsp;22 MAY, 2020</a>--}}
{{--                                                                    </p>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="ne_re_left_bottom_main_wrapper">--}}
{{--                                                                <div class="ne_re_bottom_img">--}}
{{--                                                                    <img src="{{asset('front/images/content/sp5.jpg')}}" alt="rs_img">--}}
{{--                                                                </div>--}}
{{--                                                                <div class="ne_re_bottom_img_cont">--}}
{{--                                                                    <h3><a href="#">Tesla just lost its head </a></h3>--}}
{{--                                                                    <p><a href="#"><i class="fa fa-calendar"></i> &nbsp;18 JUL, 2020</a>--}}
{{--                                                                    </p>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="item">--}}
{{--                                                    <div class="row">--}}
{{--                                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">--}}
{{--                                                            <div class="ne_re_left_top_main_wrapper">--}}
{{--                                                                <div class="ne_re_left_img_main_wrapper ne_re_left_img_main_wrapper2">--}}
{{--                                                                    <img src="{{asset('front/images/content/sp1.jpg')}}" alt="img">--}}
{{--                                                                    <h2>Sport</h2>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="ne_re_left_img_cont_main_wrapper">--}}
{{--                                                                    <h3><a href="#">The clock is ticking </a></h3>--}}
{{--                                                                    <ul class="ne_re_social1_wrapper">--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-calendar"></i> &nbsp;3 AUG, 2020</a>--}}
{{--                                                                        </li>--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-clock-o"></i> &nbsp;07 : 00 am</a>--}}
{{--                                                                        </li>--}}
{{--                                                                    </ul>--}}
{{--                                                                    <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>--}}
{{--                                                                    <ul class="ne_re_social2_wrapper qqq">--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-thumbs-up"></i> &nbsp;5124 Like</a>--}}
{{--                                                                        </li>--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-comments"></i> &nbsp;645 Comments</a>--}}
{{--                                                                        </li>--}}
{{--                                                                    </ul>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">--}}
{{--                                                            <div class="ne_re_left_bottom_main_wrapper ne_re_left_bottom_main_wrapper_top">--}}
{{--                                                                <div class="ne_re_bottom_img">--}}
{{--                                                                    <img src="{{asset('front/images/content/sp2.jpg')}}" alt="rs_img">--}}
{{--                                                                </div>--}}
{{--                                                                <div class="ne_re_bottom_img_cont">--}}
{{--                                                                    <h3><a href="#">These Are the 10 Color</a></h3>--}}
{{--                                                                    <p><a href="#"><i class="fa fa-calendar"></i> &nbsp;6 JAN, 2020</a>--}}
{{--                                                                    </p>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="ne_re_left_bottom_main_wrapper">--}}
{{--                                                                <div class="ne_re_bottom_img">--}}
{{--                                                                    <img src="{{asset('front/images/content/sp3.jpg')}}" alt="rs_img">--}}
{{--                                                                </div>--}}
{{--                                                                <div class="ne_re_bottom_img_cont">--}}
{{--                                                                    <h3><a href="#">--}}
{{--                                                                            Hands on with the Apple </a></h3>--}}
{{--                                                                    <p><a href="#"><i class="fa fa-calendar"></i> &nbsp;2 FEB, 2020</a>--}}
{{--                                                                    </p>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="ne_re_left_bottom_main_wrapper">--}}
{{--                                                                <div class="ne_re_bottom_img">--}}
{{--                                                                    <img src="{{asset('front/images/content/sp4.jpg')}}" alt="rs_img">--}}
{{--                                                                </div>--}}
{{--                                                                <div class="ne_re_bottom_img_cont">--}}
{{--                                                                    <h3><a href="#">Google shifting threatens </a></h3>--}}
{{--                                                                    <p><a href="#"><i class="fa fa-calendar"></i> &nbsp;15 MAR, 2020</a>--}}
{{--                                                                    </p>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="ne_re_left_bottom_main_wrapper">--}}
{{--                                                                <div class="ne_re_bottom_img">--}}
{{--                                                                    <img src="{{asset('front/images/content/sp5.jpg')}}" alt="rs_img">--}}
{{--                                                                </div>--}}
{{--                                                                <div class="ne_re_bottom_img_cont">--}}
{{--                                                                    <h3><a href="#">Tesla just lost its head </a></h3>--}}
{{--                                                                    <p><a href="#"><i class="fa fa-calendar"></i> &nbsp;17 APR, 2020</a>--}}
{{--                                                                    </p>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="item">--}}
{{--                                                    <div class="row">--}}
{{--                                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">--}}
{{--                                                            <div class="ne_re_left_top_main_wrapper">--}}
{{--                                                                <div class="ne_re_left_img_main_wrapper ne_re_left_img_main_wrapper2">--}}
{{--                                                                    <img src="{{asset('front/images/content/sp1.jpg')}}" alt="img">--}}
{{--                                                                    <h2>Sport</h2>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="ne_re_left_img_cont_main_wrapper">--}}
{{--                                                                    <h3><a href="#">The clock is ticking </a></h3>--}}
{{--                                                                    <ul class="ne_re_social1_wrapper">--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>--}}
{{--                                                                        </li>--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-clock-o"></i> &nbsp;07 : 00 am</a>--}}
{{--                                                                        </li>--}}
{{--                                                                    </ul>--}}
{{--                                                                    <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>--}}
{{--                                                                    <ul class="ne_re_social2_wrapper qqq">--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-thumbs-up"></i> &nbsp;5124 Like</a>--}}
{{--                                                                        </li>--}}
{{--                                                                        <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-comments"></i> &nbsp;645 Comments</a>--}}
{{--                                                                        </li>--}}
{{--                                                                    </ul>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">--}}
{{--                                                            <div class="ne_re_left_bottom_main_wrapper ne_re_left_bottom_main_wrapper_top">--}}
{{--                                                                <div class="ne_re_bottom_img">--}}
{{--                                                                    <img src="{{asset('front/images/content/sp2.jpg')}}" alt="rs_img">--}}
{{--                                                                </div>--}}
{{--                                                                <div class="ne_re_bottom_img_cont">--}}
{{--                                                                    <h3><a href="#">These Are the 10 Color</a></h3>--}}
{{--                                                                    <p><a href="#"><i class="fa fa-calendar"></i> &nbsp;15 JAN, 2020</a>--}}
{{--                                                                    </p>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="ne_re_left_bottom_main_wrapper">--}}
{{--                                                                <div class="ne_re_bottom_img">--}}
{{--                                                                    <img src="{{asset('front/images/content/sp3.jpg')}}" alt="rs_img">--}}
{{--                                                                </div>--}}
{{--                                                                <div class="ne_re_bottom_img_cont">--}}
{{--                                                                    <h3><a href="#">--}}
{{--                                                                            Hands on with the Apple </a></h3>--}}
{{--                                                                    <p><a href="#"><i class="fa fa-calendar"></i> &nbsp;22 FEB, 2020</a>--}}
{{--                                                                    </p>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="ne_re_left_bottom_main_wrapper">--}}
{{--                                                                <div class="ne_re_bottom_img">--}}
{{--                                                                    <img src="{{asset('front/images/content/sp4.jpg')}}" alt="rs_img">--}}
{{--                                                                </div>--}}
{{--                                                                <div class="ne_re_bottom_img_cont">--}}
{{--                                                                    <h3><a href="#">Google shifting threatens </a></h3>--}}
{{--                                                                    <p><a href="#"><i class="fa fa-calendar"></i> &nbsp;30 MAY, 2020</a>--}}
{{--                                                                    </p>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="ne_re_left_bottom_main_wrapper">--}}
{{--                                                                <div class="ne_re_bottom_img">--}}
{{--                                                                    <img src="{{asset('front/images/content/sp5.jpg')}}" alt="rs_img">--}}
{{--                                                                </div>--}}
{{--                                                                <div class="ne_re_bottom_img_cont">--}}
{{--                                                                    <h3><a href="#">Tesla just lost its head </a></h3>--}}
{{--                                                                    <p><a href="#"><i class="fa fa-calendar"></i> &nbsp;5 JUL, 2020</a>--}}
{{--                                                                    </p>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">--}}
{{--                                <div class="ne_banner_adver_main_wrapper">--}}
{{--                                    <a href="#">--}}
{{--                                        <img src="{{asset('front/images/content/adverti_img.jpg')}}" alt="img">--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">--}}
{{--                                        <div class="ne_busness_main_slider_wrapper">--}}
{{--                                            <div class="ne_recent_heading_main_wrapper">--}}
{{--                                                <h2>Gadgets and Technology</h2>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">--}}
{{--                                        <div class="ne_gt_left_top_main_wrapper ne_gt_left_top_main_wrapper1">--}}
{{--                                            <div class="ne_gt_left_img_main_wrapper">--}}
{{--                                                <img src="{{asset('front/images/content/ct1.jpg')}}" alt="img">--}}
{{--                                                <h2>Technology</h2>--}}
{{--                                            </div>--}}
{{--                                            <div class="ne_gt_left_img_cont_main_wrapper">--}}
{{--                                                <h3><a href="#">Award of the year</a></h3>--}}
{{--                                                <ul class="ne_re_social1_wrapper">--}}
{{--                                                    <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-calendar"></i> &nbsp;12 FEB, 2020</a>--}}
{{--                                                    </li>--}}
{{--                                                    <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-clock-o"></i> &nbsp;07 : 00 am</a>--}}
{{--                                                    </li>--}}
{{--                                                </ul>--}}
{{--                                                <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>--}}
{{--                                                <ul class="ne_re_social2_wrapper">--}}
{{--                                                    <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-thumbs-up"></i> &nbsp;5124 Like</a>--}}
{{--                                                    </li>--}}
{{--                                                    <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-comments"></i> &nbsp;645 Comments</a>--}}
{{--                                                    </li>--}}
{{--                                                </ul>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">--}}
{{--                                        <div class="ne_gt_left_top_main_wrapper ne_gt_left_top_main_wrapper2">--}}
{{--                                            <div class="ne_gt_left_img_main_wrapper">--}}
{{--                                                <img src="{{asset('front/images/content/ct2.jpg')}}" alt="img">--}}
{{--                                                <h2>gadgets</h2>--}}
{{--                                            </div>--}}
{{--                                            <div class="ne_gt_left_img_cont_main_wrapper">--}}
{{--                                                <h3><a href="#">The clock is ticking </a></h3>--}}
{{--                                                <ul class="ne_re_social1_wrapper">--}}
{{--                                                    <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>--}}
{{--                                                    </li>--}}
{{--                                                    <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-clock-o"></i> &nbsp;07 : 00 am</a>--}}
{{--                                                    </li>--}}
{{--                                                </ul>--}}
{{--                                                <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>--}}
{{--                                                <ul class="ne_re_social2_wrapper">--}}
{{--                                                    <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-thumbs-up"></i> &nbsp;5124 Like</a>--}}
{{--                                                    </li>--}}
{{--                                                    <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-comments"></i> &nbsp;645 Comments</a>--}}
{{--                                                    </li>--}}
{{--                                                </ul>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">--}}
{{--                                        <div class="ne_gt_left_top_main_wrapper ne_gt_left_top_main_wrapper2">--}}
{{--                                            <div class="ne_gt_left_img_main_wrapper">--}}
{{--                                                <img src="{{asset('front/images/content/ct3.jpg')}}" alt="img">--}}
{{--                                                <h2>gadgets</h2>--}}
{{--                                            </div>--}}
{{--                                            <div class="ne_gt_left_img_cont_main_wrapper">--}}
{{--                                                <h3><a href="#">Beats did announce </a></h3>--}}
{{--                                                <ul class="ne_re_social1_wrapper">--}}
{{--                                                    <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>--}}
{{--                                                    </li>--}}
{{--                                                    <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-clock-o"></i> &nbsp;07 : 00 am</a>--}}
{{--                                                    </li>--}}
{{--                                                </ul>--}}
{{--                                                <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>--}}
{{--                                                <ul class="ne_re_social2_wrapper">--}}
{{--                                                    <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-thumbs-up"></i> &nbsp;5124 Like</a>--}}
{{--                                                    </li>--}}
{{--                                                    <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-comments"></i> &nbsp;645 Comments</a>--}}
{{--                                                    </li>--}}
{{--                                                </ul>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">--}}
{{--                                        <div class="ne_gt_left_top_main_wrapper ne_gt_left_top_main_wrapper2">--}}
{{--                                            <div class="ne_gt_left_img_main_wrapper">--}}
{{--                                                <img src="{{asset('front/images/content/ct4.jpg')}}" alt="img">--}}
{{--                                                <h2>gadgets</h2>--}}
{{--                                            </div>--}}
{{--                                            <div class="ne_gt_left_img_cont_main_wrapper">--}}
{{--                                                <h3><a href="#">Boy's head impaled</a></h3>--}}
{{--                                                <ul class="ne_re_social1_wrapper">--}}
{{--                                                    <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>--}}
{{--                                                    </li>--}}
{{--                                                    <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-clock-o"></i> &nbsp;07 : 00 am</a>--}}
{{--                                                    </li>--}}
{{--                                                </ul>--}}
{{--                                                <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>--}}
{{--                                                <ul class="ne_re_social2_wrapper">--}}
{{--                                                    <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-thumbs-up"></i> &nbsp;5124 Like</a>--}}
{{--                                                    </li>--}}
{{--                                                    <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-comments"></i> &nbsp;645 Comments</a>--}}
{{--                                                    </li>--}}
{{--                                                </ul>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">--}}
{{--                                        <div class="ne_gt_left_top_main_wrapper ne_gt_left_top_main_wrapper2">--}}
{{--                                            <div class="ne_gt_left_img_main_wrapper">--}}
{{--                                                <img src="{{asset('front/images/content/ct5.jpg')}}" alt="img">--}}
{{--                                                <h2>gadgets</h2>--}}
{{--                                            </div>--}}
{{--                                            <div class="ne_gt_left_img_cont_main_wrapper">--}}
{{--                                                <h3><a href="#">Black farmers in the USA </a></h3>--}}
{{--                                                <ul class="ne_re_social1_wrapper">--}}
{{--                                                    <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>--}}
{{--                                                    </li>--}}
{{--                                                    <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-clock-o"></i> &nbsp;07 : 00 am</a>--}}
{{--                                                    </li>--}}
{{--                                                </ul>--}}
{{--                                                <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>--}}
{{--                                                <ul class="ne_re_social2_wrapper">--}}
{{--                                                    <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-thumbs-up"></i> &nbsp;5124 Like</a>--}}
{{--                                                    </li>--}}
{{--                                                    <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-comments"></i> &nbsp;645 Comments</a>--}}
{{--                                                    </li>--}}
{{--                                                </ul>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">--}}
{{--                                        <div class="ne_gt_left_top_main_wrapper ne_gt_left_top_main_wrapper2">--}}
{{--                                            <div class="ne_gt_left_img_main_wrapper">--}}
{{--                                                <img src="{{asset('front/images/content/ct6.jpg')}}" alt="img">--}}
{{--                                                <h2>gadgets</h2>--}}
{{--                                            </div>--}}
{{--                                            <div class="ne_gt_left_img_cont_main_wrapper">--}}
{{--                                                <h3><a href="#">Easy teriyaki </a></h3>--}}
{{--                                                <ul class="ne_re_social1_wrapper">--}}
{{--                                                    <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>--}}
{{--                                                    </li>--}}
{{--                                                    <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-clock-o"></i> &nbsp;07 : 00 am</a>--}}
{{--                                                    </li>--}}
{{--                                                </ul>--}}
{{--                                                <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>--}}
{{--                                                <ul class="ne_re_social2_wrapper">--}}
{{--                                                    <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-thumbs-up"></i> &nbsp;5124 Like</a>--}}
{{--                                                    </li>--}}
{{--                                                    <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-comments"></i> &nbsp;645 Comments</a>--}}
{{--                                                    </li>--}}
{{--                                                </ul>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">--}}
{{--                                        <div class="pager_wrapper prs_blog_pagi_wrapper">--}}
{{--                                            <ul class="pagination">--}}
{{--                                                <li><a href="#"><i class="fa fa-angle-left"></i></a>--}}
{{--                                                </li>--}}
{{--                                                <li class="btc_shop_pagi"><a href="#">01</a>--}}
{{--                                                </li>--}}
{{--                                                <li class="btc_shop_pagi"><a href="#">02</a>--}}
{{--                                                </li>--}}
{{--                                                <li class="btc_third_pegi btc_shop_pagi"><a href="#">03</a>--}}
{{--                                                </li>--}}
{{--                                                <li class="hidden-xs btc_shop_pagi"><a href="#">04</a>--}}
{{--                                                </li>--}}
{{--                                                <li><a href="#"><i class="fa fa-angle-right"></i></a>--}}
{{--                                                </li>--}}
{{--                                            </ul>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">--}}
{{--                                        <div class="row">--}}
{{--                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">--}}
{{--                                                <div class="ne_busness_main_slider_wrapper">--}}
{{--                                                    <div class="ne_recent_heading_main_wrapper">--}}
{{--                                                        <h2>Life style</h2>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">--}}
{{--                                                <div class="ne_sport_slider_wrapper">--}}
{{--                                                    <div class="owl-carousel owl-theme">--}}
{{--                                                        <div class="item">--}}
{{--                                                            <div class="row">--}}
{{--                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">--}}
{{--                                                                    <div class="ne_re_left_top_main_wrapper">--}}
{{--                                                                        <div class="ne_re_left_img_main_wrapper yellow">--}}
{{--                                                                            <img src="{{asset('front/images/content/ls10.jpg')}}" alt="img">--}}
{{--                                                                            <h2>style</h2>--}}
{{--                                                                        </div>--}}
{{--                                                                        <div class="ne_re_left_img_cont_main_wrapper">--}}
{{--                                                                            <h3><a href="#">Award of the year</a></h3>--}}
{{--                                                                            <ul class="ne_re_social1_wrapper">--}}
{{--                                                                                <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>--}}
{{--                                                                                </li>--}}
{{--                                                                                <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-clock-o"></i> &nbsp;07 : 00 am</a>--}}
{{--                                                                                </li>--}}
{{--                                                                            </ul>--}}
{{--                                                                            <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. ean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.</p>--}}
{{--                                                                            <ul class="ne_re_social2_wrapper">--}}
{{--                                                                                <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-thumbs-up"></i> &nbsp;5124 Like</a>--}}
{{--                                                                                </li>--}}
{{--                                                                                <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-comments"></i> &nbsp;645 Comments</a>--}}
{{--                                                                                </li>--}}
{{--                                                                            </ul>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">--}}
{{--                                                                    <div class="ne_re_left_bottom_main_wrapper ne_re_left_bottom_main_wrapper_top2">--}}
{{--                                                                        <div class="ne_ls_bottom_img">--}}
{{--                                                                            <img src="{{asset('front/images/content/ls2.jpg')}}" alt="rs_img">--}}
{{--                                                                        </div>--}}
{{--                                                                        <div class="ne_ls_bottom_img_cont">--}}
{{--                                                                            <h3><a href="#">Proin gravida nibh--}}
{{--                                                                                    vel velit auctor.</a></h3>--}}
{{--                                                                            <p><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>--}}
{{--                                                                            </p>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">--}}
{{--                                                                    <div class="ne_re_left_bottom_main_wrapper ne_re_left_bottom_main_wrapper_top2">--}}
{{--                                                                        <div class="ne_ls_bottom_img">--}}
{{--                                                                            <img src="{{asset('front/images/content/ls3.jpg')}}" alt="rs_img">--}}
{{--                                                                        </div>--}}
{{--                                                                        <div class="ne_ls_bottom_img_cont">--}}
{{--                                                                            <h3><a href="#">Google shifting threatens </a></h3>--}}
{{--                                                                            <p><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>--}}
{{--                                                                            </p>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="item">--}}
{{--                                                            <div class="row">--}}
{{--                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">--}}
{{--                                                                    <div class="ne_re_left_top_main_wrapper">--}}
{{--                                                                        <div class="ne_re_left_img_main_wrapper yellow">--}}
{{--                                                                            <img src="{{asset('front/images/content/ls11.jpg')}}" alt="img">--}}
{{--                                                                            <h2>style</h2>--}}
{{--                                                                        </div>--}}
{{--                                                                        <div class="ne_re_left_img_cont_main_wrapper">--}}
{{--                                                                            <h3><a href="#">Award of the year</a></h3>--}}
{{--                                                                            <ul class="ne_re_social1_wrapper">--}}
{{--                                                                                <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>--}}
{{--                                                                                </li>--}}
{{--                                                                                <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-clock-o"></i> &nbsp;07 : 00 am</a>--}}
{{--                                                                                </li>--}}
{{--                                                                            </ul>--}}
{{--                                                                            <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. ean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.</p>--}}
{{--                                                                            <ul class="ne_re_social2_wrapper">--}}
{{--                                                                                <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-thumbs-up"></i> &nbsp;5124 Like</a>--}}
{{--                                                                                </li>--}}
{{--                                                                                <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-comments"></i> &nbsp;645 Comments</a>--}}
{{--                                                                                </li>--}}
{{--                                                                            </ul>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">--}}
{{--                                                                    <div class="ne_re_left_bottom_main_wrapper ne_re_left_bottom_main_wrapper_top2">--}}
{{--                                                                        <div class="ne_ls_bottom_img">--}}
{{--                                                                            <img src="{{asset('front/images/content/ls2.jpg')}}" alt="rs_img">--}}
{{--                                                                        </div>--}}
{{--                                                                        <div class="ne_ls_bottom_img_cont">--}}
{{--                                                                            <h3><a href="#">Proin gravida nibh--}}
{{--                                                                                    vel velit auctor.</a></h3>--}}
{{--                                                                            <p><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>--}}
{{--                                                                            </p>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">--}}
{{--                                                                    <div class="ne_re_left_bottom_main_wrapper ne_re_left_bottom_main_wrapper_top2">--}}
{{--                                                                        <div class="ne_ls_bottom_img">--}}
{{--                                                                            <img src="{{asset('front/images/content/ls3.jpg')}}" alt="rs_img">--}}
{{--                                                                        </div>--}}
{{--                                                                        <div class="ne_ls_bottom_img_cont">--}}
{{--                                                                            <h3><a href="#">Google shifting threatens </a></h3>--}}
{{--                                                                            <p><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>--}}
{{--                                                                            </p>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="item">--}}
{{--                                                            <div class="row">--}}
{{--                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">--}}
{{--                                                                    <div class="ne_re_left_top_main_wrapper">--}}
{{--                                                                        <div class="ne_re_left_img_main_wrapper yellow">--}}
{{--                                                                            <img src="{{asset('front/images/content/ls1.jpg')}}" alt="img">--}}
{{--                                                                            <h2>style</h2>--}}
{{--                                                                        </div>--}}
{{--                                                                        <div class="ne_re_left_img_cont_main_wrapper">--}}
{{--                                                                            <h3><a href="#">Award of the year</a></h3>--}}
{{--                                                                            <ul class="ne_re_social1_wrapper">--}}
{{--                                                                                <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>--}}
{{--                                                                                </li>--}}
{{--                                                                                <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-clock-o"></i> &nbsp;07 : 00 am</a>--}}
{{--                                                                                </li>--}}
{{--                                                                            </ul>--}}
{{--                                                                            <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. ean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.</p>--}}
{{--                                                                            <ul class="ne_re_social2_wrapper">--}}
{{--                                                                                <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-thumbs-up"></i> &nbsp;5124 Like</a>--}}
{{--                                                                                </li>--}}
{{--                                                                                <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-comments"></i> &nbsp;645 Comments</a>--}}
{{--                                                                                </li>--}}
{{--                                                                            </ul>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">--}}
{{--                                                                    <div class="ne_re_left_bottom_main_wrapper ne_re_left_bottom_main_wrapper_top2">--}}
{{--                                                                        <div class="ne_ls_bottom_img">--}}
{{--                                                                            <img src="{{asset('front/images/content/ls2.jpg')}}" alt="rs_img">--}}
{{--                                                                        </div>--}}
{{--                                                                        <div class="ne_ls_bottom_img_cont">--}}
{{--                                                                            <h3><a href="#">Proin gravida nibh--}}
{{--                                                                                    vel velit auctor.</a></h3>--}}
{{--                                                                            <p><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>--}}
{{--                                                                            </p>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">--}}
{{--                                                                    <div class="ne_re_left_bottom_main_wrapper ne_re_left_bottom_main_wrapper_top2">--}}
{{--                                                                        <div class="ne_ls_bottom_img">--}}
{{--                                                                            <img src="{{asset('front/images/content/ls3.jpg')}}" alt="rs_img">--}}
{{--                                                                        </div>--}}
{{--                                                                        <div class="ne_ls_bottom_img_cont">--}}
{{--                                                                            <h3><a href="#">Google shifting threatens </a></h3>--}}
{{--                                                                            <p><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>--}}
{{--                                                                            </p>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">--}}
{{--                                        <div class="row">--}}
{{--                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">--}}
{{--                                                <div class="ne_busness_main_slider_wrapper">--}}
{{--                                                    <div class="ne_recent_heading_main_wrapper">--}}
{{--                                                        <h2>What's new</h2>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">--}}
{{--                                                <div class="ne_sport_slider_wrapper">--}}
{{--                                                    <div class="owl-carousel owl-theme">--}}
{{--                                                        <div class="item">--}}
{{--                                                            <div class="row">--}}
{{--                                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">--}}
{{--                                                                    <div class="ne_wn_img_main_wrapper yellow">--}}
{{--                                                                        <div class="ne_wn_img_overlay"></div>--}}
{{--                                                                        <h2>new</h2>--}}
{{--                                                                        <div class="ne_wn_social_inner_wrapper">--}}
{{--                                                                            <h3><a href="#">Award of the year</a></h3>--}}
{{--                                                                            <ul class="ne_wn_social1_wrapper">--}}
{{--                                                                                <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>--}}
{{--                                                                                </li>--}}
{{--                                                                                <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-clock-o"></i> &nbsp;07 : 00 am</a>--}}
{{--                                                                                </li>--}}
{{--                                                                            </ul>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">--}}
{{--                                                                    <div class="ne_wn_img_main_wrapper ne_wn_img_main_wrapper2 yellow">--}}
{{--                                                                        <div class="ne_wn_img_overlay"></div>--}}
{{--                                                                        <h2>new</h2>--}}
{{--                                                                        <div class="ne_wn_social_inner_wrapper">--}}
{{--                                                                            <h3><a href="#">The Clock Is Ticking</a></h3>--}}
{{--                                                                            <ul class="ne_wn_social1_wrapper">--}}
{{--                                                                                <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-calendar"></i> &nbsp;2 JAN, 2020</a>--}}
{{--                                                                                </li>--}}
{{--                                                                                <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-clock-o"></i> &nbsp;07 : 00 am</a>--}}
{{--                                                                                </li>--}}
{{--                                                                            </ul>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">--}}
{{--                                                                    <div class="ne_wn_img_main_wrapper ne_wn_img_main_wrapper3 yellow">--}}
{{--                                                                        <div class="ne_wn_img_overlay"></div>--}}
{{--                                                                        <h2>new</h2>--}}
{{--                                                                        <div class="ne_wn_social_inner_wrapper">--}}
{{--                                                                            <h3><a href="#">Easy Teriyaki--}}
{{--                                                                                </a></h3>--}}
{{--                                                                            <ul class="ne_wn_social1_wrapper">--}}
{{--                                                                                <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-calendar"></i> &nbsp;17 FEB, 2020</a>--}}
{{--                                                                                </li>--}}
{{--                                                                                <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-clock-o"></i> &nbsp;07 : 00 am</a>--}}
{{--                                                                                </li>--}}
{{--                                                                            </ul>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">--}}
{{--                                                                    <div class="ne_wn_img_main_wrapper ne_wn_img_main_wrapper4 yellow">--}}
{{--                                                                        <div class="ne_wn_img_overlay"></div>--}}
{{--                                                                        <h2>new</h2>--}}
{{--                                                                        <div class="ne_wn_social_inner_wrapper">--}}
{{--                                                                            <h3><a href="#">Boy's Head Impaled</a></h3>--}}
{{--                                                                            <ul class="ne_wn_social1_wrapper">--}}
{{--                                                                                <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-calendar"></i> &nbsp;11 MAR, 2020</a>--}}
{{--                                                                                </li>--}}
{{--                                                                                <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-clock-o"></i> &nbsp;07 : 00 am</a>--}}
{{--                                                                                </li>--}}
{{--                                                                            </ul>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="item">--}}
{{--                                                            <div class="row">--}}
{{--                                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">--}}
{{--                                                                    <div class="ne_wn_img_main_wrapper yellow">--}}
{{--                                                                        <div class="ne_wn_img_overlay"></div>--}}
{{--                                                                        <h2>new</h2>--}}
{{--                                                                        <div class="ne_wn_social_inner_wrapper">--}}
{{--                                                                            <h3><a href="#">Award of the year</a></h3>--}}
{{--                                                                            <ul class="ne_wn_social1_wrapper">--}}
{{--                                                                                <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-calendar"></i> &nbsp;18 APR, 2020</a>--}}
{{--                                                                                </li>--}}
{{--                                                                                <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-clock-o"></i> &nbsp;07 : 00 am</a>--}}
{{--                                                                                </li>--}}
{{--                                                                            </ul>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">--}}
{{--                                                                    <div class="ne_wn_img_main_wrapper ne_wn_img_main_wrapper2 yellow">--}}
{{--                                                                        <div class="ne_wn_img_overlay"></div>--}}
{{--                                                                        <h2>new</h2>--}}
{{--                                                                        <div class="ne_wn_social_inner_wrapper">--}}
{{--                                                                            <h3><a href="#">The Clock Is Ticking</a></h3>--}}
{{--                                                                            <ul class="ne_wn_social1_wrapper">--}}
{{--                                                                                <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-calendar"></i> &nbsp;22 MAY, 2020</a>--}}
{{--                                                                                </li>--}}
{{--                                                                                <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-clock-o"></i> &nbsp;07 : 00 am</a>--}}
{{--                                                                                </li>--}}
{{--                                                                            </ul>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">--}}
{{--                                                                    <div class="ne_wn_img_main_wrapper ne_wn_img_main_wrapper3 yellow">--}}
{{--                                                                        <div class="ne_wn_img_overlay"></div>--}}
{{--                                                                        <h2>new</h2>--}}
{{--                                                                        <div class="ne_wn_social_inner_wrapper">--}}
{{--                                                                            <h3><a href="#">Easy Teriyaki--}}
{{--                                                                                </a></h3>--}}
{{--                                                                            <ul class="ne_wn_social1_wrapper">--}}
{{--                                                                                <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-calendar"></i> &nbsp;17 JUL, 2020</a>--}}
{{--                                                                                </li>--}}
{{--                                                                                <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-clock-o"></i> &nbsp;07 : 00 am</a>--}}
{{--                                                                                </li>--}}
{{--                                                                            </ul>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">--}}
{{--                                                                    <div class="ne_wn_img_main_wrapper ne_wn_img_main_wrapper4 yellow">--}}
{{--                                                                        <div class="ne_wn_img_overlay"></div>--}}
{{--                                                                        <h2>new</h2>--}}
{{--                                                                        <div class="ne_wn_social_inner_wrapper">--}}
{{--                                                                            <h3><a href="#">Boy's Head Impaled</a></h3>--}}
{{--                                                                            <ul class="ne_wn_social1_wrapper">--}}
{{--                                                                                <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-calendar"></i> &nbsp;3 AUG, 2020</a>--}}
{{--                                                                                </li>--}}
{{--                                                                                <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-clock-o"></i> &nbsp;07 : 00 am</a>--}}
{{--                                                                                </li>--}}
{{--                                                                            </ul>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="item">--}}
{{--                                                            <div class="row">--}}
{{--                                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">--}}
{{--                                                                    <div class="ne_wn_img_main_wrapper yellow">--}}
{{--                                                                        <div class="ne_wn_img_overlay"></div>--}}
{{--                                                                        <h2>new</h2>--}}
{{--                                                                        <div class="ne_wn_social_inner_wrapper">--}}
{{--                                                                            <h3><a href="#">Award of the year</a></h3>--}}
{{--                                                                            <ul class="ne_wn_social1_wrapper">--}}
{{--                                                                                <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-calendar"></i> &nbsp;31 DEC, 2020</a>--}}
{{--                                                                                </li>--}}
{{--                                                                                <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-clock-o"></i> &nbsp;07 : 00 am</a>--}}
{{--                                                                                </li>--}}
{{--                                                                            </ul>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">--}}
{{--                                                                    <div class="ne_wn_img_main_wrapper ne_wn_img_main_wrapper2 yellow">--}}
{{--                                                                        <div class="ne_wn_img_overlay"></div>--}}
{{--                                                                        <h2>new</h2>--}}
{{--                                                                        <div class="ne_wn_social_inner_wrapper">--}}
{{--                                                                            <h3><a href="#">The Clock Is Ticking</a></h3>--}}
{{--                                                                            <ul class="ne_wn_social1_wrapper">--}}
{{--                                                                                <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-calendar"></i> &nbsp;7 JUL, 2020</a>--}}
{{--                                                                                </li>--}}
{{--                                                                                <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-clock-o"></i> &nbsp;07 : 00 am</a>--}}
{{--                                                                                </li>--}}
{{--                                                                            </ul>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">--}}
{{--                                                                    <div class="ne_wn_img_main_wrapper ne_wn_img_main_wrapper3 yellow">--}}
{{--                                                                        <div class="ne_wn_img_overlay"></div>--}}
{{--                                                                        <h2>new</h2>--}}
{{--                                                                        <div class="ne_wn_social_inner_wrapper">--}}
{{--                                                                            <h3><a href="#">Easy Teriyaki--}}
{{--                                                                                </a></h3>--}}
{{--                                                                            <ul class="ne_wn_social1_wrapper">--}}
{{--                                                                                <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>--}}
{{--                                                                                </li>--}}
{{--                                                                                <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-clock-o"></i> &nbsp;07 : 00 am</a>--}}
{{--                                                                                </li>--}}
{{--                                                                            </ul>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">--}}
{{--                                                                    <div class="ne_wn_img_main_wrapper ne_wn_img_main_wrapper4 yellow">--}}
{{--                                                                        <div class="ne_wn_img_overlay"></div>--}}
{{--                                                                        <h2>new</h2>--}}
{{--                                                                        <div class="ne_wn_social_inner_wrapper">--}}
{{--                                                                            <h3><a href="#">Boy's Head Impaled</a></h3>--}}
{{--                                                                            <ul class="ne_wn_social1_wrapper">--}}
{{--                                                                                <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>--}}
{{--                                                                                </li>--}}
{{--                                                                                <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-clock-o"></i> &nbsp;07 : 00 am</a>--}}
{{--                                                                                </li>--}}
{{--                                                                            </ul>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">--}}
{{--                                        <div class="row">--}}
{{--                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">--}}
{{--                                                <div class="ne_busness_main_slider_wrapper">--}}
{{--                                                    <div class="ne_recent_heading_main_wrapper">--}}
{{--                                                        <h2>Travels</h2>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">--}}
{{--                                                <div class="ne_sport_slider_wrapper ne_sport_slider_wrapper_travels">--}}
{{--                                                    <div class="owl-carousel owl-theme">--}}
{{--                                                        <div class="item">--}}
{{--                                                            <div class="row">--}}
{{--                                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">--}}
{{--                                                                    <div class="ne_re_left_bottom_main_wrapper ne_re_left_bottom_main_wrapper_top2">--}}
{{--                                                                        <div class="ne_tr_bottom_img">--}}
{{--                                                                            <img src="{{asset('front/images/content/t1.jpg')}}" alt="rs_img">--}}
{{--                                                                        </div>--}}
{{--                                                                        <div class="ne_tr_bottom_img_cont">--}}
{{--                                                                            <h3><a href="#">Proin gravida nibh--}}
{{--                                                                                    vel velit auctor.</a></h3>--}}
{{--                                                                            <p><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>--}}
{{--                                                                            </p>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">--}}
{{--                                                                    <div class="ne_re_left_bottom_main_wrapper ne_re_left_bottom_main_wrapper_top2">--}}
{{--                                                                        <div class="ne_tr_bottom_img">--}}
{{--                                                                            <img src="{{asset('front/images/content/t2.jpg')}}" alt="rs_img">--}}
{{--                                                                        </div>--}}
{{--                                                                        <div class="ne_tr_bottom_img_cont">--}}
{{--                                                                            <h3><a href="#">--}}
{{--                                                                                    Hands on with the Apple </a></h3>--}}
{{--                                                                            <p><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>--}}
{{--                                                                            </p>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">--}}
{{--                                                                    <div class="ne_re_left_bottom_main_wrapper ne_re_left_bottom_main_wrapper_top2">--}}
{{--                                                                        <div class="ne_tr_bottom_img">--}}
{{--                                                                            <img src="{{asset('front/images/content/t3.jpg')}}" alt="rs_img">--}}
{{--                                                                        </div>--}}
{{--                                                                        <div class="ne_tr_bottom_img_cont">--}}
{{--                                                                            <h3><a href="#">Google shifting threatens </a></h3>--}}
{{--                                                                            <p><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>--}}
{{--                                                                            </p>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">--}}
{{--                                                                    <div class="ne_re_left_bottom_main_wrapper ne_re_left_bottom_main_wrapper_top2">--}}
{{--                                                                        <div class="ne_tr_bottom_img">--}}
{{--                                                                            <img src="{{asset('front/images/content/t4.jpg')}}" alt="rs_img">--}}
{{--                                                                        </div>--}}
{{--                                                                        <div class="ne_tr_bottom_img_cont">--}}
{{--                                                                            <h3><a href="#">Tesla just lost its head </a></h3>--}}
{{--                                                                            <p><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>--}}
{{--                                                                            </p>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">--}}
{{--                                                                    <div class="ne_re_left_bottom_main_wrapper ne_re_left_bottom_main_wrapper_top2">--}}
{{--                                                                        <div class="ne_tr_bottom_img">--}}
{{--                                                                            <img src="{{asset('front/images/content/t5.jpg')}}" alt="rs_img">--}}
{{--                                                                        </div>--}}
{{--                                                                        <div class="ne_tr_bottom_img_cont">--}}
{{--                                                                            <h3><a href="#">Faangs diverge prospect</a></h3>--}}
{{--                                                                            <p><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>--}}
{{--                                                                            </p>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">--}}
{{--                                                                    <div class="ne_re_left_bottom_main_wrapper ne_re_left_bottom_main_wrapper_top2">--}}
{{--                                                                        <div class="ne_tr_bottom_img">--}}
{{--                                                                            <img src="{{asset('front/images/content/t6.jpg')}}" alt="rs_img">--}}
{{--                                                                        </div>--}}
{{--                                                                        <div class="ne_tr_bottom_img_cont">--}}
{{--                                                                            <h3><a href="#">--}}
{{--                                                                                    Beats something today</a></h3>--}}
{{--                                                                            <p><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>--}}
{{--                                                                            </p>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="item">--}}
{{--                                                            <div class="row">--}}
{{--                                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">--}}
{{--                                                                    <div class="ne_re_left_bottom_main_wrapper ne_re_left_bottom_main_wrapper_top2">--}}
{{--                                                                        <div class="ne_tr_bottom_img">--}}
{{--                                                                            <img src="{{asset('front/images/content/t1.jpg')}}" alt="rs_img">--}}
{{--                                                                        </div>--}}
{{--                                                                        <div class="ne_tr_bottom_img_cont">--}}
{{--                                                                            <h3><a href="#">Proin gravida nibh--}}
{{--                                                                                    vel velit auctor.</a></h3>--}}
{{--                                                                            <p><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>--}}
{{--                                                                            </p>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">--}}
{{--                                                                    <div class="ne_re_left_bottom_main_wrapper ne_re_left_bottom_main_wrapper_top2">--}}
{{--                                                                        <div class="ne_tr_bottom_img">--}}
{{--                                                                            <img src="{{asset('front/images/content/t2.jpg')}}" alt="rs_img">--}}
{{--                                                                        </div>--}}
{{--                                                                        <div class="ne_tr_bottom_img_cont">--}}
{{--                                                                            <h3><a href="#">--}}
{{--                                                                                    Hands on with the Apple </a></h3>--}}
{{--                                                                            <p><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>--}}
{{--                                                                            </p>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">--}}
{{--                                                                    <div class="ne_re_left_bottom_main_wrapper ne_re_left_bottom_main_wrapper_top2">--}}
{{--                                                                        <div class="ne_tr_bottom_img">--}}
{{--                                                                            <img src="{{asset('front/images/content/t3.jpg')}}" alt="rs_img">--}}
{{--                                                                        </div>--}}
{{--                                                                        <div class="ne_tr_bottom_img_cont">--}}
{{--                                                                            <h3><a href="#">Google shifting threatens </a></h3>--}}
{{--                                                                            <p><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>--}}
{{--                                                                            </p>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">--}}
{{--                                                                    <div class="ne_re_left_bottom_main_wrapper ne_re_left_bottom_main_wrapper_top2">--}}
{{--                                                                        <div class="ne_tr_bottom_img">--}}
{{--                                                                            <img src="{{asset('front/images/content/t4.jpg')}}" alt="rs_img">--}}
{{--                                                                        </div>--}}
{{--                                                                        <div class="ne_tr_bottom_img_cont">--}}
{{--                                                                            <h3><a href="#">Tesla just lost its head </a></h3>--}}
{{--                                                                            <p><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>--}}
{{--                                                                            </p>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">--}}
{{--                                                                    <div class="ne_re_left_bottom_main_wrapper ne_re_left_bottom_main_wrapper_top2">--}}
{{--                                                                        <div class="ne_tr_bottom_img">--}}
{{--                                                                            <img src="{{asset('front/images/content/t5.jpg')}}" alt="rs_img">--}}
{{--                                                                        </div>--}}
{{--                                                                        <div class="ne_tr_bottom_img_cont">--}}
{{--                                                                            <h3><a href="#">Faangs diverge prospect</a></h3>--}}
{{--                                                                            <p><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>--}}
{{--                                                                            </p>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">--}}
{{--                                                                    <div class="ne_re_left_bottom_main_wrapper ne_re_left_bottom_main_wrapper_top2">--}}
{{--                                                                        <div class="ne_tr_bottom_img">--}}
{{--                                                                            <img src="{{asset('front/images/content/t6.jpg')}}" alt="rs_img">--}}
{{--                                                                        </div>--}}
{{--                                                                        <div class="ne_tr_bottom_img_cont">--}}
{{--                                                                            <h3><a href="#">--}}
{{--                                                                                    Beats something today</a></h3>--}}
{{--                                                                            <p><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>--}}
{{--                                                                            </p>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="item">--}}
{{--                                                            <div class="row">--}}
{{--                                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">--}}
{{--                                                                    <div class="ne_re_left_bottom_main_wrapper ne_re_left_bottom_main_wrapper_top2">--}}
{{--                                                                        <div class="ne_tr_bottom_img">--}}
{{--                                                                            <img src="{{asset('front/images/content/t1.jpg')}}" alt="rs_img">--}}
{{--                                                                        </div>--}}
{{--                                                                        <div class="ne_tr_bottom_img_cont">--}}
{{--                                                                            <h3><a href="#">Proin gravida nibh--}}
{{--                                                                                    vel velit auctor.</a></h3>--}}
{{--                                                                            <p><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>--}}
{{--                                                                            </p>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">--}}
{{--                                                                    <div class="ne_re_left_bottom_main_wrapper ne_re_left_bottom_main_wrapper_top2">--}}
{{--                                                                        <div class="ne_tr_bottom_img">--}}
{{--                                                                            <img src="{{asset('front/images/content/t2.jpg')}}" alt="rs_img">--}}
{{--                                                                        </div>--}}
{{--                                                                        <div class="ne_tr_bottom_img_cont">--}}
{{--                                                                            <h3><a href="#">--}}
{{--                                                                                    Hands on with the Apple </a></h3>--}}
{{--                                                                            <p><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>--}}
{{--                                                                            </p>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">--}}
{{--                                                                    <div class="ne_re_left_bottom_main_wrapper ne_re_left_bottom_main_wrapper_top2">--}}
{{--                                                                        <div class="ne_tr_bottom_img">--}}
{{--                                                                            <img src="{{asset('front/images/content/t3.jpg')}}" alt="rs_img">--}}
{{--                                                                        </div>--}}
{{--                                                                        <div class="ne_tr_bottom_img_cont">--}}
{{--                                                                            <h3><a href="#">Google shifting threatens </a></h3>--}}
{{--                                                                            <p><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>--}}
{{--                                                                            </p>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">--}}
{{--                                                                    <div class="ne_re_left_bottom_main_wrapper ne_re_left_bottom_main_wrapper_top2">--}}
{{--                                                                        <div class="ne_tr_bottom_img">--}}
{{--                                                                            <img src="{{asset('front/images/content/t4.jpg')}}" alt="rs_img">--}}
{{--                                                                        </div>--}}
{{--                                                                        <div class="ne_tr_bottom_img_cont">--}}
{{--                                                                            <h3><a href="#">Tesla just lost its head </a></h3>--}}
{{--                                                                            <p><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>--}}
{{--                                                                            </p>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">--}}
{{--                                                                    <div class="ne_re_left_bottom_main_wrapper ne_re_left_bottom_main_wrapper_top2">--}}
{{--                                                                        <div class="ne_tr_bottom_img">--}}
{{--                                                                            <img src="{{asset('front/images/content/t5.jpg')}}" alt="rs_img">--}}
{{--                                                                        </div>--}}
{{--                                                                        <div class="ne_tr_bottom_img_cont">--}}
{{--                                                                            <h3><a href="#">Faangs diverge prospect</a></h3>--}}
{{--                                                                            <p><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>--}}
{{--                                                                            </p>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">--}}
{{--                                                                    <div class="ne_re_left_bottom_main_wrapper ne_re_left_bottom_main_wrapper_top2">--}}
{{--                                                                        <div class="ne_tr_bottom_img">--}}
{{--                                                                            <img src="{{asset('front/images/content/t6.jpg')}}" alt="rs_img">--}}
{{--                                                                        </div>--}}
{{--                                                                        <div class="ne_tr_bottom_img_cont">--}}
{{--                                                                            <h3><a href="#">--}}
{{--                                                                                    Beats something today</a></h3>--}}
{{--                                                                            <p><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>--}}
{{--                                                                            </p>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">--}}
{{--                    <div class="ne_indx_sidebar_main_wrapper">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">--}}
{{--                                <div class="ne_sidebar_inner_social_wrapper ne_sidebar_inner_social_wrapper_hide_res">--}}
{{--                                    <div class="ne_recent_heading_main_wrapper font_18px">--}}
{{--                                        <h2>STAY CONNECTED</h2>--}}
{{--                                    </div>--}}
{{--                                    <div class="ne_indx_sidebar_shair_icon_main_wrapper">--}}
{{--                                        <div class="btc_blog_cate_social_fb_wrapper"> <a href="#"><i class="fa fa-facebook"></i><br> 4.1 M<br>Fans</a>--}}
{{--                                        </div>--}}
{{--                                        <div class="btc_blog_cate_social_tw_wrapper"> <a href="#"><i class="fa fa-twitter"></i><br> 178<br>Followers</a>--}}
{{--                                        </div>--}}
{{--                                        <div class="btc_blog_cate_social_gp_wrapper"> <a href="#"><i class="fa fa-google-plus"></i><br> 884.0 K<br>Followers</a>--}}
{{--                                        </div>--}}
{{--                                        <div class="btc_blog_cate_social_vimo_wrapper"> <a href="#"><i class="fa fa-vimeo"></i><br> 323 K<br>Subscriber</a>--}}
{{--                                        </div>--}}
{{--                                        <div class="btc_blog_cate_social_yt_wrapper"> <a href="#"><i class="fa fa-youtube-play"></i><br> 323 K<br>Subscriber</a>--}}
{{--                                        </div>--}}
{{--                                        <div class="btc_blog_cate_social_shair_wrapper"> <a href="#"><i class="fa fa-share-alt"></i><br> 7.4 K<br>Followers</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">--}}
{{--                                <div class="ne_sidebar_inner_social_wrapper ne_sidebar_second_inner_social_wrapper ne_sidebar_inner_social_wrapper_hide_res_weather">--}}
{{--                                    <div class="ne_recent_heading_main_wrapper font_18px">--}}
{{--                                        <h2>Today weather</h2>--}}
{{--                                    </div>--}}
{{--                                    <div class="ne_weather_inner_wrapper">--}}
{{--                                        <div id="current" class="wrapper">--}}
{{--                                            <h1 class="location">Chicago, IL</h1>--}}
{{--                                            <h2 class="date">Sunday, January 1, 2020</h2>--}}
{{--                                            <p class="weather_img">--}}
{{--                                                <img src="{{asset('front/images/content/weather_img.png')}}" alt="weather">--}}
{{--                                            </p>--}}
{{--                                            <p class="temp">72</p>--}}
{{--                                            <p class="conditions">Sunny</p>--}}
{{--                                        </div>--}}
{{--                                        <!-- Future Forecast -->--}}
{{--                                        <div id="future" class="wrapper">--}}
{{--                                            <div class="container">--}}
{{--                                                <h3 class="day">Mon</h3>--}}
{{--                                                <p class="weather_img2">--}}
{{--                                                    <img src="{{asset('front/images/content/weather_img2.png')}}" alt="weather">--}}
{{--                                                </p>--}}
{{--                                                <p class="tempRange"><span class="high">64</span> <span class="low">48</span>--}}
{{--                                                </p>--}}
{{--                                            </div>--}}
{{--                                            <div class="container">--}}
{{--                                                <h3 class="day">Tue</h3>--}}
{{--                                                <p class="weather_img2">--}}
{{--                                                    <img src="{{asset('front/images/content/weather_img3.png')}}" alt="weather">--}}
{{--                                                </p>--}}
{{--                                                <p class="tempRange"><span class="high">57</span> <span class="low">45</span>--}}
{{--                                                </p>--}}
{{--                                            </div>--}}
{{--                                            <div class="container">--}}
{{--                                                <h3 class="day">Wed</h3>--}}
{{--                                                <p class="weather_img2">--}}
{{--                                                    <img src="{{asset('front/images/content/weather_img4.png')}}" alt="weather">--}}
{{--                                                </p>--}}
{{--                                                <p class="tempRange"><span class="high">63</span> <span class="low">59</span>--}}
{{--                                                </p>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">--}}
{{--                                <div class="ne_sidebar_inner_social_wrapper ne_sidebar_second_inner_social_wrapper">--}}
{{--                                    <div class="ne_recent_heading_main_wrapper font_18px">--}}
{{--                                        <h2>Latest News</h2>--}}
{{--                                    </div>--}}
{{--                                    <div class="ne_lns_slider_wrapper ne_ln_main_sidebar_slider_wrapper">--}}
{{--                                        <div class="owl-carousel owl-theme">--}}
{{--                                            <div class="item">--}}
{{--                                                <div class="ne_wn_img_main_wrapper ne_ln_inner_img_main_wrapper ne_re_left_img_main_wrapper2">--}}
{{--                                                    <div class="ne_wn_img_overlay"></div>--}}
{{--                                                    <h2>sport</h2>--}}
{{--                                                    <div class="ne_wn_social_inner_wrapper">--}}
{{--                                                        <h3><a href="#">Award of the year</a></h3>--}}
{{--                                                        <ul class="ne_wn_social1_wrapper">--}}
{{--                                                            <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>--}}
{{--                                                            </li>--}}
{{--                                                            <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-clock-o"></i> &nbsp;07 : 00 am</a>--}}
{{--                                                            </li>--}}
{{--                                                        </ul>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="item">--}}
{{--                                                <div class="ne_wn_img_main_wrapper ne_ln_inner_img_main_wrapper ne_re_left_img_main_wrapper2">--}}
{{--                                                    <div class="ne_wn_img_overlay"></div>--}}
{{--                                                    <h2>sport</h2>--}}
{{--                                                    <div class="ne_wn_social_inner_wrapper">--}}
{{--                                                        <h3><a href="#">The clock is ticking </a></h3>--}}
{{--                                                        <ul class="ne_wn_social1_wrapper">--}}
{{--                                                            <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>--}}
{{--                                                            </li>--}}
{{--                                                            <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-clock-o"></i> &nbsp;07 : 00 am</a>--}}
{{--                                                            </li>--}}
{{--                                                        </ul>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="item">--}}
{{--                                                <div class="ne_wn_img_main_wrapper ne_ln_inner_img_main_wrapper ne_re_left_img_main_wrapper2">--}}
{{--                                                    <div class="ne_wn_img_overlay"></div>--}}
{{--                                                    <h2>sport</h2>--}}
{{--                                                    <div class="ne_wn_social_inner_wrapper">--}}
{{--                                                        <h3><a href="#">Award of the year</a></h3>--}}
{{--                                                        <ul class="ne_wn_social1_wrapper">--}}
{{--                                                            <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>--}}
{{--                                                            </li>--}}
{{--                                                            <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-clock-o"></i> &nbsp;07 : 00 am</a>--}}
{{--                                                            </li>--}}
{{--                                                        </ul>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">--}}
{{--                                <div class="ne_sidebar_inner_social_wrapper ne_sidebar_second_inner_social_wrapper">--}}
{{--                                    <div class="ne_recent_heading_main_wrapper font_18px">--}}
{{--                                        <h2>Categories</h2>--}}
{{--                                    </div>--}}
{{--                                    <div class="ne_sidebar_cate_list_wrappper">--}}
{{--                                        <ul>--}}
{{--                                            <li><a href="#"><i class="fa fa-square"></i> &nbsp;&nbsp;World <span>10245</span></a>--}}
{{--                                            </li>--}}
{{--                                            <li><a href="#"><i class="fa fa-square"></i> &nbsp;&nbsp;Travel <span>2025</span>--}}
{{--                                                </a></li>--}}
{{--                                            <li><a href="#"><i class="fa fa-square"></i> &nbsp;&nbsp;Health <span>30503</span>--}}
{{--                                                </a></li>--}}
{{--                                            <li><a href="#"><i class="fa fa-square"></i> &nbsp;&nbsp;Lifestyle <span>50014</span>--}}
{{--                                                </a></li>--}}
{{--                                            <li><a href="#"><i class="fa fa-square"></i> &nbsp;&nbsp;Sports <span>2545</span>--}}
{{--                                                </a></li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">--}}
{{--                                <div class="ne_sidebar_inner_social_wrapper ne_sidebar_second_inner_social_wrapper">--}}
{{--                                    <div class="ne_recent_heading_main_wrapper font_18px">--}}
{{--                                        <h2>Advertising</h2>--}}
{{--                                    </div>--}}
{{--                                    <div class="ne_sidebar_advertize_main_wrapper">--}}
{{--                                        <a href="#">--}}
{{--                                            <img src="{{asset('front/images/content/advertiz.jpg')}}" alt="img">--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">--}}
{{--                                <div class="ne_sidebar_inner_social_wrapper ne_sidebar_second_inner_social_wrapper">--}}
{{--                                    <div class="ne_recent_heading_main_wrapper font_18px">--}}
{{--                                        <h2>Recent Posts</h2>--}}
{{--                                    </div>--}}
{{--                                    <div class="ne_re_left_bottom_main_wrapper ne_pc_main_cont_wrapper">--}}
{{--                                        <div class="ne_pc_bottom_img">--}}
{{--                                            <img src="{{asset('front/images/content/pc1.jpg')}}" alt="rs_img">--}}
{{--                                        </div>--}}
{{--                                        <div class="ne_pc_bottom_img_cont">--}}
{{--                                            <h3><a href="#">Etiam dignissim aliquet sed.</a></h3>--}}
{{--                                            <p><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>--}}
{{--                                            </p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="ne_re_left_bottom_main_wrapper ne_pc_main_cont_wrapper2">--}}
{{--                                        <div class="ne_pc_bottom_img">--}}
{{--                                            <img src="{{asset('front/images/content/pc2.jpg')}}" alt="rs_img">--}}
{{--                                        </div>--}}
{{--                                        <div class="ne_pc_bottom_img_cont">--}}
{{--                                            <h3><a href="#">Google shifting threatens aliquet</a></h3>--}}
{{--                                            <p><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>--}}
{{--                                            </p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="ne_re_left_bottom_main_wrapper ne_pc_main_cont_wrapper2">--}}
{{--                                        <div class="ne_pc_bottom_img">--}}
{{--                                            <img src="{{asset('front/images/content/pc3.jpg')}}" alt="rs_img">--}}
{{--                                        </div>--}}
{{--                                        <div class="ne_pc_bottom_img_cont">--}}
{{--                                            <h3><a href="#">--}}
{{--                                                    Beats did some thing today</a></h3>--}}
{{--                                            <p><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>--}}
{{--                                            </p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="ne_re_left_bottom_main_wrapper ne_pc_main_cont_wrapper2">--}}
{{--                                        <div class="ne_pc_bottom_img">--}}
{{--                                            <img src="{{asset('front/images/content/pc4.jpg')}}" alt="rs_img">--}}
{{--                                        </div>--}}
{{--                                        <div class="ne_pc_bottom_img_cont">--}}
{{--                                            <h3><a href="#">--}}
{{--                                                    Hands on with the Apple </a></h3>--}}
{{--                                            <p><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>--}}
{{--                                            </p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="ne_re_left_bottom_main_wrapper ne_pc_main_cont_wrapper2">--}}
{{--                                        <div class="ne_pc_bottom_img">--}}
{{--                                            <img src="{{asset('front/images/content/pc5.jpg')}}" alt="rs_img">--}}
{{--                                        </div>--}}
{{--                                        <div class="ne_pc_bottom_img_cont">--}}
{{--                                            <h3><a href="#">Etiam dignissim velit sed.</a></h3>--}}
{{--                                            <p><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>--}}
{{--                                            </p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">--}}
{{--                                <div class="ne_sidebar_inner_social_wrapper ne_sidebar_second_inner_social_wrapper">--}}
{{--                                    <div class="ne_recent_heading_main_wrapper font_18px">--}}
{{--                                        <h2>Latest Articles</h2>--}}
{{--                                    </div>--}}
{{--                                    <div class="ne_wn_img_main_wrapper ne_ln_inner_img_main_wrapper ne_re_left_img_main_wrapper2 bab">--}}
{{--                                        <div class="ne_wn_img_overlay"></div>--}}

{{--                                        <div class="ne_wn_social_inner_wrapper">--}}
{{--                                            <h3><a href="#">Award of the year</a></h3>--}}
{{--                                            <ul class="ne_wn_social1_wrapper">--}}
{{--                                                <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>--}}
{{--                                                </li>--}}
{{--                                                <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-clock-o"></i> &nbsp;07 : 00 am</a>--}}
{{--                                                </li>--}}
{{--                                            </ul>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="ne_re_left_bottom_main_wrapper ne_pc_main_cont_wrapper3">--}}
{{--                                        <div class="ne_pc_bottom_img">--}}
{{--                                            <img src="{{asset('front/images/content/pc6.jpg')}}" alt="rs_img">--}}
{{--                                        </div>--}}
{{--                                        <div class="ne_pc_bottom_img_cont">--}}
{{--                                            <h3><a href="#">Etiam dignissim aliquet velit sed.</a></h3>--}}
{{--                                            <p><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>--}}
{{--                                            </p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="ne_re_left_bottom_main_wrapper ne_pc_main_cont_wrapper3">--}}
{{--                                        <div class="ne_pc_bottom_img">--}}
{{--                                            <img src="{{asset('front/images/content/pc7.jpg')}}" alt="rs_img">--}}
{{--                                        </div>--}}
{{--                                        <div class="ne_pc_bottom_img_cont">--}}
{{--                                            <h3><a href="#">Beats did some thing today</a></h3>--}}
{{--                                            <p><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>--}}
{{--                                            </p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="ne_re_left_bottom_main_wrapper ne_pc_main_cont_wrapper3">--}}
{{--                                        <div class="ne_pc_bottom_img">--}}
{{--                                            <img src="{{asset('front/images/content/pc8.jpg')}}" alt="rs_img">--}}
{{--                                        </div>--}}
{{--                                        <div class="ne_pc_bottom_img_cont">--}}
{{--                                            <h3><a href="#">Etiam dignissim velit sed.</a></h3>--}}
{{--                                            <p><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</a>--}}
{{--                                            </p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">--}}
{{--                                <div class="ne_sidebar_inner_social_wrapper ne_sidebar_second_inner_social_wrapper">--}}
{{--                                    <div class="ne_recent_heading_main_wrapper font_18px">--}}
{{--                                        <h2>Find us on Facebook</h2>--}}
{{--                                    </div>--}}
{{--                                    <div class="ne_sidebar_faceb_section_img">--}}
{{--                                        <div class="ne_inva_img_overlay"></div>--}}
{{--                                        <img src="{{asset('front/images/content/facebook_img.jpg')}}" alt="img">--}}
{{--                                        <div class="ne_inva_main_wrapper">--}}
{{--                                            <div class="ne_inva_img_wrapper">--}}
{{--                                                <img src="{{asset('front/images/content/envato_img.jpg')}}" alt="img">--}}
{{--                                            </div>--}}
{{--                                            <div class="ne_inva_img_cont_wrapper">--}}
{{--                                                <h3>Envato</h3>--}}
{{--                                                <h4>175,848 likes</h4>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <h5><a href="#"><i class="fa fa-facebook-square"></i> &nbsp;Like</a></h5>--}}
{{--                                    </div>--}}
{{--                                    <div class="ne_fb_online_section_wrapper">--}}
{{--                                        <p>You and 122 other friend like this</p>--}}
{{--                                        <ul>--}}
{{--                                            <li>--}}
{{--                                                <img src="{{asset('front/images/content/fb1.jpg')}}" alt="img">--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <img src="{{asset('front/images/content/fb2.jpg')}}" alt="img">--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <img src="{{asset('front/images/content/fb3.jpg')}}" alt="img">--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <img src="{{asset('front/images/content/fb4.jpg')}}" alt="img">--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <img src="{{asset('front/images/content/fb5.jpg')}}" alt="img">--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <img src="{{asset('front/images/content/fb6.jpg')}}" alt="img">--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">--}}
{{--                                <div class="ne_sidebar_inner_social_wrapper ne_sidebar_second_inner_social_wrapper">--}}
{{--                                    <div class="ne_recent_heading_main_wrapper font_18px">--}}
{{--                                        <h2>Get Even More</h2>--}}
{{--                                    </div>--}}
{{--                                    <div class="ne_sidebar_serch_main_wrapper">--}}
{{--                                        <p>"Get all latest content delivered straight to your inbox."</p>--}}
{{--                                        <div class="ne_sidebar_search_aaauch"> <i class="fa fa-envelope input_icon"></i>--}}
{{--                                            <input type="email" placeholder="your email address">--}}
{{--                                            <button><i class="fa fa-location-arrow"></i>--}}
{{--                                            </button>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">--}}
{{--                                <div class="ne_sidebar_inner_social_wrapper ne_sidebar_second_inner_social_wrapper">--}}
{{--                                    <div class="ne_recent_heading_main_wrapper font_18px">--}}
{{--                                        <h2>latest reviews</h2>--}}
{{--                                    </div>--}}
{{--                                    <div class="ne_lr_main_section_wrapper">--}}
{{--                                        <div class="ne_lr_img_wrapper">--}}
{{--                                            <img src="{{asset('front/images/content/lr1.jpg')}}" alt="img">--}}
{{--                                        </div>--}}
{{--                                        <div class="ne_lr_img_cont_wrapper">--}}
{{--                                            <div class="ne_lr_star_dev_wrapper hidden-md"> <i class="fa fa-star"></i>--}}
{{--                                                <i class="fa fa-star"></i>--}}
{{--                                                <i class="fa fa-star"></i>--}}
{{--                                                <i class="fa fa-star"></i>--}}
{{--                                                <i class="fa fa-star"></i>--}}
{{--                                            </div>--}}
{{--                                            <div class="ne_lr_star_right_section hidden-md">--}}
{{--                                                <h4>5.0</h4>--}}
{{--                                            </div>--}}
{{--                                            <div class="ne_lr_img_cont_heading_wrapper">--}}
{{--                                                <h3><a href="#">Velebrity Fashion</a></h3>--}}
{{--                                                <p>NewsX is a Creative and Unique</p>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="ne_lr_main_section_wrapper ne_lr_main_section_wrapper2">--}}
{{--                                        <div class="ne_lr_img_wrapper">--}}
{{--                                            <img src="{{asset('front/images/content/lr2.jpg')}}" alt="img">--}}
{{--                                        </div>--}}
{{--                                        <div class="ne_lr_img_cont_wrapper">--}}
{{--                                            <div class="ne_lr_star_dev_wrapper hidden-md"> <i class="fa fa-star"></i>--}}
{{--                                                <i class="fa fa-star"></i>--}}
{{--                                                <i class="fa fa-star"></i>--}}
{{--                                                <i class="fa fa-star"></i>--}}
{{--                                                <i class="fa fa-star-half"></i>--}}
{{--                                            </div>--}}
{{--                                            <div class="ne_lr_star_right_section hidden-md">--}}
{{--                                                <h4>4.5</h4>--}}
{{--                                            </div>--}}
{{--                                            <div class="ne_lr_img_cont_heading_wrapper">--}}
{{--                                                <h3><a href="#">Easy teriyaki </a></h3>--}}
{{--                                                <p>NewsX is a Creative and Unique</p>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="ne_lr_main_section_wrapper ne_lr_main_section_wrapper2">--}}
{{--                                        <div class="ne_lr_img_wrapper">--}}
{{--                                            <img src="{{asset('front/images/content/lr3.jpg')}}" alt="img">--}}
{{--                                        </div>--}}
{{--                                        <div class="ne_lr_img_cont_wrapper">--}}
{{--                                            <div class="ne_lr_star_dev_wrapper hidden-md"> <i class="fa fa-star"></i>--}}
{{--                                                <i class="fa fa-star"></i>--}}
{{--                                                <i class="fa fa-star"></i>--}}
{{--                                                <i class="fa fa-star-half"></i>--}}
{{--                                                <i class="fa fa-star-half"></i>--}}
{{--                                            </div>--}}
{{--                                            <div class="ne_lr_star_right_section hidden-md">--}}
{{--                                                <h4>3.5</h4>--}}
{{--                                            </div>--}}
{{--                                            <div class="ne_lr_img_cont_heading_wrapper">--}}
{{--                                                <h3><a href="#">Faangs diverge </a></h3>--}}
{{--                                                <p>NewsX is a Creative and Unique</p>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">--}}
{{--                    <div class="ne_bottom_banner_main_wrapper">--}}
{{--                        <a href="#">--}}
{{--                            <img src="{{asset('front/images/content/banner_bottom.jpg')}}" alt="banner">--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <!--resent news End-->
    <!-- prs patner slider Start -->
    <!-- prs patner slider End -->

    <div class="thanks-block">
        <div class="uk-container uk-container-center">
            <h3 class="uk-text-center title-header">Благодарности <span class="uk-hidden-small">от известных</span> клиентов</h3>
            <div class="uk-widht-1-1 uk-width-xlarge-5-6 uk-align-center">
                <ul class="uk-grid uk-grid-width-1-3 uk-grid-width-small-1-3 uk-grid-width-medium-1-6 uk-grid-width-large-1-6 uk-grid-width-xlarge-1-6 uk-text-center uk-margin-large-top"
                    data-uk-grid-margin="">
                    <li class="uk-row-first"><img src="{{asset('front/images/client_logo_01.png')}}" alt="Благодарности"></li>
                    <li><img src="{{asset('front/images/client_logo_02.png')}}" alt="Благодарности"></li>
                    <li><img src="{{asset('front/images/client_logo_03.png')}}" alt="Благодарности"></li>
                    <li class="uk-hidden-small"><img src="{{asset('front/images/client_logo_04.png')}}" alt="Благодарности"></li>
                    <li class="uk-hidden-small"><img src="{{asset('front/images/client_logo_05.png')}}" alt="Благодарности"></li>
                    <li class="uk-hidden-small"><img src="{{asset('front/images/client_logo_06.png')}}" alt="Благодарности"></li>
                </ul>
                <div data-uk-slideset="{small: 1, medium: 3, large: 3, xlarge: 4}" class="uk-margin-large-top">
                    <div class="uk-slidenav-position uk-margin">
                        <ul class="uk-slideset uk-grid uk-flex-center uk-grid-width-1-1 uk-grid-width-medium-1-3 uk-grid-width-large-1-3 uk-grid-width-xlarge-1-4 uk-grid-width-small-1-1">
                            <li class="uk-active" style="">
                                <a href="/pic/thanks/4955.jpg" data-uk-lightbox="{group:'my-group'}" title="Башнефть">
                                    <img src="{{asset('front/images/4955_th.jpg')}}" alt="img">

                                </a>
                            </li>
                            <li class="uk-active" style="">
                                <a href="/pic/thanks/4956.jpg" data-uk-lightbox="{group:'my-group'}" title="PONY EXPRESS">
                                    <img src="{{asset('front/images/4956_th.jpg')}}" alt="PONY EXPRESS">
                                </a>
                            </li>
                            <li class="uk-active" style="">
                                <a href="/pic/thanks/4957.jpg" data-uk-lightbox="{group:'my-group'}" title="Ростелеком">
                                    <img src="{{asset('front/images/4957_th.jpg')}}" alt="Ростелеком">

                                </a>
                            </li>
                            <li class="uk-active" style="">
                                <a href="/pic/thanks/4958.jpg" data-uk-lightbox="{group:'my-group'}" title="АО РЖД">
                                    <img src="{{asset('front/images/4958_th.jpg')}}" alt="АО РЖД">
                                </a>
                            </li>

                        </ul>
                        <a href="" class="uk-slidenav uk-slidenav-previous uk-visible-small"
                           data-uk-slideset-item="previous"></a>
                        <a href="" class="uk-slidenav uk-slidenav-next uk-visible-small" data-uk-slideset-item="next"></a>
                    </div>
                </div>
            </div>
            <div class="uk-text-center uk-margin-large-top">
                <a href="/#" class="uk-button uk-button-primary button-light button-round">Все
                    благодарности</a>
            </div>
        </div>

        <div style="margin-top: 50px;" class="uk-container uk-container-center">
            <p>Организация переезда это сложный&nbsp; и длительный процесс, который требует тщательной подготовки. Мы предлагаем услуги специалистов, а именно профессиональных грузчиков, которые в кратчайший срок произведут все необходимые работы, для быстрого переезда, по приемлемым ценам.<br>
                Для дополнительного удобства, можно воспользоваться и другими услугами различного профиля. Из широкого спектра услуг, можно вызвать специалистов из различных областей: по демонтажным работам,клининга, уборки снега, вывоза мусора. Кроме того, мы гарантируем качественное выполнение всех работ и доступные цены.</p>

        </div>
    </div>

    <!--main js file end-->
{{--    <div class="prs_patner_main_section_wrapper">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">--}}
{{--                    <div class="prs_pn_slider_wraper">--}}
{{--                        <div class="owl-carousel owl-theme">--}}
{{--                            <div class="item">--}}
{{--                                <div class="prs_pn_img_wrapper">--}}
{{--                                    <img src="{{asset('front/images/client_logo_01.png')}}" alt="patner_img">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="item">--}}
{{--                                <div class="prs_pn_img_wrapper">--}}
{{--                                    <img src="{{asset('front/images/client_logo_02.png')}}" alt="patner_img">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="item">--}}
{{--                                <div class="prs_pn_img_wrapper">--}}
{{--                                    <img src="{{asset('front/images/client_logo_03.png')}}" alt="patner_img">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="item">--}}
{{--                                <div class="prs_pn_img_wrapper">--}}
{{--                                    <img src="{{asset('front/images/client_logo_04.png')}}" alt="patner_img">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="item">--}}
{{--                                <div class="prs_pn_img_wrapper">--}}
{{--                                    <img src="{{asset('front/images/client_logo_05.png')}}" alt="patner_img">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="item">--}}
{{--                                <div class="prs_pn_img_wrapper">--}}
{{--                                    <img src="{{asset('front/images/client_logo_06.png')}}" alt="patner_img">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

    <div class="consultating-block">
        <div class="uk-container uk-container-center">
            <div class="uk-grid uk-grid-large-collapse">
                <div class="uk-hidden-small uk-width-medium-1-2 uk-width-large-1-2 uk-width-xlarge-1-2 uk-text-right">
                    <div class="block-girl"><img src="{{asset('front/images/consult_girl.png')}}" alt="Девушка консультант"></div>
                </div>
                <div class="uk-width-small-text-center uk-width-1-1 uk-width-medium-1-2 uk-width-large-1-2 uk-width-xlarge-1-2">
                    <div class="panel-form-text uk-width-1-1 uk-width-medium-6-7 uk-width-large-6-7 uk-width-xlarge-6-7">
                        <h4>Получите бесплатную <br class="uk-visible-xlarge">консультацию <span>за 30 секунд</span></h4>
                        <p class="small-width">Позвоните нам прямо сейчас и узнайте все интересующие вас подробности.</p>
                        <div class="panel-phone-contact">
                            <p>с 8:00 до 21:00, пн - пт</p>
                            <p class="phone-contact"><a href="tel:+55626212"> (55) 62-62-12</a></p>
                        </div>
                        <form action="" class="uk-form">
                            <div class="uk-form-row">
{{--                                <input type="text" name="phone" id="phone" placeholder="(55) 62-62-12">--}}
                                <button class="uk-button uk-button-secondary b-work" data-live="0" type="button">Заказать звонок</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('footer')
    @include('layouts.SiteLayouts.footer')
@endsection

@section('scripts')

@endsection
