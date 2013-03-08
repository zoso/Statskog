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
                background: url(../img/top_samfunnsansvar.jpg) 50% 0 no-repeat;
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
                            <h2>Samfunnsansvar</h2>
                            <div class="border-down">&nbsp;</div>
                            <span><b>Statskog skal:</b></span>

                            <li class="list"><span>være en garantist for allmennhetens tilgang til jakt og fiske</span></li>
                            <li class="list"><span>legge til rette for allmennhetens friluftsliv</span></li>
                            <li class="list"><span>bidra til verdiskaping på fellesskapets ressurs</span></li>
                            <li class="list"><span>ivareta rettighetshavernes interesser</span></li>
                            <li class="list"><span>bidra til andres verdiskaping</span></li>
                            <li class="list"><span>være opptatt av samfunnsnytte og ringvirkninger</span></li> 
                            <li class="list"><span>ta hensyn til miljø og verneinteresser</span></li>
                            <li class="list"><span>bidra til de nasjonale klimamålene</span></li>
                        </div>
                    </div>
                </div> <!-- end left container -->
                <div id="right-container" style="float: right;">
                    <img class="image-rounded-shadow" src="../img/samfunnsansvar.jpg" />
                    
                </div>
            </div>
            <div style="clear: both;"></div>
            <?php include_once("footer.php"); ?>
        </div><!-- wrapper end -->
    </body>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="../js/jquery.statskog.js"></script>
</html>
