<!-- JS Global Compulsory -->
<script type="text/javascript" src="<?=$appRoot?>/assets/plugins/jquery/jquery.min.js"></script>
<script type="text/javascript" src="<?=$appRoot?>/assets/plugins/jquery/jquery-migrate.min.js"></script>
<script type="text/javascript" src="<?=$appRoot?>/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<!-- JS Implementing Plugins -->
<script type="text/javascript" src="<?=$appRoot?>/assets/plugins/toastr/toastr.js"></script>
<script type="text/javascript" src="<?=$appRoot?>/assets/plugins/back-to-top.js"></script>
<script type="text/javascript" src="<?=$appRoot?>/assets/plugins/backstretch/jquery.backstretch.min.js"></script>
<!-- JS Customization -->
<script type="text/javascript" src="<?=$appRoot?>/assets/js/custom.js"></script>
<!-- JS Page Level -->
<script type="text/javascript" src="<?=$appRoot?>/assets/js/app.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function() {
        App.init();
    });
</script>
<script type="text/javascript">

    $.backstretch([
        "<?=$appRoot?>/images/generic_bg/bg_001.jpg",
        "<?=$appRoot?>/images/generic_bg/bg_002.jpg",
        "<?=$appRoot?>/images/generic_bg/bg_003.jpg",
        "<?=$appRoot?>/images/generic_bg/bg_004.jpg",
        "<?=$appRoot?>/images/generic_bg/bg_005.jpg",
        "<?=$appRoot?>/images/generic_bg/bg_006.jpg",
        "<?=$appRoot?>/images/generic_bg/bg_007.jpg",
        "<?=$appRoot?>/images/generic_bg/bg_008.jpg",
        "<?=$appRoot?>/images/generic_bg/bg_009.jpg",
        "<?=$appRoot?>/images/generic_bg/bg_010.jpg"
    ], {
        fade: 1000,
        duration: 7000
    });


toastr.options = {
    "closeButton": false,
    "debug": false,
    "newestOnTop": false,
    "progressBar": false,
    "positionClass": "toast-top-right",
    "preventDuplicates": false,
    "onclick": null,
    "showDuration": "300",
    "hideDuration": "1000",
    "timeOut": "5000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
}

</script>
<!--[if lt IE 9]>
<script src="<?=$appRoot?>/assets/plugins/respond.js"></script>
<script src="<?=$appRoot?>/assets/plugins/html5shiv.js"></script>
<script src="<?=$appRoot?>/assets/plugins/placeholder-IE-fixes.js"></script>
<![endif]-->