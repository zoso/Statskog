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
                background: url(../img/top_styring_ledelse.jpg) 50% 0 no-repeat;
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
                            <h2>Styring og ledelse</h2>
                            <p>Staten eier Statskog. Eierskapet utøves av landbruks- og matministeren gjennom foretaksmøtet. Statskog SF er som statsforetak et eget juridisk selskap. Statskog har hovedkontor i Namsos, og har til sammen 16 lokalkontor fordelt på de fem regionene. Statskog har 13 ansatte.</p>
                            <p><b>Organisasjonskart:</b></p>
                            <img src="../img/statskog_org_kart.jpg" />
                        </div>
                    </div>
                </div>
                    <div id="right-container" style="float: right;">
                        <div class="content-box-right">
                            <div style="padding: 10px; font-weight: bold;">Styret:</div>
                        <div style="margin-bottom: 5px;">
                            <img src="../img/persons/styre_mann_1.jpg" />
                            <br>Styreleder: Harald Ellefsen
                        </div>
                        <div style="margin-bottom: 5px;">
                            <img src="../img/persons/styre_dame_1.jpg" />
                            <br>Nestleder: Eli Reistad
                        </div>
                        <div style="margin-bottom: 5px;">
                            <img src="../img/persons/styre_mann_2.jpg" />
                            <br>Styremedlem: Tom Lifjell
                        </div>
                        <div style="margin-bottom: 5px;">
                            <img src="../img/persons/styremedlem_kari-okland.jpg" />
                            <br>Styremedlem: Kari Økland
                        </div>
                        <div style="padding-bottom: 5px;">
                            <img src="../img/persons/styre_mann_1.jpg" />
                            <br>Styremedlem: Gunnar Olofsson
                        </div>
                        <div style="padding-bottom: 5px;">
                            <img src="../img/persons/styre_dame_2.jpg" />
                            <br>Styremedlem: Siw Anita Kvam (ansatterepresentant)
                        </div>
                        <div style="padding-bottom: 5px;">
                            <img src="../img/persons/styre_mann_4.jpg" />
                            <br>Styremedlem: Geir Hovland (ansatterepresentant)
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
