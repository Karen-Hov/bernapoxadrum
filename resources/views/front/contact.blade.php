@extends('layouts.SiteLayouts.index')
@section('styles')

@endsection
@section('navbar')
    @include('layouts.SiteLayouts.header')
@endsection

@section('content')


{{--    <nav id="wrap-menu" class="mm-menu mm-menu_offcanvas mm-menu_navbar_bottom-1 mm-menu_position-front mm-menu_position-back mm-menu_position-right mm-menu_pagedim-black mm-menu_theme-dark mm-menu_multiline" aria-hidden="true">--}}
{{--        <div class="mm-panels">--}}
{{--            <div id="mm-0" class="mm-panel mm-panel_opened">--}}
{{--                <ul class="mm-listview">--}}
{{--                    <li class="mm-listitem mm-listitem_selected"><a href="/">Грузчики в Кемерово</a></li>--}}
{{--                    <li class="mm-listitem"><a class="mm-btn_next mm-btn_fullwidth" href="#mm-1"><span class="mm-sronly">Open submenu (Цены 2024)</span></a><span>Цены 2024</span>--}}

{{--                    </li>--}}
{{--                    <li class="mm-listitem"><a class="mm-btn_next mm-btn_fullwidth" href="#mm-2"><span class="mm-sronly">Open submenu (Компания)</span></a><span>Компания</span>--}}

{{--                    </li>--}}
{{--                    <li class="mm-listitem"><a href="/vacancy.html">Вакансии</a></li>--}}
{{--                    <li class="mm-listitem"><a href="/contacts.html">Контакты</a></li>--}}
{{--                    <div class="mm-listitem">--}}
{{--                        <div class="block-info-canvas uk-margin-top">--}}
{{--                            <div class="panel-phone-contact">--}}
{{--                                <p>Прием заказов с 8:00 до 21:00</p>--}}
{{--                                <p class="phone-contact"><a href="tel:+73842326935"> (3842) 32-69-35</a></p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <p class="commercial-link uk-text-left">--}}
{{--                            <a href="#modal-offer-mobile" data-uk-modal="">Коммерческое предложение</a>--}}
{{--                        </p>--}}
{{--                        <a href="#modal-city" data-uk-modal="" class="area-city"><i class="uk-icon-map-marker uk-margin-small-right"></i> Кемерово</a>--}}
{{--                    </div>--}}
{{--                </ul></div><div id="mm-1" class="mm-panel mm-hidden mm-panel_has-navbar" aria-hidden="true"><div class="mm-navbar"><a class="mm-btn mm-btn_prev mm-navbar__btn" href="#mm-0" aria-owns="mm-0" aria-haspopup="true"><span class="mm-sronly">Close submenu</span></a><a class="mm-navbar__title" href="#mm-0">Цены 2024</a></div><ul class="mm-listview">--}}
{{--                    <li class="mm-listitem"><a href="/price.html">Цены на услуги</a></li>--}}
{{--                    <li class="mm-listitem"><a href="/flat_pereezd.html">Квартирный переезд</a></li>--}}
{{--                    <li class="mm-listitem"><a href="/office_pereezd.html">Офисный переезд</a></li>--}}
{{--                    <li class="mm-listitem"><a href="/dacha_pereezd.html">Дачный переезд</a></li>--}}
{{--                    <li class="mm-listitem"><a href="/raznorabochie.html">Разнорабочие</a></li>--}}
{{--                    <li class="mm-listitem"><a href="/uborka_i_clining.html">Уборка и клининг</a></li>--}}
{{--                    <li class="mm-listitem"><a href="/demontazh.html">Упаковочные материалы</a></li>--}}
{{--                    <li class="mm-listitem"><a href="/takelazh.html">Такелаж (свыше 100 кг)</a></li>--}}
{{--                    <li class="mm-listitem"><a href="/vivoz_musora.html">Вывоз мусора</a></li>--}}
{{--                    <li class="mm-listitem"><a href="/arenda_spectichniki.html">Грузовой транспорт и спецтехника</a></li>--}}

{{--                </ul></div><div id="mm-2" class="mm-panel mm-hidden mm-panel_has-navbar" aria-hidden="true"><div class="mm-navbar"><a class="mm-btn mm-btn_prev mm-navbar__btn" href="#mm-0" aria-owns="mm-0" aria-haspopup="true"><span class="mm-sronly">Close submenu</span></a><a class="mm-navbar__title" href="#mm-0">Компания</a></div><ul class="mm-listview">--}}
{{--                    <li class="mm-listitem"><a href="/about.html">О нас</a></li>--}}
{{--                    <li class="mm-listitem"><a href="/how-it-works-company.html">Как мы работаем</a></li>--}}
{{--                    <li class="mm-listitem"><a href="/news.html">Новости</a></li>--}}
{{--                    <li class="mm-listitem"><a href="http://fr.gruzchikov-service.ru/" rel="nofollow" target="_blank">Франшиза</a></li>--}}
{{--                </ul></div></div>--}}

{{--        <div class="mm-navbars_bottom"><div class="mm-navbar"><a href="https://vk.com/gruzkem42" title="Вконтакте" target="_blank"><i class="uk-icon-vk"></i></a><a href="https://www.instagram.com/gruzkem/" title="Instagram" target="_blank"><i class="uk-icon-instagram"></i></a><a href="" title="Youtube" target="_blank"><i class="uk-icon-youtube-play"></i></a></div></div></nav>--}}

    <!-- start main content -->
    <div class="header header-сontacts">
        <div class="breadcrumbs-block uk-height-1-1">
            <div class="uk-container uk-container-center uk-height-1-1">
                <ul class="breadcrumbs-list">
                    <li><a href="{{url(app()->getLocale())}}">@lang('menu.home')</a></li>
                    <li><a href="{{asset(app()->getLocale().'/contact')}}">@lang('menu.contact_us')</a></li>
                </ul>
                <h1 class="title-main">@lang('variable.text_17')<br>@lang('variable.text_18')</h1>
                <p class="phone-block"><i class="uk-icon-phone first"></i> <a href="tel:+37455626212"> (+374) 55-62-62-12</a></p>

                <ul class="contact-list">
                    <li>Круглосуточно выполняем заказы</li>
                    <li>с 8:00 до 21:00 — прием заказов</li>
                    <li>с 10:00 до 18:00 — бухгалтерия</li>
                </ul>
                <p class="contact-email">
                    <a href="mailto:kem@gruzchikov-service.ru">kem@gruzchikov-service.ru</a>
                </p>
            </div>
        </div>
    </div>
    <div class="partners-block">
        <div class="uk-container uk-container-center">
            <div class="uk-hidden-xlarge uk-width-1-1 uk-text-center">
                <h3 class="title-header">Надежный поставщик и партнер<br class="uk-hidden-small"> ООО "ГРУЗЧИКОВ СЕРВИС КЕМЕРОВО"</h3>
                <p>С 2010 года работаем с госзаказами и тендерами</p>
            </div>
            <div class="uk-grid first">
                <div class="uk-width-medium-1-2 uk-width-large-1-2 uk-width-xlarge-3-5">
                    <h3 class="title-header uk-visible-xlarge">Надежный поставщик и партнер<br> ООО "ГРУЗЧИКОВ СЕРВИС КЕМЕРОВО"</h3>
                    <p class="uk-visible-xlarge">С 2010 года работаем с госзаказами и тендерами</p>
                    <div class="uk-width-1-1 uk-width-xlarge-9-10 uk-margin-large-top">
                        <ul class="uk-grid uk-grid-large uk-grid-width-1-2 uk-grid-width-medium-1-1 uk-grid-width-large-1-1 uk-grid-width-xlarge-1-2 list-provider" data-uk-grid-margin="">
                            <li class="uk-row-first"><img src="images/logo_provider_01.jpg" alt="поставщик"></li>
                            <li><img src="images/logo_provider_02.jpg" alt="поставщик"></li>
                            <li class="uk-grid-margin uk-row-first"><img src="images/logo_provider_03.jpg" alt="поставщик"></li>
                            <li class="uk-grid-margin"><img src="images/logo_provider_04.jpg" alt="поставщик"></li>
                        </ul>
                    </div>
                </div>
                <div class="uk-width-4-5 uk-align-center uk-width-medium-1-2 uk-width-large-1-2 uk-width-xlarge-2-5">
                    <div class="panel-requsities">
                        <ul class="list-requsities">
                            <li><span>ИНН</span>4205354030</li>
                            <li><span>КПП</span>420501001</li>						<li class="uk-margin-bottom"><span>ОГРН</span>1174205010286</li>
                            <li class="uk-margin-bottom"><span>Юр. адрес</span>650056 обл. Кемеровская область - Кузбасс, г. Кемерово, ул Ворошилова, дом 1, кв 80</li>						<li><span>БИК</span>044525974</li>
                            <li><span>К/с</span>30101810145250000974</li>
                            <li><span>Банк</span>АО "ТИНЬКОФФ БАНК"</li>
                            <li><span>Р/с</span>40702810810000117040</li>
                        </ul>
                        <div class="block-download-requsities">
                            <a href="/files/requsities.txt" class="uk-button uk-button-secondary button-gray button-small-width"><img src="images/ico_doc.png" class="icon-pdf" alt="doc">Скачать реквизиты</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{--    <div class="block-office-map">--}}
{{--        <div class="uk-container uk-container-center">--}}
{{--            <div class="uk-width-1-1 uk-width-xlarge-3-5">--}}
{{--                <h3 class="title-header">Офис в Кемерово</h3>--}}
{{--                <p>650000, г. Кемерово, Советский проспект, 27. Офис 401</p>--}}
{{--                <ul class="uk-grid uk-grid-width-1-4 uk-grid-small" data-uk-grid-margin="">--}}
{{--                    <li class="uk-row-first"><img src="images/office_kamchatka_01.jpg" alt="Офис в Кемерово"></li>--}}
{{--                    <li><img src="images/office_kamchatka_02.jpg" alt="Офис в Кемерово"></li>--}}
{{--                    <li><img src="images/office_kamchatka_03.jpg" alt="Офис в Кемерово"></li>--}}
{{--                    <li><img src="images/office_kamchatka_04.jpg" alt="Офис в Кемерово"></li>--}}
{{--                    <li class="uk-grid-margin uk-row-first"><img src="images/office_kamchatka_05.jpg" alt="Офис в Кемерово"></li>--}}
{{--                    <li class="uk-grid-margin"><img src="images/office_kamchatka_06.jpg" alt="Офис в Кемерово"></li>--}}
{{--                    <li class="uk-grid-margin"><img src="images/office_kamchatka_07.jpg" alt="Офис в Кемерово"></li>--}}
{{--                    <li class="uk-grid-margin"><img src="images/office_kamchatka_08.jpg" alt="Офис в Кемерово"></li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=bbb777d1-635e-4f2f-935d-91d9de4fc4b7" type="text/javascript"></script>--}}
{{--        <div class="block-map-area">--}}
{{--            <div id="cmap1" style="height: 623px;" class="uk-visible-xlarge">--}}
{{--                &nbsp;--}}
{{--                <ymaps class="ymaps-2-1-79-map" style="width: 723px; height: 623px;"><ymaps class="ymaps-2-1-79-map ymaps-2-1-79-i-ua_js_yes ymaps-2-1-79-map-bg ymaps-2-1-79-islets_map-lang-ru" style="width: 723px; height: 623px;"><ymaps class="ymaps-2-1-79-inner-panes"><ymaps class="ymaps-2-1-79-events-pane ymaps-2-1-79-user-selection-none" unselectable="on" style="height: 100%; width: 100%; top: 0px; left: 0px; position: absolute; z-index: 3000; cursor: url(&quot;https://api-maps.yandex.ru/2.1.79/build/release/images/cursor/grab.cur&quot;) 16 16, url(&quot;https://api-maps.yandex.ru/2.1.79/build/release/images/cursor/grab.cur&quot;), move;"></ymaps><ymaps class="ymaps-2-1-79-ground-pane" style="top: 0px; left: 0px; position: absolute; transform: translate3d(0px, 0px, 0px) scale(1, 1); z-index: 601;"><ymaps style="z-index: 150; position: absolute;"><canvas height="879" width="979" style="position: absolute; width: 979px; height: 879px; left: -128px; top: -128px;"></canvas></ymaps></ymaps><ymaps class="ymaps-2-1-79-copyrights-pane" style="height: 0px; inset: auto 0px 0px; position: absolute; z-index: 6002;"><ymaps><ymaps class="ymaps-2-1-79-copyright ymaps-2-1-79-copyright_logo_no" style=""><ymaps class="ymaps-2-1-79-copyright__fog">…</ymaps><ymaps class="ymaps-2-1-79-copyright__wrap"><ymaps class="ymaps-2-1-79-copyright__layout"><ymaps class="ymaps-2-1-79-copyright__content-cell"><ymaps class="ymaps-2-1-79-copyright__content"><ymaps class="ymaps-2-1-79-copyright__text">© Яндекс</ymaps><ymaps class="ymaps-2-1-79-copyright__agreement">&nbsp;<a class="ymaps-2-1-79-copyright__link" target="_blank" href="https://yandex.ru/legal/maps_termsofuse/?lang=ru" rel="noopener">Условия использования</a></ymaps></ymaps></ymaps><ymaps class="ymaps-2-1-79-copyright__logo-cell"><a class="ymaps-2-1-79-copyright__logo" href="" target="_blank"></a></ymaps></ymaps></ymaps></ymaps></ymaps><ymaps class="ymaps-2-1-79-map-copyrights-promo"><ymaps><ymaps class="ymaps-2-1-79-gotoymaps" title="Как добраться"><ymaps class="ymaps-2-1-79-gotoymaps__container"><ymaps class="ymaps-2-1-79-gotoymaps__pin"></ymaps><ymaps class="ymaps-2-1-79-gotoymaps__text-container"><ymaps class="ymaps-2-1-79-gotoymaps__text">Как добраться</ymaps></ymaps></ymaps></ymaps><ymaps class="ymaps-2-1-79-gototaxi" title="Доехать на такси" style=""><ymaps class="ymaps-2-1-79-gototaxi__container"><ymaps class="ymaps-2-1-79-gototaxi__pin"></ymaps><ymaps class="ymaps-2-1-79-gototaxi__text-container"><ymaps class="ymaps-2-1-79-gototaxi__text">Доехать на такси</ymaps></ymaps></ymaps></ymaps><a class="ymaps-2-1-79-gototech" target="_blank" href="https://tech.yandex.ru/maps/mapsapi/?from=api-maps ">Создать свою карту</a></ymaps></ymaps></ymaps><ymaps class="ymaps-2-1-79-controls-pane" style="width: 100%; top: 0px; left: 0px; position: absolute; z-index: 5403;"><ymaps class="ymaps-2-1-79-controls__toolbar" style="margin-top: 10px;"><ymaps class="ymaps-2-1-79-controls__toolbar_left"><ymaps class="ymaps-2-1-79-controls__control_toolbar ymaps-2-1-79-user-selection-none" style="margin-right: 0px; margin-left: 10px; position: inherit;" unselectable="on"><ymaps><ymaps class="ymaps-2-1-79-float-button ymaps-2-1-79-_hidden-text" style="max-width: 90px" title="Определить ваше местоположение"><ymaps class="ymaps-2-1-79-float-button-icon ymaps-2-1-79-float-button-icon_icon_geolocation"></ymaps><ymaps class="ymaps-2-1-79-float-button-text"></ymaps></ymaps></ymaps></ymaps><ymaps class="ymaps-2-1-79-controls__control_toolbar" style="margin-right: 0px; margin-left: 10px; position: inherit;"><ymaps><ymaps class="ymaps-2-1-79-searchbox"><ymaps id="id_170525402008075739318" unselectable="on" class="ymaps-2-1-79-user-selection-none"><ymaps><ymaps class="ymaps-2-1-79-float-button ymaps-2-1-79-_hidden-icon" style="max-width: 72px" title="Найти"><ymaps class="ymaps-2-1-79-float-button-icon"></ymaps><ymaps class="ymaps-2-1-79-float-button-text">Найти</ymaps></ymaps></ymaps></ymaps><ymaps id="id_170525402008075739319"></ymaps></ymaps></ymaps></ymaps></ymaps><ymaps class="ymaps-2-1-79-controls__toolbar_right"><ymaps class="ymaps-2-1-79-controls__control_toolbar" style="margin-right: 10px; margin-left: 0px; position: inherit;"><ymaps><ymaps class="ymaps-2-1-79-traffic"><ymaps id="id_170525402008075739340" unselectable="on" class="ymaps-2-1-79-user-selection-none"><ymaps><ymaps class="ymaps-2-1-79-float-button ymaps-2-1-79-float-button_traffic_left" style=""><ymaps class="ymaps-2-1-79-traffic__icon ymaps-2-1-79-traffic__icon_icon_off ymaps-2-1-79-float-button-icon"></ymaps><ymaps class="ymaps-2-1-79-float-button-text"><ymaps>Пробки</ymaps></ymaps></ymaps></ymaps><ymaps></ymaps></ymaps><ymaps id="id_170525402008075739341"><ymaps><ymaps class="ymaps-2-1-79-traffic__panel ymaps-2-1-79-popup ymaps-2-1-79-popup_direction_down ymaps-2-1-79-popup_to_bottom ymaps-2-1-79-popup_theme_ffffff ymaps-2-1-79-user-selection-none" unselectable="on" style="width: 270px;"><ymaps class="ymaps-2-1-79-traffic__tail ymaps-2-1-79-popup__tail"></ymaps><ymaps class="ymaps-2-1-79-traffic__panel-content"><ymaps id="id_170525402008075739342"><ymaps><ymaps class="ymaps-2-1-79-traffic__switcher"><ymaps class="ymaps-2-1-79-traffic__switcher-item ymaps-2-1-79-traffic__switcher-item_data_actual ymaps-2-1-79-traffic__switcher-item_selected_yes">Сейчас</ymaps><ymaps class="ymaps-2-1-79-traffic__switcher-item ymaps-2-1-79-traffic__switcher-item_data_archive">Статистика</ymaps></ymaps></ymaps></ymaps><ymaps></ymaps><ymaps></ymaps><ymaps></ymaps></ymaps></ymaps></ymaps></ymaps></ymaps></ymaps></ymaps><ymaps class="ymaps-2-1-79-controls__control_toolbar" style="margin-right: 10px; margin-left: 0px; position: inherit;"><ymaps><ymaps class="ymaps-2-1-79-listbox ymaps-2-1-79-listbox_opened_no ymaps-2-1-79-listbox_align_right" style="width: 69px;"><ymaps class="ymaps-2-1-79-listbox__button ymaps-2-1-79-_visible-arrow ymaps-2-1-79-_hidden-icon ymaps-2-1-79-user-selection-none" unselectable="on" title=""><ymaps class="ymaps-2-1-79-listbox__button-icon"></ymaps><ymaps class="ymaps-2-1-79-listbox__button-text">Слои</ymaps><ymaps class="ymaps-2-1-79-listbox__button-arrow"></ymaps></ymaps><ymaps class="ymaps-2-1-79-listbox__panel ymaps-2-1-79-i-custom-scroll" style="transform: translate3d(0px, 0px, 0px) scale(1, 1);"><ymaps class="ymaps-2-1-79-listbox__list" style="max-height: 999999px;"><ymaps><ymaps><ymaps id="id_170525402008075739297"><ymaps unselectable="on" class="ymaps-2-1-79-user-selection-none"><ymaps class="ymaps-2-1-79-listbox__list-item ymaps-2-1-79-listbox__list-item_selected_yes"><ymaps class="ymaps-2-1-79-listbox__list-item-text">Схема</ymaps></ymaps></ymaps></ymaps></ymaps></ymaps><ymaps><ymaps><ymaps id="id_170525402008075739298"><ymaps unselectable="on" class="ymaps-2-1-79-user-selection-none"><ymaps class="ymaps-2-1-79-listbox__list-item ymaps-2-1-79-listbox__list-item_selected_no"><ymaps class="ymaps-2-1-79-listbox__list-item-text">Спутник</ymaps></ymaps></ymaps></ymaps></ymaps></ymaps><ymaps><ymaps><ymaps id="id_170525402008075739299"><ymaps unselectable="on" class="ymaps-2-1-79-user-selection-none"><ymaps class="ymaps-2-1-79-listbox__list-item ymaps-2-1-79-listbox__list-item_selected_no"><ymaps class="ymaps-2-1-79-listbox__list-item-text">Гибрид</ymaps></ymaps></ymaps></ymaps></ymaps></ymaps><ymaps><ymaps><ymaps id="id_170525402008075739295"><ymaps><ymaps class="ymaps-2-1-79-listbox__list-separator"></ymaps></ymaps></ymaps></ymaps></ymaps><ymaps><ymaps><ymaps id="id_170525402008075739296"><ymaps unselectable="on" class="ymaps-2-1-79-user-selection-none"><ymaps class="ymaps-2-1-79-listbox__list-item ymaps-2-1-79-listbox__list-item_selected_no"><ymaps class="ymaps-2-1-79-listbox__list-item-text">Панорамы</ymaps></ymaps></ymaps></ymaps></ymaps></ymaps></ymaps></ymaps></ymaps></ymaps></ymaps><ymaps class="ymaps-2-1-79-controls__control_toolbar ymaps-2-1-79-user-selection-none" style="margin-right: 10px; margin-left: 0px; position: inherit;" unselectable="on"><ymaps><ymaps class="ymaps-2-1-79-float-button ymaps-2-1-79-_hidden-text" style="max-width: 28px" title=""><ymaps class="ymaps-2-1-79-float-button-icon ymaps-2-1-79-float-button-icon_icon_expand"></ymaps><ymaps class="ymaps-2-1-79-float-button-text"></ymaps></ymaps></ymaps></ymaps></ymaps></ymaps><ymaps class="ymaps-2-1-79-controls__bottom" style="top: 623px;"><ymaps class="ymaps-2-1-79-controls__control" style="margin-right: 0px; margin-left: 0px; position: inherit; inset: auto 10px 30px auto;"><ymaps><ymaps style="display: block;"><ymaps style="display: inline-block; height: 100%; vertical-align: top;"><ymaps id="id_170525402008075739305"><ymaps><ymaps class="ymaps-2-1-79-scaleline" style="width: 73px;"><ymaps class="ymaps-2-1-79-scaleline__left"><ymaps class="ymaps-2-1-79-scaleline__left-border"></ymaps><ymaps class="ymaps-2-1-79-scaleline__left-line"></ymaps></ymaps><ymaps class="ymaps-2-1-79-scaleline__center"><ymaps class="ymaps-2-1-79-scaleline__label">100&nbsp;м</ymaps></ymaps><ymaps class="ymaps-2-1-79-scaleline__right"><ymaps class="ymaps-2-1-79-scaleline__right-border"></ymaps><ymaps class="ymaps-2-1-79-scaleline__right-line"></ymaps></ymaps></ymaps></ymaps></ymaps></ymaps><ymaps style="display: inline-block; width: 10px; height: 0"></ymaps><ymaps style="display: inline-block;"><ymaps id="id_170525402008075739306" unselectable="on" class="ymaps-2-1-79-user-selection-none"><ymaps><ymaps class="ymaps-2-1-79-float-button ymaps-2-1-79-_hidden-text" style="max-width: 28px" title="Измерение расстояний на карте"><ymaps class="ymaps-2-1-79-float-button-icon ymaps-2-1-79-float-button-icon_icon_ruler"></ymaps><ymaps class="ymaps-2-1-79-float-button-text"></ymaps></ymaps></ymaps></ymaps></ymaps></ymaps></ymaps></ymaps></ymaps><ymaps class="ymaps-2-1-79-controls__control" style="margin-right: 0px; margin-left: 0px; position: inherit; inset: 108px auto auto 10px;"><ymaps><ymaps class="ymaps-2-1-79-zoom" style="height: 150px"><ymaps class="ymaps-2-1-79-zoom__plus ymaps-2-1-79-zoom__button ymaps-2-1-79-float-button ymaps-2-1-79-user-selection-none" unselectable="on"><ymaps class="ymaps-2-1-79-zoom__icon ymaps-2-1-79-float-button-icon"></ymaps></ymaps><ymaps class="ymaps-2-1-79-zoom__minus ymaps-2-1-79-zoom__button ymaps-2-1-79-float-button ymaps-2-1-79-user-selection-none" unselectable="on"><ymaps class="ymaps-2-1-79-zoom__icon ymaps-2-1-79-float-button-icon"></ymaps></ymaps><ymaps class="ymaps-2-1-79-zoom__scale"><ymaps class="ymaps-2-1-79-zoom__runner ymaps-2-1-79-zoom__button ymaps-2-1-79-float-button ymaps-2-1-79-zoom__runner__transition ymaps-2-1-79-touch-action-none ymaps-2-1-79-user-selection-none" unselectable="on" style="top: 32px;"><ymaps class="ymaps-2-1-79-zoom__icon ymaps-2-1-79-float-button-icon ymaps-2-1-79-float-button-icon_icon_runner"></ymaps></ymaps></ymaps></ymaps></ymaps></ymaps></ymaps><ymaps class="ymaps-2-1-79-searchpanel-pane" style="width: 100%; top: 0px; left: 0px; position: absolute; z-index: 7810;"><ymaps><ymaps class="ymaps-2-1-79-search ymaps-2-1-79-search_layout_panel ymaps-2-1-79-searchbox__panel-layout"><ymaps class="ymaps-2-1-79-search__layout"><ymaps id="id_170525402008075739320"><ymaps><ymaps class="ymaps-2-1-79-searchbox__input-cell"><ymaps class="ymaps-2-1-79-searchbox-input"><input class="ymaps-2-1-79-searchbox-input__input" placeholder="Адрес или объект"><ymaps class="ymaps-2-1-79-searchbox-input__clear-button"></ymaps></ymaps><ymaps class="ymaps-2-1-79-searchbox-list-button"></ymaps></ymaps><ymaps class="ymaps-2-1-79-searchbox__button-cell"><ymaps class="ymaps-2-1-79-searchbox-button ymaps-2-1-79-user-selection-none" unselectable="on"><ymaps class="ymaps-2-1-79-searchbox-button-text">Найти</ymaps></ymaps></ymaps></ymaps></ymaps><ymaps class="ymaps-2-1-79-searchbox__fold-button-cell"><ymaps class="ymaps-2-1-79-searchbox__fold-button"><ymaps class="ymaps-2-1-79-searchbox__fold-button-icon"></ymaps></ymaps></ymaps></ymaps><ymaps id="id_170525402008075739321"><ymaps><ymaps class="ymaps-2-1-79-islets_serp-popup ymaps-2-1-79-islets__hidden"><ymaps class="ymaps-2-1-79-islets_serp-popup__tail"></ymaps><ymaps class="ymaps-2-1-79-islets_serp" style="max-height: 573px;"><ymaps id="id_170525402008075739322"><ymaps></ymaps></ymaps></ymaps></ymaps></ymaps></ymaps></ymaps></ymaps></ymaps><ymaps class="ymaps-2-1-79-places-pane" style="top: 0px; left: 0px; position: absolute; transform: translate3d(0px, 0px, 0px) scale(1, 1); z-index: 2405;"><ymaps class="ymaps-2-1-79-placemark-overlay ymaps-2-1-79-user-selection-none" unselectable="on" style="z-index: 650; height: 0px; width: 0px; position: absolute; left: 361px; top: 311px;"><ymaps><ymaps class="ymaps-2-1-79-image " style="position: absolute; left: -11px; top: -38px; width: 34px; height: 41px; opacity: 1; background-position: 0px 0px; background-size: 34px 41px; background-image: url(&quot;https://api-maps.yandex.ru/2.1.79/build/release/images/layout/defaultImage.png&quot;);"></ymaps></ymaps></ymaps></ymaps></ymaps></ymaps></ymaps></div>--}}
{{--            <div id="cmap2" style="height: 260px;" class="uk-hidden-xlarge">--}}
{{--                &nbsp;--}}
{{--                <ymaps class="ymaps-2-1-79-map" style="width: 0px; height: 0px;"><ymaps class="ymaps-2-1-79-map ymaps-2-1-79-i-ua_js_yes ymaps-2-1-79-map-bg ymaps-2-1-79-islets_map-lang-ru" style="width: 0px; height: 0px;"><ymaps class="ymaps-2-1-79-inner-panes"><ymaps class="ymaps-2-1-79-events-pane ymaps-2-1-79-user-selection-none" unselectable="on" style="height: 100%; width: 100%; top: 0px; left: 0px; position: absolute; z-index: 3000; cursor: url(&quot;https://api-maps.yandex.ru/2.1.79/build/release/images/cursor/grab.cur&quot;) 16 16, url(&quot;https://api-maps.yandex.ru/2.1.79/build/release/images/cursor/grab.cur&quot;), move;"></ymaps><ymaps class="ymaps-2-1-79-ground-pane" style="top: 0px; left: 0px; position: absolute; transform: translate3d(0px, 0px, 0px) scale(1, 1); z-index: 601;"><ymaps style="z-index: 150; position: absolute;"><canvas height="256" width="256" style="position: absolute; width: 256px; height: 256px; left: -128px; top: -128px;"></canvas></ymaps></ymaps><ymaps class="ymaps-2-1-79-copyrights-pane" style="height: 0px; inset: auto 0px 0px; position: absolute; z-index: 6002;"><ymaps><ymaps class="ymaps-2-1-79-copyright ymaps-2-1-79-copyright_logo_no ymaps-2-1-79-copyright_fog_yes" style=""><ymaps class="ymaps-2-1-79-copyright__fog">…</ymaps><ymaps class="ymaps-2-1-79-copyright__wrap"><ymaps class="ymaps-2-1-79-copyright__layout"><ymaps class="ymaps-2-1-79-copyright__content-cell"><ymaps class="ymaps-2-1-79-copyright__content"><ymaps class="ymaps-2-1-79-copyright__text">© Яндекс</ymaps><ymaps class="ymaps-2-1-79-copyright__agreement">&nbsp;<a class="ymaps-2-1-79-copyright__link" target="_blank" href="https://yandex.ru/legal/maps_termsofuse/?lang=ru" rel="noopener">Условия</a></ymaps></ymaps></ymaps><ymaps class="ymaps-2-1-79-copyright__logo-cell"><a class="ymaps-2-1-79-copyright__logo" href="" target="_blank"></a></ymaps></ymaps></ymaps></ymaps></ymaps><ymaps class="ymaps-2-1-79-map-copyrights-promo"><ymaps><ymaps class="ymaps-2-1-79-gotoymaps" title="Как добраться" style="display: none;"><ymaps class="ymaps-2-1-79-gotoymaps__container"><ymaps class="ymaps-2-1-79-gotoymaps__pin"></ymaps><ymaps class="ymaps-2-1-79-gotoymaps__text-container" style="display: none;"><ymaps class="ymaps-2-1-79-gotoymaps__text">В Карты →</ymaps></ymaps></ymaps></ymaps><ymaps class="ymaps-2-1-79-gototaxi" title="Доехать на такси" style="display: none;"><ymaps class="ymaps-2-1-79-gototaxi__container"><ymaps class="ymaps-2-1-79-gototaxi__pin"></ymaps><ymaps class="ymaps-2-1-79-gototaxi__text-container" style="display: none;"><ymaps class="ymaps-2-1-79-gototaxi__text">На такси</ymaps></ymaps></ymaps></ymaps><a class="ymaps-2-1-79-gototech" target="_blank" href="https://tech.yandex.ru/maps/mapsapi/?from=api-maps " style="display: none;">API</a></ymaps></ymaps></ymaps><ymaps class="ymaps-2-1-79-controls-pane" style="width: 100%; top: 0px; left: 0px; position: absolute; z-index: 5403;"><ymaps class="ymaps-2-1-79-controls__toolbar" style="margin-top: 10px;"><ymaps class="ymaps-2-1-79-controls__toolbar_left"><ymaps class="ymaps-2-1-79-controls__control_toolbar ymaps-2-1-79-user-selection-none" style="margin-right: 0px; margin-left: 10px; position: inherit;" unselectable="on"><ymaps><ymaps class="ymaps-2-1-79-float-button ymaps-2-1-79-_hidden-text" style="max-width: 90px" title="Определить ваше местоположение"><ymaps class="ymaps-2-1-79-float-button-icon ymaps-2-1-79-float-button-icon_icon_geolocation"></ymaps><ymaps class="ymaps-2-1-79-float-button-text"></ymaps></ymaps></ymaps></ymaps><ymaps class="ymaps-2-1-79-controls__control_toolbar" style="margin-right: 0px; margin-left: 10px; position: inherit;"><ymaps><ymaps class="ymaps-2-1-79-searchbox"><ymaps id="id_170525402008075739330" unselectable="on" class="ymaps-2-1-79-user-selection-none"><ymaps><ymaps class="ymaps-2-1-79-float-button ymaps-2-1-79-_hidden-text" style="max-width: 30px" title="Найти"><ymaps class="ymaps-2-1-79-float-button-icon ymaps-2-1-79-float-button-icon_icon_magnifier"></ymaps><ymaps class="ymaps-2-1-79-float-button-text">Найти</ymaps></ymaps></ymaps></ymaps><ymaps id="id_170525402008075739331"></ymaps></ymaps></ymaps></ymaps></ymaps><ymaps class="ymaps-2-1-79-controls__toolbar_right"><ymaps class="ymaps-2-1-79-controls__control_toolbar" style="margin-right: 10px; margin-left: 0px; position: inherit;"><ymaps><ymaps class="ymaps-2-1-79-traffic"><ymaps id="id_170525402008075739347" unselectable="on" class="ymaps-2-1-79-user-selection-none"><ymaps><ymaps class="ymaps-2-1-79-float-button ymaps-2-1-79-float-button_traffic_left ymaps-2-1-79-_hidden-text"><ymaps class="ymaps-2-1-79-traffic__icon ymaps-2-1-79-traffic__icon_icon_off ymaps-2-1-79-float-button-icon"></ymaps><ymaps class="ymaps-2-1-79-float-button-text"><ymaps>Пробки</ymaps></ymaps></ymaps></ymaps><ymaps></ymaps></ymaps><ymaps id="id_170525402008075739348"><ymaps><ymaps class="ymaps-2-1-79-traffic__panel ymaps-2-1-79-popup ymaps-2-1-79-popup_direction_down ymaps-2-1-79-popup_to_bottom ymaps-2-1-79-popup_theme_ffffff ymaps-2-1-79-user-selection-none" unselectable="on" style="width: 270px;"><ymaps class="ymaps-2-1-79-traffic__tail ymaps-2-1-79-popup__tail"></ymaps><ymaps class="ymaps-2-1-79-traffic__panel-content"><ymaps id="id_170525402008075739349"><ymaps><ymaps class="ymaps-2-1-79-traffic__switcher"><ymaps class="ymaps-2-1-79-traffic__switcher-item ymaps-2-1-79-traffic__switcher-item_data_actual ymaps-2-1-79-traffic__switcher-item_selected_yes">Сейчас</ymaps><ymaps class="ymaps-2-1-79-traffic__switcher-item ymaps-2-1-79-traffic__switcher-item_data_archive">Статистика</ymaps></ymaps></ymaps></ymaps><ymaps></ymaps><ymaps></ymaps><ymaps></ymaps></ymaps></ymaps></ymaps></ymaps></ymaps></ymaps></ymaps><ymaps class="ymaps-2-1-79-controls__control_toolbar" style="margin-right: 10px; margin-left: 0px; position: inherit;"><ymaps><ymaps class="ymaps-2-1-79-listbox ymaps-2-1-79-listbox_opened_no ymaps-2-1-79-listbox_align_right" style="width: 0px;"><ymaps class="ymaps-2-1-79-listbox__button ymaps-2-1-79-_hidden-text ymaps-2-1-79-user-selection-none" unselectable="on" title=""><ymaps class="ymaps-2-1-79-listbox__button-icon ymaps-2-1-79-_icon_layers"></ymaps><ymaps class="ymaps-2-1-79-listbox__button-text">Слои</ymaps><ymaps class="ymaps-2-1-79-listbox__button-arrow"></ymaps></ymaps><ymaps class="ymaps-2-1-79-listbox__panel ymaps-2-1-79-i-custom-scroll" style="transform: translate3d(0px, 0px, 0px) scale(1, 1);"><ymaps class="ymaps-2-1-79-listbox__list ymaps-2-1-79-listbox__list_scrollable_yes" style="max-height: 0px;"><ymaps><ymaps><ymaps id="id_170525402008075739302"><ymaps unselectable="on" class="ymaps-2-1-79-user-selection-none"><ymaps class="ymaps-2-1-79-listbox__list-item ymaps-2-1-79-listbox__list-item_selected_yes"><ymaps class="ymaps-2-1-79-listbox__list-item-text">Схема</ymaps></ymaps></ymaps></ymaps></ymaps></ymaps><ymaps><ymaps><ymaps id="id_170525402008075739303"><ymaps unselectable="on" class="ymaps-2-1-79-user-selection-none"><ymaps class="ymaps-2-1-79-listbox__list-item ymaps-2-1-79-listbox__list-item_selected_no"><ymaps class="ymaps-2-1-79-listbox__list-item-text">Спутник</ymaps></ymaps></ymaps></ymaps></ymaps></ymaps><ymaps><ymaps><ymaps id="id_170525402008075739304"><ymaps unselectable="on" class="ymaps-2-1-79-user-selection-none"><ymaps class="ymaps-2-1-79-listbox__list-item ymaps-2-1-79-listbox__list-item_selected_no"><ymaps class="ymaps-2-1-79-listbox__list-item-text">Гибрид</ymaps></ymaps></ymaps></ymaps></ymaps></ymaps><ymaps><ymaps><ymaps id="id_170525402008075739300"><ymaps><ymaps class="ymaps-2-1-79-listbox__list-separator"></ymaps></ymaps></ymaps></ymaps></ymaps><ymaps><ymaps><ymaps id="id_170525402008075739301"><ymaps unselectable="on" class="ymaps-2-1-79-user-selection-none"><ymaps class="ymaps-2-1-79-listbox__list-item ymaps-2-1-79-listbox__list-item_selected_no"><ymaps class="ymaps-2-1-79-listbox__list-item-text">Панорамы</ymaps></ymaps></ymaps></ymaps></ymaps></ymaps></ymaps></ymaps></ymaps></ymaps></ymaps><ymaps class="ymaps-2-1-79-controls__control_toolbar ymaps-2-1-79-user-selection-none" style="margin-right: 10px; margin-left: 0px; position: inherit;" unselectable="on"><ymaps><ymaps class="ymaps-2-1-79-float-button ymaps-2-1-79-_hidden-text" style="max-width: 28px" title=""><ymaps class="ymaps-2-1-79-float-button-icon ymaps-2-1-79-float-button-icon_icon_expand"></ymaps><ymaps class="ymaps-2-1-79-float-button-text"></ymaps></ymaps></ymaps></ymaps></ymaps></ymaps><ymaps class="ymaps-2-1-79-controls__bottom" style="top: 0px;"><ymaps class="ymaps-2-1-79-controls__control" style="margin-right: 0px; margin-left: 0px; position: inherit; inset: auto 10px 30px auto;"><ymaps><ymaps style="display: block;"><ymaps style="display: inline-block; height: 100%; vertical-align: top;"><ymaps id="id_170525402008075739309"><ymaps><ymaps class="ymaps-2-1-79-scaleline" style="width: 73px;"><ymaps class="ymaps-2-1-79-scaleline__left"><ymaps class="ymaps-2-1-79-scaleline__left-border"></ymaps><ymaps class="ymaps-2-1-79-scaleline__left-line"></ymaps></ymaps><ymaps class="ymaps-2-1-79-scaleline__center"><ymaps class="ymaps-2-1-79-scaleline__label">100&nbsp;м</ymaps></ymaps><ymaps class="ymaps-2-1-79-scaleline__right"><ymaps class="ymaps-2-1-79-scaleline__right-border"></ymaps><ymaps class="ymaps-2-1-79-scaleline__right-line"></ymaps></ymaps></ymaps></ymaps></ymaps></ymaps><ymaps style="display: inline-block; width: 10px; height: 0"></ymaps><ymaps style="display: inline-block;"><ymaps id="id_170525402008075739310" unselectable="on" class="ymaps-2-1-79-user-selection-none"><ymaps><ymaps class="ymaps-2-1-79-float-button ymaps-2-1-79-_hidden-text" style="max-width: 28px" title="Измерение расстояний на карте"><ymaps class="ymaps-2-1-79-float-button-icon ymaps-2-1-79-float-button-icon_icon_ruler"></ymaps><ymaps class="ymaps-2-1-79-float-button-text"></ymaps></ymaps></ymaps></ymaps></ymaps></ymaps></ymaps></ymaps></ymaps><ymaps class="ymaps-2-1-79-controls__control" style="margin-right: 0px; margin-left: 0px; position: inherit; inset: 108px auto auto 10px;"><ymaps><ymaps class="ymaps-2-1-79-zoom" style="height: 5px"><ymaps class="ymaps-2-1-79-zoom__plus ymaps-2-1-79-zoom__button ymaps-2-1-79-float-button ymaps-2-1-79-user-selection-none" unselectable="on"><ymaps class="ymaps-2-1-79-zoom__icon ymaps-2-1-79-float-button-icon"></ymaps></ymaps><ymaps class="ymaps-2-1-79-zoom__minus ymaps-2-1-79-zoom__button ymaps-2-1-79-float-button ymaps-2-1-79-user-selection-none" unselectable="on"><ymaps class="ymaps-2-1-79-zoom__icon ymaps-2-1-79-float-button-icon"></ymaps></ymaps></ymaps></ymaps></ymaps></ymaps><ymaps class="ymaps-2-1-79-searchpanel-pane" style="width: 100%; top: 0px; left: 0px; position: absolute; z-index: 7810;"><ymaps><ymaps class="ymaps-2-1-79-search ymaps-2-1-79-search_layout_panel ymaps-2-1-79-searchbox__panel-layout"><ymaps class="ymaps-2-1-79-search__layout"><ymaps id="id_170525402008075739332"><ymaps><ymaps class="ymaps-2-1-79-searchbox__input-cell"><ymaps class="ymaps-2-1-79-searchbox-input"><input class="ymaps-2-1-79-searchbox-input__input" placeholder="Адрес или объект"><ymaps class="ymaps-2-1-79-searchbox-input__clear-button"></ymaps></ymaps><ymaps class="ymaps-2-1-79-searchbox-list-button"></ymaps></ymaps><ymaps class="ymaps-2-1-79-searchbox__button-cell"><ymaps class="ymaps-2-1-79-searchbox-button ymaps-2-1-79-user-selection-none" unselectable="on"><ymaps class="ymaps-2-1-79-searchbox-button-text">Найти</ymaps></ymaps></ymaps></ymaps></ymaps><ymaps class="ymaps-2-1-79-searchbox__fold-button-cell"><ymaps class="ymaps-2-1-79-searchbox__fold-button"><ymaps class="ymaps-2-1-79-searchbox__fold-button-icon"></ymaps></ymaps></ymaps></ymaps><ymaps id="id_170525402008075739333"><ymaps><ymaps class="ymaps-2-1-79-islets_serp-popup ymaps-2-1-79-islets__hidden"><ymaps class="ymaps-2-1-79-islets_serp-popup__tail"></ymaps><ymaps class="ymaps-2-1-79-islets_serp" style="max-height: 0px;"><ymaps id="id_170525402008075739334"><ymaps></ymaps></ymaps></ymaps></ymaps></ymaps></ymaps></ymaps></ymaps></ymaps><ymaps class="ymaps-2-1-79-places-pane" style="top: 0px; left: 0px; position: absolute; transform: translate3d(0px, 0px, 0px) scale(1, 1); z-index: 2405;"><ymaps class="ymaps-2-1-79-placemark-overlay ymaps-2-1-79-user-selection-none" unselectable="on" style="z-index: 650; height: 0px; width: 0px; position: absolute; left: 0px; top: 0px;"><ymaps><ymaps class="ymaps-2-1-79-image " style="position: absolute; left: -11px; top: -38px; width: 34px; height: 41px; opacity: 1; background-position: 0px 0px; background-size: 34px 41px; background-image: url(&quot;https://api-maps.yandex.ru/2.1.79/build/release/images/layout/defaultImage.png&quot;);"></ymaps></ymaps></ymaps></ymaps></ymaps></ymaps></ymaps></div>--}}
{{--        </div>--}}

{{--        <script>--}}
{{--            ymaps.ready(init);--}}

{{--            function init() {--}}
{{--                var myMap = new ymaps.Map('cmap1', {--}}
{{--                    center: [55.344330,86.062088],--}}
{{--                    zoom: 16--}}
{{--                });--}}
{{--                myMap.behaviors.disable('scrollZoom');--}}
{{--                var myMap2 = new ymaps.Map('cmap2', {--}}
{{--                    center: [55.344330,86.062088],--}}
{{--                    zoom: 16--}}
{{--                });--}}
{{--                myMap2.behaviors.disable('scrollZoom');--}}

{{--                ymaps.geocode('650000, г. Кемерово, Советский проспект, 27. Офис 401}', {--}}
{{--                    results: 1--}}
{{--                }).then(function (res) {--}}

{{--                    var firstGeoObject = res.geoObjects.get(0),--}}
{{--                        coords = firstGeoObject.geometry.getCoordinates(),--}}
{{--                        bounds = firstGeoObject.properties.get('boundedBy'),--}}
{{--                        location = firstGeoObject.geometry.location;--}}

{{--                    myPlacemark1 = new ymaps.Placemark(coords, {--}}
{{--                        hintContent: '',--}}
{{--                        balloonContent: firstGeoObject.getAddressLine(),--}}
{{--                        iconCaption: firstGeoObject.getAddressLine()--}}
{{--                    }, {--}}
{{--                        iconLayout: 'default#image',--}}
{{--                        //iconImageHref: '/images/marker.png',--}}
{{--                        //iconImageSize: [11, 25],--}}
{{--                        //iconImageOffset: [-5, -20]--}}
{{--                    });--}}
{{--                    myMap.geoObjects.add(myPlacemark1);--}}
{{--                    myMap.setCenter(coords);--}}

{{--                    myPlacemark = new ymaps.Placemark(coords, {--}}
{{--                        hintContent: '',--}}
{{--                        balloonContent: firstGeoObject.getAddressLine(),--}}
{{--                        iconCaption: firstGeoObject.getAddressLine()--}}
{{--                    }, {--}}
{{--                        iconLayout: 'default#image',--}}
{{--                        //iconImageHref: '/images/marker.png',--}}
{{--                        //iconImageSize: [11, 25],--}}
{{--                        //iconImageOffset: [-5, -20]--}}
{{--                    });--}}
{{--                    myMap2.geoObjects.add(myPlacemark);--}}
{{--                    myMap2.setCenter(coords);--}}
{{--                });--}}
{{--            }--}}
{{--        </script>--}}

{{--    </div>--}}
    <div class="yellow-question-block">
        <div class="uk-container uk-container-center">
            <div class="uk-width-2-3 uk-width-medium-1-1 uk-width-large-1-1 uk-width-xlarge-1-1 uk-align-center">
                <div class="uk-grid uk-grid-collapse">
                    <div class="uk-width-1-1 uk-width-medium-2-3 uk-width-large-2-3 uk-width-xlarge-3-5">
                        <img src="{{asset('front/images/phone.png')}}" class="uk-hidden-small" alt="телефон">
                        <h3 class="title-header">Есть вопросы?</h3>
                        <p>Оставьте ваш номер телефона,
                            <br class="uk-visible-small">мы перезвоним</p>
                    </div>
                    <div class="uk-width-1-1 uk-width-medium-1-3 uk-width-large-1-3 uk-width-xlarge-2-5">
                        <form action="" class="uk-form uk-form-horizontal">
                            <input type="text" name="phone" placeholder="+374 (55) 62-62-12">
                            <button class="uk-button uk-button-secondary button-black" type="submit">Заказать звонок</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- modal blocks -->
    <div id="modal-video" class="uk-modal">
        <div class="uk-modal-dialog uk-modal-dialog-medium uk-text-center">
            <a class="uk-modal-close close-video uk-close"></a>
            <iframe style="margin-top: 40px;" width="90%" height="300" src="" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen=""></iframe>
        </div>
    </div>
    <div id="modal-anketa" class="uk-modal">
        <div class="uk-modal-dialog uk-modal-dialog-medium">
            <a class="uk-modal-close uk-close"></a>
            <h3 class="uk-text-center">Заполните анкету</h3>
            <p class="uk-text-center">Все поля обязательны</p>
            <form action="" class="uk-form">
                <div class="uk-form-row">
                    <input type="text" name="name-client" class="uk-width-1-1" placeholder="Василий">
                </div>
                <div class="uk-form-row">
                    <input type="text" name="second-name-client" class="uk-width-1-1" placeholder="Израилевич">
                </div>
                <div class="uk-form-row">
                    <input type="text" name="last-name-client" class="uk-width-1-1" placeholder="Таёжный">
                </div>
                <div class="uk-form-row">
                    <div class="uk-grid uk-grid-medium">
                        <div class="uk-width-1-1 uk-width-xlarge-1-2">
                            <input type="text" name="phone" class="uk-width-1-1" placeholder="+7 (921) 123-34-56">
                        </div>
                    </div>
                </div>
                <div class="uk-form-row">
                    <div class="uk-grid uk-grid-medium">
                        <div class="uk-width-1-1 uk-width-xlarge-1-2">
                            <div class="jq-selectbox jqselect select-stylize width-150 uk-width-1-1"><select name="sitizenship" class="select-stylize width-150 uk-width-1-1" data-placeholder="Гражданство">
                                    <option></option>
                                    <option value="Великобритания">Великобритания</option>
                                    <option value="Белорусия">Белорусия</option>
                                    <option value="Российская Федерация">Российская Федерация</option>
                                    <option value="Украина">Украина</option>
                                    <option value="Израиль">Израиль</option>
                                </select><div class="jq-selectbox__select"><div class="jq-selectbox__select-text placeholder" style="width: 100px;">Гражданство</div><div class="jq-selectbox__trigger"><div class="jq-selectbox__trigger-arrow"></div></div></div><div class="jq-selectbox__dropdown" style="left: 0px; display: none;"><ul><li class="selected sel" style="display: none;"></li><li style="">Великобритания</li><li style="">Белорусия</li><li style="">Российская Федерация</li><li style="">Украина</li><li style="">Израиль</li></ul></div></div>
                        </div>
                        <div class="uk-width-1-1 uk-width-xlarge-1-2 margin-top-medium">
                            <input type="text" name="years" class="uk-width-1-1" placeholder="Год рождения">
                        </div>
                    </div>
                </div>
                <div class="uk-form-row uk-text-center">
                    <input type="checkbox" class="checkbox" id="approve-checkbox" checked="">
                    <label for="approve-checkbox">Я согласен на обработку моих персональных данных</label>
                </div>
                <div class="uk-text-center">
                    <button class="resume-button uk-button uk-button-secondary" type="submit">Отправить</button>
                </div>
            </form>
        </div>
    </div>
    <div id="modal-city" class="uk-modal">
        <div class="uk-modal-dialog uk-modal-dialog-medium">
            <form action="" class="uk-form">
                <div class="uk-form-icon uk-width-1-1">
                    <i class="uk-icon-search"></i>
                    <input type="text" class="city-search uk-width-1-1" placeholder="Введите название населенного пункта">
                </div>
                <div class="uk-overflow-container">
                    <ul class="city-for-search list-city-group">
                        <li class="first-letter">В</li>
                        <li><a href="http://vn.gruzchikov-service.ru">Великий Новгород</a></li>
                        <li><a href="http://prim.gruzchikov-service.ru">Владивосток</a></li>
                        <li><a href="http://volgograd.gruzchikov-service.ru">Волгоград</a></li>

                    </ul>
                    <ul class="city-for-search list-city-group">
                        <li class="first-letter">Е</li>
                        <li><a href="http://ekb.gruzchikov-service.ru">Екатеринбург</a></li>

                    </ul>
                    <ul class="city-for-search list-city-group">
                        <li class="first-letter">И</li>
                        <li><a href="http://izh.gruzchikov-service.ru">Ижевск</a></li>
                        <li><a href="http://ivn.gruzchikov-service.ru">Иваново</a></li>

                    </ul>
                    <ul class="city-for-search list-city-group">
                        <li class="first-letter">К</li>
                        <li><a href="http://krsk.gruzchikov-service.ru">Красноярск</a></li>
                        <li><a href="http://kem.gruzchikov-service.ru">Кемерово</a></li>
                        <li><a href="http://kostroma.gruzchikov-service.ru">Кострома</a></li>
                        <li><a href="http://kaluga.gruzchikov-service.ru">Калуга</a></li>
                        <li><a href="http://kem.gruzchikov-service.ru">Кемерово</a></li>

                    </ul>
                    <ul class="city-for-search list-city-group">
                        <li class="first-letter">М</li>
                        <li><a href="http://magnitogorsk.gruzchikov-service.ru">Магнитогорск</a></li>
                        <li><a href="http://msk.gruzchikov-service.ru">Москва</a></li>

                    </ul>
                    <ul class="city-for-search list-city-group">
                        <li class="first-letter">Н</li>
                        <li><a href="http://nn.gruzchikov-service.ru">Нижний Новгород</a></li>
                        <li><a href="http://novoros.gruzchikov-service.ru">Новороссийск</a></li>
                        <li><a href="http://nv.gruzchikov-service.ru">Нижневартовск</a></li>
                        <li><a href="http://nvk.gruzchikov-service.ru">Новокузнецк</a></li>
                        <li><a href="http://nsk.gruzchikov-service.ru">Новосибирск</a></li>

                    </ul>
                    <ul class="city-for-search list-city-group">
                        <li class="first-letter">О</li>
                        <li><a href="http://omsk.gruzchikov-service.ru">Омск</a></li>

                    </ul>
                    <ul class="city-for-search list-city-group">
                        <li class="first-letter">С</li>
                        <li><a href="http://simf.gruzchikov-service.ru">Симферополь</a></li>
                        <li><a href="http://sev.gruzchikov-service.ru">Севастополь</a></li>
                        <li><a href="http://komi.gruzchikov-service.ru">Сыктывкар</a></li>
                        <li><a href="http://samara.gruzchikov-service.ru">Самара</a></li>
                        <li><a href="http://spb.gruzchikov-service.ru">Санкт-Петербург</a></li>

                    </ul>
                    <ul class="city-for-search list-city-group">
                        <li class="first-letter">Т</li>
                        <li><a href="http://tmn.gruzchikov-service.ru">Тюмень</a></li>
                        <li><a href="http://tomsk.gruzchikov-service.ru">Томск</a></li>
                        <li><a href="http://tula.gruzchikov-service.ru">Тула</a></li>

                    </ul>
                    <ul class="city-for-search list-city-group">
                        <li class="first-letter">У</li>
                        <li><a href="http://ul.gruzchikov-service.ru">Ульяновск</a></li>

                    </ul>
                    <ul class="city-for-search list-city-group">
                        <li class="first-letter">Ю</li>
                        <li><a href="http://sakhalin.gruzchikov-service.ru">Южно-Сахалинск</a></li>

                    </ul>

                </div>
            </form>
            <div class="uk-text-center">
                <a href="" class=" uk-button uk-button-primary button-light button-round button-close uk-modal-close">Отмена</a>
            </div>
        </div>
    </div>
    <div id="modal-offer-mobile" class="uk-modal">
        <div class="uk-modal-dialog uk-modal-dialog-medium">
            <a class="uk-modal-close uk-close"></a>
            <p class="offer-text">Индивидуальное
                <br>коммерческое предложение
                <br><span>за 15 секунд</span> <img src="images/offer_ico.png" alt=""></p>
            <p></p>
            <form action="" class="uk-form">
                <div class="uk-form-row">
                    <input type="text" name="personal-code" class="uk-width-1-1" maxlength="12" placeholder="ИНН">
                </div>
                <div class="uk-form-row">
                    <input type="text" name="phone" class="uk-width-1-1" placeholder="+7 (921) 234-56-78">
                </div>
                <div class="uk-form-row">
                    <input type="text" name="mail-client" class="uk-width-1-1" placeholder="mail@mail.ru">
                </div>
                <div class="uk-form-row">
                    <button class="get_pp uk-button uk-button-secondary uk-width-1-1" type="submit">Получить</button>
                </div>
                <p class="uk-text-center">Пришлем в течении 15 сек. без спама Все поля обязательны </p>
            </form>
        </div>
    </div>
    <div id="modal-confidential" class="uk-modal">
        <div class="uk-modal-dialog uk-modal-dialog-large">
            <a class="uk-modal-close uk-close  uk-visible-xlarge"></a>
            <h3 class="uk-text-center">Информация о политике
                <br>конфиденциальности</h3>
            <div class="uk-overflow-container">
                <p>Мы признаем важность конфиденциальности информации. В этом документе описывается, какую личную информацию мы получаем и собираем, когда Вы пользуетесь сайтом kem.gruzchikov-service.ru. Мы надеемся, что эти сведения помогут Вам принимать осознанные решения в отношении предоставляемой нам личной информации.</p>
                <p class="modal-title">Общедоступная информация</p>
                <p>Если Вы просто просматриваете сайт без регистрации, информация о Вас не публикуется на сайте. Когда Вы пишете или редактируете материалы на сайте, вы публикуете каждое слово из того, что написали, и эта информация будет храниться и показываться другим посетителям проекта. Это касается статей, материалов, личных страниц пользователей, комментариев и т.п.</p>
                <p class="modal-title">Идентификация посетителей</p>
                <p>Вы можете зарегистрироваться на сайте, а можете не регистрироваться. Если Вы зарегистрировались, Вы будете идентифицироваться Вашим именем участника. Это может быть ваше настоящее имя (если вы этого хотите) или Вы можете предпочесть публиковаться под псевдонимом — тем именем, которым представились при создании учётной записи. Другие зарегистрированные посетители сайта смогут посмотреть данные, указанные Вами при регистрации.</p>
                <p class="modal-title">Электронная почта</p>
                <p>Адрес электронной почты, указываемый Вами при регистрации, не показывается другим посетителям сайта. Мы можем сохранять сообщения электронной почте и другие письма, оправленные пользователями, чтобы обрабатывать вопросы пользователей, отвечать на запросы и совершенствовать наши службы.</p>
                <p class="modal-title">Цели сбора и обработки персональной информации пользователей</p>
                <p>Ваше добровольное согласие оставить свои контакты для связи подтверждается путем ввода Вашего Имени и E-mail и прочих данных в форму обратной связи. Имя используется для личного обращения к Вам, а e-mail — для отправления Вам писем. А так же предложения принять участие в маркетинговых исследованиях, полезные материалы по тематике. Пользователь предоставляет свои данные добровольно, после чего ему высылается письмо, в котором необходимо дополнительно подтвердить подписку на предлагаемую рассылку.</p>
                <p class="modal-title">Условия обработки и её передачи третьим лицам</p>
                <p>Ваши Имя и Е-мейл используются строго в соответствии с политикой конфиденциальности сервиса kem.gruzchikov-service.ru и хранятся на его защищенных серверах. Ваши Имя и Е-мейл никогда, ни при каких условиях не будут переданы третьим лицам, исключая случаи, которые связаны с исполнением законодательства. В каждом письме присутствует ссылка «отписаться от рассылки», с помощью которой Вы можете отказаться от получения вышеописанной информации в любое время и полностью удалить из базы данных Ваши Имя и Е-мейл.</p>
                <p class="modal-title">Протоколирование</p>
                <p>При каждом посещении сайта наши серверы автоматически записывают информацию, которую Ваш браузер передает при посещении веб-страниц. Как правило эта информация включает запрашиваемую веб-страницу, IP-адрес компьютера, тип браузера, языковые настройки браузера, дату и время запроса, а также один или несколько файлов cookie, которые позволяют точно идентифицировать Ваш браузер.</p>
                <p class="modal-title">Куки (Cookie)</p>
                <p>На сайте происходит сбор данных о посетителях с помощью сервисов Яндекс Метрика на главной странице. Эти данные служат для сбора информации о действиях посетителей на сайте, для улучшения качества его содержания и возможностей. В любое время Вы можете изменить параметры в настройках Вашего браузера таким образом, чтобы браузер перестал сохранять все файлы cookie, а так же оповещал их об отправке. При этом следует учесть, что в этом случае некоторые сервисы и функции могут перестать работать.</p>
                <p class="modal-title">Изменение Политики конфиденциальности</p>
                <p>На этой странице Вы сможете узнать о любых изменениях данной политики конфиденциальности. В особых случаях, Вам будет выслана информация на Ваш e-mail.</p>
                <p class="modal-title">Обратная связь</p>
                <p>Вы можете задать любые вопросы, написав на e-mail: kem@gruzchikov-service.ru</p>
            </div>
            <div class="uk-text-center uk-hidden-xlarge">
                <hr>
                <a href="" class=" uk-button uk-button-primary button-light button-round button-close uk-modal-close">Закрыть</a>
            </div>
        </div>
    </div>
    <div id="modal-director" class="uk-modal">
        <div class="uk-modal-dialog modal-dialog-medium">
            <a class="uk-modal-close uk-close"></a>
            <h3 class="uk-text-center">Написать директору</h3>
            <p class="uk-text-center">Можете нас похвалить или поругать,
                <br> дать рекомендации или задать вопрос</p>
            <form action="" class="uk-form uk-text-center">
                <div class="uk-form-row">
                    <div class="uk-grid uk-grid-medium">
                        <div class="uk-width-1-1 uk-width-xlarge-1-2">
                            <input type="text" name="phone" class="uk-width-1-1" placeholder="+7 (921) 234-56-78">
                        </div>
                        <div class="uk-width-1-1 uk-width-xlarge-1-2 margin-top-medium">
                            <input type="text" name="email-client" class="uk-width-1-1" placeholder="mail@mail.ru">
                        </div>
                    </div>
                </div>
                <div class="uk-form-row">
                    <textarea name="message-client" id="msc" rows="10" class="uk-width-1-1" placeholder="Ваше сообщение"></textarea>
                </div>
                <div class="uk-form-row">
                    <input type="checkbox" class="checkbox" id="approve-checkbox2" checked="">
                    <label for="approve-checkbox2">Я согласен на обработку моих персональных данных</label>
                </div>
                <button class="uk-button uk-button-secondary" type="submit">Отправить</button>
            </form>
        </div>
    </div>
    <div id="modal-quick-order" class="uk-modal">
        <div class="uk-modal-dialog modal-dialog-medium">
            <a class="uk-modal-close uk-close"></a>
            <div class="uk-grid uk-grid-large">
                <div class="uk-width-1-1 uk-width-xlarge-1-2 uk-text-center">
                    <p class="percent-block">
                        <span>95</span>
                        <strong><i>%</i> клиентов <br>
                            заказывают <br>
                            по телефону</strong>
                    </p>
                </div>
                <div class="uk-width-1-1 uk-width-xlarge-1-2">
                    <p class="medium-large-text">Оставьте ваш номер
                        <br> телефона, мы перезвоним
                        <br></p>
                    <div class="uk-form">
                        <div class="uk-form-row">
                            <input type="text" name="phone" class="uk-width-1-1" placeholder="+7 (921) 234-56-78">
                        </div>
                        <div class="uk-form-row">
                            <button class="fast_order uk-button uk-button-secondary uk-width-1-1" type="submit">Заказать</button>
                        </div>
                    </div>
                    <p class="modal-footer uk-text-center">Или позвоните  (3842) 32-69-35 </p>
                </div>
            </div>
        </div>
    </div>
    <div class="offer-slide-modal uk-visible-xlarge">
        <div class="offer-button">
            <a href="#">Коммерческое предложение </a>
        </div>
        <div class="offer-bg-block"></div>
        <div class="offer-main">
            <div class="uk-grid">
                <div class="uk-width-3-7">
                    <form action="" class="uk-form">
                        <div class="uk-form-row">
                            <input type="text" name="personal-code" class="uk-width-1-1" maxlength="12" placeholder="ИНН">
                        </div>
                        <div class="uk-form-row">
                            <input type="text" name="phone" class="uk-width-1-1" placeholder="+7 (921) 234-56-78">
                        </div>
                        <div class="uk-form-row">
                            <input type="text" name="mail-client" class="uk-width-1-1" placeholder="mail@mail.ru">
                        </div>
                        <div class="uk-form-row">
                            <button class="get_pp get_offer uk-button uk-button-secondary uk-width-1-1" type="submit">Получить</button>
                        </div>
                        <p>Пришлем в течении 15 сек. без спама Все поля обязательны </p>
                    </form>
                </div>
                <div class="uk-width-4-7">
                    <p class="offer-text">Индивидуальное коммерческое предложение <span>за 15 секунд</span>
                        <img src="images/offer_ico.png" alt=""></p>
                </div>
            </div>
            <a href="" class="uk-close"></a>
            <img src="images/offer_bg.png" class="uk-position-absolute offer-bg" alt="">
        </div>
    </div>
    <!-- modal thanks -->
    <div id="modal-we-calling" class="uk-modal">
        <div class="uk-modal-dialog uk-flex uk-flex-center uk-flex-middle">
            <div class="modal-container uk-text-center">
                <h3 class="uk-text-center title-header">Мы скоро позвоним</h3>
                <p>Спасибо за проявленный интерес
                    <br>к компании Грузчиков-Сервис</p>
                <a href="" class=" uk-button uk-button-primary button-light button-round button-close uk-modal-close">Закрыть</a>
            </div>
        </div>
    </div>
    <div id="modal-get-pp" class="uk-modal">
        <div class="uk-modal-dialog uk-flex uk-flex-center uk-flex-middle">
            <div class="modal-container uk-text-center">
                <h3 class="uk-text-center title-header">Коммерческое отправлено!</h3>
                <p>Спасибо за проявленный интерес
                    <br>к компании Грузчиков-Сервис</p>
                <a href="" class=" uk-button uk-button-primary button-light button-round button-close uk-modal-close">Закрыть</a>
            </div>
        </div>
    </div>
    <div id="modal-director-finish" class="uk-modal">
        <div class="uk-modal-dialog uk-flex uk-flex-center uk-flex-middle">
            <div class="modal-container uk-text-center">
                <h3 class="uk-text-center title-header">Письмо отправлено!</h3>
                <p>Спасибо за проявленный интерес
                    <br>к компании Грузчиков-Сервис</p>
                <a href="" class=" uk-button uk-button-primary button-light button-round button-close uk-modal-close">Закрыть</a>
            </div>
        </div>
    </div>
    <a href="#modal-we-calling" class="we-calling" data-uk-modal="{center:true}"></a>


    <!-- jQuery -->
    <script src="js/jquery-1.12.4.min.js"></script>
    <!-- Uikit -->
    <script src="js/uikit.min.js"></script>
    <script src="js/sticky.min.js"></script>
    <script src="js/lightbox.min.js"></script>
    <script src="js/slideshow.min.js"></script>
    <script src="js/slideset.min.js"></script>
    <script src="js/accordion.min.js"></script>
    <!-- Plugins -->
    <script src="js/jquery.inputmask.bundle.min.js?v=2"></script>
    <script src="js/jquery.formstyler.min.js"></script>
    <script src="js/jquery.mmenu.all.js"></script>
    <script src="js/jquery.matchHeight.js"></script>
    <!-- Main -->
    <script src="js/main.js?v=3.4"></script>
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
        (function (d, w, c) {
            (w[c] = w[c] || []).push(function() {
                try {
                    w.yaCounter51269785 = new Ya.Metrika2({
                        id:51269785,
                        clickmap:true,
                        trackLinks:true,
                        accurateTrackBounce:true,
                        webvisor:true
                    });
                } catch(e) { }
            });

            var n = d.getElementsByTagName("script")[0],
                s = d.createElement("script"),
                f = function () { n.parentNode.insertBefore(s, n); };
            s.type = "text/javascript";
            s.async = true;
            s.src = "https://mc.yandex.ru/metrika/tag.js";

            if (w.opera == "[object Opera]") {
                d.addEventListener("DOMContentLoaded", f, false);
            } else { f(); }
        })(document, window, "yandex_metrika_callbacks2");
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/51269785" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-173025696-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-173025696-1');
    </script>




    <div class="mm-page__blocker mm-slideout"></div>


{{--<!-- ne inner title start -->--}}
{{--<div class="ne_inner_title_main_section">--}}
{{--    <div class="ne_inner_title_img_overlay"></div>--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 hidden-xs">--}}
{{--                <div class="ne_ts_inner_wrapper ne_ts_title_inner_wrapper">--}}
{{--                    <div class="ne_tran_label_wrapper">--}}
{{--                        <h3>Trending</h3>--}}
{{--                    </div>--}}
{{--                    <div class="ne_tranding_slider_wrapper">--}}
{{--                        <div class="owl-carousel owl-theme">--}}
{{--                            <div class="item">--}}
{{--                                <div class="ne_ts_inner_content">--}}
{{--                                    <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh</p>--}}
{{--                                    <h3 class="hidden-sm"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</h3>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="item">--}}
{{--                                <div class="ne_ts_inner_content">--}}
{{--                                    <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh</p>--}}
{{--                                    <h3 class="hidden-sm"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</h3>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="item">--}}
{{--                                <div class="ne_ts_inner_content">--}}
{{--                                    <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh</p>--}}
{{--                                    <h3 class="hidden-sm"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2020</h3>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">--}}
{{--                <div class="ne_inner_title_nev_wrapper">--}}
{{--                    <ul>--}}
{{--                        <li><i class="fa fa-home"></i> <a href="{{asset('/')}}">Home</a>&nbsp;&nbsp; ></li>--}}
{{--                        <li><i class="fa fa-folder-open"></i> Contact Us</li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--<!-- ne inner title End -->--}}
{{--<div class="ne_cu_map_main_wrapper">--}}
{{--    <div class="container">--}}
{{--        <div id="map"></div>--}}
{{--        <div class="ne_map_content_wrapper">--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">--}}
{{--                    <div class="ne_busness_main_slider_wrapper ne_busness_main_slider_wrapper_contact_heading">--}}
{{--                        <div class="ne_recent_heading_main_wrapper">--}}
{{--                            <h2>some line for news express</h2>--}}
{{--                            <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. ean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.This is version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. ean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="ne_map_contact_form_left_wrapper">--}}
{{--            <div class="gc_map_add_wrapper gc_map_add_wrapper1">--}}
{{--                <div class="gc_map_location_icon_wrapper"> <i class="fa fa-map-marker"></i>--}}
{{--                </div>--}}
{{--                <div class="gc_map_location_icon_cont_wrapper">--}}
{{--                    <h3>121 King Street, Melbourne, Australia--}}
{{--                        Victoria 3000</h3>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="gc_map_add_wrapper">--}}
{{--                <div class="gc_map_location_icon_wrapper"> <i class="fa fa-map-marker"></i>--}}
{{--                </div>--}}
{{--                <div class="gc_map_location_icon_cont_wrapper">--}}
{{--                    <p>+13456789--}}
{{--                        <br>+187456321</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="gc_map_add_wrapper">--}}
{{--                <div class="gc_map_location_icon_wrapper"> <i class="fa fa-map-marker"></i>--}}
{{--                </div>--}}
{{--                <div class="gc_map_location_icon_cont_wrapper">--}}
{{--                    <p><a href="#">support@example.com</a>--}}
{{--                        <br><a href="#">hello@example.com</a>--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="gc_map_add_wrapper">--}}
{{--                <div class="gc_map_location_icon_wrapper"> <i class="fa fa-map-marker"></i>--}}
{{--                </div>--}}
{{--                <div class="gc_map_location_icon_cont_wrapper">--}}
{{--                    <p><a href="#">support@example.com</a>--}}
{{--                        <br><a href="#">hello@example.com</a>--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="ne_map_contact_form_right_wrapper">--}}
{{--            <form>--}}
{{--                <div class="row">--}}
{{--                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">--}}
{{--                        <div class="ne_map_form_input1">--}}
{{--                            <input type="text" name="full_name" placeholder="First Name" class="require">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">--}}
{{--                        <div class="ne_map_form_input1 ne_map_form_input3">--}}
{{--                            <input type="text" name="full_name" placeholder="Last Name" class="require">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">--}}
{{--                        <div class="ne_map_form_input1 ne_map_form_input2">--}}
{{--                            <input type="email" name="email" placeholder="Email" class="require" data-valid="email" data-error="Email should be valid.">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">--}}
{{--                        <div class="ne_map_form_input1 ne_map_form_input2">--}}
{{--                            <textarea rows="6" name="message" placeholder="..Message.." class="require"></textarea>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">--}}
{{--                        <div class="response"></div>--}}
{{--                        <div class="ne_map_form_input1">--}}
{{--                            <button type="button" class="submitForm">send us</button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </form>--}}
{{--        </div>--}}
{{--        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">--}}
{{--                    <div class="ne_busness_main_slider_wrapper">--}}
{{--                        <div class="ne_recent_heading_main_wrapper">--}}
{{--                            <h2>what about people says</h2>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">--}}
{{--                    <div class="ne_contact_testi_slider_wrapper">--}}
{{--                        <div class="owl-carousel owl-theme">--}}
{{--                            <div class="item">--}}
{{--                                <div class="ne_cont_testi_content_wrapper">--}}
{{--                                    <p>Curabitur non mauris sit amet metus volutpat fermentum. Mauris lacus ex, hendrerit sed tortor commodo, eleifend interdum dui. Quisque ac massa ac nulla dapibus mollis non non diam. Pellentesque non vehicula quam</p>--}}
{{--                                    <h4><span>Mr.John</span> &nbsp;Designer at Webstrot INC</h4>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="item">--}}
{{--                                <div class="ne_cont_testi_content_wrapper">--}}
{{--                                    <p>Curabitur non mauris sit amet metus volutpat fermentum. Mauris lacus ex, hendrerit sed tortor commodo, eleifend interdum dui. Quisque ac massa ac nulla dapibus mollis non non diam. Pellentesque non vehicula quam</p>--}}
{{--                                    <h4><span>Mr.John</span> &nbsp;Designer at Webstrot INC</h4>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="item">--}}
{{--                                <div class="ne_cont_testi_content_wrapper">--}}
{{--                                    <p>Curabitur non mauris sit amet metus volutpat fermentum. Mauris lacus ex, hendrerit sed tortor commodo, eleifend interdum dui. Quisque ac massa ac nulla dapibus mollis non non diam. Pellentesque non vehicula quam</p>--}}
{{--                                    <h4><span>Mr.John</span> &nbsp;Designer at Webstrot INC</h4>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--<!-- prs patner slider Start -->--}}
{{--<div class="prs_patner_main_section_wrapper">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">--}}
{{--                <div class="prs_pn_slider_wraper">--}}
{{--                    <div class="owl-carousel owl-theme">--}}
{{--                        <div class="item">--}}
{{--                            <div class="prs_pn_img_wrapper">--}}
{{--                                <img src="{{asset('front/images/content/p1.jpg')}}" alt="patner_img">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="item">--}}
{{--                            <div class="prs_pn_img_wrapper">--}}
{{--                                <img src="{{asset('front/images/content/p2.jpg')}}" alt="patner_img">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="item">--}}
{{--                            <div class="prs_pn_img_wrapper">--}}
{{--                                <img src="{{asset('front/images/content/p3.jpg')}}" alt="patner_img">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="item">--}}
{{--                            <div class="prs_pn_img_wrapper">--}}
{{--                                <img src="{{asset('front/images/content/p4.jpg')}}" alt="patner_img">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="item">--}}
{{--                            <div class="prs_pn_img_wrapper">--}}
{{--                                <img src="{{asset('front/images/content/p5.jpg')}}" alt="patner_img">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="item">--}}
{{--                            <div class="prs_pn_img_wrapper">--}}
{{--                                <img src="{{asset('front/images/content/p6.jpg')}}" alt="patner_img">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--<!-- prs patner slider End -->--}}

{{--<script>--}}
{{--    function initMap() {--}}
{{--        var uluru = {--}}
{{--            // lat: -36.742775,--}}
{{--            // lng: 174.731559--}}
{{--            lat: 44.517214,--}}
{{--            lng: 40.148250--}}
{{--        };--}}
{{--        var map = new google.maps.Map(document.getElementById('map'), {--}}
{{--            zoom: 15,--}}
{{--            scrollwheel: false,--}}
{{--            center: uluru--}}
{{--        });--}}
{{--        var marker = new google.maps.Marker({--}}
{{--            position: uluru,--}}
{{--            map: map--}}
{{--        });--}}
{{--    }--}}
{{--</script>--}}
{{--<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBP1lPhUhDU6MINpruPDinAzXffRlpzzFo&callback=initMap">--}}
{{--</script>--}}

@endsection

@section('footer')
    @include('layouts.SiteLayouts.footer')
@endsection

@section('scripts')

@endsection
