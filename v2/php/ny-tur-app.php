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
                        <h2>Ny tur-app</h2>
                    <p>Statskog lanserte i 2012 tur-appen GodTur.no sammen med samarbeidspartnerne Friluftsrådenes Landsforbund, Bedriftsidretten og Det norske Skogselskap.
Her finnes tusenvis av turforslag fra hele landet.
 
Nettstedet GodTur.no har eksistert i flere år. Nå kan alle enkelt finne de gode kartene, de mange turene, bade- og fiskestedene med mer på sin egen telefon – ved hjelp av appen som kan lastes ned fra <a href="https://itunes.apple.com/no/app/godtur/id570787143?mt=8" target="_blank">Appstore</a> eller <a href="https://play.google.com/store/apps/details?id=no.wfx.godtur&feature=search_result#?t=W251bGwsMSwyLDEsIm5vLndmeC5nb2R0dXIiXQ.." target="_blank">Google play.</a>
</p>
                    </div>
                </div>
                <div id="right-container" style="float: right;">
                    <div class="content-box-right">
                        <img src="../img/ny-tur-app.jpg" />
                        <p><a href="https://itunes.apple.com/no/app/godtur/id570787143?mt=8" target="_blank"><img src="../img/Apple-App-Store-Available-Banner.jpg" alt="" /></a></p>
                        <p><a href="https://play.google.com/store/apps/details?id=no.wfx.godtur&feature=search_result#?t=W251bGwsMSwyLDEsIm5vLndmeC5nb2R0dXIiXQ.."><img src="../img/Google-Play-Banner.jpg" alt="" /></a></p>
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
    
    <script type="text/javascript">
    $(document).ready(function() {
        $("#main-menu li").on("mouseenter", function(e) {
            $elm = $(this);
            $elm.find(".sub-menu").show().animate({
                opacity: 1
            }, 500, function() {
            
            }); 
        }).on("mouseleave", function(e) {
            $elm = $(this);
            $elm.find(".sub-menu").animate({
                opacity: 0
            }, 200, function() {
                $(this).hide()
            }); 
        }).on("click", function(e) {
            l("> klikk > "+$(this).parent().children().length);
            if ($(this).children().length == 1) {
                l("> no sub");
            }
        })

        var log = $("#log");
        function l(str, type) {
            log.append("> "+str+"<br>");
        }

        l("ready");
    })
    </script>
</html>
