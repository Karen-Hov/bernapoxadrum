@extends('layouts.AdminLayouts.index')

@section('styles')
    <link rel="stylesheet" href="{{asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/plugins/toastr/toastr.min.css')}}">

@endsection

@section('content')
    <div class="card-body flex-center">
        <a href="{{route('features.create')}}">
            <button type="button" class="btn btn-primary">
               Ավելացնել
            </button>
        </a>
    </div>
    <section class="content">
        <div class="row">
            <div class="col-12">
                <!-- /.card -->

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Հատկություններ</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Վերնագիր</th>
                                <th>Նկարագրություն</th>
                                <th>Նկար</th>
                                <th>Գործողություն</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if($features)
                                @foreach($features as $item)
                                    <tr>
                                        <td>{{$item->id?$item->id:''}}</td>
                                        <td>{{isset($item->translate[0]->title)?Str::limit($item->translate[0]->title,30):' '}}</td>
                                        <td style="width: 20px;">{!!  isset($item->translate[0]->content)?Str::limit($item->translate[0]->content,150):' '!!}</td>
                                        <td>
                                            <img src=" {{isset($item->file)?asset('storage/features/'.$item->file):' '}}" style="width: 100px;height: 100px">


                                        </td>

                                        <td class="project-actions text-right">
                                            <a class="btn btn-info btn-sm"
                                               href="{{url('my_admin/features/'.$item->id.'/edit')}}">
                                                <i class="fas fa-pencil-alt">
                                                </i>
                                                Խմբագրել
                                            </a>

                                            <a class="btn btn-danger btn-sm"
                                               onclick="deleteItem(this,'{{route('features.destroy',$item->id)}}', 'DELETE')">
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
@endsection

@section('scripts')
    <script src="{{asset('admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('admin/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
    {{--    <script src="{{asset('admin/plugins/sweetalert2/sweetalert2.min.js')}}"></script>--}}
    {{--    <script src="{{asset('admin/plugins/toastr/toastr.min.js')}}"></script>--}}

    <script>


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
