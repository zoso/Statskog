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
                background: url(../img/top_bg_oversikt.jpg) 50% 0 no-repeat;
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
                    <!-- <?php include_once("top-txt.php") ?> -->
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
                            <h2>Oversikt over vernede områder</h2>
                            <div class="border-down">&nbsp;</div>
                            <span class="ingress">Statens eierskap er brukt som virkemiddel i etablering av nasjonale verneområder, som nasjonalparker og barskogvernområder. De første nasjonalparkene i Norge ble i hovedsak etablert på statens grunn, med unntak av Hardangervidda Nasjonalpark.</span>
                            <p>I 2003 inngikk Statskog en samarbeidsavtale med Direktoratet for naturforvaltning (DN) om vern av skog på Statskogs eiendommer. Formålet med samarbeidsavtalen har vært å gjennomføre tiltak og definere oppgaver i forhold til utvidet skogvern, samt sikre en rasjonell gjennomføring av verneprosesser der Statskog er involvert. Det er DN som er vernemyndigheten. Statskogs rolle i dette samarbeidet er å være grunneier, med visse forvaltningsmessige oppgaver i statsallmenningene i henhold til fjell- og allmenningslovene. Kartet viser all vernet grunn i Norge, på både Statskogs og andre grunneieres eiendommer.</p>
                        </div>
                    </div>
                    <div class="content-box">
                        <div class="inner-box-front">
                            <iframe width="610" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://statskog.maps.arcgis.com/home/webmap/embedViewer.html?webmap=1e078c7e7d8142d58d9563a42a71578f&amp;extent=-5.3672,57.9657,42.3583,69.9238"></iframe>
                        </div>
                    </div>
                </div>
                <div id="right-container" style="float: right;">
                    <div class="content-box-right">
                        <div class="inner-box-front" style="text-align: left;">
                            <!--<div><<</div> -->
                            <span class="sitat">I 2003 INNGIKK STATSKOG EN SAMARBEIDSAVTALE MED DN OM VERN AV SKOG</span>
                        </div>
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
