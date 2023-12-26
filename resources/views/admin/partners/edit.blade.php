@extends('layouts.AdminLayouts.index')

@section('styles')
    <link rel="stylesheet" href="{{asset('admin/plugins/sweetalert2/sweetalert2.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/plugins/toastr/toastr.min.css')}}">
@endsection
<script src="{{asset('admin/js/cropper.min.js')}}"></script>

@section('content')
    <div id="breadcrumb"><a href="{{url('my_admin/')}}">Գլխավոր </a>/ <a href="{{url('my_admin/partners/')}}">Գործընկերներ </a> / <a href="#">Խմբագրել  </a></div>

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
                                        <a class="nav-link @if($loop->first) active @endif
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
                        <form class="form-horizontal" method="post" action="{{url('my_admin/partners/'.$partners->id)}}" enctype="multipart/form-data" novalidate="novalidate">
                            @csrf
                            @method('PUT')

                            <div class="tab-content" id="custom-tabs-three-tabContent">
                                @foreach(config('lang') as $lang)
                                    @foreach($partners->translate as $item)
                                        @if($lang['code'] == $item['code'])
                                            <div class="tab-pane fade @if($loop->first) show active  @endif" id="tab_{{$loop->index}}"
                                                 role="tabpanel">

                                                <div class="card-body">
                                                    <div class="form-group">
                                                        <label>Վերնագիր *</label>
                                                        <input type="text" name="title_{{$lang['code']}}"
                                                               class="form-control" id="input_title_{{$lang['code']}}"

                                                               value="{{isset($item->title)?$item->title:old('title_'.$lang['code'])}}">
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
                                                        <textarea type="text" id="summary-ckeditor_{{$loop->index}}" name="content_{{$lang['code']}}" class="form-control">{{isset($item->content)?$item->content:old('content_'.$lang['code'])}}</textarea>
                                                        @if ($errors->has('content_'.$lang['code']))
                                                            <span class="valid-error">{{ $errors->first('content_'.$lang['code']) }}</span>
                                                        @endif
                                                    </div>
                                                </div>

                                            </div>
                                        @endif
                                    @endforeach
                                @endforeach
                            </div>
                            <input type="hidden" name="translate" value="partner">
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
