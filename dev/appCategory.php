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


        <!--=== Breadcrumbs v3 ===-->
        <div class="breadcrumbs-v3 img-v1">
            <div class="container text-center">
                <p><?=$vAppSec?></p>
                <h1>Portfolio 3 Columns Grid Text</h1>
            </div><!--/end container-->
        </div>
        <!--=== End Breadcrumbs v3 ===-->

        <!--=== Cube-Portfdlio ===-->
        <div class="cube-portfolio container margin-bottom-60">
            <div class="content-xs">
                <div id="filters-container" class="cbp-l-filters-text content-xs">
                    <div data-filter="*" class="cbp-filter-item-active cbp-filter-item"> All </div> |
                    <div data-filter=".identity" class="cbp-filter-item"> Identity </div> |
                    <div data-filter=".web-design" class="cbp-filter-item"> Web Design </div> |
                    <div data-filter=".graphic" class="cbp-filter-item"> Graphic </div> |
                    <div data-filter=".logos" class="cbp-filter-item"> Logo </div>
                </div><!--/end Filters Container-->
            </div>

            <div id="grid-container" class="cbp-l-grid-agency">
                <div class="cbp-item graphic">
                    <div class="cbp-caption margin-bottom-20">
                        <div class="cbp-caption-defaultWrap">
                            <img src="<?=$appRoot?>/assets/img/main/img3.jpg" alt="">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">
                                    <ul class="link-captions no-bottom-space">
                                        <li><a href="portfolio_single_item.html"><i class="rounded-x fa fa-link"></i></a></li>
                                        <li><a href="<?=$appRoot?>/assets/img/main/img3.jpg" class="cbp-lightbox" data-title="Design Object"><i class="rounded-x fa fa-search"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cbp-title-dark">
                        <div class="cbp-l-grid-agency-title">Design Object 01</div>
                        <div class="cbp-l-grid-agency-desc">Web Design</div>
                    </div>
                </div>
                <div class="cbp-item web-design logos">
                    <div class="cbp-caption margin-bottom-20">
                        <div class="cbp-caption-defaultWrap">
                            <img src="<?=$appRoot?>/assets/img/main/img8.jpg" alt="">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">
                                    <ul class="link-captions no-bottom-space">
                                        <li><a href="portfolio_single_item.html"><i class="rounded-x fa fa-link"></i></a></li>
                                        <li><a href="<?=$appRoot?>/assets/img/main/img8.jpg" class="cbp-lightbox" data-title="Design Object"><i class="rounded-x fa fa-search"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cbp-title-dark">
                        <div class="cbp-l-grid-agency-title">Design Object 02</div>
                        <div class="cbp-l-grid-agency-desc">Web Design</div>
                    </div>
                </div>
                <div class="cbp-item graphic logos">
                    <div class="cbp-caption margin-bottom-20">
                        <div class="cbp-caption-defaultWrap">
                            <img src="<?=$appRoot?>/assets/img/main/img9.jpg" alt="">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">
                                    <ul class="link-captions no-bottom-space">
                                        <li><a href="portfolio_single_item.html"><i class="rounded-x fa fa-link"></i></a></li>
                                        <li><a href="<?=$appRoot?>/assets/img/main/img9.jpg" class="cbp-lightbox" data-title="Design Object"><i class="rounded-x fa fa-search"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cbp-title-dark">
                        <div class="cbp-l-grid-agency-title">Design Object 03</div>
                        <div class="cbp-l-grid-agency-desc">Web Design</div>
                    </div>
                </div>
                <div class="cbp-item web-design graphic">
                    <div class="cbp-caption margin-bottom-20">
                        <div class="cbp-caption-defaultWrap">
                            <img src="<?=$appRoot?>/assets/img/main/img10.jpg" alt="">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">
                                    <ul class="link-captions no-bottom-space">
                                        <li><a href="portfolio_single_item.html"><i class="rounded-x fa fa-link"></i></a></li>
                                        <li><a href="<?=$appRoot?>/assets/img/main/img10.jpg" class="cbp-lightbox" data-title="Design Object"><i class="rounded-x fa fa-search"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cbp-title-dark">
                        <div class="cbp-l-grid-agency-title">Design Object 04</div>
                        <div class="cbp-l-grid-agency-desc">Web Design</div>
                    </div>
                </div>
                <div class="cbp-item identity web-design">
                    <div class="cbp-caption margin-bottom-20">
                        <div class="cbp-caption-defaultWrap">
                            <img src="<?=$appRoot?>/assets/img/main/img11.jpg" alt="">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">
                                    <ul class="link-captions no-bottom-space">
                                        <li><a href="portfolio_single_item.html"><i class="rounded-x fa fa-link"></i></a></li>
                                        <li><a href="<?=$appRoot?>/assets/img/main/img11.jpg" class="cbp-lightbox" data-title="Design Object"><i class="rounded-x fa fa-search"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cbp-title-dark">
                        <div class="cbp-l-grid-agency-title">Design Object 05</div>
                        <div class="cbp-l-grid-agency-desc">Web Design</div>
                    </div>
                </div>
                <div class="cbp-item identity web-design">
                    <div class="cbp-caption margin-bottom-20">
                        <div class="cbp-caption-defaultWrap">
                            <img src="<?=$appRoot?>/assets/img/main/img12.jpg" alt="">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">
                                    <ul class="link-captions no-bottom-space">
                                        <li><a href="portfolio_single_item.html"><i class="rounded-x fa fa-link"></i></a></li>
                                        <li><a href="<?=$appRoot?>/assets/img/main/img12.jpg" class="cbp-lightbox" data-title="Design Object"><i class="rounded-x fa fa-search"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cbp-title-dark">
                        <div class="cbp-l-grid-agency-title">Design Object 06</div>
                        <div class="cbp-l-grid-agency-desc">Web Design</div>
                    </div>
                </div>
                <div class="cbp-item web-design identity">
                    <div class="cbp-caption margin-bottom-20">
                        <div class="cbp-caption-defaultWrap">
                            <img src="<?=$appRoot?>/assets/img/main/img18.jpg" alt="">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">
                                    <ul class="link-captions no-bottom-space">
                                        <li><a href="portfolio_single_item.html"><i class="rounded-x fa fa-link"></i></a></li>
                                        <li><a href="<?=$appRoot?>/assets/img/main/img18.jpg" class="cbp-lightbox" data-title="Design Object"><i class="rounded-x fa fa-search"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cbp-title-dark">
                        <div class="cbp-l-grid-agency-title">Design Object 07</div>
                        <div class="cbp-l-grid-agency-desc">Web Design</div>
                    </div>
                </div>
                <div class="cbp-item identity logo">
                    <div class="cbp-caption margin-bottom-20">
                        <div class="cbp-caption-defaultWrap">
                            <img src="<?=$appRoot?>/assets/img/main/img19.jpg" alt="">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">
                                    <ul class="link-captions no-bottom-space">
                                        <li><a href="portfolio_single_item.html"><i class="rounded-x fa fa-link"></i></a></li>
                                        <li><a href="<?=$appRoot?>/assets/img/main/img19.jpg" class="cbp-lightbox" data-title="Design Object"><i class="rounded-x fa fa-search"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cbp-title-dark">
                        <div class="cbp-l-grid-agency-title">Design Object 08</div>
                        <div class="cbp-l-grid-agency-desc">Web Design</div>
                    </div>
                </div>
                <div class="cbp-item graphic">
                    <div class="cbp-caption margin-bottom-20">
                        <div class="cbp-caption-defaultWrap">
                            <img src="<?=$appRoot?>/assets/img/main/img20.jpg" alt="">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">
                                    <ul class="link-captions no-bottom-space">
                                        <li><a href="portfolio_single_item.html"><i class="rounded-x fa fa-link"></i></a></li>
                                        <li><a href="<?=$appRoot?>/assets/img/main/img20.jpg" class="cbp-lightbox" data-title="Design Object"><i class="rounded-x fa fa-search"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cbp-title-dark">
                        <div class="cbp-l-grid-agency-title">Design Object 09</div>
                        <div class="cbp-l-grid-agency-desc">Web Design</div>
                    </div>
                </div>
            </div><!--/end Grid Container-->
        </div>
        <!--=== End Cube-Portfdlio ===-->


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
    <script type="text/javascript" src="<?=$appRoot?>/assets/plugins/cube-portfolio/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
    <script type="text/javascript" src="<?=$appRoot?>/assets/js/app.js"></script>
    <script type="text/javascript" src="<?=$appRoot?>/assets/js/plugins/cube-portfolio/cube-portfolio-3.js"></script>
    <script type="text/javascript" src="<?=$appRoot?>/assets/js/plugins/style-switcher.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            App.init();
            StyleSwitcher.initStyleSwitcher();
        });
    </script>
</body>
</html>