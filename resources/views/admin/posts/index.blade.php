@extends('layouts.AdminLayouts.index')

@section('styles')
    <link rel="stylesheet" href="{{asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/plugins/toastr/toastr.min.css')}}">

@endsection

@section('content')
    <div class="card-body flex-center">
        <a href="{{route('posts.create')}}">
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
                        <h3 class="card-title">Նորություններ</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-striped">
                            <thead>
                            <tr>
{{--                                <th>#</th>--}}
                                <th>Վերնագիր</th>
                                <th>Լեզու</th>
                                <th>Կատեգորիա</th>
                                <th>Սլայդեր</th>
                                <th>Գործողություն</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if($posts)
                                @foreach($posts as $item)
{{--                                    @dd($item,config('lang'))--}}
                                    <tr>
                                        <td>{{isset($item->title)?Str::limit($item->title,50):''}} </td>
                                        <td>
                                            @foreach(config('lang') as $lang)
                                                @if($lang['code'] == $item->code)
                                                    {{$lang['name']}}
                                                @endif

                                            @endforeach
                                        </td>
                                        <td>
                                            {{isset($item->categorys[0]->translate[0]->title)?Str::limit($item->categorys[0]->translate[0]->title,50):''}}
                                        </td>

                                        <td>
                                            <input type="checkbox" @if($item->slayd_check == 1) checked @endif class="post_check"
                                                   id="check" onchange="itemsSlider(this,'{{$item->id}}','posts')">
                                        </td>
                                        <td class="project-actions text-right">
                                            <a href="{{route('posts.show',$item->id)}}" class="btn btn-success ">Տեսնել</a>
                                            <a href="{{route('posts.edit',$item->id)}}" class="btn btn-success">Կարգավորել</a>
                                            <a onclick="deletePost(this,'{{ url('/my_admin/posts/'.$item->id) }}', 'DELETE')"
                                               class="btn btn-danger ">Ջնջել</a>
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
        function deletePost(target, url, method) {
            let element = $(target).parents('tr');
            if (confirm("Do you really want to delete?!!!")) {
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

        function itemsSlider(that, id, type) {

            // console.log($('#check').attr('checked'))
            var slayder_checked = $(that).attr('checked');
            if(slayder_checked != 'checked'){
                slayder_checked = '';
            }
            console.log($(this).attr('checked'),slayder_checked)
            // if ($(that).attr('checked')) {
                $.ajax({
                    type: 'GET',
                    url: 'slider-filter-category',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: {
                        id,
                        type,
                        slayder_checked,
                    },
                    success: function (data) {
                        console.log(data)
                        if(data == "off"){
                            $(this).attr('checked',false)
                        }
                        if(data == "on"){
                            $(this).attr('checked','checked')
                        }
                    }
                });
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
