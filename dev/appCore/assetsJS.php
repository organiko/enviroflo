<!-- JS Global Compulsory -->
<script type="text/javascript" src="<?=$appRoot?>/assets/plugins/jquery/jquery.min.js"></script>
<script type="text/javascript" src="<?=$appRoot?>/assets/plugins/jquery/jquery-migrate.min.js"></script>
<script type="text/javascript" src="<?=$appRoot?>/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<!-- JS Implementing Plugins -->
<script type="text/javascript" src="<?=$appRoot?>/assets/plugins/back-to-top.js"></script>
<script type="text/javascript" src="<?=$appRoot?>/assets/plugins/smoothScroll.js"></script>
<script type="text/javascript" src="<?=$appRoot?>/assets/plugins/jquery.parallax.js"></script>
<script type="text/javascript" src="<?=$appRoot?>/assets/plugins/fancybox/source/jquery.fancybox.pack.js"></script>
<script type="text/javascript" src="<?=$appRoot?>/assets/plugins/owl-carousel/owl-carousel/owl.carousel.js"></script>
<script type="text/javascript" src="<?=$appRoot?>/assets/plugins/revolution-slider/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="<?=$appRoot?>/assets/plugins/revolution-slider/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<!-- JS Customization -->
<script type="text/javascript" src="<?=$appRoot?>/assets/js/custom.js"></script>
<!-- JS Page Level -->
<script type="text/javascript" src="<?=$appRoot?>/assets/js/app.js"></script>
<script type="text/javascript" src="<?=$appRoot?>/assets/js/plugins/fancy-box.js"></script>
<script type="text/javascript" src="<?=$appRoot?>/assets/js/plugins/owl-carousel.js"></script>
<script type="text/javascript" src="<?=$appRoot?>/assets/js/plugins/revolution-slider.js"></script>
<script type="text/javascript" src="<?=$appRoot?>/assets/js/plugins/style-switcher.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function() {
        App.init();
        App.initParallaxBg();
        FancyBox.initFancybox();
        OwlCarousel.initOwlCarousel();
        StyleSwitcher.initStyleSwitcher();
        RevolutionSlider.initRSfullWidth();
    });
</script>
<!--[if lt IE 9]>
<script src="<?=$appRoot?>/assets/plugins/respond.js"></script>
<script src="<?=$appRoot?>/assets/plugins/html5shiv.js"></script>
<script src="<?=$appRoot?>/assets/plugins/placeholder-IE-fixes.js"></script>
<![endif]-->