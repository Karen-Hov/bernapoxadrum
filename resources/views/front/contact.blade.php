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
                        <li><i class="fa fa-home"></i> <a href="{{asset('/')}}">Home</a>&nbsp;&nbsp; ></li>
                        <li><i class="fa fa-folder-open"></i> Contact Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ne inner title End -->
<div class="ne_cu_map_main_wrapper">
    <div class="container">
        <div id="map"></div>
        <div class="ne_map_content_wrapper">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="ne_busness_main_slider_wrapper ne_busness_main_slider_wrapper_contact_heading">
                        <div class="ne_recent_heading_main_wrapper">
                            <h2>some line for news express</h2>
                            <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. ean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.This is version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. ean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ne_map_contact_form_left_wrapper">
            <div class="gc_map_add_wrapper gc_map_add_wrapper1">
                <div class="gc_map_location_icon_wrapper"> <i class="fa fa-map-marker"></i>
                </div>
                <div class="gc_map_location_icon_cont_wrapper">
                    <h3>121 King Street, Melbourne, Australia
                        Victoria 3000</h3>
                </div>
            </div>
            <div class="gc_map_add_wrapper">
                <div class="gc_map_location_icon_wrapper"> <i class="fa fa-map-marker"></i>
                </div>
                <div class="gc_map_location_icon_cont_wrapper">
                    <p>+13456789
                        <br>+187456321</p>
                </div>
            </div>
            <div class="gc_map_add_wrapper">
                <div class="gc_map_location_icon_wrapper"> <i class="fa fa-map-marker"></i>
                </div>
                <div class="gc_map_location_icon_cont_wrapper">
                    <p><a href="#">support@example.com</a>
                        <br><a href="#">hello@example.com</a>
                    </p>
                </div>
            </div>
            <div class="gc_map_add_wrapper">
                <div class="gc_map_location_icon_wrapper"> <i class="fa fa-map-marker"></i>
                </div>
                <div class="gc_map_location_icon_cont_wrapper">
                    <p><a href="#">support@example.com</a>
                        <br><a href="#">hello@example.com</a>
                    </p>
                </div>
            </div>
        </div>
        <div class="ne_map_contact_form_right_wrapper">
            <form>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="ne_map_form_input1">
                            <input type="text" name="full_name" placeholder="First Name" class="require">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="ne_map_form_input1 ne_map_form_input3">
                            <input type="text" name="full_name" placeholder="Last Name" class="require">
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="ne_map_form_input1 ne_map_form_input2">
                            <input type="email" name="email" placeholder="Email" class="require" data-valid="email" data-error="Email should be valid.">
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="ne_map_form_input1 ne_map_form_input2">
                            <textarea rows="6" name="message" placeholder="..Message.." class="require"></textarea>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="response"></div>
                        <div class="ne_map_form_input1">
                            <button type="button" class="submitForm">send us</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="ne_busness_main_slider_wrapper">
                        <div class="ne_recent_heading_main_wrapper">
                            <h2>what about people says</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="ne_contact_testi_slider_wrapper">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="ne_cont_testi_content_wrapper">
                                    <p>Curabitur non mauris sit amet metus volutpat fermentum. Mauris lacus ex, hendrerit sed tortor commodo, eleifend interdum dui. Quisque ac massa ac nulla dapibus mollis non non diam. Pellentesque non vehicula quam</p>
                                    <h4><span>Mr.John</span> &nbsp;Designer at Webstrot INC</h4>
                                </div>
                            </div>
                            <div class="item">
                                <div class="ne_cont_testi_content_wrapper">
                                    <p>Curabitur non mauris sit amet metus volutpat fermentum. Mauris lacus ex, hendrerit sed tortor commodo, eleifend interdum dui. Quisque ac massa ac nulla dapibus mollis non non diam. Pellentesque non vehicula quam</p>
                                    <h4><span>Mr.John</span> &nbsp;Designer at Webstrot INC</h4>
                                </div>
                            </div>
                            <div class="item">
                                <div class="ne_cont_testi_content_wrapper">
                                    <p>Curabitur non mauris sit amet metus volutpat fermentum. Mauris lacus ex, hendrerit sed tortor commodo, eleifend interdum dui. Quisque ac massa ac nulla dapibus mollis non non diam. Pellentesque non vehicula quam</p>
                                    <h4><span>Mr.John</span> &nbsp;Designer at Webstrot INC</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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

<script>
    function initMap() {
        var uluru = {
            lat: -36.742775,
            lng: 174.731559
        };
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 15,
            scrollwheel: false,
            center: uluru
        });
        var marker = new google.maps.Marker({
            position: uluru,
            map: map
        });
    }
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBP1lPhUhDU6MINpruPDinAzXffRlpzzFo&callback=initMap">
</script>

@endsection

@section('footer')
    @include('layouts.SiteLayouts.footer')
@endsection

@section('scripts')

@endsection
