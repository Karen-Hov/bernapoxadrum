@extends('layouts.AdminLayouts.index')
@section('styles')
    <link rel="stylesheet" href="{{asset('admin/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css')}}">
    <link rel="stylesheet"
          href="{{asset('admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/plugins/select2/css/select2.min.css')}}">
    {{--    <link rel="stylesheet" href="{{asset('admin/plugins/select2/css/select2.min.css')}}">--}}
    <link rel="stylesheet" href="{{asset('admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/plugins/summernote/summernote-bs4.css') }}">
    <script src="{{asset('admin/js/cropper.min.js')}}"></script>

@endsection

@section('content')

    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="col-12 col-sm-8">
                    <h1>Խմբագրել</h1>
                    <div class="card card-primary card-outline card-tabs">
{{--                        <div class="card-header p-0 pt-1 border-bottom-0">--}}
{{--                            <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">--}}
{{--                                @foreach(config('lang') as $lang)--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a class="nav-link  @if($loop->first) active @endif--}}
{{--                                        @if(($errors->has('name_hy') || $errors->has('content_hy') || $errors->has('description_hy'))  && $lang['code'] == 'hy')--}}
{{--                                            error--}}
{{--                                        @endif--}}
{{--                                        @if(($errors->has('name_ru') || $errors->has('content_ru') || $errors->has('description_ru'))  && $lang['code'] == 'ru')--}}
{{--                                            error--}}
{{--                                        @endif--}}
{{--                                        @if(($errors->has('name_en') || $errors->has('content_en') || $errors->has('description_en'))  && $lang['code'] == 'en')--}}
{{--                                            error--}}
{{--                                        @endif--}}
{{--                                            "--}}
{{--                                           id="custom-tabs-three-home-tab" data-toggle="pill"--}}
{{--                                           href="#tab_{{$loop->index}}" role="tab"--}}
{{--                                           aria-controls="custom-tabs-three-home"--}}
{{--                                           aria-selected="true">{{$lang['name']}}</a>--}}
{{--                                    </li>--}}
{{--                                @endforeach--}}

{{--                            </ul>--}}
{{--                        </div>--}}
                        {{--                        @dd($errors->has('name_hy'))--}}
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    <li class="error">Խնդրում ենք լրացնել բոլոր դաշտերը․․․</li>
                                </ul>
                            </div>
                        @endif
                        <form class="form-horizontal" method="post" id="form_add"
                              action="{{route('posts.update',$post->id)}}" name="edit_partners"
                              enctype="multipart/form-data" novalidate="novalidate">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <label>Խմբագրել լեզուն *</label>
                                <select class="form-control"  data-placeholder="Ընտրել լեզուն"
                                        style="width: 100%;" name="lang" autoselect="false" id="lang">

                                    @if(config('lang'))
                                        @foreach(config('lang') as $lang)
                                            <option
                                                @if(old('lang') == $post->code)
                                                {{'selected'}}
                                                @elseif($lang['code'] == $post->code)
                                                {{'selected'}}
                                                @endif

                                                value="{{$lang['code']}}">{{$lang['name']}}
                                            </option>
                                        @endforeach
                                    @endif
                                </select>
                                @if ($errors->has('lang'))
                                    <span class="valid-error">{{ $errors->first('lang') }}</span>
                                @endif
                            </div>

                            <div class="card-body">
{{--                                @dd($post)--}}
                                <div class="form-group">
                                    <label>Խմբագրել կատեգորիան *</label>
                                    <select class="select2" data-placeholder="Select a State"
                                            style="width: 100%;" name="cat" id="location">
                                        @if($post)
                                            @foreach($categories as $item)
                                                <option value="{{$item->id}}" data-id="{{$item->id}}"
                                                @if(old('category') == $post->type)
                                                    {{'selected'}}
                                                    @elseif($item->id == $post->type)
                                                    {{'selected'}}
                                                    @endif
                                                >
                                                    {{$item->translate[0]->title}}
                                                </option>
                                            @endforeach
                                        @endif
                                    </select>

                                    <span class="error_message_location valid_error"></span>
                                    @if ($errors->has('cat'))
                                        <span class="valid-error">{{ $errors->first('cat') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="tab-content" id="custom-tabs-three-tabContent">
{{--                                @foreach(config('lang') as $lang)--}}

{{--                                    <input type="hidden" value="{{$lang['code']}}" id="input_lang">--}}

{{--                                    <div class="tab-pane fade @if($loop->first) show active  @endif"--}}
{{--                                         id="tab_{{$loop->index}}"--}}
{{--                                         role="tabpanel">--}}
{{--                                @dd($post)--}}
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label>Խմբագրել վերնագիրը *</label>
                                                <input type="text" name="title"
                                                       class="form-control" id="input_title"
                                                       value="{{isset($post->title)?$post->title:old('title')}}">
                                            @if ($errors->has('title'))
                                                    <span
                                                        class="valid-error">{{ $errors->first('title') }}</span>
                                                @endif
                                                <span class="error_message_name valid_error"></span>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label>Խմբագրել ենթավերնագիրը *</label>
                                                <input type="text" name="subtitle"
                                                       class="form-control" id="input_subtitle"
                                                       value="{{isset($post->subtitle)?$post->subtitle:old('subtitle')}}">
                                                @if ($errors->has('subtitle'))
                                                    <span
                                                        class="valid-error">{{ $errors->first('subtitle') }}</span>
                                                @endif
                                                <span class="error_message_name valid_error"></span>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label>Խմբագրել նկարագրությունը *</label>
                                                <textarea type="text" id="summary-ckeditor" name="content" class="form-control">{{isset($post->content)?$post->content:old('content')}}</textarea>
                                                @if ($errors->has('content'))
                                                    <span class="valid-error">{{ $errors->first('content') }}</span>
                                                @endif
                                            </div>
                                            <script src="{{ asset('vendor/unisharp/ckeditor/ckeditor.js') }}"></script>
                                            <script>
                                                CKEDITOR.replace( 'summary-ckeditor' );
                                            </script>
                                        </div>
{{--                                    </div>--}}
{{--                                @endforeach--}}
{{--                                    <div class="card-body">--}}
{{--                                        <div class="form-group">--}}
{{--                                            <label>Խմբագրել Նյութի աղբյուրը *</label>--}}
{{--                                            <input type="text" name="link" class="form-control" id="input_link"--}}
{{--                                                   value="{{isset($post->link)?$post->link:old('link')}}">--}}
{{--                                            @if ($errors->has('link'))--}}
{{--                                                <span class="valid-error">{{ $errors->first('link') }}</span>--}}
{{--                                            @endif--}}
{{--                                            <span class="error_message_link valid_error"></span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
                                    <div class="card-body">
                                        <label>Սլայդեր</label>
                                        <input type="checkbox" name="slayder" @if(old('slayder') || isset($post->slayd_check)) checked @endif class="form-control" id="input_slayder" style="width: 5%">
                                        <span class="error_message_name valid_error"></span>
                                        @if ($errors->has('slayder'))
                                            <span class="valid-error">{{ $errors->first('slayder') }}</span>
                                        @endif

                                    </div>

                                    <div class="card-body">
                                        <label for="exampleInputFile">Նկար *</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" name="file" class="custom-file-input viewImage" id="file-input" value="{{$post->file ? $post->file : old('file') }}" accept=".jpeg,.png,.jpg,.png">

                                                <label class="custom-file-label" for="exampleInputFile">Ընտրել ֆայլը</label>

                                            </div>
                                            <span class="error_message_file valid_error"></span>
                                        </div>
                                        <div class="addImage" style="margin:10px;">
                                            @if($post->file)
                                                <img style="width: 150px;height: 150px"
                                                     src="{{asset('storage/posts/small/'.$post->file)}} "
                                                     class="tableImage" alt="">
                                                <span class="delimg"><i class="fas fa-times fa-2x"></i></span>
                                            @endif
                                            <span></span>

                                        </div>
                                        <div class="box-2" style="width: 700px">
                                            <div class="result"></div>
                                        </div>
                                        <!--rightbox-->
                                        <div class="box-2 img-result hide" >
                                            <!-- result of crop -->
                                            <img class="cropped" src="" alt="" style="width: 800px;height: 800px">
                                        </div>
                                        <!-- input file -->
                                        <div class="box">
                                            <div class="options hide">
                                                {{--                    <label> Width</label>--}}
                                                <input type="number" class="img-w" value="400" min="100" max="1200"/>

                                            </div>
                                            <!-- save btn -->
                                            <button class="btn btn-dark save hide">Կտրել նկարը</button>

                                        </div>

                                        <input type='hidden' name="x">

                                    </div>

                                <div class="card-body">
                                    <div class="col-md-12  BorderCol_12 addPhotoCol12">
                                        <div class="col-md-12  rowPadding3">
                                            <label for="exampleInputFile">Pictures * (Minimum width is 457px, minimum height is 539px)</label>
                                            <span class="error_photo valid_error" style="color: red;margin-left: 20%;"></span>
                                        </div>
                                        <div class="col-md-12  rowPadding5">
                                            <div class="col-md-1 epmtyDivForUplodImage "></div>
                                            <div class="col-md-2 uploadImageLabel">
                                                <label for="files" class="btn btn-default btn-sm center-block btn-file upload uploadPhoto">
                                                    <i class="fas fa-camera fa-3x" aria-hidden="true"></i>
                                                    <br><span>Add Pictures</span>
                                                </label>

                                            </div>
                                            <div id="nkar">
                                                <div class="lodr" style="display: none">
                                                    <div class="content">
                                                        <img src="{{asset('site/img/loader.gif')}}" alt="" class="image img-responsive">
                                                    </div>
                                                </div>
                                                <?php $i=0;?>
                                                @foreach($product->gallery as $key=>$img)
                                                    <div id="img_gallery">
                                                        <input type="hidden" value="{{$img['file']}}" id="img">
                                                        <img  src="{{asset('storage/product/medium/'.$img['file'])}}"class="img-responsive" style="margin-left: 10px">
                                                        <div class="imgDelete"> <i class="fas fa-times fa-2x"></i></div>
                                                    </div>
                                                    <?php $i++;?>
                                                @endforeach

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <input type="hidden" name="translate" value="post" id="translate_type">
                            <div class="card-body">
                            </div>
                            <!-- /.card -->
                        </form>
                        <button class="btn btn-primary" data-toggle="modal" id="submit_btn"
                                data-target="#modal-primary">
                            Խմբագրել
                        </button>
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



        var clicked = false;
        $('.btn.btn-primary').click(function () {
            if (!clicked) {
                clicked = true
                $(this).attr('disabled', 'disabled');


                setTimeout(function () {

                    $('.form-horizontal').submit();

                    clicked = false
                }, 100)
                // $('.form-horizontal').submit();
            }


        })


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
    <script src="{{asset('admin/js/crop-canvas.js')}}"></script>

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
