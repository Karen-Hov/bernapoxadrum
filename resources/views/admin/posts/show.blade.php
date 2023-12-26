@extends('layouts.AdminLayouts.index')

@section('styles')
    <link rel="stylesheet" href="{{asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/plugins/toastr/toastr.min.css')}}">
    <link rel="stylesheet" href="{{asset('site/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('site/css/owl.theme.default.min.css')}}">

    <link rel="stylesheet" href="{{asset('site/css/style.css')}}">
@endsection

@section('content')
    <div class="productPage">
        <div class="myContainer">
            <div class="imagesSmallAndBig">
                <div class="smallImages">
                    <div class="imageItem">
                        @if($post->file)
                            <img src="{{asset('storage/posts/small/'.$post->file)}}" alt="">
                        @endif
                    </div>
{{--                    @foreach($post->gallery as $img)--}}
{{--                        <div class="imageItem" >--}}
{{--                            <img src="{{asset('storage/posts/small/'.$img->file)}}" alt="">--}}
{{--                        </div>--}}
{{--                    @endforeach--}}
                    {{--                    <div class="imageItem"  >--}}
                    {{--                        <img src="{{asset('site/img/evolve-beauty-bodycare-sunless-glow-body-lotion-4729243697196_2000x.png')}}" alt="">--}}
                    {{--                    </div>--}}

                </div>
{{--                <div class="bigImage">--}}
{{--                    @if($post->file)--}}
{{--                        <img src="{{asset('storage/posts/large/'.$post->file)}}" alt="">--}}
{{--                    @endif--}}
{{--                </div>--}}
            </div>

            {{--        @dd($item->productTs[0]->description)--}}
            <div class="infoAboutProduct">
                <div class="title">{{isset($post->translate[0]->name)?$post->translate[0]->name:''}}</div>
                <div class="pricesAndHeart">
                    <p class="descTitle">
                        @lang('varius.description'):
                    </p>
                    <p class="description">
                        {!!  isset($post->translate[0]->description)?$post->translate[0]->description:' '!!}

                    </p>
                    <p class="incredTitle">
                        @lang('varius.ingredients'):
                    </p>
                    <p class="ingredients">
                        {!!  isset($post->translate[0]->content)?$post->translate[0]->content:' '!!}
                    </p>

                </div>
            </div>

        </div>
    </div>

    <section class="content">
        <div class="row">
            <div class="col-12">
                <!-- /.card -->

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Product Reviews</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Message</th>
                                <th>Trending</th>
                                <th>Action․</th>
                            </tr>
                            </thead>
                            <tbody>
{{--                            @if($reviews)--}}
{{--                                @foreach($reviews as $item)--}}
{{--                                    <tr>--}}

{{--                                        <td class="td_name">{{isset($item->name)?$item->name:' '}}</td>--}}
{{--                                        <td class="td_message">{{isset($item->message)?$item->message:' '}}</td>--}}
{{--                                        <td style="width: 10px; word-wrap:break-word;">--}}
{{--                                            <span>--}}
{{--                                                <input type="checkbox" id="{{$item->id}}" name="treiting_{{$item->id}}"--}}
{{--                                                       onchange="itemsTreiting(this,'{{$item->id}}','review')"--}}
{{--                                                       @if($item->status== 1) checked @endif>--}}
{{--                                            </span>--}}
{{--                                        </td>--}}

{{--                                        <td class="project-actions text-right">--}}
{{--                                            <button class="btn btn-primary btn-sm modal_btn"   data-id="{{$item->id}}"  data-toggle="modal" data-target="#modal-primary">--}}
{{--                                                <i class="fas fa-folder">--}}
{{--                                                </i>--}}
{{--                                                View--}}
{{--                                            </button>--}}
{{--                                            <a class="btn btn-danger btn-sm"--}}
{{--                                               onclick="deleteItemReview(this,'{{asset('/my_admin/review/'.$item->id)}}', 'POST')">--}}
{{--                                                <i class="fas fa-trash"></i>--}}
{{--                                                Delete--}}
{{--                                            </a>--}}

{{--                                        </td>--}}

{{--                                    </tr>--}}


{{--                                @endforeach--}}
{{--                            @endif--}}
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
                    <h4 class="modal-title span_name"></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <div class="widget-content tab-content">

                        <div class="control-group">
                            <div class="controls email">
                                Message <span class="span_message"></span>
                            </div>
                            <div class="controls text">

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
    /////////// slayd_check/////////////
    function itemsTreiting(that, ids, types) {
        var url = '{{url('my_admin/slideradd')}}';
        if (!$(that).attr('checked')) {
            $.ajax({
                type: 'POST',
                url:  url,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {id: ids, types: types},
                success: function (data) {
                    // if(data.data.success){
                    //     //do something
                    // }
                }
            });
        } else {
            var url = '{{url('my_admin/sliderdeleted')}}'

            $.ajax({
                type: 'POST',
                url: url,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {id: ids, types: types},
                success: function (data) {
                    // if(data.data.success){
                    //     //do something
                    // }
                }
            });

        }

    }
    /////////// slayd_check/////////////
    /////////// delete/////////////
    function deleteItemReview(target, url, method) {
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
    /////////// delete/////////////

    /////////// modal/////////////
    $('.modal_btn').click(function () {
        $('h4.span_name').text($(this).closest('tr').find('.td_name').text());
        $('.span_message').text($(this).closest('tr').find('.td_message').text());
    })
    /////////// modal/////////////

    $(".imagesSmallAndBig .smallImages .imageItem").click(function(){
        var image = $(this).find('img').attr("src")
        var smalSrc = image.substring(image.lastIndexOf('/') + 1);
        var bigImg  = $(".imagesSmallAndBig .bigImage img").attr("src")
        var index = bigImg.lastIndexOf("/");
        var yourCuttedString = bigImg.substring(0, index);
        var newsrc = yourCuttedString+"/"+smalSrc

        $(".imagesSmallAndBig .bigImage img").attr("src",newsrc );

    });

</script>
@endsection
