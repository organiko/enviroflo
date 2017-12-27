<?php
    $dbHomeSlider = $dbHome->activeSlides();
?>
<div class="tp-banner-container">
			<div class="tp-banner">
				<ul>
                    <?
                        foreach ($dbHomeSlider['rsData'] as $key=>$slideData)
                        {
                    ?>
                            <!-- SLIDE -->
                            <li class="revolution-mch-1" data-transition="fade" data-slotamount="5"
                                data-masterspeed="1000" data-title="<?=$slideData['slide_title']?>">
                                <!-- MAIN IMAGE -->
                                <img src="images/homeSlider/<?=$slideData['slide_file']?>" alt="darkblurbg"
                                     data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                                <div class="tp-caption revolution-ch1 sft start"
                                     data-x="center"
                                     data-hoffset="0"
                                     data-y="100"
                                     data-speed="1500"
                                     data-start="500"
                                     data-easing="Back.easeInOut"
                                     data-endeasing="Power1.easeIn"
                                     data-endspeed="300">
                                    <?=$slideData['slide_title']?>
                                </div>

                                <!-- LAYER -->
                                <div class="tp-caption revolution-ch2 sft"
                                     data-x="center"
                                     data-hoffset="0"
                                     data-y="190"
                                     data-speed="1400"
                                     data-start="2000"
                                     data-easing="Power4.easeOut"
                                     data-endspeed="300"
                                     data-endeasing="Power1.easeIn"
                                     data-captionhidden="off"
                                     style="z-index: 6; white-space: normal!important;">
                                    <?=$slideData['slide_text']?>
                                </div>

                                <!-- LAYER -->
                                <div class="tp-caption sft"
                                     data-x="center"
                                     data-hoffset="0"
                                     data-y="310"
                                     data-speed="1600"
                                     data-start="2800"
                                     data-easing="Power4.easeOut"
                                     data-endspeed="300"
                                     data-endeasing="Power1.easeIn"
                                     data-captionhidden="off"
                                     style="z-index: 6">
                                    <? if(!is_null($slideData['slide_link_01_title'])){ ?>
                                    <a href="<?=$slideData['slide_link_01_url']?>" class="btn-u btn-brd btn-brd-hover btn-u-light"><?=$slideData['slide_link_01_title']?></a>
                                    <? } ?>
                                    <? if(!is_null($slideData['slide_link_02_title'])){ ?>
                                        <a href="<?=$slideData['slide_link_02_url']?>" class="btn-u btn-brd btn-brd-hover btn-u-light"><?=$slideData['slide_link_02_title']?></a>
                                    <? } ?>
                                </div>
                            </li>
                            <!-- END SLIDE -->
                            <?
                                }
                            ?>

				</ul>
				<div class="tp-bannertimer tp-bottom"></div>
			</div>
		</div>