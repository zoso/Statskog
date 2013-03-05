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
                background: url(../img/top_regioner.jpg) 50% 0 no-repeat;
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
                    <!-- <?php include_once("top-txt.php") ?> -->
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
                            <h2>Regioner (skal ut?)</h2>
                            <p>Statskogs grunn er delt inn i fem ulike regioner der de respektive regionsjefene har ansvar for drift og utvikling av eiendommene. De er også Statskogs kontakt med oppdragsgivere, offentlige myndigheter, rettighetshavere og interessegrupper i sin region.</p>
                            <p></p>
                            <p><b>Salg av jakt- og fiskeprodukter/jaktstatistikk</b></p>
                            <table width="100%" border="0" cellpadding="4">
                                <tr style="font-weight: bold;" class="line-over-under">
                                    <td></td>
                                    <td>2012</td>
                                    <td>2011</td>
                                    <td>2010</td>
                                    <td>2009</td>
                                </tr>
                                <tr>
                                    <td>Elg felte dyr</td>
                                    <td>1 274</td>
                                    <td></td>
                                    <td>822</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Hjort felte dyr</td>
                                    <td>58</td>
                                    <td></td>
                                    <td>64</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Villrein felte dyr</td>
                                    <td>75</td>
                                    <td></td>
                                    <td>63</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Småvilt solgte kort</td>
                                    <td>13 998</td>
                                    <td>15 040</td>
                                    <td>13 942</td>
                                    <td>11 576</td>
                                </tr>
                                <tr>
                                    <td>Fiske solgte kort</td>
                                    <td>12 490</td>
                                    <td>20 050</td>
                                    <td>19 672</td>
                                    <td>20 733</td>
                                </tr>
                                <tr class="line-under">
                                    <td>Hytteutleie utleiedøgn</td>
                                    <td>6 565</td>
                                    <td>5 900</td>
                                    <td>4 898</td>
                                    <td>4 683</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div id="right-container" style="float: right;">
                    <div class="content-box-right">
                        <div style="padding: 10px; font-weight: bold;">Regioner og regionsjefer</div>
                        <div style="margin-bottom: 5px;">
                            <img src="../img/persons/troms_kaare-rasmussen.jpg" />
                            <br>Troms: Kåre Rasmussen
                        </div>
                        <div style="margin-bottom: 5px;">
                            <img src="../img/persons/salten_jan-normann-nilsen.jpg" />
                            <br>Salten: Jan N. Nilsen
                        </div>
                        <div style="margin-bottom: 5px;">
                            <img src="../img/persons/helgeland_wenche-hjelmseth.jpg" />
                            <br>Helgeland: Wenche Hjelmseth
                        </div>
                        <div style="margin-bottom: 5px;">
                            <img src="../img/persons/midt-norge_carl-libach.jpg" />
                            <br>Midt-Norge: Carl Libach
                        </div>
                        <div style="padding-bottom: 5px;">
                            <img src="../img/persons/regionsjef_jan_helge_nordby.jpg" />
                            <br>Sør-Norge: Jan Helge Nordby
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
