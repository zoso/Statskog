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
                background: url(../img/top/Resultatregnskap.jpg) 50% 0 no-repeat;
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
                            <h2>Solgte arealer</h2>
                            <div class="border-down">&nbsp;</div>
                            Kjøpet av Orklas skogeiendommer i desember 2010 ga Statskog muligheten til å få en bedre arrondert, eller driftsmessig, eiendomsmasse. Statskog er i ferd med å selge ut til sammen om lag 500 000 dekar bestående av spredte skogeiendommer Statskog eide før kjøpet av Orklas skogeiendommer. Disse salgene kan styrke lokale grunneiere og bidra til at også de får en mer effektiv drift. Kartet viser hvilke eiendommer som er solgt så langt. 
                            <p>Salget begynte i 2011 og vil gå fram til 2017. Grafen viser hvor mye grunn som er solgt fram til utgangen av 2012. I hele salgsperioden vil det bli solgt om lag 500 000 dekar, noe som gjør salget til det største statlige eiendomssalget i moderne tid.</p>
                            <p>Så langt har Statskog solgt 131 776 dekar. Som grafen viser er det solgt mest på Østlandet. Deretter følger Midt-Norge, Vestlandet, Sørlandet og Nord-Norge. Den totale inntekten på eiendomssalget så langt er 147 686 000 kroner.</p>
                            <p>Et pålegg fra Stortinget gir Direktoratet for naturforvaltning (DN) en forkjøpsrett på alle eiendommene Statskog legger ut for salg gjennom dette salget fra 2011 til 2017. Årsaken til at DN er gitt forkjøpsrett, er at de skal kunne benytte eiendommene til vern eller makeskifte knyttet til vern av private skogeiendommer. I kartet viser de grønne symbolene eiendommene som er solgt direkte til DN.</p>
                            <p>Salget så langt viser at 64 prosent av kjøperne er lokale skogeiere. I tillegg har DN kjøpt 16 prosent, som de vil bruke i framtidige makeskifter overfor private skogeiere. I kartet viser de grønne symbolene eiendommene som er solgt direkte til DN. Ytterligere ti prosent er solgt til kommuner. Hele 90 prosent av de solgte eiendommene er med andre ord blitt eller vil bli solgt til private og/eller lokale eiere.</p>
                        </div>
                    </div>
                    <div class="content-box">
                        <div class="inner-box-front">
                            <iframe width="600" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://statskog.maps.arcgis.com/home/webmap/embedViewer.html?webmap=99118e9a20794b5484e23c38efd7ea22&amp;extent=-8.1728,58.2214,39.6276,69.8776"></iframe>
                        </div>
                    </div>
                </div>
                <div id="right-container" style="float: right;">
                    <div class="content-box-right">
                        <div class="inner-box-front">
                            &nbsp;
                            <a href="solgte-arealer.php"><img src="../img/grafer/Grafer3-03.jpg" width="280" /></a>
                                <a href="solgte-arealer.php"><img src="../img/grafer/Grafer3-01.jpg" width="280" /></a>
                                
                            </div>
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
