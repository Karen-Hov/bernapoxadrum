@extends('layouts.AdminLayouts.index')

@section('styles')
    <link rel="stylesheet" href="{{asset('admin/plugins/sweetalert2/sweetalert2.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/plugins/toastr/toastr.min.css')}}">


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
    <div id="breadcrumb"><a href="{{url('my_admin/')}}">Գլխավոր </a>/ <a href="{{url('my_admin/portfolio/')}}">Պորտֆոլիո </a> / <a href="#">Խմբագրել  </a></div>

    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="col-12 col-sm-6">
                    <h3>Խմբագրել</h3>
                    <div class="card card-primary card-outline card-tabs">

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    <li class="error">Խնդրում ենք լրացնել բոլոր դաշտերը․․․</li>
                                </ul>
                            </div>
                        @endif
                        <form class="form-horizontal" method="post" action="{{route('portfolio.update',$portfolio->id)}}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                    <div class="tab-content" id="custom-tabs-three-tabContent">
                                <div class="tab-pane fadeshow active" id="tab"
                                     role="tabpanel">
                                    <div class="card-body">
                                        <label>Category *</label>
                                        <select class="select2" data-placeholder="Select a State"
                                                style="width: 100%;" name="category" autoselect="false" id="location">
                                            @if($categories)
                                                @foreach($categories as $item)
                                                    <option value="{{$item->id}}" data-id="{{$item->id}}"
                                                    @if(old('category') == $portfolio->type)
                                                        {{'selected'}}
                                                        @elseif($item->id == $portfolio->type)
                                                        {{'selected'}}
                                                        @endif
                                                    >
                                                        {{$item->translate[0]->title}}
                                                    </option>
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
                                               value="{{isset($portfolio->link)?$portfolio->link:old('link')}}">
                                        @if ($errors->has('link'))
                                            <span class="valid-error">{{ $errors->first('link') }}</span>
                                        @endif
                                    </div>
                                </div>
                                    <div class="card-body">
                                        <label for="exampleInputFile">Լոգո *</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                {{--                                        <input type="file" name="file" class="custom-file-input viewImage" value="{{$portfolio->file??old('file') }}"--}}
                                                {{--                                               id="exampleInputFile" accept=".jpeg,.png,.jpg,.png">--}}
                                                <input type="file" name="file_logo" class="custom-file-input viewImage_logo" value="{{$portfolio->file_logo?$portfolio->file_logo:old('file_logo') }}"  accept=".jpeg,.png,.jpg,.png">

                                                <label class="custom-file-label" for="exampleInputFile">Ընտրել ֆայլը</label>

                                            </div>
                                            <span class="error_message_file valid_error"></span>
                                        </div>
                                        <div class="addImage_logo" style="margin:10px;">
                                            @if($portfolio->file_logo)
                                                <img style="width: 150px;height: 150px"
                                                     src="{{asset('storage/portfolios/small/'.$portfolio->file_logo)}} "
                                                     class="tableImage" alt="">
                                                <span class="delimg"><i class="fas fa-times fa-2x"></i></span>
                                            @endif
                                            <span></span>

                                        </div>


                                    </div>
                            </div>
{{--                                @endif--}}
{{--                                    @endforeach--}}
{{--                        @endforeach--}}

                            <div class="card-body">
                                <label for="exampleInputFile">Նկար *</label>
                                <div class="input-group">
                                    <div class="custom-file">
{{--                                        <input type="file" name="file" class="custom-file-input viewImage" value="{{$portfolio->file??old('file') }}"--}}
{{--                                               id="exampleInputFile" accept=".jpeg,.png,.jpg,.png">--}}
                                        <input type="file" name="file" class="custom-file-input viewImage" value="{{$portfolio->file?$portfolio->file:old('file') }}" id="file-input" accept=".jpeg,.png,.jpg,.png">

                                        <label class="custom-file-label" for="exampleInputFile">Ընտրել ֆայլը</label>

                                    </div>
                                    <span class="error_message_file valid_error"></span>
                                </div>
                                <div class="addImage" style="margin:10px;">
                                    @if($portfolio->file)
                                        <img style="width: 150px;height: 150px"
                                             src="{{asset('storage/portfolios/small/'.$portfolio->file)}} "
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
                            <input type="hidden" name="translate" value="portfolio">
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
    <script src="{{asset('admin/plugins/summernote/summernote-bs4.min.js')}}"></script>
    <script src="{{asset('admin/js/crop-canvas.js')}}"></script>


    <script>
        $('.viewImage_logo').change(function (e) {
            $('.addImage_logo').empty()
            var src = URL.createObjectURL(event.target.files[0]);
            var image = document.createElement("img");
            image.style.margin = "6px";
            image.style.width = "150px";
            image.style.height = "150px";
            image.src = src;
            image.id = 1000;
            var span = document.createElement("span");
            span.innerHTML = '<i class="fas fa-times fa-2x"></i>';
            span.style.fontSize = "17px";
            span.className = "delimg";
            span.setAttribute("data-id", '1000');
            $('.addImage_logo').css('display', 'inline');
            $('.addImage_logo').append(image);
            $('.addImage_logo').append(span);


// }

        });



        $(document).on("click", ".delimg", function () {
            $('.custom-file-input.viewImage').val('');
            $('.addImage').html('');
        })


        $('.select2').select2()
        //     //
        //     // //Initialize Select2 Elements
        $('.select2bs4').select2({
            theme: 'bootstrap4'
        })
    </script>
@endsection
