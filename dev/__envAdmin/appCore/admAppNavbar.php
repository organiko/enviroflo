<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span></button>
            <a class="navbar-brand" href="#" style="padding: 0;"><div class="divLogo"></div></a>
            <ul class="nav navbar-top-links navbar-right">
                <!-- Messages -->
                <?php

                    if(array_key_exists ( 2 ,$vFeatureList))// Messages
                    {
                        include("admAppNavbarMessages.php");
                    }
                ?>
                <!-- Messages End -->

                <!-- Alerts -->
                <?php
                    if(array_key_exists ( 1 ,$vFeatureList))// Alerts
                    {
                        include("admAppNavbarAlerts.php");
                    }
                ?>
                <!-- Alerts End -->

                <!-- Quit -->
                <?php
                    include("admAppNavbarQuit.php");
                ?>
                <!-- Quit End -->

            </ul>
        </div>
    </div><!-- /.container-fluid -->
</nav>