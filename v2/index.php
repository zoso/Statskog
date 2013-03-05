<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Årsrapport 2012 - Statskog</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        
        <link rel="stylesheet" href="css/styled.css">
        <link rel="stylesheet" href="css/normalize.css">
        <!-- <script src="js/vendor/modernizr-2.6.2.min.js"></script> -->
    </head>
    <body>
        <div id="log"></div>
        <div id="top">
            <?php 
                include_once("php/logo.php") 
            ?>
            <div class="top-container">
                <div class="top-txt">
                    <?php 
                        include_once("php/top-txt.php") 
                    ?>
                </div>
            </div>
            <div class="top-bg"></div>
        </div>
        <div id="wrapper"><!-- wrapper -->
            <div id="menu-container"> <!-- menu -->
                <?php 
                    include_once("php/menu.php"); 
                ?>
            </div> <!-- menu end -->
            <div style="clear: both;"></div>
            <div id="content-container">
                <div id="left-container">
                    <div style="float: left; width: 313px; margin-right: 10px;">
                        <div class="content-box-front">
                            <img style="border-radius: 5px;" src="img/tmp_pic.jpg" width="310" />
                            <div class="inner-box-front">
                                <a class="front" href="php/rev-enn-rype.php">Skyt heller rev enn rype</a>
                            </div>
                        </div>
                        <div class="content-box-front">
                            <img style="border-radius: 5px;" src="img/front-app.jpg" />
                            <div class="inner-box-front">
                                <a class="front" href="php/ny-tur-app.php">Ny tur app!</a>
                            </div>
                        </div>
                        <div class="content-box-front">
                            <img style="border-radius: 5px;" src="img/front_admdir.jpg" width="310" />
                            <div class="inner-box-front">
                                <a class="front" href="php/adm-dir-har-ordet.php">Adm. dir. har ordet</a>
                            </div>
                        </div>
                    </div>
                    <div style="float: left; width: 313px; margin-right: 10px;">
                        <div class="content-box-front" style="text-align: center;">
                            <img src="img/Graf02b.png" />
                            <img src="img/Graf01.png" />
                            <img src="img/Graf03.png" />
                        </div>
                        <div class="content-box-front">
                            <img style="border-radius: 5px;" src="img/front-overrasker.jpg" width="310" />
                            <div class="inner-box-front">
                                <a class="front" href="php/vekker-oppsikt.php">Statskog vekker oppsikt</a>
                            </div>
                        </div>
                    </div>
                    <div style="float: left; width: 313px;">
                        <div class="content-box-front">
                            <img style="border-radius: 5px;" src="img/fiskevann.png" width="310" />
                            <div class="inner-box-front">
                                <a class="front" href="php/fulle-fiskevann-venter.php">Fulle fiskevann venter</a>
                            </div>
                        </div>
                        <div class="content-box-front" style="text-align: center;">
                            <img src="img/statskog-1-2-3.jpg" />
                            <a href="php/film-statskogs-utleiehytter.php"><img src="img/front_eiendom2.jpg" /></a><br>
                            <!-- <img src="img/front_energi.jpg" /> -->
                            <a href="php/film-statskogs-skogbruk.php"><img src="img/front_skog2.jpg" /></a><br>
                            <a href="php/film-toppjakt.php"><img src="img/front_friluftsliv2.jpg" /></a>
                        </div>
                    </div>
                </div>
            </div>
            <div style="clear: both;"></div>
            <?php include_once("php/footer.php"); ?>
        </div><!-- wrapper end -->
       <!--  <div id="footer">
            <a href="http://2011.statskog.no/" target="_blank">http://2011.statskog.no/</a>
        </div> -->
        <!-- footer -->
        <!-- <?php include_once("php/footer.php"); ?> -->
        <!-- footer end -->
    </body>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="js/jquery.statskog.js"></script>
</html>
