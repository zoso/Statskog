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
                <div class="content-box">
                    <h2>Regioner</h2>
                    <p>Statskogs grunn er delt inn i fem ulike regioner der de respektive regionsjefene har ansvar for drift og utvikling av eiendommene. De er også Statskogs kontakt med oppdragsgivere, offentlige myndigheter, rettighetshavere og interessegrupper i sin region. 
De fem regionene og regionsjefene i disse er: 
Troms – Kåre Rasmussen
 Salten – Jan N. Nilsen
Helgeland – Wenche Hjelmseth
Midt-Norge – Carl Libach 
Sør-Norge – Jan Helge Nordby
(Ansiktsbilder av regionsjefene?)

Salg av jakt- og fiskeprodukter/jaktstatistikk
                2012        2011        2010        2009
Elg                 felte dyr   1 274               822     
Hjort           felte dyr   58              64
Villrein        felte dyr   75              63
Småvilt     solgte kort 13 998      15 040      13 942      11 576
Fiske       solgte kort 12 490      20 050      19 672      20 733
Hytteutleie utleiedøgn  6 565       5 900       4 898       4 683
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
