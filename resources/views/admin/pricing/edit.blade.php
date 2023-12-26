@extends('layouts.AdminLayouts.index')

@section('styles')
    <link rel="stylesheet" href="{{asset('admin/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/plugins/select2/css/select2.min.css')}}">
    {{--    <link rel="stylesheet" href="{{asset('admin/plugins/select2/css/select2.min.css')}}">--}}

    <link rel="stylesheet" href="{{asset('admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/plugins/summernote/summernote-bs4.css') }}">
{{--    <script src="{{asset('admin/js/cropper.min.js')}}"></script>--}}


@endsection

@section('content')
    <div id="breadcrumb"><a href="{{url('my_admin/')}}">Գլխավոր </a>/ <a href="{{url('my_admin/pricing/')}}">Հատկություններ </a> / <a href="#">Խմբագրել  </a></div>

    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="col-12 col-sm-8">
                    <h3>Խմբագրել</h3>
                    <div class="card card-primary card-outline card-tabs">
                        <div class="card-header p-0 pt-1 border-bottom-0">
                            <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
                                @foreach(config('lang') as $lang)
                                    <li class="nav-item">
                                        <a class="nav-link @if($loop->first)active @endif
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
                                        @endforeach
                                    </li>

                            </ul>
                        </div>

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    <li class="error">Please fill in all the fields ․․․</li>
                                </ul>
                            </div>
                        @endif
                        <form class="form-horizontal" method="post" id="form_add"
                              action="{{route('pricing.update',$pricing->id)}}"
                              enctype="multipart/form-data" novalidate="novalidate">
                            @csrf
                            @method('PUT')

                            <div class="tab-content" id="custom-tabs-three-tabContent">
                                <div class="tab-content" id="custom-tabs-three-tabContent">
                                @foreach(config('lang') as $lang)
                                    @foreach($pricing->translate as $item)
                                        @if($lang['code'] == $item['code'])

                                            <div class="tab-pane fade @if($loop->first) show active  @endif"
                                                 id="tab_{{$loop->index}}"
                                                 role="tabpanel">

                                                <div class="card-body">
                                                    <div class="form-group">
                                                        <label>Վերնագիր *</label>
                                                        <input type="text" name="title_{{$lang['code']}}"
                                                               class="form-control" id="input_title_{{$lang['code']}}"

                                                               value="{{isset($item->title)?$item->title:' '}}">
                                                        @if ($errors->has('title_'.$lang['code']))
                                                            <span
                                                                class="valid-error">{{ $errors->first('title_'.$lang['code']) }}</span>
                                                        @endif
                                                        <span class="error_message_title_{{$lang['code']}} valid_error"></span>
                                                    </div>
                                                </div>

                                                <div class="card-body">
                                                    <div class="form-group">
                                                        <label>Նկարագրություն *</label>
                                                        <textarea type="text" id=summary-ckeditor_{{$loop->index}} name="content_{{$lang['code']}}" class="form-control">{{isset($item->content)?$item->content:old('content_'.$lang['code'])}}</textarea>
                                                        @if ($errors->has('content_'.$lang['code']))
                                                            <span class="valid-error">{{ $errors->first('content_'.$lang['code']) }}</span>
                                                        @endif
                                                    </div>
{{--                                                    <script src="{{ asset('vendor/unisharp/ckeditor/ckeditor.js') }}"></script>--}}
{{--                                                    <script>--}}
{{--                                                        CKEDITOR.replace( 'summary-ckeditor_{{$loop->index}}' );--}}
{{--                                                    </script>--}}
                                                </div>



                                            </div>
                                        @endif
                                    @endforeach
                                @endforeach
                                    <div class="card-body">
                                        <label>Գին *</label>
                                        <input type="number" name="price" class="form-control"
                                               id="input_price"
                                               value="{{isset($pricing->price)?$pricing->price:' '}}">
                                        <span class="error_message_name_price valid_error"></span>

                                        @if ($errors->has('title_'.$lang['code']))
                                            <span
                                                class="valid-error">{{ $errors->first('price') }}</span>
                                        @endif

                                    </div>
                            </div>







                    <input type="hidden" name="translate" value="pricing" id="translate_type">
                    <!-- /.card -->

                        <div class="card-body" >
                            <button type="submit" class="btn btn-primary" data-toggle="modal" id="submit_btn"
                                    data-target="#modal-primary">
                                Խմբագրել
                            </button>
                        </div>
                        </div>
                        </form>
                    </div>


                </div>
        </div>
        <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>

@endsection

@section('scripts')
    <script src="{{asset('admin/plugins/select2/js/select2.full.min.js')}}"></script>
    <script>



        // $.each($('#img_gallery') ,function (key , value) { console.log(key , value)})

        function getloader() {
            $('.lodr').show();
            $('#submit_btn').attr('disabled','disabled');
        }
        function removeloader() {
            $('#submit_btn').attr('disabled',false);
            $('.lodr').hide();
        }




        $('.select2').select2()
        //
        //Initialize Select2 Elements
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
        // $( function() {
        //     $( ".datepicker" ).datepicker({ dateFormat: 'dd-mm-yy', minDate: -0, maxDate: new Date(2100,12,12) });
        // } );
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
