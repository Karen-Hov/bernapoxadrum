@extends('layouts.AdminLayouts.index')

@section('styles')
    <link rel="stylesheet" href="{{asset('admin/plugins/sweetalert2/sweetalert2.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/plugins/toastr/toastr.min.css')}}">
@endsection
<script src="{{asset('admin/js/cropper.min.js')}}"></script>

@section('content')
    <div id="breadcrumb"><a href="{{url('my_admin/')}}">Գլխավոր </a>/ <a href="{{url('my_admin/partners/')}}">Գործընկերներ</a> / <a href="#">Խմբագրել  </a></div>

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
                        <form class="form-horizontal" method="post" action="{{route('partners.update',$partner->id)}}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')


                    <div class="tab-content" id="custom-tabs-three-tabContent">

                                <div class="tab-pane fadeshow active" id="tab"
                                     role="tabpanel">
                                    <div class="card-body">
                                    <div class="form-group">
                                        <label>Կայքի հասցե *</label>
                                        <input type="text" name="link" class="form-control"
                                               value="{{isset($partner->link)?$partner->link:old('link')}}">
                                        @if ($errors->has('link'))
                                            <span class="valid-error">{{ $errors->first('link') }}</span>
                                        @endif
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
{{--                                        <input type="file" name="file" class="custom-file-input viewImage" value="{{$partners->file??old('file') }}"--}}
{{--                                               id="exampleInputFile" accept=".jpeg,.png,.jpg,.png">--}}
                                        <input type="file" name="file" class="custom-file-input viewImage" value="{{$partner->file?$partner->file:old('file') }}" id="file-input" accept=".jpeg,.png,.jpg,.png">

                                        <label class="custom-file-label" for="exampleInputFile">Ընտրել ֆայլը</label>

                                    </div>
                                    <span class="error_message_file valid_error"></span>
                                </div>
                                <div class="addImage" style="margin:10px;">
                                    @if($partner->file)
                                        <img style="width: 150px;height: 150px"
                                             src="{{asset('storage/partners/small/'.$partner->file)}} "
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


    <script>
        $(document).on("click", ".delimg", function () {
            $('.custom-file-input.viewImage').val('');
            $('.addImage').html('');
        })
    </script>
@endsection
