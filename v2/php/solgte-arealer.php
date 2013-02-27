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
                background: url(../img/top_solgte_arealer.jpg) 50% 0 no-repeat;
                height: 500px;
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
                            <h3>Solgte arealer i 2011 og 2012</h3>
                            <p>For å betale ned lånet Statskog fikk fra staten ved kjøp av Orklas skogeiendommer og samtidig få en bedre arrondert, eller driftsmessig, eiendomsmasse, er Statskog i ferd med å selge ut til sammen om lag 500 000 daa bestående av spredte skogeiendommer Statskog eide før kjøpet av Orklas skogeiendommer.</p><p>Kartet viser hvilke eiendommer som er solgt så langt. Salget avsluttes i 2017.</p>
                        </div>
                    </div>
                    <div class="content-box">
                        <div class="inner-box-front">
                            <iframe width="610" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://www.arcgis.com/home/webmap/templates/OnePane/basicviewer/embed.html?webmap=638097407b8e4247a32b9d782e2c8a01&amp;gcsextent=10.4175,64.1282,12.8438,64.679&amp;displayslider=true&amp;displaylegend=true&amp;displaylayerlist=true&amp;theme=grey"></iframe>
                        </div>
                    </div>
                </div>
                <div id="right-container" style="float: right;">
                    <div class="content-box-right">
                        ?
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
