<!-- jQuery 3 -->
<script src="{{ asset('vendors/jquery/dist/jquery.js') }}"></script>


<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>

<!-- popper -->
<script src="{{ asset('vendors/popper/dist/popper.min.js') }}"></script>

<!-- Bootstrap 4.0-->
<script src="{{ asset('vendors/bootstrap/dist/js/bootstrap.js') }}"></script>

<!-- ChartJS -->

<!-- Slimscroll -->
<script src="{{ asset('vendors/jquery-slimscroll/jquery.slimscroll.js') }}"></script>

<!-- FastClick -->
<script src="{{ asset('vendors/fastclick/lib/fastclick.js') }}"></script>


<!-- Morris.js charts -->
<script src="../assets/vendor_components/raphael/raphael.min.js"></script>
@stack('library-js')

<!-- Fab Admin App -->
<script src="{{ asset('assets/backend/js/template.js') }}"></script>

<!-- Fab Admin dashboard demo (This is only for demo purposes) -->

<!-- Fab Admin for demo purposes -->
<script src="{{ asset('assets/backend/js/demo.js') }}"></script>
@stack('custom-js')
