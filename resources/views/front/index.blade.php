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
            </div>
        </div>
    </div>
    <div class="header header-home" >
        <div class="uk-container uk-container-center">
            <div class="workers-block uk-width-small-3-4 uk-width-large-5-6 uk-widht-xlarge-5-6 uk-align-center">
                <h1 class="uk-text-center">@lang('variable.text_1')</h1>
                <ul class="uk-grid uk-grid-collapse uk-grid-width-small-1-1 uk-grid-width-medium-1-3 uk-grid-width-large-1-3 uk-grid-width-xlarge-1-5 uk-text-center" data-uk-grid-margin="">
                    @foreach($services as $key=>$service)
                        @if(isset($service) && $service)
                            <li>
                                <div class="panel-block">
                                    <img src="{{isset($service->file)?asset('storage/service/small/'.$service->file):' - '}}"
                                         style="max-width: none; @if($key == 3)  margin-top: -50px @endif"
                                         class="icon-worker" alt="{{$service->translate[0]->title??""}}" >
                                    <div class="info-panel">
                                        <a href="{{asset(app()->getLocale().'/service')}}">{{$service->translate[0]->title??""}}</a>
                                        <div class="price-block"><strong>{{$service->price}}</strong>Դրամ</div>
                                    </div>
                                    <a class="uk-position-cover" href="{{asset(app()->getLocale().'/service')}}"></a>
                                </div>
                            </li>
                        @endif
                    @endforeach

                </ul>
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
                                    <h3 class="uk-text-center title-header">@lang('variable.text_2') <br class="uk-visible-xlarge">@lang('variable.text_3')</h3>
                                    <div class="uk-grid">
                                        <div class="uk-width-2-3 uk-width-medium-2-5 uk-width-large-1-3 uk-width-xlarge-1-2">
                                            <div class="uk-grid">
{{--                                                <div class="uk-width-4-7 uk-visible-xlarge">--}}
{{--                                                    <div class="uk-panel-background"></div>--}}
{{--                                                </div>--}}
                                                <div class="uk-width-1-1 uk-width-xlarge-3-7">
                                                    <ul class="uk-list list-item">
                                                        <li>@lang('variable.text_4')</li>
                                                        <li>@lang('variable.text_5')</li>
                                                        <li>@lang('variable.text_6')</li>
                                                        <li>@lang('variable.text_7')</li>
                                                        <li>@lang('variable.text_8')</li>
                                                        <li>@lang('variable.text_9')</li>
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




    <div class="thanks-block">
        <div class="uk-container uk-container-center">
{{--            <h3 class="uk-text-center title-header">Благодарности <span class="uk-hidden-small">от известных</span> клиентов</h3>--}}
            <h3 class="uk-text-center title-header">@lang('variable.text_10')</h3>
            <div class="uk-widht-1-1 uk-width-xlarge-5-6 uk-align-center">
                <ul class="uk-grid uk-grid-width-1-3 uk-grid-width-small-1-3 uk-grid-width-medium-1-6 uk-grid-width-large-1-6 uk-grid-width-xlarge-1-6 uk-text-center uk-margin-large-top" data-uk-grid-margin="">
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
            <div class="uk-text-center uk-margin-large-top" id="about_us">
{{--                <a href="/#" class="uk-button uk-button-primary button-light button-round">Mer masin</a>--}}
                <h2>@lang('variable.text_12')</h2>
            </div>
        </div>

        <div style="margin-top: 50px;" class="uk-container uk-container-center" >
            <p>@lang('variable.text_11')</p>

        </div>
    </div>


    <div class="consultating-block" id="content_us">
        <div class="uk-container uk-container-center">
            <div class="uk-grid uk-grid-large-collapse">
                <div class="uk-hidden-small uk-width-medium-1-2 uk-width-large-1-2 uk-width-xlarge-1-2 uk-text-right">
                    <div class="block-girl"><img src="{{asset('front/images/consult_girl.png')}}" alt="Девушка консультант"></div>
                </div>
                <div class="uk-width-small-text-center uk-width-1-1 uk-width-medium-1-2 uk-width-large-1-2 uk-width-xlarge-1-2">
                    <div class="panel-form-text uk-width-1-1 uk-width-medium-6-7 uk-width-large-6-7 uk-width-xlarge-6-7">
{{--                        <h4>Получите бесплатную <br class="uk-visible-xlarge">консультацию <span>за 30 секунд</span></h4>--}}
                        <h4>@lang('variable.text_13')</h4>
                        <p class="small-width">@lang('variable.text_14')</p>
                        <div class="panel-phone-contact">
                            <p>с 8:00 до 21:00, пн - пт</p>
                            <p class="phone-contact"><a href="tel:+37455626212">+374 (55) 62-62-12</a></p>
                        </div>
{{--                        <form action="" class="uk-form">--}}
{{--                            <div class="uk-form-row">--}}
{{--                                <input type="text" name="phone" id="phone" placeholder="(55) 62-62-12">--}}
{{--                                <button class="uk-button uk-button-secondary b-work" data-live="0" type="button">Заказать звонок</button>--}}
{{--                            </div>--}}
{{--                        </form>--}}
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
