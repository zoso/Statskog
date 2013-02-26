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
    </head>
    <body>
        <!-- Add your site or application content here -->
        <div id="log"></div>

        <div id="top">
            <?php include_once("logo.php") ?>
            <div class="top-container">
                <div class="top-txt">
                    <?php include_once("top-txt.php") ?>
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
                        <h3>Arealinndeling storviltjakt</h3>
                        <p>Statskog SF har jaktfelt i de fleste av landets fylker med elgjakt (unntatt Finnmark). Jaktfeltene ligger ved kysten, i skogen og opp mot høgfjellet og snaufjellet. Jegere kan velge mellom jakt nær bilvei eller med flere timers gange inn i jaktfeltet. I dette brede spekteret av tilbud, kan mange jaktlag finne sitt drømmeterreng. Mange jaktfelt er delt i perioder, både for å gi flere jegere/jaktlag tilbud, og for å sikre at stort nok antall dyr blir felt. Årlig kvote som forvaltes av Statskog er i underkant av 1 500 elg og i underkant av 200 hjort. Det gid også tilbud om villreinjakt og rådyrjakt på Statskogs grunn. Tildeling av tilbud skjer etter søknad og trekning. 
                    </div>
                </div>
                <div id="right-container" style="float: right;">
                    <div class="content-box-right">

                    </div>
                </div>
                <div style="clear: both;"></div>
            </div>
        </div><!-- wrapper end -->
        <div id="footer">
            <a href="http://2011.statskog.no/" target="_blank">http://2011.statskog.no/</a>
        </div>
    </body>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="../js/jquery.statskog.js"></script>
</html>
