<?php
    $dbHomePartner = $dbHome->activePartner("RAND()");
?>
<style>
    .homeClientLogo
    {
        width: 200px!important;
        height: 200px!important;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        /*cursor: pointer;*/
    }
    .homeClientText
    {
        float: bottom;
        height: auto!important;
        background-color: rgba(0,0,0,0.5);;
        padding: 5px;
        color: #FFFFFF;
        font-family: "Helvetica Neue", Helvetica, "DejaVu Sans", Arial, sans-serif;
        font-weight: bold;
    }
</style>
<div class="container">
    <div class="headline-center-v2 headline-center-v2-dark">
        <h2>Our Partners</h2>
        <span class="bordered-icon"><i class="fa fa-th-large"></i></span>
    </div><!--/Headline Center v2-->

    <ul class="list-inline owl-carousel-v6 owl-slider-v6 margin-bottom-50" style="text-align: center!important;">

        <?php
            foreach ($dbHomePartner['rsData'] as $key=>$partnerData) {
        ?>
                <li class="owl-carousel-item">
                    <a href="<?=$appRoot?>/OurPartners/<?=str_replace(" ","-",$partnerData['partner_name'])?>">
                        <div class="homeClientLogo" style="background-image: url('<?=$appRoot?>/images/partnerLogo/<?=$partnerData['partner_logo']?>')"></div>
                        <div class="homeClientText"><?=$partnerData['partner_name']?></div>
                    </a>
                </li>
        <?php
            }
        ?>

    </ul>
</div><!--/container-->