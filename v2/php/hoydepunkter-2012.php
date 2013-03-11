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
                background: url(../img/top/Viktige_hendelser.jpg) 50% 0 no-repeat;
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
                            <h2>Aktuelle hendelser i 2012</h2>
                            <div class="border-down">&nbsp;</div>
                            <li class="list"><span>Region Sør-Norge har etter Orkla-kjøpet ca. 500 hytteeiendommer med til sammen ca. 1000 bygninger. Statskog vil selge ut 250 av disse eiendommene i årene som kommer. Salget er i gang, og vi solgte åtte hytter i 2012.</span></li>
                            <li class="list"><span>Statskog har, sammen med Vågå kommune, bidratt til å utvikle Lemonsjøen i Vågå til en hyttedestinasjon av betydning. I 2012 solgte vi retten til å bygge ut et nytt delfelt med 88 tomter til selskapet Lemonsjøen utvikling</span></li>
                            <li class="list"><span>30. juni arrangerte IL og UL Heimhug, IL Vinger og Statskog den tradisjonsrike Skogvokterdagen på Storjord for 13. gang.  Det kom hele 2800 besøkende. Miljøet rundt Skogvokterdagen er unikt med storslått natur, bålkaffe, grilling, lokal mat og lokale utstillere.</span></li>
                            <li class="list"><span>Statskog fikk konsesjon på Stigafjellet vindkraftanlegg</span></li>
                            <li class="list"><span>NVE ga konsesjon på vannkraftverket Veiski. Prosjektet er et samarbeid mellom Norsk Vannkraftproduksjon og Statskog.</span></li>
                            <li class="list"><span>Sammen med samarbeidspartnerne Friluftsrådenes Landsforbund, Bedriftsidretten og Det norske Skogselskap, lanserte Statskog GodTur-appen i 2012. Her får folk et eget gratis turbibliotek i hånda.</span></li>
                            <li class="list"><span>Statskog fikk som tilrettelegger for friluftsliv satt opp og åpnet Allmenningsbua på Hinnøya. Den åpne bua ble raskt et yndet turmål for Harstad og omegns befolkning.</span></li>
                            <li class="list"><span>Et eget regionutvalg for Troms ble valgt i samarbeid med regionrådene i Troms og Ofoten samt Troms Jeger og Fiskerforening og Norske Reindriftssamers Landsforbund. Regionutvalget skal bidra til en best mulig og omforent forvaltning av Statskogs grunn i Troms.</span></li>
                        </div>
                    </div>
                </div>
                <div id="right-container" style="float: right;">
                    <img class="image-rounded-shadow" src="../img/hendelse_hytte.jpg" />
                    <br><br>
                    <img class="image-rounded-shadow" src="../img/hendelse_vann.jpg" />
                    <div class="content-box-right">
                        
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
