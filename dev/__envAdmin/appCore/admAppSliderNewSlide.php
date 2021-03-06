<?php
    $vURL = $appRoot.'/__envAdmin/adminPanel/HomePageSlider';
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
        <li><a href="<?=$appRoot?>/__envAdmin/adminPanel/Dashboard">
                <em class="fa fa-home"></em>
            </a></li>
        <li>
            <a href="<?=$appRoot?>/__envAdmin/adminPanel/HomePageSlider">
                Home Page Slider
            </a>
        </li>
        <li class="active">Add New Slide</li>
    </ol>
</div>

<div class="row">
    <div class="col-lg-12">
        <h2 class="page-header sessionTitle">Add New Slide</h2>
    </div>
</div>
<div class="panel panel-container">
    <div class="row">
        <form action="../../appDataAPI/admHomeSlideAdd" id="hpSlideForm" class="formSlideData" method="post" enctype="multipart/form-data">
            <input type="hidden" id="actionType" name="actionType" value="slideInsert">
            <div class="col-xs-12 col-md-12 col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="col-xs-12 col-md-6 col-lg-6">
                            <div class="form-group has-feedback divSlideTitle">
                                <input type="text" class="form-control allInputForm" id="frmSlideTitle" name="frmSlideTitle" placeholder="Slide Title" maxlength="100" aria-describedby="frmSlideTitleStatus">
                                <span class="fa fa-2x form-control-feedback spanSlideTitle" aria-hidden="true" style="padding: 8px; margin-right: 10px;"></span>
                                <span id="frmSlideTitleStatus" class="sr-only">(success)</span>
                            </div>
                            <div class="form-group has-feedback divSlideText">
                                <textarea class="form-control allInputForm" id="frmSlideText" name="frmSlideText" placeholder="Slide Text" rows="4"  maxlength="150" style="resize: none;" aria-describedby="frmSlideText"></textarea>
                                <span class="fa fa-2x form-control-feedback spanSlideText" aria-hidden="true" style="padding: 8px; margin-right: 10px;"></span>
                                <span id="frmSlideText" class="sr-only">(success)</span>
                            </div>
                            <div class="form-inline">
                                <div class="form-group has-feedback frmLinkFeedback1 divLinkBox01Title">
                                    <input type="text" disabled="disabled" class="form-control frmLink1 allInputForm" id="frmLinkBox01Title" name="frmLinkBox01Title" placeholder="Left Box Title" maxlength="20" aria-describedby="frmLinkBox01Title">
                                    <span class="fa fa-2x form-control-feedback frmLink1Icon spanLinkBox01Title" aria-hidden="true" style="padding: 8px; margin-right: 10px;"></span>
                                    <span id="frmLinkBox01Title" class="sr-only">(success)</span>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" class="frmLinkBox01Status toggleStatus" name="frmLinkBox01Status" id="frmLinkBox01Status" data-width="100" data-height="46" data-toggle="toggle" data-on="Active" data-off="Inactive" data-offstyle="warning" data-onstyle="primary" >
                                </div>
                            </div>
                            <div class="form-group has-feedback frmLinkFeedback1 divLinkBox01Url" style="margin-top: 15px!important;">
                                <input type="text" disabled="disabled" class="form-control frmLink1 allInputForm allInputForm" id="frmLinkBox01Url" name="frmLinkBox01Url" placeholder="Left Box URL" maxlength="255" aria-describedby="frmLinkBox01Url">
                                <span class="fa fa-2x form-control-feedback frmLink1Icon spanLinkBox01Url" aria-hidden="true" style="padding: 8px; margin-right: 10px;"></span>
                                <span id="frmLinkBox01Url" class="sr-only">(success)</span>
                            </div>
                            <div class="form-inline" style="margin-top: 15px!important;">
                                <div class="form-group has-feedback frmLinkFeedback2 divLinkBox02Title">
                                    <input type="text" disabled="disabled" class="form-control frmLink2 allInputForm" id="frmLinkBox02Title" name="frmLinkBox02Title" placeholder="Right Box Title" maxlength="20" aria-describedby="frmLinkBox02Title">
                                    <span class="fa fa-2x form-control-feedback frmLink2Icon spanLinkBox02Title" aria-hidden="true" style="padding: 8px; margin-right: 10px;"></span>
                                    <span id="frmLinkBox02Title" class="sr-only">(success)</span>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" class="frmLinkBox02Status toggleStatus" name="frmLinkBox02Status" id="frmLinkBox02Status" data-width="100" data-height="46"  data-toggle="toggle" data-on="Active" data-off="Inactive" data-offstyle="warning" data-onstyle="primary">
                                </div>
                            </div>
                            <div class="form-group has-feedback frmLinkFeedback2 divLinkBox02Url" style="margin-top: 15px!important;">
                                <input type="text" disabled="disabled" class="form-control frmLink2 allInputForm" id="frmLinkBox02Url" name="frmLinkBox02Url" placeholder="Right Box URL" maxlength="255" aria-describedby="frmLinkBox02Url">
                                <span class="fa fa-2x form-control-feedback frmLink2Icon spanLinkBox02Url" aria-hidden="true" style="padding: 8px; margin-right: 10px;"></span>
                                <span id="frmLinkBox02Url" class="sr-only">(success)</span>
                            </div>
                            <div class="row slideFormBtn hidden" style="margin-top: 20px!important;">
                                <div class="col-xs-6 col-md-6 col-lg-6 text-center">
                                    <div class="btn btn-success btn-lg slideAdd" style="width: 80%!important;">Add Slide</div>
                                </div>
                                <div class="col-xs-6 col-md-6 col-lg-6 text-center">
                                    <div class="btn btn-danger btn-lg slideReset" style="width: 80%!important;">Reset Slide</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6 col-lg-6">
                            <div class="dropzone" id="slideDropzone" style="border-radius: 15px!important; border: dashed 1px; text-align: center!important;"></div>
                        </div>
                        <div class="col-xs-12 col-md-6 col-lg-6">
                            <div class="form-group" style="margin-top: 15px!important;">
                                <input type="checkbox" checked="checked" name="frmSlideStatus" id="frmSlideStatus" data-width="200" data-height="46"  data-toggle="toggle" data-on="Slide Active" data-off="Slide Inactive" data-offstyle="warning" data-onstyle="primary">
                            </div>
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
<script src="<?=$appRoot?>/__envAdmin/js/validator/validator.min.js"></script>
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
    };

    Dropzone.autoDiscover = false;

    function formDataCheck()
    {
        var fChk = true;

        if($("#frmSlideTitle").val().length < 4)
        {
            fChk = false;
            $(".divSlideTitle").removeClass("has-success").addClass("has-error");
            $(".spanSlideTitle").removeClass("fa-check").addClass("fa-times");
        }
        else
        {
            $(".divSlideTitle").removeClass("has-error").addClass("has-success");
            $(".spanSlideTitle").removeClass("fa-times").addClass("fa-check");
        }

        if($("#frmSlideText").val().length < 10)
        {
            fChk = false;
            $(".divSlideText").removeClass("has-success").addClass("has-error");
            $(".spanSlideText").removeClass("fa-check").addClass("fa-times");
        }
        else
        {
            $(".divSlideText").removeClass("has-error").addClass("has-success");
            $(".spanSlideText").removeClass("fa-times").addClass("fa-check");
        }

        if($("#frmLinkBox01Status").prop("checked") === true)
        {
            if ($("#frmLinkBox01Title").val().length < 5)
            {
                fChk = false;
                $(".divLinkBox01Title").removeClass("has-success").addClass("has-error");
                $(".spanLinkBox01Title").removeClass("fa-check").addClass("fa-times");
            }
            else
            {
                $(".divLinkBox01Title").removeClass("has-error").addClass("has-success");
                $(".spanLinkBox01Title").removeClass("fa-times").addClass("fa-check");
            }
        }

        if($("#frmLinkBox01Status").prop("checked") === true)
        {
            if(validator.isURL($("#frmLinkBox01Url").val()))
            {
                $(".divLinkBox01Url").removeClass("has-error").addClass("has-success");
                $(".spanLinkBox01Url").removeClass("fa-times").addClass("fa-check");
            }
            else
            {
                fChk = false;
                $(".divLinkBox01Url").removeClass("has-success").addClass("has-error");
                $(".spanLinkBox01Url").removeClass("fa-check").addClass("fa-times");
            }
        }

        if($("#frmLinkBox02Status").prop("checked") === true)
        {
            if ($("#frmLinkBox02Title").val().length < 5)
            {
                fChk = false;
                $(".divLinkBox02Title").removeClass("has-success").addClass("has-error");
                $(".spanLinkBox02Title").removeClass("fa-check").addClass("fa-times");
            }
            else
            {
                $(".divLinkBox02Title").removeClass("has-error").addClass("has-success");
                $(".spanLinkBox02Title").removeClass("fa-times").addClass("fa-check");
            }
        }

        if($("#frmLinkBox02Status").prop("checked") === true)
        {
            if(validator.isURL($("#frmLinkBox02Url").val()))
            {
                $(".divLinkBox02Url").removeClass("has-error").addClass("has-success");
                $(".spanLinkBox02Url").removeClass("fa-times").addClass("fa-check");
            }
            else
            {
                fChk = false;
                $(".divLinkBox02Url").removeClass("has-success").addClass("has-error");
                $(".spanLinkBox02Url").removeClass("fa-check").addClass("fa-times");
            }
        }
        return fChk;
    }

    var formFile;

    slideDropzone = new Dropzone("#slideDropzone",
    {
        paramName: "file", // The name that will be used to transfer the file
        maxFilesize: 1, // MB
        acceptedFiles: "image/jpeg",
        accept: function(file, done)
        {
            if (file.type !== "image/jpeg")
            {
                this.removeFile(file);
                toastr["warning"]("File type not accepted. JPEG files only.", "Ooops!");
            }
            else
            {
                var imgWidth;
                var imgHeight;
                this.on("thumbnail", function(file)
                {
                    imgWidth = file.width;
                    imgHeight = file.height;

                    console.log('image width = '+imgWidth);
                    console.log('image height = '+imgHeight);
                    if (imgWidth < 1000 || imgHeight < 500)
                    {
                        this.removeFile(file);
                        toastr["warning"]("Image dimension problem.<br>Minimum Width: 800px. Minimum Height: 500px.", "Ooops!");
                    }
                    else
                    {
                        done();
                        formFile = file;
                        $('.slideFormBtn').removeClass('hidden');
                    }


                })
            }
        },
        url: "../../appDataAPI/admHomeSlideAdd",
        method: 'POST',
        autoProcessQueue: false,
        maxFiles: 1,
        maxfilesexceeded: function(file)
        {
            this.removeFile(file);
            toastr["warning"]("Only one image per slide allowed.", "Ooops!");
        },
        init: function()
        {
            this.on("error", function(file)
            {
                if(!file.accepted)
                {
                    this.removeFile(file);
                    if(file.type != "image/jpeg")
                    {
                        toastr["warning"]("File type not allowed.<br>JPEG images only.", "Ooops!");
                    }
                    else if(file.type == "image/jpeg" && file.size > 1)
                    {
                        toastr["warning"]("File is too big!<br>Max 1mb images.", "Ooops!");
                    }
                }
            });

            this.on('sending', function(file, xhr, formData)
            {
                var data = $('.formSlideData').serializeArray();
                $.each(data, function(key, el) {
                    formData.append(el.name, el.value);
                });
            });

            this.on('success', function(file,data)
            {
                if(parseInt(data) === 1)
                {
                    window.location = '<?=$vURL?>';
                }
                else
                {
                    toastr["warning"]("Upload not possible. Please try again.", "Ooops!");
                }
            });


            $('.slideReset').on('click',function()
            {
                console.log('reset');
                slideDropzone.removeAllFiles();
                $('.toggleStatus').bootstrapToggle('off');
                $('#frmSlideStatus').bootstrapToggle('on');
                $(".formSlideData")[0].reset();
                $('.slideFormBtn').addClass('hidden');
                $('div').removeClass('has-success has-error');
                $('span').removeClass('fa-check fa-times');
            });

            $('.slideAdd').on('click',function()
            {
                var chkData = formDataCheck();

                if(chkData==true)
                {
                    slideDropzone.processQueue();
                }
                else
                {
                    toastr["warning"]("Correct all information before save this slide", "Ooops!");
                }
            })
        }
    });

    $(document).ready(function()
    {
        $('.allInputForm').bind('cut copy paste', function (e)
        {
            e.preventDefault();
        });

        $('.allInputForm').on("keydown keypress", function()
        {
            var $this = $(this),
                val = $(this).val()
                    .replace(/(\r\n|\n|\r)/gm," ")
                    .replace(/ +(?= )/g,'');
            $this.val(val);
        });


        $('#frmLinkBox01Status').change(function()
        {
            if($(this).prop("checked") !== true)
            {
                $(".frmLink1").val('');
                $(".frmLink1").prop( "disabled", true );
                $(".frmLinkFeedback1").removeClass('has-success has-error');
                $(".frmLink1Icon").removeClass('fa-check fa-times');
            }
            else
            {
                $(".frmLink1").prop( "disabled", false );
            }
        });

        $('#frmLinkBox02Status').change(function()
        {
            if($(this).prop("checked") !== true)
            {
                $(".frmLink2").val('');
                $(".frmLink2").prop( "disabled", true );
                $(".frmLinkFeedback2").removeClass('has-success has-error');
                $(".frmLink2Icon").removeClass('fa-check fa-times');
            }
            else
            {
                $(".frmLink2").prop( "disabled", false );
            }
        });
    });
</script>