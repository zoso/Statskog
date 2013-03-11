<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Årsrapport 2012 - Statskog - template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        
        <link rel="stylesheet" href="../css/styled.css">
        <link rel="stylesheet" href="../css/normalize.css">
        <!-- <link rel="stylesheet" href="css/ChartPop.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/jquery.pageslide.css"></script> -->
        <!-- <script src="js/vendor/modernizr-2.6.2.min.js"></script> -->

        <style>
            #top .top-bg {
                background: url(../img/top/Aktiviteter_kjerne.jpg) 50% 0 no-repeat;
                height: 400px;
            }
        </style>

    </head>
    <body>
        <!-- Add your site or application content here -->
        <div id="log"></div>

        <div id="top">
            <?php include_once("logo.php") ?>
            <div class="top-container">
                <div class="top-txt">
                    
                </div>
            </div>
            <div class="top-bg"></div>
        </div>
        <div id="wrapper"><!-- wrapper -->
            <div id="menu-container"> <!-- menu -->
                <?php include_once("menu.php"); ?>
            </div> <!-- menu end -->
            <div style="clear: both;"></div>
            <div id="content-container">
                 <div id="left-container" style="float: left;">
                    <div class="content-box">
                        <div class="inner-box-front">
                            <h2>Fakta om Statskog</h2>
                             <div class="border-down">&nbsp;</div>
                            Statskog SF er et statsforetak eid av Landbruks- og matdepartementet. Foretaket har 16 kontorer og har hovedkontor i Namsos i Nord-Trøndelag. 
Statskog er Norges største grunneier, og drifter og utvikler eiendommer på om lag 60 millioner dekar. Dette tilsvarer om lag 20 prosent av arealet i Norge. Foretaket driver med skogbruk, jakt og fiske, arealutleie samt utvikling av energi-, areal- og mineralressurser.

                        </div>
                    </div>
                </div>
                <div id="right-container" style="float: right;">
                    <div class="content-box-right">
                       <div class="inner-box-front">
                            <img src="../img/statskog-1-2-3.jpg" />
                            <a href="film-statskogs-utleiehytter.php"><img src="../img/front_eiendom2.jpg" /></a><br>
                            <!-- <a href="#"><img src="img/front_energi2.jpg" /></a><br> -->
                            <a href="film-statskogs-skogbruk.php"><img src="../img/front_skog2.jpg" /></a><br>
                            <a href="film-toppjakt.php"><img src="../img/front_friluftsliv2.jpg" /></a>
                        </div>
                       &nbsp;
                    </div>
                </div>
                <div style="clear: both;"></div>
            </div>
            <?php include_once("footer.php"); ?>
        </div><!-- wrapper end -->
    </body>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="../js/jquery.statskog.js"></script>
</html>
