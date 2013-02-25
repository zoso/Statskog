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
                background: url(../img/top_bg_3.jpg) 50% 0 no-repeat;
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
                <div class="content-box">
                    <h2>Kjerneområder</h2>
                    <p>Statskogs kjerneområder er skog, energi, eiendom, jakt, fiske og friluftsliv. Aktivitetene innen skog og energi er organisert som regionovergripende forretningsområder, mens ansvaret i de andre kjerneområdene ligger på regionnivå.

Forretningsområdet skog
Solgt m3    2008    2009    2010    2011               2012
Statskog SF          141100              150148              134676              185193              211 916 
Statskog Glomma                     -                           -                           -                179359              170 068 
Statskog Børresen                       -                           -                           -                  23580               22 677 
Statskog Vafos                      -                           -                           -                           -                    5 020 
Sum Statskog Konsern             141100              150148              134676              388132              409 681 
                    
Det ble totalt sett avvirket 409 681 m3 i Statskogs skoger i 2012, vel 20 000 m3 mer enn året før. Avvirkningsnivået er i tråd med bestillingene til driftsselskapene SB Skog og Nordisk Tre. 
</p><p>Forretningsområdet energi
Statskog har over flere år arbeidet systematisk med å utvikle foretakets kraftressurser. Det er så langt gitt konsesjon på tre prosjekter som utnytter foretakets fallressurser, et av disse vil starte kraftproduksjon i 2013. Ytterligere om lag 40 konsesjonssøknader ligger til behandling hos NVE. Statskog er sjelden eneeier i energiprosjektene vi engasjerer oss i. Vi samarbeider som oftest med ulike relevante partnere, og det varierer hvor stor eierandel Statskog har i de ulike selskapene.
</p>
                </div>
                
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
