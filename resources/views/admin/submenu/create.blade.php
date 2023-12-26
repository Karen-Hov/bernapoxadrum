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
    <div id="breadcrumb"><a href="{{url('my_admin/')}}">Գլխավոր </a>/ <a
            href="{{url('my_admin/submenu/')}}">Ենթամենու </a> / <a href="#">Ավելացնել </a></div>

    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="col-12 col-sm-6">
                    <h3>Ավելացնել</h3>
                    <div class="card card-primary card-outline card-tabs">
                        <div class="card-header p-0 pt-1 border-bottom-0">
                            <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
                                @foreach(config('lang') as $lang)
                                    <li class="nav-item">
                                        <a class="nav-link @if($loop->first)active @endif
                                        @if(($errors->has('name_hy') || $errors->has('content_hy') || $errors->has('description_hy'))  && $lang['code'] == 'hy')
                                            error
                                        @endif
                                        @if($errors->has('name_ru')   && $lang['code'] == 'ru')
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
                        <form class="form-horizontal" method="post" action="{{route('submenu.store')}}">
                            @csrf
                            @method('POST')

                            <div class="card-body">
                                <label>Մենու *</label>
                                <select class="form-control" data-placeholder="Ընտրեք կատեգորիա"
                                        style="width: 100%;" name="cat" autoselect="false" id="location">
                                    {{--                                <select class="form-control select2" style="width: 100%;" name="cat">--}}
                                    @if($menu)
                                        @foreach($menu as $item)
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
                                @foreach(config('lang') as $lang)

                                    <div class="tab-pane fade @if($loop->first) show active  @endif"
                                         id="tab_{{$loop->index}}"
                                         role="tabpanel">
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label>Վերնագիր *</label>
                                                <input type="text" name="title_{{$lang['code']}}" class="form-control"
                                                       value="{{old('title_'.$lang['code'])}}">
                                                @if ($errors->has('title_'.$lang['code']))
                                                    <span
                                                        class="valid-error">{{ $errors->first('title_'.$lang['code']) }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            {{--                            </div>--}}
                            <input type="hidden" name="translate" value="submenu">
                            <div class="card-body">
                                <button type="submit" class="btn btn-primary" data-toggle="modal"
                                        data-target="#modal-primary">
                                    Ավելացնել
                                </button>
                            </div>
                            <!-- /.card -->
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
{{--    <script>--}}
{{--        $('.btn.btn-primary').click(function () {--}}
{{--            $('.form-horizontal').submit();--}}
{{--            $(this).attr('disabled', 'disabled');--}}
{{--        })--}}
{{--    </script>--}}
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
