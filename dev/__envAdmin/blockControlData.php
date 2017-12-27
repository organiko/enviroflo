<?php
/**
 * Created by PhpStorm.
 * User: Mauricio
 * Date: 02/10/2017
 * Time: 22:51
 */
session_start();
include($_SERVER['DOCUMENT_ROOT'] . "/appConfig/appData.php");
require($_SERVER['DOCUMENT_ROOT'] . "/appClasses/appGlobal.php");

use app\userAccess\appUserLogin as appLoginCheck;
use app\userControl\appUserControl;

$v_dataSec = !empty($_REQUEST['dataSec']) ? $_REQUEST['dataSec'] : NULL;

/*
echo "v_dataSec = ".$v_dataSec;
die();
*/

if($v_dataSec!=="loginCheck")
{
    $dbHome = new appLoginCheck();
    $vLgnCheck = $dbHome->userSessionCheck();
}

$v_dataRedirect = "<script>location.href = '".$appRoot."/__envAdmin/'</script>";

if(is_null($v_dataSec)){ die($v_dataRedirect); }

elseif ($v_dataSec=="loginCheck")
{
    $v_lgn = !empty($_POST['email']) ? $_POST['email'] : null;
    $v_pwd = !empty($_POST['password']) ? $_POST['password'] : null;
    $v_chk = !empty($_POST['dataCheck']) ? $_POST['dataCheck'] : null;
    $v_sesCheck = session_id();

    if($v_chk === $v_sesCheck)
    {
        $dbHome = new appLoginCheck();
        $dbData = $dbHome->userLoginCheck($v_lgn,$v_pwd);

        if($dbData['rsStatus']===true)
        {
            $v_userData = $dbData['rsData'][0];
            unset($_SESSION['envAdminErrCode']);
            $_SESSION['envLgnChk'] = "env-".session_id();
            $_SESSION['dateToken'] = md5(date("Ymd"));
            $_SESSION['envUserID'] = $v_userData['user_id'];
            $_SESSION['userName'] = $v_userData['userName'];
            $_SESSION['userIP'] = $_SERVER['REMOTE_ADDR'];
            $_SESSION['userLogin'] = $v_userData['userLogin'];
            $_SESSION['userClnt'] = $v_userData['clnt'];
            $_SESSION['userAvatar'] = $v_userData['userAvatar'];
            $_SESSION['userProfileData'] = $dbHome->userProfileList($v_userData['user_id'],$v_userData['clnt']);



            $dbUserSession = $dbHome->setUserSession($v_userData['user_id'],$_SESSION['envLgnChk'],$v_userData['clnt']);

            if($dbUserSession===true)
            {
                header('Location: ../adminPanel/Dashboard');
            }
            else
            {
                $_SESSION['envAdminErrCode']['title'] = "Ooops!";
                $_SESSION['envAdminErrCode']['code'] = "errNo.011";
                $_SESSION['envAdminErrCode']['msg'] = "Something went wrong! Please try again.";
                header('Location: ../');
            }
            header('Location: ../adminPanel/Dashboard');
        }
        else
        {
            $_SESSION['envAdminErrCode']['title'] = "Ooops!";
            $_SESSION['envAdminErrCode']['code'] = "errNo.010";
            $_SESSION['envAdminErrCode']['msg'] = "Wrong username or password. Please try again.";
            header('Location: '.$appRoot.'/__envAdmin/');

        }
    }

}

elseif($v_dataSec=="admAppQuit")
{

    $dbHome = new appLoginCheck();
    $dbData = $dbHome->userSignOut($_SESSION['envUserID'],$_SESSION['userClnt']);

    if($dbData==true)
    {
        session_destroy();
        header('Location: '.$appRoot.'/__envAdmin/');
    }
}

elseif($v_dataSec=="admHomePageLayout")
{
    $vBlockUpdateType = $_POST['actionType'];
    $dbHome = new appUserControl();

    if($vBlockUpdateType==="blockReset")
    {
        if($dbHome->setHomePageLayout("reset"))
        {
            header('Location: ../adminPanel/HomePageLayout');
        }
    }
    elseif($vBlockUpdateType==="blockUpdate")
    {
        $vBlockOrderArray = !empty($_POST['hpBlockOrder']) ? $_POST['hpBlockOrder'] : null;
        $vBlockStatusArray = !empty($_POST['hpBlockStatus']) ? $_POST['hpBlockStatus'] : null;
        if($dbHome->setHomePageLayout("update",$vBlockOrderArray,$vBlockStatusArray))
        {
            header('Location: ../adminPanel/HomePageLayout');
        }
    }
}

elseif($v_dataSec=="admHomeSliderOrder")
{
    $vSliderUpdateType = $_POST['actionType'];
    $dbHome = new appUserControl();
    $vSlideOrderArray = !empty($_POST['hpSlideOrder']) ? $_POST['hpSlideOrder'] : null;
    $vSlideStatusArray = !empty($_POST['hpSlideStatus']) ? $_POST['hpSlideStatus'] : null;
    if($dbHome->setHomePageSlider($vSlideOrderArray,$vSlideStatusArray))
    {
        header('Location: ../adminPanel/HomePageSlider');
    }
}

elseif($v_dataSec=="admHomeSlideDelete")
{
    $vSlideID = !empty($_REQUEST['slideID']) ? $_REQUEST['slideID'] : null;
    $vImageFile = !empty($_REQUEST['imageFile']) ? $_REQUEST['imageFile'] : null;
    $vServer = $_SERVER["DOCUMENT_ROOT"];
    $vImageFilePath = $vServer."/images/homeSlider/".$vImageFile.".jpg";
    $dbHome = new appUserControl();

    if($dbHome->delHomePageSlider($vSlideID))
    {
        if(file_exists($vImageFilePath))
        {
            unlink($vImageFilePath);
        }
        $vReturn['actionCheck'] = true;
    }
    else
    {
        $vReturn['actionCheck'] = false;
    }
    echo json_encode($vReturn['actionCheck']);
}

elseif($v_dataSec=="admHomeSlideAdd")
{
    $vActionType = !empty($_POST['actionType']) ? $_POST['actionType'] : 'slideInsert';
    $vServer = $_SERVER["DOCUMENT_ROOT"]."/images/homeSlider/";
    $vFileData = pathinfo($_FILES['file']['name']);
    $vFileExt = $vFileData['extension'];
    $vSlideName = "homeSlide_".date('Ymdhis').".".$vFileExt;
    $vNewSlideTarget = $vServer.$vSlideName;

    if(move_uploaded_file( $_FILES['file']['tmp_name'], $vNewSlideTarget))
    {
        $dbHome = new appUserControl();

        if($dbHome->setNewHomePageSlider($_REQUEST,$vSlideName))
        {
            echo true;
        }
        else
        {
            echo false;
        }
    }
    else
    {
        echo false;
    }
}

elseif($v_dataSec=="admHomeSlideUpdate")
{
    $vActionType = !empty($_POST['actionType']) ? $_POST['actionType'] : 'slideUpdate';
    $vServer = $_SERVER["DOCUMENT_ROOT"]."/images/homeSlider/";
    $dbHome = new appUserControl();
    if($dbHome->setHomePageSliderUpdate($_REQUEST))
    {
        header('Location: ../adminPanel/HomePageSlider');
    }
}