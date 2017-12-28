<?php
    $dbHomeClient = $dbHome->activeClients("RAND()");
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
        <h2>Our Clients</h2>
        <span class="bordered-icon"><i class="fa fa-th-large"></i></span>
    </div><!--/Headline Center v2-->

    <ul class="list-inline owl-carousel-v6 owl-slider-v6 margin-bottom-50">

        <?php
            foreach ($dbHomeClient['rsData'] as $key=>$clientData) {
        ?>
                <li class="owl-carousel-item">
                    <a href="<?=$appRoot?>/OurClients/<?=str_replace(" ","-",$clientData['client_name'])?>">
                        <div class="homeClientLogo" style="background-image: url('<?=$appRoot?>/images/clientLogo/<?=$clientData['client_logo']?>')"></div>
                        <div class="homeClientText"><?=$clientData['client_name']?></div>
                    </a>
                </li>
        <?php
            }
        ?>

    </ul>
</div><!--/container-->