<?php
    require("appClasses/appGlobal.php");
    use appHome\appHomePage as homeBlocks;

    $dbHome = new homeBlocks();
    $dbData = $dbHome->activeBlocks();
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

   		<!--=== Slider ===-->
		<?php
			include("appBlocks/mainSlider.php");
		?>
		<!--=== End Slider ===-->

        <!--=== Service Block ===-->
        <?php
            include("appBlocks/serviceBlock.php");
        ?>
        <!--=== End Service Block ===-->

        <!--=== Intro Block ===-->
        <?php
            include("appBlocks/introBlock.php");
        ?>
        <!--=== End Intro Block ===-->

        <!--=== Recent Posts ===-->
        <?php
            include("appBlocks/recentPosts.php");
        ?>
        <!--=== End Recent Posts ===-->

        <!--=== Service Info ===-->
        <?php
            include("appBlocks/serviceInfo.php");
        ?>
        <!--=== End Service Info ===-->

        <!--=== Portfolio Box c2 ===-->
        <?php
            include("appBlocks/portfolioBox.php");
        ?>
        <!--=== End Portfolio Box c2 ===-->

        <!--=== Call To Action ===-->
        <?php
            include("appBlocks/callAction.php");
        ?>
        <!--=== End Call To Action ===-->

        <!--=== Our Services ===-->
        <?php
            include("appBlocks/ourServices.php");
        ?>
        <!--=== End Our Services ===-->

        <!--=== Testimonials Section ===-->
        <?php
            include("appBlocks/testimonialSection.php");
        ?>
        <!--=== End Testimonials Section ===-->

        <!--=== Our Clients ===-->
        <?php
            include("appBlocks/ourClients.php");
        ?>
        <!--=== End Our Clients ===-->

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
</body>
</html>
