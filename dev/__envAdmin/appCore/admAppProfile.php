<?php


    if($_SESSION['userAvatar']=="avatar_default.png")
    {
        $v_avatar = $appRoot."/__envAdmin/images/".$_SESSION['userAvatar'];
    }
    else
    {
        $v_avatar = $appRoot."/__envAdmin/appCore/avatar/".md5($_SESSION['userClnt'])."/".$_SESSION['userAvatar'];
    }

?>

<div class="profile-sidebar">
    <div class="profile-userpic">
        <img src="<?=$v_avatar?>" class="img-responsive" alt="">
    </div>
    <div class="profile-usertitle">
        <div class="profile-usertitle-name"><?=$_SESSION['userName']?></div>
        <div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
    </div>
    <div class="clear"></div>
</div>
<div class="divider"></div>