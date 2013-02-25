<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Årsrapport 2012 - Statskog</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        
        <link rel="stylesheet" href="css/styled.css">
        <link rel="stylesheet" href="css/normalize.css">
        <!-- <link rel="stylesheet" href="css/ChartPop.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/jquery.pageslide.css"></script> -->
        <!-- <script src="js/vendor/modernizr-2.6.2.min.js"></script> -->
    </head>
    <body>
        <!-- Add your site or application content here -->
        <div id="log"></div>
        <div id="top">
            <!-- <a href="http://testserver.loc/statskog/v2"><div class="top-logo"></div></a> -->
            <?php 
                include_once("php/logo.php") 
            ?>
            <div class="top-container">
                <div class="top-txt">
                    <?php include_once("php/top-txt.php") ?>
                </div>
            </div>
            <div class="top-bg"></div>
        </div>
        <div id="wrapper"><!-- wrapper -->
            <div id="menu-container"> <!-- menu -->
                <?php include_once("php/menu.php"); ?>
            </div> <!-- menu end -->
            <div style="clear: both;"></div>
            <div id="content-container">
                <div class="content-box">
                    <a href="php/rev-enn-rype.php">- Skyt heller rev enn rype</a>
                </div>
                <div class="content-box">
                    <a href="php/vekker-oppsikt.php">Statskog vekker oppsikt</a>
                </div>
                <div class="content-box">
                    <a href="php/fulle-fiskevann-venter.php">Fulle fiskevann venter</a>
                </div>
                <div class="content-box">
                    <a href="php/ny-tur-app.php">Ny tur app!</a>
                </div>
                <div class="content-box">
                    content
                </div>
                
            </div>

        </div><!-- wrapper end -->
        <div id="footer">
            <a href="http://2011.statskog.no/" target="_blank">http://2011.statskog.no/</a>
        </div>
        <!-- footer -->
        <!-- <?php include_once("php/footer.php"); ?> -->
        <!-- footer end -->
    </body>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="js/jquery.masonry.min.js"></script>
    <script src="js/jquery.statskog.js"></script>
</html>
