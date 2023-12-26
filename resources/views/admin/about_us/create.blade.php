@extends('layouts.AdminLayouts.index')

@section('styles')

@endsection

<script src="{{asset('admin/js/cropper.min.js')}}"></script>

@section('content')
    <div id="breadcrumb"><a href="{{url('my_admin/')}}">Գլխավոր </a>/ <a href="{{url('my_admin/about_us/')}}">Մեր մասին </a> / <a href="#">Ավելացնել  </a></div>

    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="col-12 col-sm-6">
                    <h1>Ավելացնել</h1>
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
                        <form class="form-horizontal" method="post" action="{{route('about_us.store')}}"
                              enctype="multipart/form-data" novalidate="novalidate">
                            @csrf
                            @method('POST')

                            <div class="tab-content" id="custom-tabs-three-tabContent">
                        @foreach(config('lang') as $lang)

                                <div class="tab-pane fade @if($loop->first) show active  @endif" id="tab_{{$loop->index}}"
                                     role="tabpanel">
                                    <div class="card-body">
                                    <div class="form-group">
                                        <label>Նկարագրություն *</label>
                                        <textarea type="text" id="summary-ckeditor_{{$loop->index}}" name="content_{{$lang['code']}}" class="form-control">{{old('content_'.$lang['code'])}}</textarea>
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
                        @endforeach
{{--                            <div class="card-body">--}}
{{--                                <label for="exampleInputFile">Նկար *</label>--}}
{{--                                <div class="input-group">--}}
{{--                                    <div class="custom-file">--}}
{{--                                        <input type="file" name="file" class="custom-file-input viewImage" id="exampleInputFile" accept=".jpeg,.png,.jpg,.png">--}}
{{--                                        <input type="file" name="file" class="custom-file-input viewImage" id="file-input" accept=".jpeg,.png,.jpg,.png">--}}

{{--                                        <label class="custom-file-label" for="exampleInputFile">Ընտրել ֆայլը</label>--}}

{{--                                    </div>--}}
{{--                                    <span class="error_message_file valid_error"></span>--}}
{{--                                </div>--}}
{{--                                <div class="addImage"></div>--}}
{{--                                @if ($errors->has('file'))--}}
{{--                                    <span class="valid-error">{{ $errors->first('file') }}</span>--}}
{{--                                @endif--}}
{{--                                                                    <div class="addImage"></div>--}}

{{--                                <div class="box-2" style="width: 700px">--}}
{{--                                    <div class="result"></div>--}}
{{--                                </div>--}}
{{--                                <!--rightbox-->--}}
{{--                                <div class="box-2 img-result hide" >--}}
{{--                                    <!-- result of crop -->--}}
{{--                                    <img class="cropped" src="" alt="" style="width: 800px;height: 800px">--}}
{{--                                </div>--}}
{{--                                <!-- input file -->--}}
{{--                                <div class="box">--}}
{{--                                    <div class="options hide">--}}
{{--                                                            <label> Width</label>--}}
{{--                                        <input type="number" class="img-w" value="400" min="100" max="1200"/>--}}

{{--                                    </div>--}}
{{--                                    <!-- save btn -->--}}
{{--                                    <button class="btn btn-dark save hide">Կտրել նկարը</button>--}}

{{--                                </div>--}}

{{--                                <input type='hidden' name="x">--}}
{{--                            </div>--}}
                                                    </div>
                        {{--                            </div>--}}
                            <input type="hidden" name="translate" value="about_us">
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

    <script src="{{asset('admin/js/crop-canvas.js')}}"></script>

@endsection
