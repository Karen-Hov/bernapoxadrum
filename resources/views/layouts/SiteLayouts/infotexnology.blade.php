{{--<?php--}}

{{--use App\Models\AboutUs;--}}

{{--$info_tex = AboutUs::where('type',config('type.info'))->with(['translate'=>function ($q) {--}}
{{--    $q->where('code',app()->getLocale())->where('type',config('type.about_us'));--}}
{{--}])->first();--}}

{{--?>--}}
{{--<div class="firstSectionContent">--}}
{{--    <div class="myContainer">--}}
{{--        <div class="image">--}}
{{--            <img src="{{asset('site/img/business-computer-connection-contemporary-450035.png')}}" alt="">--}}
{{--            <img src="{{asset(isset($info_tex->file)?asset('storage/about_us/large/'.$info_tex->file):' - ')}}" alt="">--}}
{{--        </div>--}}
{{--        <div class="info">--}}
{{--            <h2>@lang('varius.information') <br>@lang('varius.technology')</h2>--}}
{{--            <p>--}}
{{--                {!!   isset($info_tex->translate[0]->content)?Str::limit($info_tex->translate[0]->content,500):' - '!!}--}}
{{--            </p>--}}
{{--        </div>--}}
{{--        <div class="socials">--}}
{{--            <a href="https://www.facebook.com/ITResources.am" target="_blank"><i class="fab fa-facebook-f"></i></a>--}}
{{--            <a href="https://www.instagram.com/itresources_web/" target="_blank"><i class="fab fa-instagram"></i></a>--}}
{{--            <a href="https://www.linkedin.com/company/itresourcesllc/" target="_blank"><i class="fab fa-linkedin-in"></i></a>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--<div class="yellowBackground"></div>--}}
{{--<div class="whiteBackgroundWithYellowPoints">--}}
{{--    <img src="{{asset('site/img/yellowPoints.png')}}" alt="">--}}
{{--</div>--}}
