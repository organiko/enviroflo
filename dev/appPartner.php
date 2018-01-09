<?php
    include ("appConfig/appData.php");
    require("appClasses/appGlobal.php");

    use app\homeData\appHomePage as homeBlocks;
    $dbCon = new homeBlocks();
    $dbHomePartner = $dbCon->activePartner();
    $partnerSec = str_replace("-"," ",$_REQUEST['appSec']);
    $partnerID = $_REQUEST['appSec'];
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
	<!--=== End Slider ===-->
</head>
<body>
	<div class="wrapper">
		<!--=== Header ===-->
		<?php
			include("appBlocks/header.php");
		?>
		<!--=== End Header ===-->

        <!--=== Breadcrumbs ===-->
        <div class="breadcrumbs">
            <div class="container">
                <h1 class="pull-left">Our Partners</h1>
                <ul class="pull-right breadcrumb">
                    <li><a href="<?=$appRoot?>">Home</a></li>
                    <li class="active">Our Partners</li>
                </ul>
            </div>
        </div><!--/breadcrumbs-->

        <!--=== Content Part ===-->
        <div class="container content">
            <div class="row">
                <div class="col-md-9">
                    <?php
                        foreach ($dbHomePartner['rsData'] as $key=>$partnerData) {
                            ?>

                            <!-- Clients Block-->
                            <div class="row clients-page" style="padding-bottom: 20px;">
                                <div class="col-md-2">
                                    <img src="<?=$appRoot?>/images/partnerLogo/<?=$partnerData['partner_logo']?>" class="img-responsive hover-effect" alt="<?=$partnerData['partner_name']?>"/>
                                </div>
                                <div class="col-md-10">
                                    <h3 class="<?=str_replace(" ","-",$partnerData['partner_name'])?>"><strong><?=$partnerData['partner_name']?></strong></h3>
                                    <ul class="list-inline">
                                        <li><i class="fa fa-map-marker color-green"></i> <?=$partnerData['partner_country']?></li>
                                        <li><i class="fa fa-globe color-green"></i> <a class="linked" target="_blank" href="<?=$partnerData['partner_url']?>"><?=$partnerData['partner_url']?></a>
                                        </li>
                                        <li><i class="fa fa-briefcase color-green"></i> <?=$partnerData['partner_market']?>
                                        </li>
                                    </ul>
                                    <p><?=$partnerData['partner_text']?></p>
                                </div>
                            </div>
                            <!-- End Clients Block-->

                            <?php
                        }
                    ?>

                    <!-- Pagination -->
                    <!--
                    <div class="text-center md-margin-bottom-30">
                        <ul class="pagination">
                            <li><a href="#">«</a></li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li class="active"><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">»</a></li>
                        </ul>
                    </div>
                    -->
                    <!-- End Pagination -->
                </div><!--/col-md-9-->

                <div class="col-md-3">

                    <!-- Our Services -->
                    <!--
                    <div class="who margin-bottom-30">
                        <div class="headline"><h2>Our Services</h2></div>
                        <p>At vero eos et accusamus et iusto odio dign issimos ducimus qui blanditiis iusto.</p>
                        <ul class="list-unstyled">
                            <li><a href="#"><i class="fa fa-desktop"></i>Vivamus imperdiet condimentum</a></li>
                            <li><a href="#"><i class="fa fa-bullhorn"></i>Anim pariatur cliche squid</a></li>
                            <li><a href="#"><i class="fa fa-globe"></i>Eget placerat felis consectetur</a></li>
                            <li><a href="#"><i class="fa fa-group"></i>Condimentum diam eget placerat</a></li>
                        </ul>
                    </div>
                    -->
                    <!-- About Us -->
                    <!--
                    <div class="headline"><h2>About Us</h2></div>
                    -->
                    <!--
                    <div class="margin-bottom-30">
                        <p>At vero eos et acc usamus et iusto odio dign issimos ducimus atque corrupti quos.</p>
                        <p>dolores etrerum facilis est etenim a feugiat cupiditate non quos. <a class="linked color-green" href="#">Read more</a></p>
                    </div>
                    -->

                    <!-- Contact Us -->
                    <!--
                    <div class="who margin-bottom-30">
                        <div class="headline"><h2>Contact Us</h2></div>
                        <p>Vero facilis est etenim a feugiat cupiditate non quos etrerum facilis.</p>
                        <ul class="list-unstyled">
                            <li><a href="#"><i class="fa fa-home"></i>5B amus ED554, New York, US</a></li>
                            <li><a href="#"><i class="fa fa-envelope-o"></i>infp@example.com</a></li>
                            <li><a href="#"><i class="fa fa-phone"></i>1(222) 5x86 x97x</a></li>
                            <li><a href="#"><i class="fa fa-globe"></i>http://www.example.com</a></li>
                        </ul>
                    </div>
                    -->

                </div><!--/col-md-3-->
            </div><!--/row-->
        </div><!--/container-->
        <!--=== End Content Part ===-->


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
    <script type="text/javascript">

        jQuery(document).ready(function()
        {
            document.querySelector('.<?=$partnerID?>').scrollIntoView({ behavior: 'smooth' });
        });


    </script>
</body>
</html>