@extends('layouts.AdminLayouts.index')

@section('styles')
    <link rel="stylesheet" href="{{asset('admin/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/plugins/summernote/summernote-bs4.css') }}">

@endsection
<script src="{{asset('admin/js/cropper.min.js')}}"></script>

@section('content')
    <div id="breadcrumb"><a href="{{url('my_admin/')}}">Գլխավոր </a>/ <a href="{{url('my_admin/pricing/')}}">Հատկություններ </a> / <a href="#">Ավելացնել  </a></div>

    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="col-12 col-sm-8">
                    <h3>Ավելացնել</h3>
                    <div class="card card-primary card-outline card-tabs">
                        <div class="card-header p-0 pt-1 border-bottom-0">
                            <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
                                @foreach(config('lang') as $lang)
                                    <li class="nav-item">
                                        <a class="nav-link  @if($loop->first) active @endif
                                             @if(($errors->has('name_hy') || $errors->has('content_hy') || $errors->has('description_hy'))  && $lang['code'] == 'hy')
                                             error
                                             @endif
                                            @if(($errors->has('name_ru') || $errors->has('content_ru') || $errors->has('description_ru'))  && $lang['code'] == 'ru')
                                             error
                                             @endif
                                            @if(($errors->has('name_en') || $errors->has('content_en') || $errors->has('description_en'))  && $lang['code'] == 'en')
                                             error
                                            @endif
                                            "
                                           id="custom-tabs-three-home-tab" data-toggle="pill"
                                           href="#tab_{{$loop->index}}" role="tab"
                                           aria-controls="custom-tabs-three-home"
                                           aria-selected="true">{{$lang['name']}}</a>
                                    </li>
                                        @endforeach

                            </ul>
                        </div>
                        {{--                        @dd($errors->has('name_hy'))--}}
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    <li class="error">Խնդրում ենք լրացնել բոլոր դաշտերը․․․</li>
                                </ul>
                            </div>
                        @endif
                        <form class="form-horizontal" method="POST" action="{{route('pricing.store')}}" id="form_add"
                              enctype="multipart/form-data" novalidate="novalidate">
                            @csrf
                            @method('POST')
                            <div class="tab-content" id="custom-tabs-three-tabContent">

                                @foreach(config('lang') as $lang)
                                    <input type="hidden" value="{{$lang['code']}}" id="input_lang">
                                    <div class="tab-pane fade @if($loop->first) show active  @endif"
                                         id="tab_{{$loop->index}}"
                                         role="tabpanel">
                                        <input type="hidden" value="{{$lang['code']}}" id="lang_input">

                                        <div class="card-body">
                                            <label>Վերնագիր *</label>
                                            <input type="text" name="title_{{$lang['code']}}" class="form-control"
                                                   id="input_name_{{$lang['code']}}"
                                                   value="{{old('title_'.$lang['code'])}}">
                                            <span class="error_message_name_{{$lang['code']}} valid_error"></span>

                                            @if ($errors->has('title_'.$lang['code']))
                                                <span
                                                    class="valid-error">{{ $errors->first('title_'.$lang['code']) }}</span>
                                            @endif

                                        </div>

                                        <div class="card-body">
                                            <div class="form-group">
                                                <label>Նկարագրություն *</label>
                                                <textarea type="text" id=summary-ckeditor_{{$loop->index}} name="content_{{$lang['code']}}" class="form-control">{{old('content_'.$lang['code'])}}</textarea>
                                                @if ($errors->has('content_'.$lang['code']))
                                                    <span class="valid-error">{{ $errors->first('content_'.$lang['code']) }}</span>
                                                @endif
                                            </div>
{{--                                            <script src="{{ asset('vendor/unisharp/ckeditor/ckeditor.js') }}"></script>--}}
{{--                                            <script>--}}
{{--                                                CKEDITOR.replace( 'summary-ckeditor_{{$loop->index}}' );--}}
{{--                                            </script>--}}
                                        </div>


                                    </div>
                                @endforeach
                                    <div class="card-body">
                                        <label>Գին *</label>
                                        <input type="number" name="price" class="form-control"
                                               id="input_name_{{$lang['code']}}"
                                               value="{{old('price')}}">
                                        <span class="error_message_name_price valid_error"></span>

                                        @if ($errors->has('title_'.$lang['code']))
                                            <span
                                                class="valid-error">{{ $errors->first('price') }}</span>
                                        @endif

                                    </div>


                                <input type="hidden" name="translate" value="pricing" id="translate_type">
                                <div class="card-body">
                                </div>
                            </div>
                        <button class="btn btn-primary" type="submit">
                            Ավելացնել
                        </button>
                        </form>

                        <!-- /.card -->
                    </div>
                </div>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>

@endsection

@section('scripts')
    <script src="{{asset('admin/js/crop-canvas.js')}}"></script>

    <script>
        var clicked = false;
        // $(function () {
        //     //Initialize Select2 Elements
        $('.select2').select2()
        //     //
        //     // //Initialize Select2 Elements
        $('.select2bs4').select2({
            theme: 'bootstrap4'
        })


    </script>
    <script src="{{asset('admin/plugins/summernote/summernote-bs4.min.js')}}"></script>
{{--    <script src="{{asset('admin/js/crop-canvas.js')}}"></script>--}}

    <script>

        $(function () {
            // Summernote
            $('.textarea').summernote()
        })

    </script>



    <style type="text/css">

        #tab_0 .card-body.ru {
            display: none;
        }

        #tab_0 .card-body.en {
            display: none;
        }

        #tab_1 .card-body.hy {
            display: none;
        }

        #tab_1 .card-body.en {
            display: none;
        }

        #tab_2 .card-body.hy {
            display: none;
        }

        #tab_2 .card-body.ru {
            display: none;
        }
    </style>
@endsection
