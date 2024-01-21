@extends('layouts.SiteLayouts.index')
@section('styles')

@endsection
@section('navbar')
    @include('layouts.SiteLayouts.header')
@endsection

@section('content')

{{--@dd($submenus,$menus,$avtiv_menu)--}}
<div class="breadcrumbs-block">
    <div class="uk-container uk-container-center">
        <ul class="breadcrumbs-list">
            <li><a href="{{url(app()->getLocale())}}">@lang('menu.home')</a></li>
            @if(isset($avtiv_menu) && $avtiv_menu )<li><a href="#" class="servic_name">{{$avtiv_menu->translate[0]->title}}</a></li> @endif
        </ul>
        <h3 class="title-main" style="font-size: 33px"> @if(isset($avtiv_menu) && $avtiv_menu ) {{$avtiv_menu->translate[0]->title}} @endif<br>@lang('variable.text_15')</h3>
    </div>
</div>
<div class="price-table-block">
    <div class="uk-container uk-container-center">
        <div class="uk-grid">
            <div class="uk-width-1-4 uk-visible-xlarge">
                <ul class="uk-nav uk-nav-side">

                    @foreach($menus as $menu)
                        @if(isset($menu) && $menu )
                            <li class="@if(isset($avtiv_menu) && $avtiv_menu ->id ==  $menu->id) active_menu @endif"><a href="{{asset(app()->getLocale().'/service/'.$menu->id)}}">{{$menu->translate[0]->title??""}}</a></li>
                            @endif
                    @endforeach
                </ul>
            </div>
{{--            @dd($menus)--}}
            <div class="uk-width-1-1 uk-width-xlarge-3-4">
                <ul id="switch-table" class="uk-switcher">
                    <li class="uk-active">
                        <table class="uk-table table-price uk-table-middle uk-table-hover uk-table-striped">
                            <thead>
                            <tr>
                                <th><span class="servic_name"> @if(isset($avtiv_menu) && $avtiv_menu ) {{$avtiv_menu->translate[0]->title}} @endif</span></th>
                                <th class="uk-text-center">
                                    <div class="uk-height-1-1 center-price">
                                        <div class="head-panel uk-vertical-align">
                                            <p class="uk-vertical-align-middle">@lang('variable.price_title')</p>
                                        </div>
                                    </div>
                                </th>
{{--                                <th class="uk-text-center"><span>Обычная цена</span></th>--}}
                            </tr>
                            </thead>
                            <tbody>
                    @foreach($submenus as $submenu)
                        @if(isset($submenu) && $submenu)
{{--                            <li class=""><a href="">{{$submenu->translate[0]->title}}</a></li>--}}
                            <tr>
                                <td>{{$submenu->translate[0]->title??""}}
                                    <p class="uk-text-small"></p>
                                </td>
{{--                                <td class="uk-text-center">от--}}
{{--                                    <span>--}}
{{--																											117--}}
{{--																									</span>--}}
{{--                                </td>--}}
                                <td class="uk-text-center"> <span>{{$submenu->price}}</span></td>
                            </tr>

                        @endif
                    @endforeach

                            </tbody>
                        </table>
                    </li>
                </ul>
                <p class="price-text-footer">@lang('variable.text_16')</p>
            </div>
        </div>
    </div>
</div>
<!-- end main contend -->
<div class="thanks-block">
    <div class="uk-container uk-container-center">
        <h3 class="uk-text-center title-header">@lang('variable.text_10')</h3>
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
                            <a href="#" data-uk-lightbox="{group:'my-group'}" title="Башнефть">
                                <img src="{{asset('front/images/4955_th.jpg')}}" alt="img">

                            </a>
                        </li>
                        <li class="uk-active" style="">
                            <a href="#" data-uk-lightbox="{group:'my-group'}" title="PONY EXPRESS">
                                <img src="{{asset('front/images/4956_th.jpg')}}" alt="PONY EXPRESS">
                            </a>
                        </li>
                        <li class="uk-active" style="">
                            <a href="#" data-uk-lightbox="{group:'my-group'}" title="Ростелеком">
                                <img src="{{asset('front/images/4957_th.jpg')}}" alt="Ростелеком">

                            </a>
                        </li>
                        <li class="uk-active" style="">
                            <a href="#" data-uk-lightbox="{group:'my-group'}" title="АО РЖД">
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
{{--        <div class="uk-text-center uk-margin-large-top">--}}
{{--            <a href="#" class="uk-button uk-button-primary button-light button-round">Все благодарности</a>--}}
{{--        </div>--}}
    </div>
</div>
<div class="consultating-block">
    <div class="uk-container uk-container-center">
        <div class="uk-grid uk-grid-large-collapse">
            <div class="uk-hidden-small uk-width-medium-1-2 uk-width-large-1-2 uk-width-xlarge-1-2 uk-text-right">
                <div class="block-girl girl-small-shadow"><img src="{{asset('front/images/consult_girl_02.png')}}" class="small-girl"
                                                               alt="Девушка консультант"></div>
            </div>
            <div
                class="uk-width-small-text-center uk-width-1-1 uk-width-medium-1-2 uk-width-large-1-2 uk-width-xlarge-1-2">
                <div class="panel-form-text uk-width-1-1 uk-width-medium-6-7 uk-width-large-6-7 uk-width-xlarge-6-7">
                    <h4>@lang('variable.text_13')</h4>
                    <p>@lang('variable.text_14')</p>
                    <div class="panel-phone-contact">
                        <p>@lang('variable.text_23')</p>
                        <p class="phone-contact"><a href="tel:+37455626212">+374 (55) 62-62-12</a></p>
                    </div>
{{--                    <form action="" class="uk-form">--}}
{{--                        <div class="uk-form-row">--}}
{{--                            <input type="text" name="phone" id="phone" placeholder="(55) 62-62-12">--}}
{{--                            <button class="uk-button uk-button-secondary b-work" data-live="0" type="button">Заказать--}}
{{--                                звонок--}}
{{--                            </button>--}}
{{--                        </div>--}}
{{--                    </form>--}}
                </div>
            </div>
        </div>
    </div>
</div>



<!-- jQuery -->

<script src="{{asset('front/js/main.js?v=1.1')}}"></script>
<!-- Yandex.Metrika counter -->

<!-- /Yandex.Metrika counter -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }

    gtag('js', new Date());

    gtag('config', 'UA-173025696-1');
</script>

@endsection

@section('footer')
    @include('layouts.SiteLayouts.footer')
@endsection

@section('scripts')

@endsection
