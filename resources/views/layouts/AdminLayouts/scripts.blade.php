<!-- jQuery -->
<script src="{{asset('admin/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('admin/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

<!-- QrCode -->
<script src="{{ asset('admin/js/jquery.qrcode.min.js') }}" ></script>
{{--<script src="{{ asset('admin/js/jquery-barcode.js') }}" ></script>--}}
{{--<script src="{{ asset('admin/js/jquery-barcode.min.js') }}" ></script>--}}



<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('admin/dist/js/adminlte.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
{{--<script src="{{asset('admin/dist/js/pages/dashboard.js')}}"></script>--}}
<!-- AdminLTE for demo purposes -->

@yield('scripts')
<script src="{{asset('admin/dist/js/demo.js')}}"></script>
<script src="{{asset('admin/dist/js/main.js')}}"></script>
<script src="{{asset('admin/js/main.js')}}"></script>

