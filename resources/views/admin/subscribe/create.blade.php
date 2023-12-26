@extends('layouts.AdminLayouts.index')

@section('styles')
    <link rel="stylesheet" href="{{asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
{{--    <link rel="stylesheet" href="{{asset('admin/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')}}">--}}
{{--    <link rel="stylesheet" href="{{asset('admin/plugins/toastr/toastr.min.css')}}">--}}

    <style>
        .error_message,.error_message_date{
            color: red;
        }
    </style>
@endsection

@section('content')

    <div class="card-body">
        @if (session('message'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{session('message')}}</strong>
            </div>
        @endif
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-primary">
            Ավելացնել թարմացում
        </button>
    </div>


    <section class="content">
        <div class="row">
            <div class="col-12">
                <!-- /.card -->

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Թարմացմումներ</h3>
                    </div>
                    <!-- /.card-header -->
                    {{--                    @dd($mail)--}}
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Թարմացման օր</th>
                                <th>Հաղորդագրություն</th>
                                <th>Կարգավիճակ</th>
                                <th>Գործողություն</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($mail as $item)
                                <tr>
                                    <td>{{date('d-m-Y', strtotime($item->date))}}</td>
{{--                                    <td>{{$item->date}}</td>--}}
                                    <td>{{$item->text}}</td>
                                    <td>
                                        @if($item->status == 1)
                                            Ուղարկված է
                                        @else
                                            Ուղարկված չէ
                                        @endif
                                    </td>

                                    <td>
                                        <a onclick="deleteItem(this,'{{url('my_admin/updating/'.$item->id) }}', 'DELETE')" class="btn btn-danger btn-sm" >
                                            <i class="fas fa-trash"></i>
                                            Ջնջել
                                        </a>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>

                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <div class="modal fade" id="modal-primary" style="display: none;" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content bg-primary">
                <div class="modal-header">
                    <h4 class="modal-title">«Թարմացում»</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal"  method="post" action="{{url('/my_admin/subscribe/add/update')}}"
                          name="create_about_us" id="create_updating" novalidate="novalidate"
                          enctype="multipart/form-data">
                        @csrf
                        @method('POST')

                        <div class="widget-content tab-content">

                            <div class="control-group">
                                <label for="content" class="control-label">Հաղորդագրություն *</label>
                                <div class="controls">
                                    <span class="error_message"></span>
                                    <textarea type="text" name="text" class="text"
                                              id="summary-ckeditor">{{old('text')}}</textarea>
                                    @if ($errors->has('text'))
                                        <span
                                            class="valid-error">{{ $errors->first('text') }}</span>
                                    @endif
                                </div>
                            </div>
                            <input type="hidden" name="translate" value="{{config('type.translate.home')}}">

                            <div class="control-group">
                                <label for="date" class="control-label">Հրապարակման օրը *</label>
                                <div class="controls">
                                    <span class="error_message_date"></span>
                                    <input type="date" name="date" id="date" value="{{old('date')}}">
                                    @if ($errors->has('date'))
                                        <span class="valid-error">{{ $errors->first('date') }}</span>
                                    @endif
                                </div>
                            </div>
                            {{--                            <div class="form-actions">--}}
                            {{--                                <input type="submit" value="ՈՒղղարկել" class="btn btn-success">--}}
                            {{--                            </div>--}}
                        </div>
                    </form>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-outline-light" data-dismiss="modal">Փակել</button>
                    <button type="button" class="btn btn-outline-light save">Պահպանել</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
@endsection

@section('scripts')
    <script>
        $('.save').click(function () {
            var date = new Date();
            var dateString = new Date(date.getTime() - (date.getTimezoneOffset() * 60000 )).toISOString().split("T")[0];
var d = $('#date').val().split('-')[0]

            if($('.text').val() == ''){
                $('.error_message').text('Պարտադիր լրացման դաշտ !!!')
            }else{
                $('.error_message').text('')
            }

            if($('#date').val() == ''){
                $('.error_message_date').text('Պարտադիր լրացման դաշտ !!!')
            }else if(dateString > $('#date').val()){
                $('.error_message_date').text('Ընտրված է սխալ ժամանակ !!!')
            }else if(d.length > 4 || d > 2100){
                $('.error_message_date').text('Ընտրված է սխալ ժամանակ, ընտրեք մինչև 2100թ․ !!!')
            }


            else{
                $('.error_message_date').text('')
                if($('.text').val()){
                    $('#create_updating').submit();
                }


            }

        })
        function deleteItem(target, url, method) {
            let element = $(target).parents('tr');
            if (confirm("Դուք ի՞սկապես ցանկանում էք ջնջել?")) {
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: url,
                    type: method,

                    success: function () {
                        element.hide(1000, function () {
                            element.remove()

                        });
                    }
                });
            }
        }

    </script>


    <script src="{{asset('admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('admin/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
    <script src="{{asset('admin/plugins/sweetalert2/sweetalert2.min.js')}}"></script>
    <script src="{{asset('admin/plugins/toastr/toastr.min.js')}}"></script>

    <script>
        $(function () {
            $("#example1").DataTable({
                "responsive": true,
                "autoWidth": false,
                "order":[[0,'desc']]
            });
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
                "order":[[2,'asc,']]
            });
        });
    </script>


@endsection
