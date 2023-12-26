@extends('layouts.AdminLayouts.index')

@section('styles')

@endsection

@section('content')
    <div id="breadcrumb"><a href="{{url('my_admin/')}}">Գլխավոր </a>/ <a href="{{url('my_admin/menu/')}}">Մենու </a> / <a href="#">Ավելացնել  </a></div>

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
                        <form class="form-horizontal" method="post" action="{{route('menu.store')}}" >
                            @csrf
                            @method('POST')

                                                    <div class="tab-content" id="custom-tabs-three-tabContent">
                        @foreach(config('lang') as $lang)

                                <div class="tab-pane fade @if($loop->first) show active  @endif" id="tab_{{$loop->index}}"
                                     role="tabpanel">
                                    <div class="card-body">
                                    <div class="form-group">
                                        <label>Վերնագիր *</label>
                                        <input type="text" name="title_{{$lang['code']}}" class="form-control"
                                               value="{{old('title_'.$lang['code'])}}">
                                        @if ($errors->has('title_'.$lang['code']))
                                            <span class="valid-error">{{ $errors->first('title_'.$lang['code']) }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach
                                                    </div>
                        {{--                            </div>--}}
                            <input type="hidden" name="translate" value="menu">
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
    <script>
        $('.btn.btn-primary').click(function () {
            $('.form-horizontal').submit();
            $(this).attr('disabled', 'disabled');
        })
    </script>

@endsection
