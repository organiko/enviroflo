<?php
    $v_pSec = isset($GLOBALS["v_pageContent"]['pageDataID']) ? $GLOBALS["v_pageContent"]['pageDataID'] : 6;
?>

<style>
    a.admSideMenu:hover
    {
        background-color: #a69f9f !important;
    }
</style>

<ul class="nav menu">
    <li class="<? if($v_pSec==6){ echo "active"; } ?>"><a href="<?=$appRoot?>/__envAdmin/adminPanel/Dashboard" class="admSideMenu"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>

    <li class="parent">
        <a data-toggle="collapse" href="#HomePageBlocksPosition" <? if($v_pSec==5){ ?>aria-expanded="true"<? } ?> class="admSideMenu">
            <em class="fa fa-navicon">&nbsp;</em> Home Settings <span data-toggle="collapse" href="#HomePageBlocksPosition" class="icon pull-right"><em class="fa <? if($v_pSec==5){ ?>fa-minus<? }else{ ?>fa-plus<? } ?>"></em></span>
        </a>
        <ul class="children collapse <? if($v_pSec==5 || $v_pSec==7){ ?>in<? } ?>" id="HomePageBlocksPosition">
            <li><a class="<? if($v_pSec==5){ ?>active<? } ?> admSideMenu" href="<?=$appRoot?>/__envAdmin/adminPanel/HomePageLayout" class="admSideMenu">
                    <span class="fa fa-sort">&nbsp;</span> Home Page Layout
                </a></li>
            <li><a class="<? if($v_pSec==7){ ?>active<? } ?> admSideMenu" href="<?=$appRoot?>/__envAdmin/adminPanel/HomePageSlider">
                    <span class="fa fa-picture-o">&nbsp;</span> Images Slider
                </a></li>
            <li><a class=" admSideMenu" href="#" class="admSideMenu">
                    <span class="fa fa-arrow-right">&nbsp;</span> Sub Item 3
                </a></li>
        </ul>
    </li>



    <li><a href="<?=$appRoot?>/__envAdmin/adminPanel/OurClients" class="admSideMenu"><em class="fa fa-handshake-o">&nbsp;</em> Clients</a></li>
    <li><a href="charts.html" class="admSideMenu"><em class="fa fa-bar-chart">&nbsp;</em> Charts</a></li>
    <li><a href="elements.html" class="admSideMenu"><em class="fa fa-toggle-off">&nbsp;</em> UI Elements</a></li>
    <li><a href="panels.html" class="admSideMenu"><em class="fa fa-clone">&nbsp;</em> Alerts &amp; Panels</a></li>


    <li class="parent collapse ">
        <a data-toggle="collapse" href="#sub-item-1" class="admSideMenu">
            <em class="fa fa-navicon">&nbsp;</em> Multilevel <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
        </a>
        <ul class="children collapse" id="sub-item-1">
            <li><a class="" href="#" class="admSideMenu">
                    <span class="fa fa-arrow-right">&nbsp;</span> Sub Item 1
                </a></li>
            <li><a class="" href="#" class="admSideMenu">
                    <span class="fa fa-arrow-right">&nbsp;</span> Sub Item 2
                </a></li>
            <li><a class="" href="#" class="admSideMenu">
                    <span class="fa fa-arrow-right">&nbsp;</span> Sub Item 3
                </a></li>
        </ul>
    </li>


    <li><a href="../adminPanel/Settings" class="admSideMenu"><em class="fa fa-cogs">&nbsp;</em>System Settings</a></li>
</ul>
