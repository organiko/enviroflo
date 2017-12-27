<?php
    session_start();
    include("../appConfig/appData.php");
    require("../appClasses/appGlobal.php");
    $_SESSION['sesChk'] = session_id();

    use app\userAccess\appUserLogin as appLoginCheck;
    use app\userControl\appUserControl as userControlData;

    $dbHome = new appLoginCheck();
    $vLgnCheck = $dbHome->userSessionCheck();
    $dbUserControl = new userControlData();
    $vFeatureList = $dbUserControl->getFeatureAccessList($_SESSION['envUserID'],$_SESSION['userClnt']);
    $vPageAction = !empty($_REQUEST['Action']) ? $_REQUEST['Action'] : "";
    $GLOBALS["v_pageContent"] = !empty($_REQUEST['Control']) ? $dbUserControl->getPageLink($_REQUEST['Control'],$_SESSION['envUserID'],$_SESSION['userClnt']) : $dbUserControl->getUserPageDefault($_SESSION['envUserID'],$_SESSION['userClnt']);
    $vContentPage = $GLOBALS["v_pageContent"]['pageDataContent'].$vPageAction;
?>
<!DOCTYPE html>
<html>
<head>
    <!--=== CSS & JS Global ===-->
    <?php
        include("appCore/admAppHead.php");
        include("appCore/admAssetsJS.php");
    ?>
    <!--=== CSS & JS Global ===-->
</head>
<body>
    <form action="appDataAPI" method="post" id="admPanelForm">
        <input type="hidden" id="dataSec" name="dataSec" value="">
    </form>
    <!-- Navbar -->
    <?php
        include("appCore/admAppNavbar.php");
    ?>

    <!-- End Navbar -->

	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
        <!-- Profile Data -->
        <?php
            include("appCore/admAppProfile.php");
        ?>
        <!-- Profile Data End -->

        <!-- Adm Search -->
        <?php
            if(array_key_exists ( 3 ,$vFeatureList))// Search
            {
                include("appCore/admAppSearch.php");
            }
        ?>
        <!-- Adm Search End -->

        <!-- Adm Side Menu -->
        <?php
            include("appCore/admAppMenu.php");
        ?>
        <!-- Adm Side Menu End -->
	</div>

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main admMainContent">
    <!-- Page Content -->
       <?php
            include("appCore/".$vContentPage.".php");
        ?>
    <!-- Page Content End -->
    </div>	<!--/.main-->

</body>
</html>