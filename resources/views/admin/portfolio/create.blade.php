@extends('layouts.AdminLayouts.index')

@section('styles')
    <link rel="stylesheet" href="{{asset('admin/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css')}}">
    <link rel="stylesheet"
          href="{{asset('admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/plugins/select2/css/select2.min.css')}}">
        <link rel="stylesheet" href="{{asset('admin/plugins/select2/css/select2.min.css')}}">

    <link rel="stylesheet" href="{{asset('admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/plugins/summernote/summernote-bs4.css') }}">
@endsection
<script src="{{asset('admin/js/cropper.min.js')}}"></script>

@section('content')
    <div id="breadcrumb"><a href="{{url('my_admin/')}}">Գլխավոր </a>/ <a href="{{url('my_admin/portfolio/')}}">Պորտֆոլիո </a> / <a href="#">Ավելացնել  </a></div>

    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="col-12 col-sm-6">
                    <h3> Ավելացնել</h3>
                    <div class="card card-primary card-outline card-tabs">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    <li class="error">Խնդրում ենք լրացնել բոլոր դաշտերը․․․</li>
                                </ul>
                            </div>
                        @endif
                        <form class="form-horizontal" method="post" action="{{route('portfolio.store')}}"
                              enctype="multipart/form-data" novalidate="novalidate">
                            @csrf
                            @method('POST')
                            <div class="tab-content" id="custom-tabs-three-tabContent">
{{--                                @foreach(config('lang') as $lang)--}}

                                    <div class="tab-pane fade show active"
                                         id="tab"
                                         role="tabpanel">

                                        <div class="card-body">
                                            <label>Կատեգորիա *</label>
                                            <select class="select2" data-placeholder="Select a State"
                                                    style="width: 100%;" name="category" autoselect="false" id="location">
                                                @if($categories)
                                                    @foreach($categories as $item)
                                                        <option
                                                            @if(old('category')) {{$item->id==old('category') ?'selected':''}}  @endif
                                                            value="{{$item->id}}">{{$item->translate[0]->title}}</option>
                                                    @endforeach
                                                @endif
                                            </select>
                                            @if ($errors->has('category'))
                                                <span class="valid-error">{{ $errors->first('category') }}</span>
                                            @endif
                                        </div>



                                        <div class="card-body">
                                            <div class="form-group">
                                                <label>Կայքի հասցե *</label>
                                                <input type="text" name="link" class="form-control"
                                                       value="{{old('link')}}">
                                                @if ($errors->has('link'))
                                                    <span
                                                        class="valid-error">{{ $errors->first('link') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                <div class="card-body">
                                    <label for="exampleInputFile">Լոգո *</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            {{--                                            <input type="file" name="file" class="custom-file-input viewImage" id="exampleInputFile" accept=".jpeg,.png,.jpg,.png">--}}
                                            <input type="file" name="file_logo" class="custom-file-input viewImage"  accept=".jpeg,.png,.jpg,.png">

                                            <label class="custom-file-label" for="exampleInputFile">Ընտրել ֆայլը</label>

                                        </div>
                                        <div class="addImage"></div>

                                        <span class="error_message_file valid_error"></span>
                                    </div>
                                    @if ($errors->has('file'))
                                        <span class="valid-error">{{ $errors->first('file') }}</span>
                                    @endif
                                    {{--                                    <div class="addImage"></div>--}}


                                </div>
{{--                                @endforeach--}}
                                <div class="card-body">
                                    <label for="exampleInputFile">Նկար *</label>
                                    <div class="input-group">
                                        <div class="custom-file">
{{--                                            <input type="file" name="file" class="custom-file-input viewImage" id="exampleInputFile" accept=".jpeg,.png,.jpg,.png">--}}
                                            <input type="file" name="file" class="custom-file-input viewImage" id="file-input" accept=".jpeg,.png,.jpg,.png">

                                            <label class="custom-file-label" for="exampleInputFile">Ընտրել ֆայլը</label>

                                        </div>

                                        <span class="error_message_file valid_error"></span>
                                    </div>
                                    @if ($errors->has('file'))
                                        <span class="valid-error">{{ $errors->first('file') }}</span>
                                    @endif
{{--                                    <div class="addImage"></div>--}}

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
                            <input type="hidden" name="translate" value="partner">
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
    <script src="{{asset('admin/plugins/select2/js/select2.full.min.js')}}"></script>
    <script src="{{asset('admin/plugins/summernote/summernote-bs4.min.js')}}"></script>
    <script src="{{asset('admin/js/crop-canvas.js')}}"></script>


    <script>
        $('.btn.btn-primary').click(function () {
            $('.form-horizontal').submit();
            $(this).attr('disabled', 'disabled');
        })


        $('.select2').select2()
        //     //
        //     // //Initialize Select2 Elements
        $('.select2bs4').select2({
            theme: 'bootstrap4'
        })
    </script>

@endsection
