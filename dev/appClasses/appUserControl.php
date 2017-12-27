<?php
/**
 * Created by PhpStorm.
 * User: Mauricio
 * Date: 14/10/2017
 * Time: 01:20
 */

namespace app\userControl;
use app\dbClass\appDBClass;
use app\userAccess\appUserLogin as appLoginCheck;

class appUserControl
{
    private $dbCon;
    private $appRoot;
    public function __construct()
    {
        $this->appRoot = (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'];
        $this->dbCon = new appDBClass();
    }

    public function getFeatureAccessList($userID,$clnt=300)
    {
        $query = "SELECT feature_id,feature_status,crud,feature_access_status FROM %appDBprefix%_admin_user_permission WHERE clnt=".$clnt." AND user_id=".$userID." AND feature_status = 1 AND feature_access_status = 1";
        $permission_array = $this->dbCon->dbSelect($query);

        $rtnArray = null;
        foreach($permission_array['rsData'] AS $key=>$permission_id)
        {
            $rtnArray[$permission_id['feature_id']] = $permission_id['crud'];
        }
        return $rtnArray;
    }

    public function getUserPageDefault($userID,$clnt=300)
    {
        $query = "SELECT feature_content_page FROM %appDBprefix%_view_user_data WHERE clnt=".$clnt." AND user_id=".$userID;
        $userDefaultPageData = $this->dbCon->dbSelect($query);
        return $userDefaultPageData['rsData'][0]['feature_content_page'];
    }

    public function getPageLink($pageName,$userID,$clnt=300)
    {
        $query = "SELECT feature_id, feature_content_page FROM %appDBprefix%_view_feature_access WHERE feature_desc = '".addslashes($pageName)."' AND clnt=".$clnt." AND user_id=".$userID;
        $userDefaultPageData = $this->dbCon->dbSelect($query);
        $admPageContent = null;

        if($userDefaultPageData['rsStatus']===true)
        {
            $admPageContent['pageDataID'] = $userDefaultPageData['rsData'][0]['feature_id'];
            $admPageContent['pageDataContent'] = $userDefaultPageData['rsData'][0]['feature_content_page'];
            return $admPageContent;
        }
        else
        {
            $dbHome = new appLoginCheck();
            $dbData = $dbHome->userSignOut($_SESSION['envUserID'],$_SESSION['userClnt']);
            if($dbData==true)
            {
                session_destroy();
                session_start();
                $v_dataRedirect = $this->appRoot."/__envAdmin/";
                $_SESSION['envAdminErrCode']['title'] = "Access Denied!";
                $_SESSION['envAdminErrCode']['code'] = "errNo.012";
                $_SESSION['envAdminErrCode']['msg'] = "Your Account doesn't have permission to access this feature. Contact your System Administrator.";
                header('Location:'.$v_dataRedirect);
            }
        }
    }

    public function getHomePageLayout()
    {
        return $this->dbCon->dbSelect("SELECT block_id, block_order, block_title, block_file, block_status FROM %appDBprefix%_home_block ORDER BY block_order ASC");
    }

    public function setHomePageLayout($type="reset",$blockOrder=null,$blockStatus=null)
    {
        if($type=="reset")
        {
            return $this->dbCon->dbUpdate("UPDATE %appDBprefix%_home_block SET block_order = block_id, block_status = 1;");
        }
        elseif($type=="update")
        {
            $vCount = 1;
            foreach($blockOrder as $blockID=>$orderID)
            {
                if(array_key_exists($blockID,$blockStatus))
                {
                    $vBlockStatus = 1;
                }
                else
                {
                    $vBlockStatus = 0;
                }
                $this->dbCon->dbUpdate("UPDATE %appDBprefix%_home_block SET block_order = ".$vCount.", block_status = ".$vBlockStatus." WHERE block_id = ".$blockID.";");
                $vCount++;
            }
            return true;
        }
    }

    public function getHomePageSlider($slideID=NULL)
    {
        $vWhere = "";
        if(!is_null($slideID))
        {
            $vWhere = 'WHERE slide_id = '.$slideID;
        }
        return $this->dbCon->dbSelect("SELECT slide_id, clnt, slide_order, slide_file, slide_title, slide_text, slide_link_01_title, slide_link_01_url, slide_link_02_title, slide_link_02_url, slide_status FROM %appDBprefix%_home_slider ".$vWhere." ORDER BY slide_order ASC, slide_order ASC");
    }

    public function delHomePageSlider($slideID=null)
    {
        if(is_null($slideID))
        {
            return false;
        }
        else
        {
            return $this->dbCon->dbDelete("DELETE FROM %appDBprefix%_home_slider WHERE slide_id=".$slideID);
        }
    }

    public function setHomePageSlider($slideOrder=null,$slideStatus=null)
    {
        $vCount = 1;
        foreach($slideOrder as $slideID=>$slideID)
        {
            if(array_key_exists($slideID,$slideStatus))
            {
                $vSlideStatus = 1;
            }
            else
            {
                $vSlideStatus = 0;
            }
            $this->dbCon->dbUpdate("UPDATE %appDBprefix%_home_slider SET slide_order = ".$vCount.", slide_status = ".$vSlideStatus." WHERE slide_id = ".$slideID.";");
            $vCount++;
         }
         return true;
    }

    public function setNewHomePageSlider($slideData,$slideName)
    {
        $vSlideTitle = !empty($_POST['frmSlideTitle']) ? addslashes($_POST['frmSlideTitle']) : null;
        $vSlideText = !empty($_POST['frmSlideText']) ? addslashes($_POST['frmSlideText']) : null;
        $vLinkBox1Title = !empty($_POST['frmLinkBox01Title']) ? addslashes($_POST['frmLinkBox01Title']) : null;
        $vLinkBox1Status = !empty($_POST['frmLinkBox01Status']) ? 1 : 0;
        $vLinkBox1Url = !empty($_POST['frmLinkBox01Url']) ? addslashes($_POST['frmLinkBox01Url']) : null;
        $vLinkBox2Title = !empty($_POST['frmLinkBox02Title']) ? addslashes($_POST['frmLinkBox02Title']) : null;
        $vLinkBox2Status = !empty($_POST['frmLinkBox02Status']) ? 1 : 0;
        $vLinkBox2Url = !empty($_POST['frmLinkBox02Url']) ? addslashes($_POST['frmLinkBox02Url']) : null;
        $vSlideStatus = !empty($_POST['frmSlideStatus']) ? 1 : 0;
        $vSlideName = $slideName;
        $vSlideOrder = 0;

        if($this->dbCon->dbInsert("INSERT INTO %appDBprefix%_home_slider (slide_order,slide_file,slide_title,slide_text,slide_link_01_title,slide_link_01_url,slide_link_01_status,slide_link_02_title,slide_link_02_url,slide_link_02_status,slide_status) VALUES ($vSlideOrder,'$vSlideName','$vSlideTitle','$vSlideText','$vLinkBox1Title','$vLinkBox1Url',$vLinkBox1Status,'$vLinkBox2Title','$vLinkBox2Url',$vLinkBox2Status,$vSlideStatus)"))
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function setHomePageSliderUpdate($slideData=null)
    {
        $vSlideID = $_REQUEST['slideID'];
        $vSlideTitle = !empty($_POST['frmSlideTitle']) ? addslashes($_POST['frmSlideTitle']) : null;
        $vSlideText = !empty($_POST['frmSlideText']) ? addslashes($_POST['frmSlideText']) : null;
        $vLinkBox1Title = !empty($_POST['frmLinkBox01Title']) ? addslashes($_POST['frmLinkBox01Title']) : null;
        $vLinkBox1Status = !empty($_POST['frmLinkBox01Status']) ? 1 : 0;
        $vLinkBox1Url = !empty($_POST['frmLinkBox01Url']) ? addslashes($_POST['frmLinkBox01Url']) : null;
        $vLinkBox2Title = !empty($_POST['frmLinkBox02Title']) ? addslashes($_POST['frmLinkBox02Title']) : null;
        $vLinkBox2Status = !empty($_POST['frmLinkBox02Status']) ? 1 : 0;
        $vLinkBox2Url = !empty($_POST['frmLinkBox02Url']) ? addslashes($_POST['frmLinkBox02Url']) : null;
        $vSlideStatus = !empty($_POST['frmLinkBox02Status']) ? 1 : 0;

        if($this->dbCon->dbInsert("UPDATE %appDBprefix%_home_slider SET slide_title='".$vSlideTitle."',slide_text='".$vSlideText."',slide_link_01_title='".$vLinkBox1Title."',slide_link_01_url='".$vLinkBox1Url."',slide_link_01_status=".$vLinkBox1Status.",slide_link_02_title='".$vLinkBox2Title."',slide_link_02_url='".$vLinkBox2Url."',slide_link_02_status=".$vLinkBox2Status.",slide_status=".$vSlideStatus." WHERE slide_id = ".$vSlideID))
        {
            return true;
        }
        else
        {
            return false;
        }
    }

}