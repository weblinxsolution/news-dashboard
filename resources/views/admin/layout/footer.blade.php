<!-- select 2 -->

<!-- jQuery -->
<script src="{{ asset('seller/plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('seller/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->


<script>
    $.widget.bridge('uibutton', $.ui.button)

    $('.custom_dropdown').click(function() {
        $(this).next().slideToggle();
    })
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('seller/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- countries -->
<script src="https://unpkg.com/countryjs/dist/country.js"></script>
<script>
    // Use CountryJS to populate the select element with countries
    var select = document.getElementById("countries");

    // Iterate over the list of countries and add them as options
    Object.keys(countryjs.all()).forEach(function(countryCode) {
        var option = document.createElement("option");
        option.value = countryCode;
        option.text = countryjs.all()[countryCode];
        select.add(option);
    });
</script>
<!-- ChartJS -->
<script src="{{ asset('seller/plugins/chart.js/Chart.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset('seller/plugins/sparklines/sparkline.js') }}"></script>
<!-- JQVMap -->
<script src="{{ asset('seller/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('seller/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('seller/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ asset('seller/plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('seller/plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('seller/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- Summernote -->
<script src="{{ asset('seller/plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('seller/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('seller/dist/js/adminlte.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('seller/dist/js/demo.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('seller/dist/js/pages/dashboard.js') }}"></script>
</body>

</html>
