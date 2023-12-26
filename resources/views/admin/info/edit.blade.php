@extends('layouts.AdminLayouts.index')

@section('styles')
    <link rel="stylesheet" href="{{asset('admin/plugins/sweetalert2/sweetalert2.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/plugins/toastr/toastr.min.css')}}">
@endsection
<script src="{{asset('admin/js/cropper.min.js')}}"></script>

@section('content')
    <div id="breadcrumb"><a href="{{url('my_admin/')}}">Գլխավոր </a>/ <a href="{{url('my_admin/info/')}}">Տեղեկատվություն </a> / <a href="#">Խմբագրել  </a></div>

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
                                        @if($errors->has('content_hy')   && $lang['code'] == 'hy')
                                            error
                                        @endif
                                        @if( $errors->has('content_ru')  && $lang['code'] == 'ru')
                                            error
                                        @endif
                                        @if($errors->has('content_en')  && $lang['code'] == 'en')
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
                                    <li class="error">Խնդրում ենք լրացնել բոլոր դաշտերը․․․</li>
                                </ul>
                            </div>
                        @endif
                        <form class="form-horizontal" method="post" action="{{url('my_admin/info/'.$about_us->id)}}" enctype="multipart/form-data" novalidate="novalidate">
                            @csrf
                            @method('PUT')

                    <div class="tab-content" id="custom-tabs-three-tabContent">
                        @foreach(config('lang') as $lang)
                                @foreach($about_us->translate as $item)
                                @if($lang['code'] == $item['code'])
                                <div class="tab-pane fade @if($loop->first) show active  @endif" id="tab_{{$loop->index}}"
                                     role="tabpanel">

                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>Նկարագրություն *</label>
                                            <textarea type="text" id=summary-ckeditor_{{$loop->index}} name="content_{{$lang['code']}}" class="form-control">{{isset($item->content)?$item->content:old('content_'.$lang['code'])}}</textarea>
                                            @if ($errors->has('content_'.$lang['code']))
                                                <span class="valid-error">{{ $errors->first('content_'.$lang['code']) }}</span>
                                            @endif
                                        </div>
{{--                                        <script src="{{ asset('vendor/unisharp/ckeditor/ckeditor.js') }}"></script>--}}
{{--                                        <script>--}}
{{--                                            CKEDITOR.replace( 'summary-ckeditor_{{$loop->index}}' );--}}
{{--                                        </script>--}}
                                    </div>

                                </div>
                                @endif
                                    @endforeach
                        @endforeach

                            <div class="card-body">
                                <label for="exampleInputFile">Նկար *</label>
                                <div class="input-group">
                                    <div class="custom-file">
{{--                                        <input type="file" name="file" class="custom-file-input viewImage" value="{{$about_us->file??old('file') }}" id="exampleInputFile" accept=".jpeg,.png,.jpg,.png">--}}
                                        <input type="file" name="file" class="custom-file-input viewImage" id="file-input" value="{{$about_us->file ? $about_us->file : old('file') }}" accept=".jpeg,.png,.jpg,.png">

                                        <label class="custom-file-label" for="exampleInputFile">Ընտրել ֆայլը</label>

                                    </div>
                                    <span class="error_message_file valid_error"></span>
                                </div>
                                <div class="addImage" style="margin:10px;">
                                    @if($about_us->file)
                                        <img style="width: 150px;height: 150px"
                                             src="{{asset('storage/about_us/small/'.$about_us->file)}} "
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
                    </div>
                        {{--                            </div>--}}
                            <input type="hidden" name="translate" value="about_us">
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
    <script src="{{asset('admin/js/crop-canvas.js')}}"></script>


@endsection
