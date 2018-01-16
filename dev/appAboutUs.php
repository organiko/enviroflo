<?php
    include ("appConfig/appData.php");
    require("appClasses/appGlobal.php");
    $vAppSec = $_REQUEST['appSec'];
?>
<!DOCTYPE html>
<html>
<?php
    include ("appCore/appLanguage.php");
?>
<head>
	<!--=== Slider ===-->
	<?php
		include("appCore/assetsHead.php");
	?>
    <link rel="stylesheet" href="<?=$appRoot?>/assets/plugins/animate.css">
    <link rel="stylesheet" href="<?=$appRoot?>/assets/plugins/line-icons/line-icons.css">
    <link rel="stylesheet" href="<?=$appRoot?>/assets/plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?=$appRoot?>/assets/plugins/cube-portfolio/cubeportfolio/css/cubeportfolio.min.css">
    <link rel="stylesheet" href="<?=$appRoot?>/assets/plugins/cube-portfolio/cubeportfolio/custom/custom-cubeportfolio.css">

	<!--=== End Slider ===-->
</head>
<body>
	<div class="wrapper">
		<!--=== Header ===-->
		<?php
			include("appBlocks/header.php");
		?>
		<!--=== End Header ===-->


        <!--=== Interactive Slider ===-->
        <div class="breadcrumbs-v3 img-v1 text-center">
            <div class="container">
                <h1>About Us</h1>
                <p>Unify is a clean and fully responsive</p>
            </div>
        </div>
        <!--=== End Interactive Slider ===-->

        <!--=== Title v1 ===-->
        <div class="container content-sm">
            <div class="title-v1 no-margin-bottom">
                <p class="no-margin-bottom">Unify <strong>creative</strong> technology company providing key digital services. <br>
                    Focused on helping our clients to build a <strong>successful</strong> business on web and mobile.</p>
            </div>
        </div>
        <!--=== End Title v1 ===-->

        <!--=== Service Block v4 ===-->
        <div class="service-block-v4">
            <div class="container content-sm">
                <div class="row">
                    <div class="col-md-4 service-desc md-margin-bottom-50">
                        <i class="icon-diamond"></i>
                        <h3>Design</h3>
                        <p class="no-margin-bottom">Morbi ac placerat nibh, in vestibulum odio cras vel orci non dolor sagittis sollicitudin et eu jeriu ntesque.<br> Curabitur vitae augue </p>
                    </div>
                    <div class="col-md-4 service-desc md-margin-bottom-50">
                        <i class="icon-rocket"></i>
                        <h3>Development</h3>
                        <p class="no-margin-bottom">Morbi ac placerat nibh, in vestibulum odio cras vel orci non dolor sagittis sollicitudin et eu jeriu ntesque.<br> Curabitur vitae augue </p>
                    </div>
                    <div class="col-md-4 service-desc">
                        <i class="icon-support"></i>
                        <h3>Support</h3>
                        <p class="no-margin-bottom">Morbi ac placerat nibh, in vestibulum odio cras vel orci non dolor sagittis sollicitudin et eu jeriu ntesque.<br> Curabitur vitae augue </p>
                    </div>
                </div><!--/end row-->
            </div><!--/end container-->
        </div>
        <!--=== End Service Block v4 ===-->

        <!--=== Our Skills ===-->
        <div class="container content-sm">
            <div class="headline-center margin-bottom-60">
                <h2>WHY WE ARE GOOD</h2>
                <p>Phasellus vitae ipsum ex. Etiam eu vestibulum ante. <br>
                    Lorem ipsum <strong>dolor</strong> sit amet, consectetur adipiscing elit. Morbi libero libero, imperdiet fringilla </p>
            </div>

            <div class="row">
                <div class="col-sm-6 md-margin-bottom-50">
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                    <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p><br>
                    <a href="#" class="btn-u btn-brd btn-brd-hover btn-u-dark">Read More</a>
                    <a href="#" class="btn-u">Purchase Now</a>
                </div>
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-xs-3 text-center">
                            <div class="progress progress-u vertical bottom">
                                <div class="progress-bar progress-bar-u" role="progressbar" data-height="60"></div>
                            </div>
                            <span>60%</span>
                            <h4>DESIGN</h4>
                        </div>
                        <div class="col-xs-3 text-center">
                            <div class="progress progress-u vertical bottom">
                                <div class="progress-bar progress-bar-u" role="progressbar" data-height="76"></div>
                            </div>
                            <span>76%</span>
                            <h4>PHP</h4>
                        </div>
                        <div class="col-xs-3 text-center">
                            <div class="progress progress-u vertical bottom">
                                <div class="progress-bar progress-bar-u" role="progressbar" data-height="92"></div>
                            </div>
                            <span>92%</span>
                            <h4>HTML</h4>
                        </div>
                        <div class="col-xs-3 text-center">
                            <div class="progress progress-u vertical bottom">
                                <div class="progress-bar progress-bar-u" role="progressbar" data-height="81"></div>
                            </div>
                            <span>81%</span>
                            <h4>CSS</h4>
                        </div>
                    </div>
                </div>
            </div><!--/end row-->
        </div>
        <!--=== End Our Skills ===-->

        <!--=== Parallax Counter v4 ===-->
        <div class="parallax-counter-v4 parallaxBg">
            <div class="container content-sm">
                <div class="row">
                    <div class="col-md-3 col-xs-6 md-margin-bottom-50">
                        <i class="icon-cup"></i>
                        <span class="counter">265</span>
                        <h4>Coffee's Drunk</h4>
                    </div>
                    <div class="col-md-3 col-xs-6 md-margin-bottom-50">
                        <i class="icon-clock"></i>
                        <span class="counter">5957</span>
                        <h4>Working Hours</h4>
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <i class="icon-emoticon-smile"></i>
                        <span class="counter">3495</span>
                        <h4>Happy Clients</h4>
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <i class="icon-bulb"></i>
                        <span class="counter">576</span>
                        <h4>New Ideas</h4>
                    </div>
                </div><!--/end row-->
            </div><!--/end container-->
        </div>
        <!--=== End Parallax Counter v4 ===-->

        <!--=== Team v3 ===-->
        <div class="container content-sm">
            <div class="headline-center margin-bottom-60">
                <h2>MEET OUR TEAM</h2>
                <p>Phasellus vitae ipsum ex. Etiam eu vestibulum ante. <br>
                    Lorem ipsum <strong>dolor</strong> sit amet, consectetur adipiscing elit. Morbi libero libero, imperdiet fringilla </p>
            </div>

            <div class="row team-v3">
                <div class="col-md-3 col-sm-6 md-margin-bottom-50">
                    <div class="team-img">
                        <img class="img-responsive" src="assets/img/team/img1-md.jpg" alt="">
                        <div class="team-hover">
                            <span>Daniel Wearne</span>
                            <small>Technical Director</small>
                            <p>Lorem ipsum dolor sit ame con sectetur adipisci ng e lit.</p>
                            <ul class="list-inline team-social-v3">
                                <li><a href="#"><i class="rounded-x fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="rounded-x fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="rounded-x fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 md-margin-bottom-50">
                    <div class="team-img">
                        <img class="img-responsive" src="assets/img/team/img5-md.jpg" alt="">
                        <div class="team-hover">
                            <span>Sara Lisbon</span>
                            <small>Designer</small>
                            <p>Lorem ipsum dolor sit ame con sectetur adipisci ng e lit.</p>
                            <ul class="list-inline team-social-v3">
                                <li><a href="#"><i class="rounded-x fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="rounded-x fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="rounded-x fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 sm-margin-bottom-50">
                    <div class="team-img">
                        <img class="img-responsive" src="assets/img/team/img3-md.jpg" alt="">
                        <div class="team-hover">
                            <span>John Doe</span>
                            <small>Developer</small>
                            <p>Lorem ipsum dolor sit ame con sectetur adipisci ng e lit.</p>
                            <ul class="list-inline team-social-v3">
                                <li><a href="#"><i class="rounded-x fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="rounded-x fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="rounded-x fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="team-img">
                        <img class="img-responsive" src="assets/img/team/img2-md.jpg" alt="">
                        <div class="team-hover">
                            <span>Alice Williams</span>
                            <small>Support</small>
                            <p>Lorem ipsum dolor sit ame con sectetur adipisci ng e lit.</p>
                            <ul class="list-inline team-social-v3">
                                <li><a href="#"><i class="rounded-x fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="rounded-x fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="rounded-x fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div><!--/end row-->
        </div>
        <!--=== End Team v3 ===-->

        <!--=== Testimonials v6 ===-->
        <div class="bg-color-light">
            <div class="container content-sm">
                <div class="headline-center margin-bottom-60">
                    <h2>WHAT PEOPLE SAY</h2>
                    <p>Phasellus vitae ipsum ex. Etiam eu vestibulum ante. <br>
                        Lorem ipsum <strong>dolor</strong> sit amet, consectetur adipiscing elit. Morbi libero libero, imperdiet fringilla </p>
                </div>

                <!-- Testimonials Wrap -->
                <div class="testimonials-v6 testimonials-wrap">
                    <div class="row margin-bottom-50">
                        <div class="col-md-6 md-margin-bottom-50">
                            <div class="testimonials-info rounded-bottom">
                                <img class="rounded-x" src="assets/img/testimonials/img5.jpg" alt="">
                                <div class="testimonials-desc">
                                    <p>Donec quis lorem sit amet nibh tempor porttitor non eu justo. Fusce iaculis scelerisque nibh at rhoncus. Aliquam blandit.</p>
                                    <strong>Evan Bohringer</strong>
                                    <span>Web Developer</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="testimonials-info rounded-bottom">
                                <img class="rounded-x" src="assets/img/testimonials/img6.jpg" alt="">
                                <div class="testimonials-desc">
                                    <p>Donec quis lorem sit amet nibh tempor porttitor non eu justo. Fusce iaculis scelerisque nibh at rhoncus. Aliquam blandit.</p>
                                    <strong>Sara Lisbon</strong>
                                    <span>Designer</span>
                                </div>
                            </div>
                        </div>
                    </div><!--/end row-->

                    <div class="row margin-bottom-20">
                        <div class="col-md-6 md-margin-bottom-50">
                            <div class="testimonials-info rounded-bottom">
                                <img class="rounded-x" src="assets/img/testimonials/img3.jpg" alt="">
                                <div class="testimonials-desc">
                                    <p>Donec quis lorem sit amet nibh tempor porttitor non eu justo. Fusce iaculis scelerisque nibh at rhoncus. Aliquam blandit.</p>
                                    <strong>Alice Williams</strong>
                                    <span>Web Developer</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="testimonials-info rounded-bottom">
                                <img class="rounded-x" src="assets/img/testimonials/img2.jpg" alt="">
                                <div class="testimonials-desc">
                                    <p>Donec quis lorem sit amet nibh tempor porttitor non eu justo. Fusce iaculis scelerisque nibh at rhoncus. Aliquam blandit.</p>
                                    <strong>Jane Wearne</strong>
                                    <span>Technical Direector</span>
                                </div>
                            </div>
                        </div>
                    </div><!--/end row-->
                </div>
                <!-- End Testimonials Wrap -->
            </div><!--/end container-->
        </div>
        <!--=== End Testimonials v6 ===-->

        <!--=== Owl Clients v1 ===-->
        <div class="container content-sm">
            <div class="owl-clients-v1">
                <div class="item">
                    <img src="assets/img/clients4/1.png" alt="">
                </div>
                <div class="item">
                    <img src="assets/img/clients4/2.png" alt="">
                </div>
                <div class="item">
                    <img src="assets/img/clients4/3.png" alt="">
                </div>
                <div class="item">
                    <img src="assets/img/clients4/4.png" alt="">
                </div>
                <div class="item">
                    <img src="assets/img/clients4/5.png" alt="">
                </div>
                <div class="item">
                    <img src="assets/img/clients4/6.png" alt="">
                </div>
                <div class="item">
                    <img src="assets/img/clients4/7.png" alt="">
                </div>
                <div class="item">
                    <img src="assets/img/clients4/8.png" alt="">
                </div>
                <div class="item">
                    <img src="assets/img/clients4/9.png" alt="">
                </div>
            </div>
        </div>
        <!--=== End Owl Clients v1 ===-->

		<!--=== Footer Version 1 ===-->
		<?php
			include("appBlocks/footer.php");
		?>
		<!--=== End Footer Version 1 ===-->
	</div><!--/wrapper-->

	<!-- JS Global Compulsory -->
	<?php
		include("appCore/assetsJS.php");
	?>
    <script type="text/javascript" src="<?=$appRoot?>/assets/js/app.js"></script>
    <script type="text/javascript" src="<?=$appRoot?>/assets/js/plugins/progress-bar.js"></script>
    <script type="text/javascript" src="<?=$appRoot?>/assets/js/plugins/owl-carousel.js"></script>
    <script type="text/javascript" src="<?=$appRoot?>/assets/js/plugins/style-switcher.js"></script>

    <script type="text/javascript">
        jQuery(document).ready(function() {
            App.init();
            StyleSwitcher.initStyleSwitcher();
            App.initCounter();
            App.initParallaxBg();
            OwlCarousel.initOwlCarousel();
            StyleSwitcher.initStyleSwitcher();
            ProgressBar.initProgressBarVertical();
        });
    </script>
</body>
</html>