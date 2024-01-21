@extends('layouts.SiteLayouts.index')
@section('styles')

@endsection
@section('navbar')
    @include('layouts.SiteLayouts.header')
@endsection

@section('content')


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
                    <li>@lang('variable.text_19')</li>
                    <li>@lang('variable.text_23')</li>
{{--                    <li>с 10:00 до 18:00 — бухгалтерия</li>--}}
                </ul>
                <p class="contact-email">
                    <a href="mailto:kem@gruzchikov-service.ru">xukas@xukas.am</a>
                </p>
            </div>
        </div>
    </div>
{{--    </div>--}}
    <div class="yellow-question-block">
        <div class="uk-container uk-container-center">
            <div class="uk-width-2-3 uk-width-medium-1-1 uk-width-large-1-1 uk-width-xlarge-1-1 uk-align-center">
                <div class="uk-grid uk-grid-collapse">
                    <div class="uk-width-1-1 uk-width-medium-2-3 uk-width-large-2-3 uk-width-xlarge-3-5">
                        <img src="{{asset('front/images/phone.png')}}" class="uk-hidden-small" alt="телефон">
                        <h3 class="title-header">@lang('variable.text_20')</h3>

                        <p>@lang('variable.text_21')
{{--                            <br class="uk-visible-small">мы перезвоним--}}
                        </p>
                    </div>
                    <div class="uk-width-1-1 uk-width-medium-1-3 uk-width-large-1-3 uk-width-xlarge-2-5">
                        @if (\Session::has('create_number'))
                            <div class="alert alert-success">
                               <h3>@lang('variable.create_number')</h3>
                            </div>
                        @endif

                            @if ($errors->has('phone'))
                                <span class="valid-error" style="color: red">{{ $errors->first('phone') }}</span>
                            @endif
                        <form action="{{url(app()->getLocale().'/add-number')}}" class="uk-form uk-form-horizontal" method="POST">
                            @csrf
                            @method('POST')
                            <input type="text" name="phone" placeholder="+374 (55) 62-62-12" max="30" min="5">
                            <button class="uk-button uk-button-secondary button-black" type="submit">@lang('variable.text_22')</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- jQuery -->
{{--    <script src="js/jquery-1.12.4.min.js"></script>--}}
{{--    <!-- Uikit -->--}}
{{--    <script src="js/uikit.min.js"></script>--}}
{{--    <script src="js/sticky.min.js"></script>--}}
{{--    <script src="js/lightbox.min.js"></script>--}}
{{--    <script src="js/slideshow.min.js"></script>--}}
{{--    <script src="js/slideset.min.js"></script>--}}
{{--    <script src="js/accordion.min.js"></script>--}}
{{--    <!-- Plugins -->--}}
{{--    <script src="js/jquery.inputmask.bundle.min.js?v=2"></script>--}}
{{--    <script src="js/jquery.formstyler.min.js"></script>--}}
{{--    <script src="js/jquery.mmenu.all.js"></script>--}}
{{--    <script src="js/jquery.matchHeight.js"></script>--}}
    <!-- Main -->
    <script src="{{asset('front/js/main.js?v=1.1')}}"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-173025696-1');
    </script>

@endsection

@section('footer')
    @include('layouts.SiteLayouts.footer')
@endsection

@section('scripts')

@endsection
