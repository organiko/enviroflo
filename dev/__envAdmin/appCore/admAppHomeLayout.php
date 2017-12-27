<?php
    $vHPblocks = $dbUserControl->getHomePageLayout();
    $vBlockArray = $vHPblocks['rsData'];
?>
<style>
    .hpImage
    {
        padding: 15px!important;
        text-align: left;
        height: 50px;
    }
    .hpBlockStatus
    {
        text-align: right;
        padding: 0 !important;
    }
    .hpBlockStatusClass
    {
        display: none;
    }
</style>
<div class="row">
    <ol class="breadcrumb">
        <li><a href="../adminPanel/Dashboard">
                <em class="fa fa-home"></em>
            </a></li>
        <li class="active">Home Page Layout</li>
    </ol>
</div>

<div class="row">
    <div class="col-lg-12">
        <h2 class="page-header sessionTitle">Home Page Layout</h2>
    </div>
</div>
<div class="panel panel-container">
    <div class="row">
        <form action="../appDataAPI/admHomePageLayout" id="hpLayoutForm" method="post">
            <input type="hidden" id="actionType" name="actionType" value="blockUpdate">
            <div class="col-xs-12 col-md-6 col-lg-6 no-padding">
                <div class="row">
                    <div class="col-xs-6 col-md-6 col-lg-6 text-center"><button class="btn btn-info" form="hpLayoutForm" type="submit">Save New Order</button></div>
                    <div class="col-xs-6 col-md-6 col-lg-6 text-center"><button class="btn btn-warning" form="hpLayoutFormReset" type="submit">Reset to Default</button></div>
                </div>
                <div class="panel panel-teal panel-widget">
                <div class="row no-padding">
                    <table id="hpLayoutTable" class="table table-bordered table-striped" style="width: 80%; margin: auto;">
                        <?
                            foreach($vBlockArray as $key=>$block)
                            {
                                $vBlockStatus = !$block['block_status'] ? "" : "checked";
                        ?>
                                <tr>
                                    <td class='handle hpImage'>
                                        <div class="col-md-8">
                                            <?=$block['block_title']?>
                                        </div>
                                        <div class="col-md-4 hpBlockStatus">
                                            <input type="checkbox" <?=$vBlockStatus?> class="hpBlockStatusClass" name="hpBlockStatus[<?=$block['block_id']?>]" data-toggle="toggle" data-on="Enabled" data-off="Disabled" data-size="mini">
                                            <input type="hidden" name="hpBlockOrder[<?=$block['block_id']?>]" value="<?=$block['block_order']?>">
                                        </div>
                                    </td>
                                </tr>
                        <?
                            }
                        ?>
                    </table>
                </div>
            </div>

            </div>
        </form>
        <form action="../appDataAPI/admHomePageLayout" id="hpLayoutFormReset" method="post">
            <input type="hidden" id="actionType" name="actionType" value="blockReset">
        </form>
    </div><!--/.row-->
</div>

<script type="text/javascript">
    $(document).ready(function()
    {
        var el = document.getElementById('hpLayoutTable');
        var dragger = tableDragger(el,
            {
                mode: 'row',
                dragHandler: '.handle',
                onlyBody: true,
                animation: 300
            });
        dragger.on('drop',function(from, to)
        {
            console.log(from);
            console.log(to);
        });
    });
</script>