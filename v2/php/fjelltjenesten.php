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
                    <h2>Fjelltjenesten</h2>
                    <p>Fjelltjenesten er Statskogs profesjonelle feltapparat knyttet til naturoppsyn, skjøtsel og registreringsarbeid i Nordland og Troms. Fjelltjenesten ble etablert i perioden 1984-1989, først i Troms som et samarbeid mellom Statskog og Fylkesmannens miljøvernavdeling. Målet var å få til en bedre og mer kostnadseffektiv felttjeneste med Statskog som arbeidsgiver og fylkesmannen som tjenestekjøper. Mye er endret siden den gang.

I dag leverer Fjelltjenesten tjenester til en lang rekke oppdragsgivere. Det største volumet kommer fra SNO, Statskog SF og Landbruks- og matdepartementet. I tillegg kommer oppdrag for fylkesmenn, kommuner, forskningsinstitusjoner, elve- og grunneierlag, kraftlag m.v. Med en brei portefølje av oppgaver utfører Fjelltjenesten ofte mange oppgaver på samme felttur. Kombinasjonsmulighetene gir effektive arbeidsdager med kostnadseffektiv drift, god utnyttelse av ressurser og redusert belastning på miljøet.

Fjelltjenesten er i dag ledet av Tore Bjørnstad, og har 16 ansatte tilknyttet Statskogs lokalkontorer fra Hattfjelldal i sør til Nordreisa i nord. Dette gir en desentralisert tilstedeværelse i sterke fagmiljø som sikrer god lokalkunnskap. De ansatte har brei naturfaglig kompetanse og lang erfaring innen naturoppsyn, registreringsarbeid, tilrettelegging for friluftsliv og skjøtsel. I tillegg til myndighet etter lov om statlig naturoppsyn, er alle i Fjelltjenesten tildelt begrenset politimyndighet.
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
