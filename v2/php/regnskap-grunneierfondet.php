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
                background: url(../img/top/fjell.jpg) 50% 0 no-repeat;
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
                    <div class="content-box" style="width: 960px">
                        <div class="inner-box-front">
                            <h2>Regnskap for Grunneierfondet</h2>
                            Beløp i 1000 kroner.
                            <table width="100%" border="0" cellpadding="4" class="tb">
                               <tr class="bold right line-under">
                                  <td width="68%"></td>
                                  <td width="15%" class="col-grey">2012</td>
                                  <td width="17%">2011</td>
                               </tr>
                               <tr>
                                 <td>&nbsp;Festetomter </td>
                                  <td class="right col-grey"> 18 969 </td>
                                  <td class="right "> 19 596 </td>
                               </tr>
                               <tr>
                                  <td>&nbsp;Tilbakebetaling av festeavgift </td>
                                  <td class="right col-grey"> -78 </td>
                                  <td class="right"> -921 </td>
                               </tr>
                               <tr>
                                  <td>&nbsp;Overført fjellstyrene ihht. fjelloven </td>
                                  <td class="right col-grey"> -6 851 </td>
                                  <td class="right"> -7 036 </td>
                               </tr>
                               <tr>
                                  <td>&nbsp;Eiendomsutvikling </td>
                                  <td class="right col-grey"> 500 </td>
                                  <td class="right"> -   </td>
                               </tr>
                               <tr>
                                  <td>&nbsp;Fallrettigheter </td>
                                  <td class="right col-grey"> 2 757 </td>
                                  <td class="right"> 2 682 </td>
                               </tr>
                               <tr>
                                  <td>&nbsp;Grus/malm </td>
                                  <td class="right col-grey"> 882 </td>
                                  <td class="right"> 964 </td>
                               </tr>
                               <tr>
                                  <td>&nbsp;Arealavståelser (arealsalg/innløsning) </td>
                                  <td class="right col-grey"> 162 </td>
                                  <td class="right"> 299 </td>
                               </tr>
                               <tr class="bold line-over-under">
                                  <td>SUM INNTEKTER</td>
                                  <td class="right col-grey"> 16 341 </td>
                                  <td class="right"> 15 584 </td>
                               </tr>
                            </table>
                          <p>&nbsp;</p>
                            <table width="100%" border="0" cellpadding="4" class="tb">
                               <tr class="bold">
                                  <td width="68%">Kostnader </td>
                                  <td width="15%" class="col-grey"></td>
                                  <td width="17%"></td>
                               </tr>
                               <tr>
                                 <td>&nbsp;Festetomter </td>
                                  <td class="right col-grey"> -4 457 </td>
                                  <td class="right"> -4 168 </td>
                              </tr>
                               <tr>
                                  <td>&nbsp;Eiendomsutvikling </td>
                                  <td class="right col-grey"> -322 </td>
                                  <td class="right"> -   </td>
                               </tr>
                               <tr>
                                  <td>&nbsp;Fallrettigheter </td>
                                  <td class="right col-grey"> -1 230 </td>
                                  <td class="right"> -911 </td>
                               </tr>
                               <tr>
                                  <td>&nbsp;Grus/malm </td>
                                  <td class="right col-grey"> -160 </td>
                                  <td class="right"> -117 </td>
                               </tr>
                               <tr>
                                  <td>&nbsp;Arealavståelser </td>
                                  <td class="right col-grey"> -113 </td>
                                  <td class="right"> -106 </td>
                               </tr>
                               <tr>
                                  <td>&nbsp;Eiendoms- og rettighetssikring (grenser, jordskifte m.m). </td>
                                  <td class="right col-grey"> -1 643 </td>
                                  <td class="right"> -1 653 </td>
                               </tr>
                               <tr>
                                  <td>&nbsp;Ivaretakelse av grunneierinteressene (Innspill kommunens arealdel mm.) </td>
                                  <td class="right col-grey"> -528 </td>
                                  <td class="right"> -759 </td>
                               </tr>
                               <tr>
                                  <td>&nbsp;Utbetalte tilskudd NFS </td>
                                  <td class="right col-grey"> -2 300 </td>
                                  <td class="right"> -2 200 </td>
                               </tr>
                               <tr>
                                  <td>&nbsp;Utbetalte tilskudd til tiltak </td>
                                  <td class="right col-grey"> -237 </td>
                                  <td class="right"> -661 </td>
                               </tr>
                               <tr>
                                  <td>&nbsp;Arbeid med næringsutvikling mm. </td>
                                  <td class="right col-grey"> -412 </td>
                                  <td class="right"> -382 </td>
                               </tr>
                               <tr>
                                  <td>&nbsp;Ikke inntektsgivende grunneieroppgaver (håndtering av bruksretter mm) </td>
                                  <td class="right col-grey"> -3 892 </td>
                                  <td class="right"> -4 248 </td>
                               </tr>
                               <tr class="bold line-over-under"@>
                                  <td>SUM KOSTNADER</td>
                                  <td class="right col-grey"> -15 294 </td>
                                  <td class="right"> -15 205 </td>
                               </tr>
                          </table>
                          <p>&nbsp;</p>
                            <table width="100%" border="0" cellpadding="4" class="tb">
                           <tr class="line-under">
                             <td width="68%">&nbsp;Finans </td>
                              <td width="15%" class="right col-grey"> 217 </td>
                              <td width="17%" class="right"> 30 </td>
                           </tr>
                           <tr class="bold line-under">
                             <td> Resultat </td>
                              <td class="right col-grey"> 1 264 </td>
                              <td class="right"> 410 </td>
                           </tr>
                           <tr class="bold line-under">
                             <td> Inngående balanse pr 01.01. </td>
                              <td class="right col-grey"> 4 061 </td>
                              <td class="right"> 3 651 </td>
                           </tr>
                           <tr class="bold line-under">
                             <td> Utgående balanse pr 31.12 </td>
                              <td class="right col-grey"> 5 325 </td>
                              <td class="right"> 4 061 </td>
                           </tr>
                        </table>
                        <p>&nbsp;</p>
                        <b>Kommentarer til Grunneierfondets regnskap for 2012</b>
                        <p>Statskog SF har forvaltningsansvaret for grunneierinntektene fra statsallmenningene. 
                        Inntektene går inn på et eget fond, Grunneierfondet. Resultatposter tilknyttet Grunneierfondet inngår ikke som en del av Statskogs regnskap.</p>
                        <p>Grunneierfondet føres etter kontantregnskapsprinsippet.</p>
                        <p>Resultatet for 2012 viser et overskudd på 1,2 millioner kroner. Inntektene har økt noe i forhold til 2011. Det er inntektene fra fallrettigheter og eiendomsutvikling som øker. Kostnadene i 2012 er på samme nivå som året før.</p>Fjellovens § 12 hjemler bruk av grunneierinntektene fra statsallmenningene til flg. formål:
                        <li class="list"><span>administrajon av statsallmenningene</span></li>
                        <li class="list"><span>tilskudd til fellesorganisasjon for fjellstyrene</span></li>
                        <li class="list"><span>tiltak i statsallmenningene, etter samråd med fellesorganisasjonen</span></li>
                        <li class="list"><span>innløsing av private særretter til fiske</span></li>
                        <p>Styret i Statskog har utarbeidet retningslinjer for bruk av midler til tiltak i statsallmenningene.</p>
                        <p>Under «Formål» står det:<br>
                        "Bruk av midler fra Grunneierfondet til tiltak skal være i tråd med fjellovens § 12.</p>
                        <p>Grunneierinntektene skal brukes i prosjekter som:
                        <li class="list"><span>bidrar til lønnsom næringsvirksomhet m.m.</span></li>
                        <li class="list"><span>utvikler infrastruktur som indirekte bidrar til utvikling av lønnsomme arbeidsplasser</span></li>
                        <br>Næringsvirksomheten må ha som formål å utnytte ressursene i statsallmenningene, eller på grunnlag av ressurser fra allmenningene.<br>Grunneierinntektene kan videre brukes til tiltak i statsallmenningene som innebærer verdiskapning eller bevaring av verdier av mer samfunnsmessig art. Dette er tiltak som for eksempel går på kulturminnevern.<br>
                        <p>Midlene skal husholderes på en slik måte at de også gir rom for en aktiv forvaltning av allmenningene."</p>
                        <p>Det er ikke gitt tilsagn om tilskudd til tiltak i 2012. Utbetalingene i 2012 skriver seg fra tilsagn gitt i 2008 og 2009. Gjenstående tilsagn fra 2008/09 til tiltak utgjør 305 000 kroner ved årsskiftet.</p>
                        </div>
                    </div>
                </div>
                <!--<div id="right-container" style="float: right;">
                    <div class="content-box-right">
                        &nbsp;
                    </div>
                </div> -->
                <div style="clear: both;"></div>
            </div>
            <?php include_once("footer.php"); ?>
        </div><!-- wrapper end -->
    </body>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="../js/jquery.statskog.js"></script>
</html>
