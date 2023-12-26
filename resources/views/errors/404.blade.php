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
                        <li><i class="fa fa-folder-open"></i> 404 Error</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ne inner title End -->
<div class="ne_404_main_wrapper">
    <div class="container">
        <div class="ne_404_inner_main_wrapper">
            <div class="ne_404_img_wrapper">
                <img src="{{asset('front/images/content/404_img.png')}}" alt="img">
            </div>
            <div class="ne_404_img_cont_wrapper">
                <h2>error</h2>
                <h3>page not found</h3>
            </div>
            <div class="ne_404_search_wrapper">
                <input type="email" placeholder="Search Here.....">
                <button><i class="fa fa-search"></i>
                </button>
            </div>
        </div>
    </div>
</div>
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
