<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>News Admin</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="shortcut icon" href="" type="image/x-icon">

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
{{--    <link--}}
{{--        rel="stylesheet"--}}
{{--        href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"--}}
{{--        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"--}}
{{--        crossorigin="anonymous"--}}
{{--    />--}}
    <link rel="stylesheet" href="https://blueimp.github.io/Gallery/css/blueimp-gallery.min.css"/>
    <!-- CSS to style the file input field as button and adjust the Bootstrap progress bars -->
    <link rel="stylesheet" href="{{asset('admin/jQuery-File-Upload-master/css/jquery.fileupload.css')}}" />
{{--    <link rel="stylesheet" href="{{asset('site/css/style.css')}}" />--}}
    <link href='{{ asset('admin/css/cropper.min.css')}}' rel='stylesheet' type='text/css'>

{{--    <link rel="stylesheet" href="{{asset('admin/jQuery-File-Upload-master/css/jquery.fileupload-ui.css')}}" />--}}
    <!-- CSS adjustments for browsers with JavaScript disabled -->
    <noscript><link rel="stylesheet" href="{{asset('admin/jQuery-File-Upload-master/css/jquery.fileupload-noscript.css')}}"/></noscript>
    <noscript><link rel="stylesheet" href="{{asset('admin/jQuery-File-Upload-master/css/jquery.fileupload-ui-noscript.css')}}"/></noscript>
@include('layouts.AdminLayouts.styles')

    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed {!! app()->getLocale(); !!}">
<div class="wrapper">

    <!-- Navbar -->
  @include('layouts.AdminLayouts.navbar')
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
{{--@if(Auth::user()->admin == 1)--}}

    @include('layouts.AdminLayouts.sidebar')

{{--@endif--}}
    <!-- Content Wrapper. Contains page content -->

    <div class="content-wrapper" >
   @yield('content')
    <!-- /.content-wrapper -->

    </div>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


@include('layouts.AdminLayouts.scripts')

</body>
</html>
