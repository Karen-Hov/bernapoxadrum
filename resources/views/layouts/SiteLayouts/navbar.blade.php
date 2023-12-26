<div class="sction1">
    <header  >
        <div  class="myContainer">
            <div class="logo">
                <img src="{{asset('site/img/logi.png')}}" alt="">
                <p class="hotelLogoText">@lang('varius.hotel_complex')</p>
                <button class="hideInWeb">
                    <img  src="{{asset('site/img/Group2.png')}}" alt="">
                    <img class="close" src="{{asset('site/img/Group3.png')}}" alt="">
                </button>
            </div>

            <div class="searchaAndLang">

@include('layouts.SiteLayouts.valute_lang')
            </div>
            <nav>
                <div class="background"></div>
                <ul>

{{--                    @include('layouts.SiteLayouts.menu')--}}

                </ul>

            </nav>
            <div class="mobileMenu">
                <div class="searchaAndLang">
                    @include('layouts.SiteLayouts.valute_lang')

                </div>
                <nav>
                    <div class="background"></div>
                    <ul>

{{--                        @include('layouts.SiteLayouts.menu')--}}

                    </ul>

                </nav>
                <div class="contactInfo">
                    <div class="item">
                        <a href="">
                            <span><i class="fas fa-phone"></i></span>

                        </a>
                    </div>
                    <div class="item">
                        <a href="">
                            <span><i class="far fa-envelope"></i></span>

                        </a>
                    </div>
                    <div class="item">
                        <a href="">
                            <span><i class="fas fa-map-marker-alt"></i></span>

                        </a>
                    </div>

                </div>
            </div>

        </div>

    </header>
{{--    @include('Site.home.filter')--}}
</div>
{{--    @include('Site.Home.filter')--}}



{{--<script>$('li.category').click(function() {--}}
{{--        $('input.category').val($(this).attr("data-filter"));--}}

{{--    });--}}
{{--    $('li.location').click(function() {--}}
{{--       var data= $('input.location').val($(this).attr("data-filter"));--}}

{{--    });--}}

{{--    $('#submit').click(function() {--}}

{{--        $(this).submit();--}}
{{--    });--}}
{{--</script>--}}

