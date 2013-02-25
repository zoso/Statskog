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
                    <h1>Fulle fiskevann venter</h1>
<b>60 000 fulle fiskevann søker flere fiskere. Som statlig grunneier kan Statskog lokke med napp i «ditt eget» fiskevann.</b>
<p>– Dette er vår felles grunn, og som alle forstår har vi så mange vann at alle som ønsker det vil finne sitt fiskested. Vi har altfor mange fisk og alt for få som fisker, så det har aldri vært lettere å få fisk enn nå. Mange steder må vi selv gå inn i med store ruser og fange opp så mange abbor og røye som mulig, sier fiskeansvarlig Frode Knutzen Midtlund i Statskog. 
Varmere vær over tid har gitt mer næringsrike vann. Men når få fisker, blir det likevel kamp om maten. Resultatet er mange, men små fisk.</p>
<p>– Vi får ikke hjelp av rovfiskene heller. De blir ikke store nok til å spise andre fisk, sier Knutzen Midtlund.</p> 
<b>Frafall</b>
<p>Det er ikke lenger så mange som driver med garnfiske og fiske til matauk. </p><br>
– Hobbyfiskerne er blitt mer spesialiserte. En fluefisker holder seg gjerne enten til tørrflue, våtflue eller nymfe. Noen driver bare med laksefiske, andre spesialiserer seg på å bruke mark, og så videre. Tilbyderne som sikter seg inn på det spesialiserte fisket er også de som opplever en økning, sier han. 
Statskog er ikke alene om å ha få fiskere i sine vann.<br>
– Dette er nok en generell trend. Interessen for de tradisjonelle høstingsaktivitetene, inklusive fiske, er fallende. De ihuga sportsfiskespesialistene er nok ikke blitt færre, men fiske som en bred folkeaktivitet er på vikende front, sier informasjonssjef Espen Farstad i Norges Jeger- og Fiskerforbund (NJFF). 
Ikke minst er det dårlig rekruttering i de yngste årsklassene. Både Statskog og NJFF har fiskeaktiviteter rettet mot barn og unge, som omreisende fiskestevner og utdeling av stenger. Alle under 20 år kan fiske gratis på statsgrunn som ikke er statsallmenning. <br>
– Rekruttering er viktig. Vi ser at fiske blir inngangsbilletten til andre måter å bruke naturen på, sier Frode Knutzen Midtlund i Statskog.<br>
<p><b>Stor nok?</b></p>
Men er ikke stor fisk viktigere enn mange fisk?<br>
– Her er svaret avhengig av hvem du spør. Mange fisk er attraktivt for noen, ikke minst småbarnsfamilier og mange isfiskere. Spesialistene søker til vann og vassdrag med større fisk, sier Espen Farstad i NJFF. <br>
Jakt- og fiskeportalen inatur.no er et godt utgangspunkt for planlegging av en fisketur. Her finner du oversikt over vann og utleiehytter like ved. <br>
Statskog har ett fiskekort som gjelder for alle vann og vassdrag på statsgrunn unntatt statsallmenning, Statskogs Norgeskort. I nord eier Statskog mye av grunnen, i sør har foretaket områder som Njardarheim i Sirdalsheiene og Setesdalsheiene, Sølvverket ved Kongsberg, Varaldskogen på Finnskogen, samt deler av Femundsmarka. <br>  
– Med en smarttelefon kan du slå på GPS-en og la telefonen finne nærmeste fiskevann ved å gå inn på inatur.no, sier Frode Knutzen Midtlund i Statskog. <br>
<p>Telefonen blir også vanligere å bruke til betaling av fiskekort. Mottatt sms gjelder som betalingsbevis.</p>

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
