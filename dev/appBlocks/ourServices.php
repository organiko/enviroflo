<?php
    $dbHomeService = $dbHome->activeService("RAND() LIMIT 6");
?>
<style>
    .serviceBG
    {
        background-size: cover!important;
        background-position: center;
        background-repeat: no-repeat;
    }
</style>
<div class="container">
    <div class="headline-center-v2 headline-center-v2-dark margin-bottom-60">
        <h2>Our Services</h2>
        <span class="bordered-icon"><i class="fa fa-th-large"></i></span>
    </div><!--/Headline Center v2-->

    <div class="row margin-bottom-60">
        <?php
            foreach ($dbHomeService['rsData'] as $key=>$serviceData) {
                ?>
                <div class="col-sm-4" style="margin-bottom: 60px!important;">
                    <div class="service-block-v1 md-margin-bottom-50" style="min-height:320px!important;">
                        <i class="rounded-x serviceBG" style="background-image: url('<?=$appRoot?>/images/service/<?=$serviceData['service_image']?>') "></i>
                        <h3 class="title-v3-bg text-uppercase"><?=$serviceData['service_name'] ?></h3>
                        <p><?=$serviceData['service_home_text'] ?></p>
                        <div style="left: 0px!important; position: absolute!important;bottom: 20px!important; width: 100%!important; padding-left: 0px!important; display: table-cell!important;">
                            <a class="text-uppercase" href="#">Read More</a>
                        </div>
                    </div>
                </div>
        <?php
            }
        ?>
    </div><!--/row-->
</div><!--/container-->