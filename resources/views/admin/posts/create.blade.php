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
                    <h1>Ավելացնել</h1>
                    <div class="card card-primary card-outline card-tabs">
{{--                        <div class="card-header p-0 pt-1 border-bottom-0">--}}
{{--                            <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">--}}
{{--                                @foreach(config('lang') as $lang)--}}
{{--                                   --}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a class="nav-link  @if($loop->first) active @endif--}}
{{--                                             @if(($errors->has('name_hy') || $errors->has('content_hy') || $errors->has('description_hy'))  && $lang['code'] == 'hy')--}}
{{--                                             error--}}
{{--                                             @endif--}}
{{--                                            @if(($errors->has('name_ru') || $errors->has('content_ru') || $errors->has('description_ru'))  && $lang['code'] == 'ru')--}}
{{--                                             error--}}
{{--                                             @endif--}}
{{--                                            @if(($errors->has('name_en') || $errors->has('content_en') || $errors->has('description_en'))  && $lang['code'] == 'en')--}}
{{--                                             error--}}
{{--                                            @endif--}}
{{--                                            "--}}
{{--                                           id="custom-tabs-three-home-tab" data-toggle="pill"--}}
{{--                                           href="#tab_{{$loop->index}}" role="tab"--}}
{{--                                           aria-controls="custom-tabs-three-home"--}}
{{--                                           aria-selected="true">{{$lang['name']}}</a>--}}
{{--                                    </li>--}}
{{--                                   --}}
{{--                                        @endforeach--}}

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
                        <form class="form-horizontal" method="POST" action="{{route('posts.store')}}" id="form_add"
                              enctype="multipart/form-data" novalidate="novalidate">
                            @csrf
                            @method('POST')
{{--                            @dd(config('lang'))--}}
                            <div class="card-body">
                                <label>Ընտրել լեզուն *</label>
                                <select class="form-control"  data-placeholder="Ընտրել լեզուն"
                                        style="width: 100%;" name="lang" autoselect="false" id="lang">

                                    @if(config('lang'))
                                        @foreach(config('lang') as $lang)
                                            <option
                                                @if(old('lang')) {{in_array($lang['code'],old('lang')) ?'selected':''}}  @endif
                                                value="{{$lang['code']}}">{{$lang['name']}}</option>
                                        @endforeach
                                    @endif
                                </select>
                                @if ($errors->has('cat'))
                                    <span class="valid-error">{{ $errors->first('cat') }}</span>
                                @endif
                            </div>


                            <div class="card-body">
                                <label>Ընտրել տեսակ *</label>
                                <select class="select2"  data-placeholder="Ընտրեք կատեգորիա"
                                        style="width: 100%;" name="cat" autoselect="false" id="location">
                                    {{--                                <select class="form-control select2" style="width: 100%;" name="cat">--}}
                                    @if($categories)
                                        @foreach($categories as $item)
                                            <option
                                                @if(old('cat')) {{in_array($item->id,old('cat')) ?'selected':''}}  @endif
                                                value="{{$item->id}}">{{$item->translate[0]->title}}</option>
                                        @endforeach
                                    @endif
                                </select>
                                @if ($errors->has('cat'))
                                    <span class="valid-error">{{ $errors->first('cat') }}</span>
                                @endif
                            </div>

                            <div class="tab-content" id="custom-tabs-three-tabContent">
{{--                                @foreach(config('lang') as $lang)--}}

{{--                                    <input type="hidden" value="{{$lang['code']}}" id="input_lang">--}}

{{--                                    <div class="tab-pane fade @if($loop->first) show active  @endif"--}}
{{--                                         id="tab_{{$loop->index}}"--}}
{{--                                         role="tabpanel">--}}


                                        <div class="card-body">
                                            <label>Վերնագիր *</label>
                                            <input type="text" name="title" class="form-control"
                                                   id="input_title"
                                                   value="{{old('title')}}">
                                            <span class="error_message_name valid_error"></span>

                                            @if ($errors->has('title'))
                                                <span
                                                    class="valid-error">{{ $errors->first('title') }}</span>
                                            @endif

                                        </div>

                                        <div class="card-body">
                                            <label>Ենթավերնագիր *</label>
                                            <input type="text" name="subtitle" class="form-control"
                                                   id="input_name"
                                                   value="{{old('subtitle')}}">
                                            <span class="error_message_name valid_error"></span>

                                            @if ($errors->has('subtitle'))
                                                <span
                                                    class="valid-error">{{ $errors->first('subtitle') }}</span>
                                            @endif

                                        </div>

                                        <div class="card-body">
                                            <div class="form-group">
                                                <label>Նկարագրություն *</label>
                                                <textarea type="text" id="summary-ckeditor" name="content" class="form-control">{{old('content')}}</textarea>
                                                @if ($errors->has('content'))
                                                    <span class="valid-error">{{ $errors->first('content') }}</span>
                                                @endif
                                            </div>
                                                 <script src="{{ asset('vendor/unisharp/ckeditor/ckeditor.js') }}"></script>
                                                 <script>
                                                  CKEDITOR.replace( 'summary-ckeditor' );
                                                 </script>
                                        </div>



                                    </div>
{{--                                    <div class="card-body">--}}
{{--                                        <label>Նյութի աղբյուր</label>--}}
{{--                                        <input type="text" name="link" class="form-control" id="input_link"--}}
{{--                                               value="{{old('link')}}">--}}
{{--                                        <span class="error_message_name valid_error"></span>--}}

{{--                                        @if ($errors->has('link'))--}}
{{--                                            <span class="valid-error">{{ $errors->first('link') }}</span>--}}
{{--                                        @endif--}}

{{--                                    </div>--}}

                                    <div class="card-body">
                                        <label>Սլայդեր</label>
                                        <input type="checkbox" name="slayder" @if(old('slayder')) checked @endif class="form-control" id="input_slayder" style="width: 5%">
                                        <span class="error_message_name valid_error"></span>
                                        @if ($errors->has('slayder'))
                                            <span class="valid-error">{{ $errors->first('slayder') }}</span>
                                        @endif

                                    </div>

                                    <div class="card-body">
                                        <label for="exampleInputFile">Նկար *</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" name="file" class="custom-file-input viewImage" id="exampleInputFile" accept=".jpeg,.png,.jpg,.png">
                                                <input type="file" name="file" class="custom-file-input viewImage" id="file-input" accept=".jpeg,.png,.jpg,.png">

                                                <label class="custom-file-label" for="exampleInputFile">Ընտրել ֆայլը</label>

                                            </div>
                                            <span class="error_message_file valid_error"></span>
                                        </div>
                                        <div class="addImage"></div>
                                        @if ($errors->has('file'))
                                            <span class="valid-error">{{ $errors->first('file') }}</span>
                                        @endif
{{--                                        <div class="addImage"></div>--}}

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
                                                <label> Width</label>
                                                <input type="number" class="img-w" value="400" min="100" max="1200"/>

                                            </div>
                                            <!-- save btn -->
                                            <button class="btn btn-dark save hide">Կտրել նկարը</button>

                                        </div>

                                        <input type='hidden' name="x">
                                    </div>

                            <div class="card-body">
                                <div class="col-md-12  BorderCol_12 addPhotoCol12">
{{--                                    <div class="col-md-12  rowPadding3">--}}
{{--                                        <label for="exampleInputFile">Pictures * (Minimum width is 457px, minimum height is 539px)</label>--}}
{{--                                        <span class="error_photo valid_error"--}}
{{--                                              style="color: red;margin-left: 20%;">Permissible quantity 2</span>--}}
{{--                                    </div>--}}
                                    <div class="col-md-12  rowPadding5">
                                        <div class="col-md-1 epmtyDivForUplodImage "></div>
                                        <div class="col-md-2 uploadImageLabel">
                                            <label for="files"
                                                   class="btn btn-default btn-sm center-block btn-file upload uploadPhoto">
                                                <i class="fas fa-camera fa-3x" aria-hidden="true"></i>
                                                <br><span>Ավելացնել նկարներ</span>
                                            </label>

                                        </div>
                                        <div id="nkar">
                                            <div class="lodr" style="display: none">
                                                <div class="content">
                                                    <img src="{{asset('site/img/loader.gif')}}" alt=""
                                                         class="image img-responsive">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
{{--                            </div>--}}


                            <input type="hidden" name="translate" value="post" id="translate_type">
                            <div class="card-body">
                            </div>
                            <!-- /.card -->
                        </form>
                        <button class="btn btn-primary" data-toggle="modal" id="submit_btn"
                                data-target="#modal-primary">
                            Ավելացնել
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
    <script>

        $(document).on("input", "#text", function () {
            // if ($(this).val().length == 2) {
            var val = $(this).val();
            // setTimeout(() => {
            if(val.length >= 13) {
                $(this).attr("disabled", 'disabled');
                jQuery('#qrcode').qrcode({
                    width: 100,
                    height: 100,
                    text: val,
                    typeNumber: 1
                });
            }
            // }, 700);
            // }

        });
        $('.delete_qr').click(function (){
            $('#text').attr("disabled",false);
            $("#text").focus();
            $('#text').val('');
        })





        $('.addImage .delimg').click(function () {
            $('.custom-file-input.viewImage').val('');
            $('.addImage').html('');
        })
        var images = [];
        var delete_images = [];
        var i = 0;
        $(document).on('click', '.upload', function () {


            $('.error_photo').html('');
            $(this).parent().append('<input id="files' + i + '" name="file[]" ' +
                ' accept="image/x-png,image/jpeg,image/jpg" ' +
                'multiple type="file" onchange="getloader(); load(this.files);"  style="display: none;" ' +
                'form="add">');
            $(this).attr('for', "files" + i);
            // getloader()


        });
        $(document).on('click', '.imgDelete', function () {
            if (confirm('Do you want to delete this photo?')) {
                if (i < 2) {
                    i--;
                } else {
                    $('.error_photo').html('');
                    i = 1
                    $('.upload').show();

                }
                var val = $(this).parent().find('input').val();
                $.get("{{url('removeimg')}}", {name: val});
                delete_images.push(val);
                $(this).parent().remove();

            }
        });

        function getloader() {
            $('.lodr').show();
            $('#submit_btn').attr('disabled', 'disabled');
        }

        function removeloader() {
            $('#submit_btn').attr('disabled', false);
            $('.lodr').hide();
            $('.lodr').css('display','none');
        }

        function load(src) {
            var complate = i, length = src.length;
            length += complate;

            $.each(src, function (key, value) {
                var data = new FormData();
                data.append(key, value);
                data.append('type', $('#translate_type').val());
                i++;
                data.append('_token', '{{csrf_token()}}');

                console.log(i)
{{--                alert('{{url("uploadimage")}}')--}}
                // if(i <= 2){
                $.ajax({

                    url: 'uploadimage',
                    type: 'GET',
                    data: data,
                    cache: false,
                    dataType: 'json',
                    processData: false,
                    contentType: false,


                    success: function (data) {
                        // console.log(data)
                        $('.lodr').remove();
                        $('#nkar').prepend(
                            ' <div class="lodr col-md-2 hoverImgCol2" style="display: block;">' +
                            '        <div class="content">' +
                            '         <img src="{{asset('site/img/loader.gif')}}" alt="" class="image img-responsive">' +
                            '        </div>' +
                            '    </div>');

                        images.push(data)

                        $('#nkar').append('' +
                            '<div id="" class="col-md-2 hoverImgCol2">' +
                            '<img  src="{{asset("storage/product/medium")}}/' + data + '"  class="image img-responsive">' +
                            '<input form="add" type="hidden" class="loadimg" name="nkarner" value="' + data + '"> ' +
                            '<div class="imgDelete"> <i class="fas fa-times fa-2x"></i></div>' +
                            '</div>');
                        if (i == length) {
                            removeloader()
                        }
                        setTimeout(function (){
                            removeloader();
                        },1500)
                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                        i += 1;
                        if (i == length) {
                            removeloader();
                        }
                    }


                });
                // }else{
                //     alert('Թույլատրփլի քանակ 2')
                // }
                if (length >= 2) {
                    removeloader();
                }
                if (i >= 2) {
                    $('.upload').hide();
                    $('.error_photo').html('Permissible quantity 2');
                    $('#submit_btn').attr('disabled', false);
                    removeloader()
                    return false;
                }
            });
            $('.loadimg').val(images)
        }




        var x = 1;
        var count = 1;

        $('.cropped').on('load', function () {

            if( $('.cropped').width() > 1000 ||  $('.cropped').height() > 1000){

                $('.cropped').width(600);
                $('.cropped').height(600);
            }
        });


        $('.sale_error').text('')
        if($('.sale').val() > $('#input_price').val()){
            // alert($(this).val())

            $('.sale_error').text('Sale field cannot be greater than price field')
            error = false;
            $('.btn.btn-primary').attr('disabled', false);


        }



        // $('.sale').keyup(function (){
        //     if($('.sale').val() > $('#input_price').val()){
        //         $('.sale_error').text('Sale field cannot be greater than price field')
        //     }else{
        //         $('.sale_error').text('')
        //     }
        // })
        $('.sale_error.valid_error').text('')


        var clicked = false;
        // $('.btn.btn-primary').click(function () {
        $('.btn.btn-primary').on('click', function(){
            if (!clicked) {
                clicked = true
                $(this).attr('disabled', 'disabled');
                $('#text').attr('disabled', false);

                var error = true;
//         var lang = $('#input_lang').val();
//
//         if($('#input_name_hy').val()==''){
//             $('.error_message_name_hy').text('Այս դաշտը պարտադիր է');
//             error = false;
//         }else if($('#input_name_hy').val().length>200){
//             $('.error_message_name_hy').text('Դաշտը պետք է պարունակի առավելագույնը 200 սիմվոլ');
//             error = false;
//         }else{
//             $('.error_message_name_hy').text('')
//         }
//
//         if($('#input_name_ru').val()==''){
//             $('.error_message_name_ru').text('Այս դաշտը պարտադիր է');
//             error = false;
//         }else if($('#input_name_ru').val().length>200){
//             $('.error_message_name_ru').text('Դաշտը պետք է պարունակի առավելագույնը 200 սիմվոլ');
//             error = false;
//         }else{
//             $('.error_message_name_ru').text('')
//         }
//         if($('#input_name_en').val()==''){
//             $('.error_message_name_en').text('Այս դաշտը պարտադիր է');
//             error = false;
//         }else if($('#input_name_en').val().length>200){
//             $('.error_message_name_en').text('Դաշտը պետք է պարունակի առավելագույնը 200 սիմվոլ');
//             error = false;
//         }else{
//             $('.error_message_name_en').text('')
//         }
//
//         if($('#input_text_hy').val()=='' ){
//             $('.error_message_text_hy').text('Այս դաշտը պարտադիր է');
//             error = false;
//         }else if($('#input_text_hy').val().length>50000){
//             $('.error_message_text_hy').text('Դաշտը պետք է պարունակի առավելագույնը 50000 սիմվոլ');
//             error = false;
//         }else{
//             $('.error_message_text_hy').text('')
//         }
//         if( $('#input_text_ru').val()=='' ){
//             $('.error_message_text_ru').text('Այս դաշտը պարտադիր է');
//             error = false;
//         }else if($('#input_text_ru').val().length>50000){
//             $('.error_message_text_ru').text('Դաշտը պետք է պարունակի առավելագույնը 50000 սիմվոլ');
//             error = false;
//         }else{
//             $('.error_message_text_ru').text('')
//         }
//         if($('#input_text_en').val()==''){
//             $('.error_message_text_en').text('Այս դաշտը պարտադիր է');
//             error = false;
//         }else if($('#input_text_en').val().length>50000){
//             $('.error_message_text_en').text('Դաշտը պետք է պարունակի առավելագույնը 50000 սիմվոլ');
//             error = false;
//         }else{
//             $('.error_message_text_en').text('')
//         }
//         if($('#input_price').val()==''){
//             $('.error_message_price').text('Այս դաշտը պարտադիր է');
//             error = false;
//         } else if($('#input_price').val().length>10){
//             $('.error_message_price').text('Դաշտը պետք է պարունակի առավելագույնը 11 սիմվոլ');
//             error = false;
//         }else{
//             $('.error_message_price').text('')
//         }
//
//         // if($('#input_price').val().length>10){
//         //     $('.error_message_price').text('Դաշտը պետք է պարունակի առավելագույնը 11 սիմվոլ');
//         //     error = false;
//         // }else{
//         //     $('.error_message_price').text('')
//         // }
//         if($('.sale').val().length>10){
//             $('.error_message_sale').text('Դաշտը պետք է պարունակի առավելագույնը 11 սիմվոլ');
//             error = false;
//         }else{
//             $('.error_message_sale').text('')
//         }
//
//
//
//
//
//         if($('#exampleInputFile').val()==''){
//             $('.error_message_file').text('Այս դաշտը պարտադիր է');
//             error = false;
//         }else{
//             $('.error_message_file').text('')
//         }
//         if($('#location').val()==''){
//             $('.error_message_location').text('Այս դաշտը պարտադիր է');
//             error = false;
//         }else{
//             $('.error_message_location').text('')
//         }
//         if(!error){
//             $('#error_div').css('display','block')
//         }else{
//             $('#error_div').css('display','none')
//         }
//
//
//
//


                $('.sale_error.valid_error').text('')
                if(parseInt($('.sale').val()) > parseInt($('#input_price').val())){
                    $('.sale_error').text('Sale field cannot be greater than price field')
                    error = false;
                    $('.btn.btn-primary').attr('disabled', false);
                }else{
                    $('.sale_error').text('')
                    error = true;
                }


                for (i = 0; i < images.length; i++) {
                    for (j = 0; j < delete_images.length; j++) {
                        if (images[i] == delete_images[j]) {
                            images.splice(i, 1);
                        }
                    }
                }
//
//
                var input_images = '<input type="hidden" name="files[]" value="' + images + '">';
//
//
                $('#form_add').append(input_images)
                $('.loadimg').val(images)


                setTimeout(function () {
                    if (error) {
                        $('.form-horizontal').submit();
                    }
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
