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
                background: url(../img/top_skogsbilvei.jpg) 50% 0 no-repeat;
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
                            <h3>Skogsbilveier</h3>
                            <p>Statskog har ansvar knyttet til 1 475 skogbilveianlegg og 6 300 km skogsbilvei. Ofte er skogsbilveiene til nytte for langt flere enn skogeierne, da særlig til friluftsbruk eller ulike eksterne rettighetshavere. De aller fleste veiene er på foretakets egne eiendommer. På enkelte veier har Statskog ansvar alene, mens andre veier er fellesveier. Det er utfordrende å holde alle veiene ved like, særlig i de periodene det ikke tas ut skog. Derfor er det bomavgift på noen av veiene og noen veier er stengt for allmenn ferdsel på grunn av dårlig standard. For hver kubikkmeter tømmer Statskog avvirker, bruker vi 20-25 kroner til bygging, opprusting og vedlikehold av skogsveier</p>
                            <p>Solgte arealer i 2011 og 2012</p>
                            <p>For å betale ned lånet Statskog fikk fra staten ved kjøp av Orklas skogeiendommer og samtidig få en bedre arrondert, eller driftsmessig, eiendomsmasse, er Statskog i ferd med å selge ut til sammen om lag 500 000 daa bestående av spredte skogeiendommer Statskog eide før kjøpet av Orklas skogeiendommer. Kartet viser hvilke eiendommer som er solgt så langt. Salget avsluttes i 2017.</p>
                        </div>
                    </div>
                    <div class="content-box">
                        <div class="inner-box-front">
                            <iframe width="610" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://statskog.maps.arcgis.com/home/webmap/embedViewer.html?webmap=b99eb4c44f454758ba07be4dfcbc5cc6&amp;extent=-7.0798,58.87,42.5061,70.7765"></iframe>
                        </div>
                    </div>
                </div>

                <div id="right-container" style="float: right;">
                    <div class="content-box-right">
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
