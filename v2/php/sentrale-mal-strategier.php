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
                background: url(../img/top/sentrale_maal.jpg) 50% 0 no-repeat;
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
                            <h2>Sentrale mål og strategier</h2>
                            <div class="border-down">&nbsp;</div>
                            <span class="ingress">Statskogs hovedmål er å være Norges mest profesjonelle grunneier. Langsiktig lønnsomhet legges til grunn i all vår virksomhet. Vi er effektiv og brukerorientert, og baserer oss på bærekraftig utnyttelse av ressursene på fellesskapets grunn.</span>
                            <p></p>
                            <b>Innen eiendom betyr det at Statskog skal:</b>
                            <li class="list"><span>være ledende på drift av utmarkseiendom i Norge</span></li>
                            <li class="list"><span>være effektiv og brukerorientert</span></li>
                            <li class="list"><span>realisere eiendommenes utviklingspotensial</span></li>
                            <b>Innen friluftsliv betyr det at Statskog skal:</b><br>
                            <li class="list"><span>øke bruk gjennom videreutvikling og tilgjengeliggjøring av jakt- og fiskeproduktene</span></li>
                            <li class="list"><span>være landets ledende grunneier på kunnskapsbasert forvaltning av utmarksressurser</span></li>
                            <li class="list"><span>være en garantist for allmennhetens tilgang til jakt og fiske</span></li>
                            <b>Innen skog betyr det at Statskog:</b><br>
                            <li class="list"><span>skal være landets dyktigste industrielle skogeier</span></li>
                            <li class="list"><span>avvirker bærekraftig og effektivt</span></li>
                            <li class="list"><span>deltar aktivt i tømmeromsetning gjennom eierposisjoner</span></li>
                            <b>Innen energi betyr det at Statskog skal:</b><br>
                            <li class="list"><span>være landets ledende grunneier i utvikling av fornybare energiressurser
                            <li class="list"><span>utvikle gode og robuste forretningsmodeller</span></li>
                            <li class="list"><span>skape lønnsomhet gjennom å bidra til effektiv utbygging og drift</span></li>
                        
                        </div>
                    </div>
                </div>
                <div id="right-container" style="float: right;">
                    <div class="content-box-right">
                        <img class="image-rounded" src="../img/adm-dir-maal.jpg" width="300" />
                        <div class="inner-box-front">
                            <p><a class="front" href="adm-dir-har-ordet.php">Administrerende direktør</a></p>
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
