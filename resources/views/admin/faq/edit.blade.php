@extends('layouts.AdminLayouts.index')

@section('styles')
    <link rel="stylesheet" href="{{asset('admin/plugins/sweetalert2/sweetalert2.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/plugins/toastr/toastr.min.css')}}">
@endsection

@section('content')
    <div id="breadcrumb"><a href="{{url('my_admin/')}}">Գլխավոր </a>/ <a href="{{url('my_admin/faq/')}}">ՀՏՀ </a> / <a href="#">Խմբագրել  </a></div>

    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="col-12 col-sm-6">
                    <h1>Խմբագրել</h1>
                    <div class="card card-primary card-outline card-tabs">
                        <div class="card-header p-0 pt-1 border-bottom-0">
                            <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
                                @foreach(config('lang') as $lang)
                                    <li class="nav-item">
                                        <a class="nav-link @if($loop->first)active @endif
                                        @if($errors->has('name_hy')  && $lang['code'] == 'hy')
                                            error
                                        @endif
                                        @if($errors->has('name_ru')   && $lang['code'] == 'ru')
                                            error
                                        @endif
                                        @if($errors->has('name_en')   && $lang['code'] == 'en')
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
                        <form class="form-horizontal" method="post" action="{{route('faq.update',['faq'=>$faq->id])}}">
                            @csrf
                            @method('PUT')

                    <div class="tab-content" id="custom-tabs-three-tabContent">
                        @foreach(config('lang') as $lang)
                                @foreach($faq->translate as $item)
                                @if($lang['code'] == $item['code'])


                                <div class="tab-pane fade @if($loop->first) show active  @endif" id="tab_{{$loop->index}}"
                                     role="tabpanel">
                                    <div class="card-body">
                                    <div class="form-group">
                                        <label>Հարց *</label>
                                        <input type="text" name="title_{{$lang['code']}}" class="form-control"
                                               value="{{isset($item->title)?$item->title:old('title_'.$lang['code'])}}">
                                        @if ($errors->has('title_'.$lang['code']))
                                            <span class="valid-error">{{ $errors->first('title_'.$lang['code']) }}</span>
                                        @endif
                                    </div>
                                </div>

                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>Պատասխան *</label>
                                            <textarea type="text" name="content_{{$lang['code']}}" class="form-control">{{isset($item->content)?$item->content:old('content_'.$lang['code'])}}</textarea>
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
                        {{--                            </div>--}}
                            <input type="hidden" name="translate" value="faq">
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


@endsection
