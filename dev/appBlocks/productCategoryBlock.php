<?php
    $dbHomeCategory = $dbHome->activeCategory("RAND() LIMIT 3");
?>
<style>
    .categoryBG
    {
        background-size: cover!important;
        background-position: center;
        background-repeat: no-repeat;
    }
</style>
<div class="container content-sm">
    <div class="row">

        <?php
            foreach ($dbHomeCategory['rsData'] as $key=>$categoryData) {
                ?>

                <div class="col-md-4 content-boxes-v6 md-margin-bottom-50">
                    <i class="rounded-x categoryBG" style="background-image: url('<?=$appRoot?>/images/category/<?=$categoryData['category_image']?>') "></i>
                    <h1 class="title-v3-md text-uppercase margin-bottom-10"><?=$categoryData['category_desc']?></h1>
                    <p><?=$categoryData['category_text']?></p>
                </div>

                <?php
            }
        ?>

    </div><!--/row-->
</div><!--/container-->