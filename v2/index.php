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
        <!-- <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/ChartPop.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/jquery.pageslide.css"></script> -->
        <!-- <script src="js/vendor/modernizr-2.6.2.min.js"></script> -->
    </head>
    <body>
        <!-- Add your site or application content here -->
        <div id="log"></div>
        <div id="top">
            <div class="top-logo"></div>
            <div class="top-container">
                <div class="top-txt">
                    <h1>Årsrapport 2012</h1>
                    <p>Ho oh ihpi wefipegh wepi piurgh pirgh erigergeh reirgh eierpige iejbg peirbg irierthg eigberitg ibge ge erigeh rirg</p>
                </div>
            </div>
            <div class="top-bg"></div>
        </div>
        <div id="wrapper"><!-- wrapper -->
            <div>
                <?php include_once("php/menu.php"); ?>
            </div>
            <div style="clear: both;"></div>
            <div>
                <a href="http://2011.statskog.no/" target="_blank">http://2011.statskog.no/</a>
            </div>
        </div><!-- wrapper end -->
        
        <!-- footer -->
        <!-- <?php include_once("php/footer.php"); ?> -->
        <!-- footer end -->
    </body>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        
        $("#main-menu li a").on("click", function(e) {
            $elm = $(this);
            log("hello");
        })

        var log = $("#log");
        function l(str, type) {
            log.append("> "+str);
        }

        l("ready");
    })
    </script>
</html>
