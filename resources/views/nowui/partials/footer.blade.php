<!--   Core JS Files   -->
<script src="{{ asset('nowui/assets/js/core/jquery.3.2.1.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('nowui/assets/js/core/popper.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('nowui/assets/js/core/bootstrap.min.js') }}" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="{{ asset('nowui/assets/js/plugins/bootstrap-switch.js') }}" type="text/javascript"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="{{ asset('nowui/assets/js/plugins/nouislider.min.js') }}" type="text/javascript"></script>
<!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
<script src="{{ asset('nowui/assets/js/plugins/bootstrap-datepicker.js') }}" type="text/javascript"></script>
<!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
<script src="{{ asset('nowui/assets/js/now-ui-kit.js?v=1.1.0') }}" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function() {
        // the body of this function is in assets/js/now-ui-kit.js
        nowuiKit.initSliders();
    });

    function scrollToDownload() {

        if ($('.section-download').length != 0) {
            $("html, body").animate({
                scrollTop: $('.section-download').offset().top
            }, 1000);
        }
    }
</script>