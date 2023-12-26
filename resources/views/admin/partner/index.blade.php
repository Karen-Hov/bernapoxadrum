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
                <div class="card-body flex-center">
                    <a href="{{route('partners.create')}}"> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-primary">
                            Ավելացնել </button></a>

                </div>
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
                                <th>#</th>
{{--                                <th>Ա․Ա․</th>--}}
                                <th>Կայքի հասցե</th>
                                <th>Նկար</th>
                                <th>Գործողություն</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if($partners)
                                @foreach($partners as $item)
{{--                                    @dd($item)--}}
                            <tr>
                                <td>{{$item->id}}</td>
{{--                                <td>{{date_format($item->created_at,'d-m-Y')}}</td>--}}
                                <td>{{isset($item->link)?$item->link:''}}</td>
                                <td> <img class="image_size" src="{{isset($item->file)?asset('storage/partners/small/'.$item->file):' - '}}" alt=""></td>
                                <td class="project-actions text-right">
                                    <a class="btn btn-info btn-sm"
                                       href="{{route('partners.edit',$item->id)}}">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Խմբագրել
                                    </a>
                                    <a class="btn btn-danger btn-sm"
                                       onclick="deleteItem(this,'{{route('partners.destroy',$item->id)}}', 'DELETE')">
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
    <script src="{{asset('admin/plugins/sweetalert2/sweetalert2.min.js')}}"></script>
    <script src="{{asset('admin/plugins/toastr/toastr.min.js')}}"></script>
    <script>

        $(function () {
            $("#example1").DataTable({
                "responsive": true,
                "autoWidth": false,
            });
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": true,
                "responsive": true,
                "order":[[0,'desc']]
            });
            $('#example2_1').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": true,
                "responsive": true,
                "order":[[0,'desc']]
            });
        });
    </script>
@endsection
