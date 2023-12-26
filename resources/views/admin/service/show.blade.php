@extends('layouts.AdminLayouts.index')

@section('styles')
    <link rel="stylesheet" href="{{asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/plugins/toastr/toastr.min.css')}}">

@endsection

@section('content')
    <div id="breadcrumb"><a href="{{url('my_admin/')}}">Գլխավոր </a>/ <a href="{{url('my_admin/services/')}}">Ծառայություններ  </a> / <a href="#"> Դիմողներ  </a></div>

    <section class="content">
        <div class="row">
            <div class="col-12">
                <!-- /.card -->

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Ծառայություններ Դիմողներ</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Անուն</th>
                                <th>Էլ․հասցե</th>
                                <th>Հեռախոսահամար</th>
                                <th>Կայք հասցե</th>
                                <th>Հաղորդագրություն</th>
                                <th>Գործողություն</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if($service_message)
                                @foreach($service_message as $item)
                                    <tr>
                                        <td class="value">{{isset($item->name)?$item->name:''}}</td>
                                        <td class="value">{{isset($item->email)?$item->email:''}}</td>
                                        <td class="value">{{isset($item->phone)?$item->phone:''}}</td>
                                        <td class="value">{{isset($item->website)?$item->website:' '}}</td>
                                        <td style="width: 20px;">{!!  isset($item->message)?Str::limit($item->message,50):' '!!}</td>
                                        <td  class="value" style="display: none">{!!  isset($item->message)?$item->message:' '!!}</td>

                                        <td class="project-actions text-right">
                                                <a class="btn btn-success btn-sm modal_click" data-toggle="modal" data-target="#modal-primary">
                                                    <i class="fas fa-pencil-alt">
                                                    </i>
                                                    Տեսնել
                                                </a>

                                                <a class="btn btn-danger btn-sm"
                                                   onclick="deleteItem(this,'{{route('service_message.delete',$item->id)}}', 'DELETE')">
                                                    <i class="fas fa-trash">
                                                    </i>
                                                    Ջնջել
                                                </a>

                                            </td>

                                    </tr>



                                @endforeach
                            @endif
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
                <div class="modal-body">
                    <div class="widget-content tab-content">
                        <div class="control-group">
                            <div class="controls" >
                                Անուն:  <span class="name"></span>
                            </div>
                        </div>

                        <div class="control-group">
                            <div class="controls">
                                Էլ․հասցե:  <span class="email"></span>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="controls ">
                                Հեռախոսահամար:  <span class="phone"></span>
                            </div>
                        </div>

                        <div class="control-group">
                            <div class="controls ">
                                Կայք հասցե:  <span class="website"></span>
                            </div>
                        </div>

                        <div class="control-group">
                            <label for="date" class="control-label">Հաղորդագրություն</label>
                            <div class="controls ">
                                <span class="message"></span>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-outline-light" data-dismiss="modal">Փակել</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

@endsection

@section('scripts')
    <script src="{{asset('admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('admin/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
    {{--    <script src="{{asset('admin/plugins/sweetalert2/sweetalert2.min.js')}}"></script>--}}
    {{--    <script src="{{asset('admin/plugins/toastr/toastr.min.js')}}"></script>--}}

    <script>

        $('.modal_click').click(function (){
            $($(this).closest('tr').find('.value')).each(function ( key, value){
                $($('.controls').find('span')[key]).text( $(value).text())
            })
        })



        function deleteItem(target, url, method) {
            let element = $(target).parents('tr');
            if (confirm("Դուք ի՞սկապես ցանկանում էք ջնջել?!!!")) {
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



        $(function () {
            // $("#example1").DataTable({
            //     "responsive": true,
            //     "autoWidth": false,
            // });
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": true,
                "responsive": true,
                "order":[[0,'desc']]
            });
        });
    </script>


@endsection
