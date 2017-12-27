<?php
    session_start();
    include ("../appConfig/appData.php");
    require("../appClasses/appGlobal.php");
    session_regenerate_id();

    $_SESSION['sesChk'] = session_id();
    $v_lgnError = false;
    if(isset($_SESSION['envAdminErrCode']))
    {
        $v_lgnError = true;
    }
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
<style>
    .boxshadow
    {
        -webkit-box-shadow: 10px 10px 23px 0 rgba(0,0,0,0.45);
        -moz-box-shadow: 10px 10px 23px 0 rgba(0,0,0,0.45);
        box-shadow: 10px 10px 23px 0 rgba(0,0,0,0.45);
    }
</style>
<body>
	<!--=== Content Part ===-->
	<div class="container">
		<!--Reg Block-->
        <form id="envAdminForm" action="appDataAPI/loginCheck" method="post" >
            <div class="reg-block boxshadow">
                <div class="reg-block-header">
                    <img src="images/appLogo/enviroflo_logo.svg">
                    <h2>Sign In</h2>
                </div>
                <div class="input-group margin-bottom-20">
                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                    <input id="email" name="email" type="text" data-validation="email" class="form-control formData" placeholder="Email" disabled>
                </div>

                <div class="input-group margin-bottom-20">
                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                    <input id="password" name="password" type="password" data-validation="length alphanumeric" data-validation-length="6-12" class="form-control formData" placeholder="Password" disabled>
                    <input type="hidden" id="dataCheck" name="dataCheck" value=<?=$_SESSION['sesChk']?>>
                </div>
                <hr>

                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <button type="submit" class="btn-u btn-block loginChk">Log In</button>
                    </div>
                </div>
            </div>
        </form>
		<!--End Reg Block-->
	</div><!--/container-->
	<!--=== End Content Part ===-->

    <!-- JS Global Compulsory -->
    <?php
        include("appCore/assetsJS.php");
    ?>
    <script type="text/javascript" src="<?=$appRoot?>/assets/plugins/form-validator/jquery.form-validator.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function()
        {
            $(".formData").removeAttr("disabled");

            $.validate({
                validateOnBlur : false,
                modules : 'security',
                onElementValidate : function(valid, $el, $form, errorMess)
                {
                    if(errorMess.length > 0)
                    {
                        toastr["error"](errorMess, "Oooops!");
                    }
                },
                onSuccess : function($form)
                {
                    console.log('teste');
                }
            });

            <? if($v_lgnError){ ?>
                toastr["error"]("<?=$_SESSION['envAdminErrCode']['msg']?> (<?=$_SESSION['envAdminErrCode']['code'];?>)","<?=$_SESSION['envAdminErrCode']['title']?>");

            <? } ?>


        });
    </script>
</body>
</html>
