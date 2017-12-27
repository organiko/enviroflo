<?php
    $vHPSlider = $dbUserControl->getHomePageSlider();
    $vSliderArray = $vHPSlider['rsData'];
    $addNewSlideCheck = count($vSliderArray);
?>
<style>
    .hpImage
    {
        text-align: left;
        height: auto;
        width: 100%!important;
        display: table;
        margin: 0!important;
    }
    .hpSlideStatus
    {
        text-align: right;
        padding: 0 !important;
    }
    .hpSlideStatusClass
    {
        display: none;
    }
    .slideBGgradient
    {
        background: rgba(255,255,255,0.65);
        background: -moz-linear-gradient(top, rgba(255,255,255,0.65) 0%, rgba(246,246,246,0.9) 50%, rgba(107,107,107,0.75) 100%);
        background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(255,255,255,0.65)), color-stop(50%, rgba(246,246,246,0.9)), color-stop(100%, rgba(107,107,107,0.75)));
        background: -webkit-linear-gradient(top, rgba(255,255,255,0.65) 0%, rgba(246,246,246,0.9) 50%, rgba(107,107,107,0.75) 100%);
        background: -o-linear-gradient(top, rgba(255,255,255,0.65) 0%, rgba(246,246,246,0.9) 50%, rgba(107,107,107,0.75) 100%);
        background: -ms-linear-gradient(top, rgba(255,255,255,0.65) 0%, rgba(246,246,246,0.9) 50%, rgba(107,107,107,0.75) 100%);
        background: linear-gradient(to bottom, rgba(255,255,255,0.65) 0%, rgba(246,246,246,0.9) 50%, rgba(107,107,107,0.75) 100%);
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#6b6b6b', GradientType=0 );
    }
    .bgSizeSet
    {
        background-size: 100% auto;
        background-position: center;
    }

    #sliderModal .modal-dialog
    {
        width: 70%;
    }

</style>
<div class="row">
    <ol class="breadcrumb">
        <li><a href="../adminPanel/Dashboard">
                <em class="fa fa-home"></em>
            </a></li>
        <li class="active">Home Page Slider</li>
    </ol>
</div>

<div class="row">
    <div class="col-lg-12">
        <h2 class="page-header sessionTitle">Home Page Slider</h2>
    </div>
</div>

<div class="modal fade" id="sliderModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 id="modalTitle"></h4>
            </div>
            <div class="modal-body">
                <img id="displayImage" src=""/>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="panel panel-container">
    <div class="row">
        <form action="../appDataAPI/admHomeSliderOrder" id="hpSlideForm" method="post">
            <input type="hidden" id="actionType" name="actionType" value="slideUpdate">
            <div class="col-xs-12 col-md-12 col-lg-12">
                <div class="row">
                    <div class="col-xs-6 col-md-6 col-lg-6 text-center"><button class="btn btn-primary" form="hpSlideForm" type="submit">Save Order</button></div>
                    <div class="col-xs-6 col-md-6 col-lg-6 text-center"><button class="btn btn-success addSlide" form="hpSlideAction" type="button">Add Slide</button></div>
                </div>
                <div class="panel panel-teal panel-widget">
                    <div class="row no-padding" style="padding: 10px!important;">
                        <div class="col-md-10 col-md-offset-1 col-xs-12">
                            <table id="hpSlideTable" class="table table-bordered table-striped" style="width: 100%; margin: auto;">
                            <?
                            foreach($vSliderArray as $key=>$slide)
                            {
                                $vSlideStatus = !$slide['slide_status'] ? "" : "checked";
                                ?>
                                <tr class="bgTRdata" data-slideID="<?=$slide['slide_id']?>">
                                    <td class='handle bgSizeSet' style="padding: 0!important; background-image: url('../../images/homeSlider/<?=$slide['slide_file']?>');">
                                        <div class="hpImage slideBGgradient">
                                            <div class="col-md-10" style="padding: 10px!important;">
                                                <h4 class="slideTitle_<?=$slide['slide_id']?>"><?=$slide['slide_title']?></h4>
                                                <h5><?=$slide['slide_text']?></h5>
                                            </div>
                                            <div class="col-md-2 hpSlideStatus" style="padding: 10px!important;">
                                                <div class="row text-right">
                                                    <div class="col-md-12">
                                                        <input type="checkbox" <?=$vSlideStatus?> class="hpSlideStatusClass" name="hpSlideStatus[<?=$slide['slide_id']?>]" data-toggle="toggle" data-on="Active" data-off="Inactive" data-width="113" data-offstyle="default" data-onstyle="primary" data-size="small">
                                                        <input type="hidden" name="hpSlideOrder[<?=$slide['slide_id']?>]" value="<?=$slide['slide_order']?>">
                                                    </div>
                                                </div>
                                                <div class="row text-right" style="margin-top: 10px;">
                                                    <div class="col-md-12">
                                                        <div class="btn-group" role="group" aria-label="...">
                                                            <button type="button" class="btn btn-primary showSlide slideFile_<?=$slide['slide_id']?>" aria-label="Left Align" data-slideID="<?=$slide['slide_id']?>" data-image="<?=$slide['slide_file']?>">
                                                                <span class="fa fa-expand" aria-hidden="true"></span>
                                                            </button>
                                                            <button type="button" class="btn btn-warning editSlide" data-slideID="<?=$slide['slide_id']?>" aria-label="Center Align">
                                                                <span class="fa fa-pencil-square-o" aria-hidden="true"></span>
                                                            </button>
                                                            <button type="button" class="btn btn-danger removeSlide" data-slideID="<?=$slide['slide_id']?>" aria-label="Center Align">
                                                                <span class="fa fa-times" aria-hidden="true"></span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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

            </div>
        </form>
        <form action="../admHomePageSlider" id="hpSlideAction" method="post">
            <input type="hidden" id="slideID" name="slideID" value>
        </form>
    </div><!--/.row-->
</div>
<script type="text/javascript">

    toastr.options = {
        "closeButton": false,
        "debug": false,
        "newestOnTop": false,
        "progressBar": false,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }

    $(document).ready(function()
    {
        var el = document.getElementById('hpSlideTable');
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

        $(".showSlide").on("click",function()
        {
            var vImage = "../../images/homeSlider/"+$(this).attr("data-image");
            var vSlideID = $(this).attr("data-slideID");
            var vTitle = $('.slideTitle_'+vSlideID).html();

            $("#displayImage").attr("src",vImage);
            $("#displayImage").css("width","100%");
            $("#displayImage").css("height","auto");

            $("#modalTitle").text(vTitle);

            setTimeout(function ()
            {
                $('#sliderModal').modal('toggle');

            },100)
            //return false;
        })

        $('.removeSlide').on('click',function ()
        {
            var vSlideID = $(this).attr("data-slideID");
            var vTitle = $('.slideTitle_'+vSlideID).html();
            var vImage = $('.slideFile_'+vSlideID).attr("data-image");

            bootbox.confirm({
                message: "Are you sure you want to delete this slide?<br>Slide Title: "+vTitle,
                buttons: {
                    confirm: {
                        label: 'Yes',
                        className: 'btn-success'
                    },
                    cancel: {
                        label: 'No',
                        className: 'btn-danger'
                    }
                },
                callback: function(result)
                {
                    if(result===true)
                    {
                        $.ajax
                        ({
                            url: "../appDataAPI/admHomeSlideDelete",
                            type: "POST",
                            dataType: "json",
                            data: { slideID: vSlideID, imageFile: vImage },
                            success: function(c)
                            {
                                if(c===true)
                                {
                                    $('.bgTRdata').filter('[data-slideID="'+vSlideID+'"]').remove();
                                }
                                else
                                {
                                    toastr["error"]("The slide: '"+vTitle+"' can't be deleted. Please try again.", "Ooops!")
                                }
                            }
                        });


                    }
                }
            });


            console.log('removeSlide Clicked');
            console.log('vSlideID = '+vSlideID);

        })

        $('.editSlide').on('click',function ()
        {
            var vSlideID = $(this).attr("data-slideID");
            $("#hpSlideAction").attr("action","HomePageSlider/EditSlide/"+vSlideID).submit();
            console.log('editSlide Clicked');
            console.log('vSlideID = '+vSlideID);

        });

        $('.addSlide').on("click",function ()
        {
            <?php
                if($addNewSlideCheck < 4){
            ?>
            $("#hpSlideAction").attr("action","HomePageSlider/NewSlide").submit();
            <?php
                }else{
            ?>
            toastr["warning"]("Slide limit reached (4). Delete a slide to add a new one.", "Ooops!")
            <?php
                }
            ?>
        });
    });
</script>