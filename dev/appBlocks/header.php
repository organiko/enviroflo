<style>
    #navBarMenuHeader
    {
    }
    #navBarMenuHeader > li > a
    {
       font-size: 8pt!important;
       /* color: #0a5d5e;
       */
       font-weight: bold;
    }
</style>

		<div class="header">
			<div class="container">
				<!-- Logo -->
				<a class="logo" href="<?=$appRoot?>">
					<img src="<?=$appRoot?>/images/appLogo/<?=$appHeaderLogo?>" alt="Logo" style="max-width: 250px;">
				</a>
				<!-- End Logo -->

				<!-- Topbar -->
                <?php
                    include("headerTopBar.php")
                ?>
				<!-- End Topbar -->

				<!-- Toggle get grouped for better mobile display -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="fa fa-bars"></span>
				</button>
				<!-- End Toggle -->
			</div><!--/end container-->

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse mega-menu navbar-responsive-collapse">
				<div class="container">
					<ul class="nav navbar-nav" id="navBarMenuHeader" style="margin-top: 20px!important;">
                        <!-- Menu -->
                        <?php
                            include("headerMenu.php");
                        ?>
                        <!-- End Menu -->

						<!-- Search Block -->
                        <?php
                            //include("headerSearchBlock.php");
                        ?>
						<!-- End Search Block -->
					</ul>
				</div><!--/end container-->
			</div><!--/navbar-collapse-->
		</div>