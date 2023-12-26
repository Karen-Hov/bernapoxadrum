@extends('layouts.AdminLayouts.index')

@section('styles')
    <link rel="stylesheet" href="{{asset('admin/plugins/sweetalert2/sweetalert2.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/plugins/toastr/toastr.min.css')}}">
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
    <div id="breadcrumb"><a href="{{url('my_admin/')}}">Գլխավոր </a>/ <a href="{{url('my_admin/submenu/')}}">Ենթամենու </a> / <a href="#">Խմբագրել  </a></div>

    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="col-12 col-sm-6">
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
                                        @if(($errors->has('name_pr') || $errors->has('content_pr') || $errors->has('description_pr'))  && $lang['code'] == 'pr')
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
                                    <li class="error">Please fill in all the fields ․․․․</li>
                                </ul>
                            </div>
                        @endif
                        <form class="form-horizontal" method="post" action="{{route('submenu.update',['submenu'=>$submenu->id])}}">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                             <div class="form-group">
                                <label>Խմբագրել կատեգորիան *</label>
                                <select class="select2" data-placeholder="Select a State"
                                        style="width: 100%;" name="cat" id="location">
                                    @if($submenu)
                                        @foreach($menu as $item)
                                            <option value="{{$item->id}}" data-id="{{$item->id}}"
                                            @if(old('cat') == $submenu->menu_id)
                                                {{'selected'}}
                                                @elseif($item->id == $submenu->menu_id)
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
                        @foreach(config('lang') as $lang)
                                @foreach($submenu->translate as $item)
                                @if($lang['code'] == $item['code'])


                                <div class="tab-pane fade @if($loop->first) show active  @endif"
                                     id="tab_{{$loop->index}}"
                                     role="tabpanel">

                                    <div class="card-body">
                                    <div class="form-group">
                                        <label>Վերնագիր *</label>
                                        <input type="text" name="title_{{$lang['code']}}" class="form-control"
                                               value="{{isset($item->title)?$item->title:old('title_'.$lang['code'])}}">
                                        @if ($errors->has('title_'.$lang['code']))
                                            <span class="valid-error">{{ $errors->first('title_'.$lang['code']) }}</span>
                                        @endif
                                    </div>
                                </div>


                                </div>
                                @endif
                                    @endforeach
                        @endforeach
                    </div>
                        {{--                            </div>--}}
                            <input type="hidden" name="translate" value="submenu">
                        <div class="card-body">
                            <button type="submit" class="btn btn-primary">
                                Խմբագրել
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
