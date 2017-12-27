<?php
/**
 * Created by PhpStorm.
 * User: Mauricio
 * Date: 09/10/2017
 * Time: 19:50
 */

namespace app\userAccess;
use app\dbClass\appDBClass;

class appUserLogin
{
    private $dbCon;
    public function __construct()
    {
        $this->dbCon = new appDBClass();
    }

    public function userLoginCheck($userLgn,$userPwd,$clnt=300)
    {
        $query = "SELECT user_id,clnt,userLogin,userName,userAvatar FROM %appDBprefix%_view_user_data WHERE clnt=" . $clnt . " AND userLogin='" . $userLgn . "' AND userPwd='" . md5($userPwd) . "' AND userStatus=1 AND ok=0";
        return $this->dbCon->dbSelect($query);
    }

    public function userProfileList($userID,$clnt=300)
    {
        $query = "SELECT profile_id FROM %appDBprefix%_admin_user_profile WHERE clnt=".$clnt." AND user_id=".$userID;
        $profile_array = $this->dbCon->dbSelect($query);
        $rtnArray = null;
        foreach($profile_array['rsData'] AS $key=>$profile_id)
        {
            $rtnArray[] = $profile_id['profile_id'];
        }
        return $rtnArray;
    }

    public function setUserSession($userID,$sessID,$clnt=300)
    {
        $query = "UPDATE %appDBprefix%_admin_user_data SET sessID = '".$sessID."' WHERE clnt=".$clnt." AND user_id=".$userID;
        return $this->dbCon->dbUpdate($query);
    }

    public function getUserSession($userID,$clnt=300)
    {
        $query = "SELECT sessID FROM %appDBprefix%_admin_user_data WHERE user_id = ".$userID." AND clnt = ".$clnt;
        return $this->dbCon->dbSelect($query);
    }

    public function userSessionCheck()
    {
        $dateCheck = md5(date("Ymd"));

        if(isset($_SESSION['envLgnChk']) && isset($_SESSION['dateToken']) && isset($_SESSION['envUserID']) && isset($_SESSION['userName']) && isset($_SESSION['userIP']) && isset($_SESSION['userLogin']) && isset($_SESSION['userClnt']) && isset($_SESSION['userProfileData']))
        {
            if($dateCheck===$_SESSION['dateToken'])
            {
                $v_sessData = $this->getUserSession($_SESSION['envUserID'],$_SESSION['userClnt']);
                $v_sessID = $v_sessData['rsData'][0]['sessID'];
                if($v_sessID===$_SESSION['envLgnChk'])
                {
                    return true;
                }
                else
                {
                    $dbData = $this->userSignOut($_SESSION['envUserID'],$_SESSION['userClnt']);
                    if($dbData==true)
                    {
                        session_destroy();
                        header('Location: '.$GLOBALS["appRoot"].'/__envAdmin/');
                    }
                }
            }
            else
            {
                $dbData = $this->userSignOut($_SESSION['envUserID'],$_SESSION['userClnt']);
                if($dbData==true)
                {
                    session_destroy();
                    header('Location: '.$GLOBALS["appRoot"].'/__envAdmin/');
                }
            }
        }
        else
        {
            session_destroy();
            header('Location: '.$GLOBALS["appRoot"].'/__envAdmin/');
        }
    }

    public function userSignOut($userID,$clnt=300)
    {
        $query = "UPDATE %appDBprefix%_admin_user_data SET sessID = NULL WHERE clnt=".$clnt." AND user_id=".$userID;
        return $this->dbCon->dbUpdate($query);
    }

}