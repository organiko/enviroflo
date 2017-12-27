<?php

    include ("appConfig/appData.php");
    require("appClasses/appGlobal.php");

    if($_REQUEST['checkIndexAccess']!='WelcomeToEnviroflo')
    {
        $v_newIndex = $appRoot.'/Welcome';
        header('Location: '.$v_newIndex);
    }
    use app\homeData\appHomePage as homeBlocks;
    $dbHome = new homeBlocks();
    $dbHomeBlock = $dbHome->activeBlocks();
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

        <?php
            foreach ($dbHomeBlock['rsData'] as $i=>$block)
            {
                include("appBlocks/".$block['block_file']);
            }
        ?>

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
