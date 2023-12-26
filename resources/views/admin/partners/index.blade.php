@extends('layouts.AdminLayouts.index')

@section('styles')
    <link rel="stylesheet" href="{{asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/plugins/toastr/toastr.min.css')}}">

@endsection

@section('content')

    <section class="content">
        <div class="row">
            <div class="col-8">
                @if(!$partners)
                    <div class="card-body flex-center">

                        <a href="{{route('partners.create')}}">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-primary">
                                Ավելացնել </button></a>

                    </div>
            @endif
            <!-- /.card -->

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Գործընկերներ</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example2_1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Վերնագիր</th>
                                <th>Նկարագրություն</th>
                                <th>Գործողություն</th>
                            </tr>
                            </thead>
                            <tbody>
{{--                            @dd($partners)--}}
                            @if($partners)
                                <tr>
                                    <td>{{isset($partners->translate[0]->title)?Str::limit($partners->translate[0]->title,50):' '}}</td>
                                    <td>{!!isset($partners->translate[0]->content)?Str::limit($partners->translate[0]->content,150):' - '!!}</td>

                                    <td class="project-actions text-right">
                                        <a class="btn btn-info btn-sm"
                                           href="{{url('my_admin/partners/'.$partners->id.'/edit')}}">
                                            <i class="fas fa-pencil-alt">
                                            </i>
                                            Խմբագրել
                                        </a>
                                        {{--                                    <a class="btn btn-danger btn-sm"--}}
                                        {{--                                       onclick="deleteItem(this,'{{route('categories.destroy',['category'=>$item->id])}}', 'DELETE')">--}}
                                        {{--                                        <i class="fas fa-trash">--}}
                                        {{--                                        </i>--}}
                                        {{--                                        Ջնջել--}}
                                        {{--                                    </a>--}}
                                    </td>

                                </tr>
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

@endsection

@section('scripts')
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
            });
            $('#example2').DataTable({
                "paging": false,
                "lengthChange": false,
                "searching": false,
                "ordering": false,
                "info": true,
                "autoWidth": true,
                "responsive": true,
            });
            $('#example2_1').DataTable({
                "paging": false,
                "lengthChange": false,
                "searching": false,
                "ordering": false,
                "info": false,
                "autoWidth": true,
                "responsive": true,
            });
        });
    </script>


@endsection
