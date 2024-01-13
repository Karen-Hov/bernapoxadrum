@extends('layouts.SiteLayouts.index')
@section('styles')

@endsection
@section('navbar')
    @include('layouts.SiteLayouts.header')
@endsection

@section('content')

{{--@dd($menus)--}}
<div class="breadcrumbs-block">
    <div class="uk-container uk-container-center">
        <ul class="breadcrumbs-list">
            <li><a href="{{url(app()->getLocale())}}">@lang('menu.home')</a></li>
            <li><a href="/price.html">Цены на услуги</a></li>
        </ul>
        <h1 class="title-main">Цены на услуги <br>в Кемерово</h1>
    </div>
</div>
<div class="price-table-block">
    <div class="uk-container uk-container-center">
        <div class="uk-grid">
            <div class="uk-width-1-4 uk-visible-xlarge">
                <ul class="uk-nav uk-nav-side">

                    @foreach($menus as $menu)
                        @if(isset($menu) && $menu )
                            <li class=""><a href="{{asset(app()->getLocale().'/service/'.$menu->id)}}">{{$menu->translate[0]->title??""}}</a></li>
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
                                <th><span>Цены на услуги</span></th>
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
                <p class="price-text-footer">Цены указаны в рублях за час</p>
            </div>
        </div>
    </div>
</div>
<div class="block-recheck-worker">
    <div class="uk-container uk-container-center">
        <h3 class="uk-text-center title-header">
            Проверенные на 100% исполнители
        </h3>
        <p class="uk-text-center uk-hidden-small">Мы тщательно проверяем наших работников, поэтому у нас не бывает
            случайных людей.</p>
        <ul class="list-recheck uk-vertical-align-middle uk-margin-large-left uk-visible-small">
            <li>Граждане РФ</li>
            <li>Трезвые</li>
            <li>Без нецензурной лексики</li>
            <li>Без опозданий</li>
            <li>Низкие цены</li>
            <li>Без судимостей</li>
        </ul>
        <ul class="uk-grid uk-grid-width-1-3 uk-grid-width-large-1-3 uk-grid-width-xlarge-1-4 uk-margin-large-top uk-hidden-small"
            data-uk-grid-margin="">
            <li class="uk-row-first">
                <div class="panel-recheck">
                    <img src="{{asset('front/images/recheck_worker_01.jpg')}}" alt="">
                    <div class="desck-block-recheck uk-text-cetner">
                        <p class="name-recheck">Николай</p>
                        <p class="age-recheck">33 лет, грузчик</p>
                        <p class="rating-recheck">
                            <i class="uk-icon-star"></i> 4.7
                            <span>236 оценок</span>
                        </p>
                    </div>
                </div>
            </li>
            <li>
                <div class="panel-recheck">
                    <img src="{{asset('front/images/recheck_worker_02.jpg')}}" alt="">
                    <div class="desck-block-recheck uk-text-cetner">
                        <p class="name-recheck">Вячеслав</p>
                        <p class="age-recheck">29 лет, грузчик</p>
                        <p class="rating-recheck">
                            <i class="uk-icon-star icon-green"></i> 5.0
                            <span>189 оценок</span>
                        </p>
                    </div>
                </div>
            </li>
            <li>
                <div class="uk-height-1-1 uk-vertical-align">
                    <ul class="list-recheck uk-vertical-align-middle">
                        <li>Граждане РФ</li>
                        <li>Трезвые</li>
                        <li>Без нецензурной лексики</li>
                        <li>Без опозданий</li>
                        <li>Низкие цены</li>
                        <li>Без судимостей</li>
                    </ul>
                </div>
            </li>
            <li class="uk-visible-xlarge">
                <div class="panel-recheck">
                    <img src="{{asset('front/images/recheck_worker_03.jpg')}}" alt="">
                    <div class="desck-block-recheck uk-text-cetner">
                        <p class="name-recheck">Семён</p>
                        <p class="age-recheck">29 лет, грузчик</p>
                        <p class="rating-recheck">
                            <i class="uk-icon-star"></i> 4.9
                            <span>301 оценок</span>
                        </p>
                    </div>
                </div>
            </li>
        </ul>
        <div data-uk-slideset="{small: 1, medium: 3, large: 3, xlarge: 4}" class="uk-margin-large-top uk-visible-small">
            <div class="uk-slidenav-position uk-margin">
                <ul class="uk-slideset uk-grid uk-flex-center uk-grid-width-1-1 uk-grid-width-medium-1-3 uk-grid-width-large-1-3 uk-grid-width-xlarge-1-4 uk-grid-width-small-1-1">
                    <li class="uk-active" style="">
                        <div class="panel-recheck">
                            <img src="images/recheck_worker_01.jpg" alt="">
                            <div class="desck-block-recheck uk-text-cetner">
                                <p class="name-recheck">Николай</p>
                                <p class="age-recheck">29 лет, грузчик</p>
                                <p class="rating-recheck">
                                    <i class="uk-icon-star"></i> 4.7
                                    <span>236 оценок</span>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="uk-active" style="">
                        <div class="panel-recheck">
                            <img src="images/recheck_worker_02.jpg" alt="">
                            <div class="desck-block-recheck uk-text-cetner">
                                <p class="name-recheck">Вячеслав</p>
                                <p class="age-recheck">29 лет, грузчик</p>
                                <p class="rating-recheck">
                                    <i class="uk-icon-star icon-green"></i> 5.0
                                    <span>189 оценок</span>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="uk-active" style="">
                        <div class="panel-recheck">
                            <img src="images/recheck_worker_03.jpg" alt="">
                            <div class="desck-block-recheck uk-text-cetner">
                                <p class="name-recheck">Семён</p>
                                <p class="age-recheck">29 лет, грузчик</p>
                                <p class="rating-recheck">
                                    <i class="uk-icon-star"></i> 4.9
                                    <span>301 оценок</span>
                                </p>
                            </div>
                        </div>
                    </li>
                </ul>
                <a href="" class="uk-slidenav uk-slidenav-previous uk-visible-small"
                   data-uk-slideset-item="previous"></a>
                <a href="" class="uk-slidenav uk-slidenav-next uk-visible-small" data-uk-slideset-item="next"></a>
            </div>
        </div>
    </div>
</div>
<!-- end main contend -->
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
            <a href="#" class="uk-button uk-button-primary button-light button-round">Все
                благодарности</a>
        </div>
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
                    <h4>Получите бесплатную <br>консультацию за 30 секунд</h4>
                    <p>Позвоните нам прямо сейчас и узнайте все интересующие вас подробности.</p>
                    <div class="panel-phone-contact">
                        <p>с 8:00 до 21:00, пн - пт</p>
                        <p class="phone-contact"><a href="tel:+55626212"> (55) 62-62-12</a></p>
                    </div>
                    <form action="" class="uk-form">
                        <div class="uk-form-row">
                            <input type="text" name="phone" id="phone" placeholder="(55) 62-62-12">
                            <button class="uk-button uk-button-secondary b-work" data-live="0" type="button">Заказать
                                звонок
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- jQuery -->
<script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script>
<script type="text/javascript" async=""
        src="https://www.googletagmanager.com/gtag/js?id=G-SJ2JHHPNYQ&amp;l=dataLayer&amp;cx=c"></script>
<script type="text/javascript" async="" src="https://mc.yandex.ru/metrika/tag.js"></script>
{{--<script src="js/jquery-1.12.4.min.js"></script>--}}
{{--<!-- Uikit -->--}}
{{--<script src="js/uikit.min.js"></script>--}}
{{--<script src="js/sticky.min.js"></script>--}}
{{--<script src="js/lightbox.min.js"></script>--}}
{{--<script src="js/slideshow.min.js"></script>--}}
{{--<script src="js/slideset.min.js"></script>--}}
{{--<script src="js/accordion.min.js"></script>--}}
{{--<!-- Plugins -->--}}
{{--<script src="js/jquery.inputmask.bundle.min.js?v=2"></script>--}}
{{--<script src="js/jquery.formstyler.min.js"></script>--}}
{{--<script src="js/jquery.mmenu.all.js"></script>--}}
{{--<script src="js/jquery.matchHeight.js"></script>--}}
<!-- Main -->
<script src="{{asset('front/js/main.js?v=1.1')}}"></script>
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function () {
            try {
                w.yaCounter51269785 = new Ya.Metrika2({
                    id: 51269785,
                    clickmap: true,
                    trackLinks: true,
                    accurateTrackBounce: true,
                    webvisor: true
                });
            } catch (e) {
            }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () {
                n.parentNode.insertBefore(s, n);
            };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/tag.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else {
            f();
        }
    })(document, window, "yandex_metrika_callbacks2");
</script>
<noscript>
    <div><img src="https://mc.yandex.ru/watch/51269785" style="position:absolute; left:-9999px;" alt=""/></div>
</noscript>
<!-- /Yandex.Metrika counter -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-173025696-1"></script>
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
