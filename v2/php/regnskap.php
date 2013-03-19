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
                background: url(../img/top/Resultatregnskap.jpg) 50% 0 no-repeat;
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
                    <div class="content-box" style="width: 960px;">
                      <div class="inner-box-front">
                            <h2>Resultatregnskap Statskog</h2>
                            <div class="border-down">&nbsp;</div>
                            
                            <table width="100%" border="0" cellpadding="4" class="tb">
                               <tr>
                                  <td colspan="2" class="small-heading" style="color: #004c6b;">Statskog Konsern</td>
                                  <td class="small-heading">(Beløp i 1000 kroner)</td>
                                  <td></td>
                                  <td colspan="2" class="small-heading" style="color: #cf621c;">Statskog SF</td>
                               </tr>
                               <tr class="line-over-under">
                                  <td class="bold center col-grey">2012</td>
                                  <td class="bold center">2011</td>
                                  <td></td>
                                  <td class="center">Noter</td>
                                  <td class="bold center col-grey">2012</td>
                                  <td class="bold center">2011</td>
                               </tr>
                               <tr>
                                  <td class="bold right col-grey">443 728</td>
                                  <td class="bold right">398 367</td>
                                  <td class="bold">DRIFTSINNTEKTER</td>
                                  <td class="center">1</td>
                                  <td class="bold right col-grey">380 538</td>
                                  <td class="bold right">307 275</td>
                               </tr>
                               <tr>
                                  <td class="col-grey">&nbsp;</td>
                                  <td></td>
                                  <td></td>
                                  <td class="center"></td>
                                  <td class="col-grey">&nbsp;</td>
                                  <td></td>
                              </tr>
                               <tr>
                                  <td class="right col-grey">98 215</td>
                                  <td class="right">98 548</td>
                                  <td>Varekostnad</td>
                                  <td class="center"></td>
                                  <td class="right col-grey">56 357</td>
                                  <td class="right">54 469</td>
                               </tr>
                               <tr>
                                  <td class="right col-grey">95 284</td>
                                  <td class="right">93 764</td>
                                  <td>Lønnskostnad</td>
                                  <td class="center">3</td>
                                  <td class="right col-grey">94 503</td>
                                  <td class="right">86 480</td>
                               </tr>
                               <tr>
                                  <td class="right col-grey">73 308</td>
                                  <td class="right">85 044</td>
                                  <td>Annen driftskostnad</td>
                                  <td class="center"> </td>
                                  <td class="right col-grey">61 709</td>
                                  <td class="right">67 151</td>
                               </tr>
                               <tr>
                                  <td class="right col-grey">16 679</td>
                                  <td class="right">11 285</td>
                                  <td>Avskrivning på varige driftsmidler</td>
                                  <td class="center">5</td>
                                  <td class="right col-grey">6 339</td>
                                  <td class="right">5 631</td>
                               </tr>
                               <tr class="bold line-over-under">
                                  <td class="right col-grey">283 485</td>
                                  <td class="right">288 642</td>
                                  <td>SUM DRIFTSKOSTNADER</td>
                                  <td class="center"></td>
                                  <td class="right col-grey">218 908</td>
                                  <td class="right">213 731</td>
                               </tr>
                               <tr>
                                  <td class="col-grey">&nbsp;</td>
                                  <td></td>
                                  <td></td>
                                  <td class="center"></td>
                                  <td class="col-grey">&nbsp;</td>
                                  <td></td>
                               </tr>
                               <tr class="bold line-over-under">
                                  <td class="right col-grey">160 243</td>
                                  <td class="right">109 725</td>
                                  <td>DRIFTSRESULTAT</td>
                                  <td class="center"></td>
                                  <td class="right col-grey">161 630</td>
                                  <td class="right">93 544</td>
                               </tr>
                               <tr>
                                  <td class="col-grey">&nbsp;</td>
                                  <td></td>
                                  <td></td>
                                  <td class="center"></td>
                                  <td class="col-grey">&nbsp;</td>
                                  <td></td>
                               </tr>
                               <tr>
                                  <td class="right col-grey">-8 933</td>
                                  <td class="right">-1 796</td>
                                  <td>Inntekt på investering i datterselskap og tilknyttede selskap</td>
                                  <td class="center">6</td>
                                  <td class="right col-grey">5 106</td>
                                  <td class="right">17 685</td>
                               </tr>
                               <tr>
                                  <td class="right col-grey">3 170</td>
                                  <td class="right">5 076</td>
                                  <td>Finansinntekt</td>
                                  <td class="center">8</td>
                                  <td class="right col-grey">4 397</td>
                                  <td class="right">8 694</td>
                               </tr>
                               <tr>
                                  <td class="right col-grey">-23 062</td>
                                  <td class="right">-24 903</td>
                                  <td>Finanskostnad</td>
                                  <td class="center">8</td>
                                  <td class="right col-grey">-23 169</td>
                                  <td class="right">-25 178</td>
                               </tr>
                               <tr>
                                  <td class="right col-grey">-639</td>
                                  <td class="right"></td>
                                  <td>Nedskrivning av finansielle anleggsmidler</td>
                                  <td class="center"></td>
                                  <td class="right col-grey">-639</td>
                                  <td class="right"></td>
                               </tr>
                               <tr>
                                  <td class="right col-grey">12 050</td>
                                  <td class="right">-1 523</td>
                                  <td>Verdiendring av markedsbaserte plasseringer</td>
                                  <td class="center">9</td>
                                  <td class="right col-grey">11 381</td>
                                  <td class="right">-1 651</td>
                               </tr>
                               <tr class="bold line-over-under">
                                  <td class="right col-grey">-17 415</td>
                                  <td class="right">-23 146</td>
                                  <td>SUM FINANSPOSTER</td>
                                  <td class="center"></td>
                                  <td class="right col-grey">-2 925</td>
                                  <td class="right">-449</td>
                               </tr>
                               <tr>
                                  <td class="col-grey">&nbsp;</td>
                                  <td></td>
                                  <td></td>
                                  <td class="center"></td>
                                  <td class="col-grey">&nbsp;</td>
                                  <td></td>
                               </tr>
                               <tr class="bold line-over-under">
                                  <td class="right col-grey">142 828</td>
                                  <td class="right">86 579</td>
                                  <td>ORDINÆRT RESULTAT FØR SKATTEKOSTNAD</td>
                                  <td class="center"></td>
                                  <td class="right col-grey">158 705</td>
                                  <td class="right">93 095</td>
                               </tr>
                               <tr>
                                  <td class="col-grey">&nbsp;</td>
                                  <td></td>
                                  <td></td>
                                  <td class="center"></td>
                                  <td class="col-grey">&nbsp;</td>
                                  <td></td>
                               </tr>
                               <tr>
                                  <td class="right col-grey">24 806</td>
                                  <td class="right">11 188</td>
                                  <td>Skattekostnad på ordinært resultat</td>
                                  <td class="center">10</td>
                                  <td class="right col-grey">20 995</td>
                                  <td class="right">6 920</td>
                               </tr>
                               <tr class="bold line-over-under">
                                  <td class="right col-grey">118 022</td>
                                  <td class="right">75 390</td>
                                  <td>ÅRSRESULTAT</td>
                                  <td></td>
                                  <td class="right col-grey">137 710</td>
                                  <td class="right">86 174</td>
                               </tr>
                               <tr>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                               </tr>
                               <tr>
                                  <td></td>
                                  <td></td>
                                  <td class="bold">Overføringer og disponering av resultat:</td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                               </tr>
                               <tr>
                                  <td class="right col-grey">28 700</td>
                                  <td class="right">40 100</td>
                                  <td>Utbytte</td>
                                  <td></td>
                                  <td class="right col-grey">28 700</td>
                                  <td class="right">40 100</td>
                               </tr>
                               <tr>
                                  <td class="right col-grey">89 322</td>
                                  <td class="right">35 290</td>
                                  <td>Annen egenkapital</td>
                                  <td></td>
                                  <td class="right col-grey">109 010</td>
                                  <td class="right">46 074</td>
                               </tr>
                               <tr class="bold line-over-under">
                                  <td class="right col-grey">118 022</td>
                                  <td class="right">75 390</td>
                                  <td>SUM DISPONERT</td>
                                  <td></td>
                                  <td class="right col-grey">137 710</td>
                                  <td class="right">86 174</td>
                               </tr>
                            </table>
                            <p>&nbsp;</p>
                            <h2>Balanse Statskog</h2>
                            <table width="100%" border="0" cellpadding="4" class="tb">
                              <tr>
                                  <td colspan="2" class="small-heading" style="color: #004c6b;">Statskog Konsern</td>
                                  <td class="small-heading">(Beløp i 1000 kroner)</td>
                                  <td></td>
                                  <td colspan="2" class="small-heading" style="color: #cf621c;">Statskog SF</td>
                               </tr>
                           <tr class="bold line-over-under">
                              <td class="center col-grey">2012</td>
                              <td class="center">2011</td>
                              <td>EIENDELER</td>
                              <td></td>
                              <td class="center col-grey">2012</td>
                              <td class="center">2011</td>
                           </tr>
                           <tr>
                             <td class=" col-grey">&nbsp;</td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td class=" col-grey">&nbsp;</td>
                              <td></td>
                           </tr>
                           <tr>
                              <td class=" col-grey">&nbsp;</td>
                             <td></td>
                              <td class="bold">ANLEGGSMIDLER</td>
                              <td></td>
                              <td class=" col-grey">&nbsp;</td>
                              <td></td>
                           </tr>
                           <tr>
                              <td class="right col-grey">10 724</td>
                              <td class="right">14 944</td>
                              <td>Fallrettigheter</td>
                              <td class="center">5</td>
                              <td class="right col-grey">10 724</td>
                              <td class="right">10 724</td>
                           </tr>
                           <tr class="bold">
                              <td class="right col-grey">10 724</td>
                              <td class="right">14 944</td>
                              <td>Sum imaterielle eiendeler</td>
                              <td class="center"></td>
                              <td class="right col-grey">10 724</td>
                              <td class="right">10 724</td>
                           </tr>
                           <tr>
                              <td class="right col-grey">1 717 906</td>
                              <td class="right">1 718 650</td>
                              <td>Skogeiendommer og tomter</td>
                              <td class="center">5</td>
                              <td class="right col-grey">73 631</td>
                              <td class="right">74 374</td>
                           </tr>
                           <tr>
                              <td class="right col-grey">64 253</td>
                              <td class="right">71 405</td>
                              <td>Bygninger</td>
                              <td class="center">5</td>
                              <td class="right col-grey">7 824</td>
                              <td class="right">8 523</td>
                           </tr>
                           <tr>
                              <td class="right col-grey">22 941</td>
                              <td class="right">11 770</td>
                              <td>Maskiner, inventar og kunst</td>
                              <td class="center">5</td>
                              <td class="right col-grey">17 544</td>
                              <td class="right">11 317</td>
                           </tr>
                           <tr class="bold">
                              <td class="right col-grey">1 805 100</td>
                              <td class="right">1 801 825</td>
                              <td>Sum varige driftsmidler</td>
                              <td class="center"></td>
                              <td class="right col-grey">98 999</td>
                              <td class="right">94 214</td>
                           </tr>
                           <tr>
                              <td class="right col-grey">48 394</td>
                              <td class="right">34 953</td>
                              <td>Investeringer i datterselskap og tilknyttede selskap</td>
                              <td class="center">6</td>
                              <td class="right col-grey">1 810 606</td>
                              <td class="right">1 783 502</td>
                           </tr>
                           <tr>
                              <td class="right col-grey">1 424</td>
                              <td class="right">2 705</td>
                              <td>Investeringer i aksjer og andeler</td>
                              <td class="center">7</td>
                              <td class="right col-grey">1 189</td>
                              <td class="right">1 506</td>
                           </tr>
                           <tr>
                              <td class="right col-grey">393</td>
                              <td class="right">19 011</td>
                              <td>Andre fordringer</td>
                              <td class="center">11</td>
                              <td class="right col-grey">293</td>
                              <td class="right">14 993</td>
                           </tr>
                           <tr class="bold">
                              <td class="right col-grey">50 211</td>
                              <td class="right">56 670</td>
                              <td>Sum finansielle anleggsmidler</td>
                              <td></td>
                              <td class="right col-grey">1 812 088</td>
                              <td class="right">1 800 001</td>
                           </tr>
                           <tr class="bold line-over-under">
                              <td class="right col-grey">1 866 035</td>
                              <td class="right">1 873 439</td>
                              <td>Sum anleggsmidler</td>
                              <td></td>
                              <td class="right col-grey">1 921 811</td>
                              <td class="right">1 904 939</td>
                           </tr>
                           <tr>
                              <td class=" col-grey">&nbsp;</td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td class=" col-grey">&nbsp;</td>
                              <td></td>
                           </tr>
                           <tr>
                              <td class=" col-grey">&nbsp;</td>
                              <td></td>
                              <td class="bold">OMLØPSMIDLER</td>
                              <td></td>
                              <td class=" col-grey">&nbsp;</td>
                              <td></td>
                           </tr>
                           <tr>
                              <td class="right col-grey">6 824</td>
                              <td class="right">6 906</td>
                              <td>Varer</td>
                              <td class="center">12</td>
                              <td class="right col-grey">6 824</td>
                              <td class="right">6 850</td>
                           </tr>
                           <tr>
                              <td class="right col-grey">5 000</td>
                              <td class="right">5 000</td>
                              <td>Aksjer</td>
                              <td class="center">13</td>
                              <td class="right col-grey"></td>
                              <td class="right"></td>
                           </tr>
                           <tr>
                              <td class="right col-grey">32 781</td>
                              <td class="right">36 597</td>
                              <td>Kundefordringer</td>
                              <td class="center">14</td>
                              <td class="right col-grey">25 761</td>
                              <td class="right">30 384</td>
                           </tr>
                           <tr>
                              <td class="right col-grey"></td>
                              <td class="right"></td>
                              <td>Fordring konsernselskap</td>
                              <td class="center"></td>
                              <td class="right col-grey">20 739</td>
                              <td class="right">52 159</td>
                           </tr>
                           <tr>
                              <td class="right col-grey">13 764</td>
                              <td class="right">27 514</td>
                              <td>Andre fordringer</td>
                              <td class="center"></td>
                              <td class="right col-grey">9 585</td>
                              <td class="right">22 794</td>
                           </tr>
                           <tr>
                              <td class="right col-grey">234 033</td>
                              <td class="right">196 583</td>
                              <td>Markedsbaserte plasseringer</td>
                              <td class="center">9</td>
                              <td class="right col-grey">230 136</td>
                              <td class="right">177 456</td>
                           </tr>
                           <tr>
                              <td class="right col-grey">52 054</td>
                              <td class="right">84 124</td>
                              <td>Bankinnskudd, kontanter og lignende</td>
                              <td class="center">15</td>
                              <td class="right col-grey">35 744</td>
                              <td class="right">54 927</td>
                           </tr>
                           <tr class="bold line-over-under">
                              <td class="right col-grey">344 456</td>
                              <td class="right">356 723</td>
                              <td>Sum omløpsmidler</td>
                              <td></td>
                              <td class="right col-grey">328 789</td>
                              <td class="right">344 569</td>
                           </tr>
                           <tr>
                              <td class="right col-grey">&nbsp;</td>
                              <td class="right"></td>
                              <td></td>
                              <td></td>
                              <td class="right col-grey"></td>
                              <td class="right"></td>
                           </tr>
                           <tr class="bold line-over-under">
                              <td class="right col-grey">2 210 491</td>
                              <td class="right">2 230 162</td>
                              <td>SUM EIENDELER</td>
                              <td></td>
                              <td class="right col-grey">2 250 600</td>
                              <td class="right">2 249 508</td>
                           </tr>
                           <tr>
                              <td class="right col-grey">&nbsp;</td>
                              <td class="right"></td>
                              <td></td>
                              <td></td>
                              <td class=" col-grey">&nbsp;</td>
                              <td></td>
                           </tr>
                           <tr>
                              <td class="right col-grey">&nbsp;</td>
                              <td class="right"></td>
                              <td></td>
                              <td></td>
                              <td class=" col-grey">&nbsp;</td>
                              <td></td>
                           </tr>
                           <tr class="bold line-over-under">
                              <td class="center col-grey">2012</td>
                              <td class="center">2011</td>
                              <td>GJELD OG EGENKAPITAL</td>
                              <td></td>
                              <td class="center col-grey">2012</td>
                              <td class="center">2011</td>
                           </tr>
                           <tr>
                              <td class=" col-grey">&nbsp;</td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td class=" col-grey">&nbsp;</td>
                              <td></td>
                           </tr>
                           <tr>
                              <td class=" col-grey">&nbsp;</td>
                              <td></td>
                              <td class="bold">EGENKAPITAL</td>
                              <td></td>
                              <td class=" col-grey">&nbsp;</td>
                              <td></td>
                           </tr>
                           <tr>
                              <td class="right col-grey">1 335 000</td>
                              <td class="right">1 335 000</td>
                              <td>Selskapskapital</td>
                              <td class="center">16</td>
                              <td class="right col-grey">1 335 000</td>
                              <td class="right">1 335 000</td>
                           </tr>
                           <tr>
                              <td class="right col-grey">19 253</td>
                              <td class="right">19 253</td>
                              <td>Annen innskutt selskapskapital</td>
                              <td class="center">16</td>
                              <td class="right col-grey">19 253</td>
                              <td class="right">19 253</td>
                           </tr>
                           <tr class="bold">
                              <td class="right col-grey">1 354 253</td>
                              <td class="right">1 354 253</td>
                              <td>Sum innskutt egenkapital</td>
                              <td class="center"></td>
                              <td class="right col-grey">1 354 253</td>
                              <td class="right">1 354 253</td>
                           </tr>
                           <tr>
                              <td class="right col-grey">332 594</td>
                              <td class="right">243 272</td>
                              <td>Annen egenkapital</td>
                              <td class="center">16</td>
                              <td class="right col-grey">369 297</td>
                              <td class="right">260 287</td>
                           </tr>
                           <tr class="bold">
                              <td class="right col-grey">332 594</td>
                              <td class="right">243 272</td>
                              <td>Sum opptjent egenkapital</td>
                              <td></td>
                              <td class="right col-grey">369 297</td>
                              <td class="right">260 287</td>
                           </tr>
                           <tr class="bold line-over-under">
                              <td class="right col-grey">1 686 847</td>
                              <td class="right">1 597 525</td>
                              <td>Sum egenkapital</td>
                              <td></td>
                              <td class="right col-grey">1 723 551</td>
                              <td class="right">1 614 540</td>
                           </tr>
                           <tr>
                              <td class=" col-grey">&nbsp;</td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td class=" col-grey">&nbsp;</td>
                              <td></td>
                           </tr>
                           <tr>
                              <td class=" col-grey">&nbsp;</td>
                              <td></td>
                              <td class="bold">GJELD</td>
                              <td></td>
                              <td class=" col-grey">&nbsp;</td>
                              <td></td>
                           </tr>
                           <tr>
                              <td class="right col-grey">44 828</td>
                              <td class="right">19 934</td>
                              <td>Utsatt skatt</td>
                              <td class="center">10</td>
                              <td class="right col-grey">24 555</td>
                              <td class="right">3 560</td>
                           </tr>
                           <tr>
                              <td class="right col-grey">2 076</td>
                              <td class="right">2 700</td>
                              <td>Pensjonsforpliktelser</td>
                              <td class="center">4</td>
                              <td class="right col-grey">2 076</td>
                              <td class="right">2 303</td>
                           </tr>
                           <tr>
                              <td class="right col-grey">20 923</td>
                              <td class="right">22 408</td>
                              <td>Andre avsetninger for forpliktelser</td>
                              <td class="center"></td>
                              <td class="right col-grey">20 923</td>
                              <td class="right">22 408</td>
                           </tr>
                           <tr class="bold">
                              <td class="right col-grey">67 827</td>
                              <td class="right">45 042</td>
                              <td>Sum avsetning for forpliktelser</td>
                              <td class="center"></td>
                              <td class="right col-grey">47 554</td>
                              <td class="right">28 271</td>
                           </tr>
                           <tr>
                              <td class="right col-grey">375 000</td>
                              <td class="right">475 000</td>
                              <td>Ansvarlig lån</td>
                              <td class="center">17</td>
                              <td class="right col-grey">375 000</td>
                              <td class="right">475 000</td>
                           </tr>
                           <tr class="bold line-over-under">
                              <td class="right col-grey">442 827</td>
                              <td class="right">520 042</td>
                              <td>Sum langsiktig gjeld</td>
                              <td></td>
                              <td class="right col-grey">422 554</td>
                              <td class="right">503 271</td>
                           </tr>
                           <tr>
                              <td class=" col-grey">&nbsp;</td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td class=" col-grey">&nbsp;</td>
                              <td></td>
                           </tr>
                           <tr>
                              <td class=" col-grey">&nbsp;</td>
                              <td></td>
                              <td class="bold">KORTSIKTIG GJELD</td>
                              <td></td>
                              <td class=" col-grey">&nbsp;</td>
                              <td></td>
                           </tr>
                           <tr>
                              <td class="right col-grey">16 229</td>
                              <td class="right">18 867</td>
                              <td>Leverandørgjeld</td>
                              <td></td>
                              <td class="right col-grey">12 719</td>
                              <td class="right">14 007</td>
                           </tr>
                           <tr>
                              <td class="right col-grey"></td>
                              <td class="right"></td>
                              <td>Kortsiktig gjeld til konsernselskap</td>
                              <td></td>
                              <td class="right col-grey">27 881</td>
                              <td class="right">29 863</td>
                           </tr>
                           <tr>
                              <td class="right col-grey"></td>
                              <td class="right"></td>
                              <td>Betalbar skatt </td>
                              <td class="center">10</td>
                              <td class="right col-grey"></td>
                              <td class="right"></td>
                           </tr>
                           <tr>
                              <td class="right col-grey">5 160</td>
                              <td class="right">6 598</td>
                              <td>Skyldig offentlige avgifter</td>
                              <td class="center"></td>
                              <td class="right col-grey">5 002</td>
                              <td class="right">5 493</td>
                           </tr>
                           <tr>
                              <td class="right col-grey">28 700</td>
                              <td class="right">40 100</td>
                              <td>Utbytte</td>
                              <td class="center"></td>
                              <td class="right col-grey">28 700</td>
                              <td class="right">40 100</td>
                           </tr>
                           <tr>
                              <td class="right col-grey">30 728</td>
                              <td class="right">47 030</td>
                              <td>Annen kortsiktig gjeld </td>
                              <td class="center">18</td>
                              <td class="right col-grey">30 194</td>
                              <td class="right">42 232</td>
                           </tr>
                           <tr class="bold line-over-under">
                              <td class="right col-grey">80 817</td>
                              <td class="right">112 596</td>
                              <td>Sum kortsiktig gjeld</td>
                              <td></td>
                              <td class="right col-grey">104 496</td>
                              <td class="right">131 696</td>
                           </tr>
                           <tr>
                              <td class="right col-grey"></td>
                              <td class="right"></td>
                              <td></td>
                              <td></td>
                              <td class="right col-grey"></td>
                              <td class="right"></td>
                           </tr>
                           <tr class="bold line-over-under">
                              <td class="right col-grey">2 210 491</td>
                              <td class="right">2 230 162</td>
                              <td>SUM GJELD OG EGENKAPITAL</td>
                              <td></td>
                              <td class="right col-grey">2 250 600</td>
                              <td class="right">2 249 508</td>
                           </tr>
                        </table>
                        <p>&nbsp;</p>
                        <h2>Kontantstrømoppstilling</h2>
                        <table width="100%" border="0" cellpadding="4" class="tb">
                            <tr>
                                  <td colspan="2" class="small-heading" style="color: #004c6b;">Statskog Konsern</td>
                                  <td class="small-heading">(Beløp i 1000 kroner)</td>
                                  <td></td>
                                  <td colspan="2" class="small-heading" style="color: #cf621c;">Statskog SF</td>
                               </tr>
                           <tr class="bold center">
                              <td class="col-grey">2012</td>
                              <td>2011</td>
                              <td></td>
                              <td class="col-grey">2012</td>
                              <td>2011</td>
                           </tr>
                           <tr>
                              <td class="col-grey">&nbsp;</td>
                              <td></td>
                              <td></td>
                              <td class="col-grey">&nbsp;</td>
                              <td></td>
                           </tr>
                           <tr>
                              <td class="col-grey">&nbsp;</td>
                              <td></td>
                              <td class="bold">Kontantstrøm fra operasjonelle aktiviteter</td>
                              <td class="col-grey">&nbsp;</td>
                              <td></td>
                           </tr>
                           <tr>
                              <td class="col-grey">&nbsp;</td>
                              <td></td>
                              <td></td>
                              <td class="col-grey">&nbsp;</td>
                              <td></td>
                           </tr>
                           <tr>
                              <td class="right col-grey">142 828</td>
                              <td class="right">86 579</td>
                              <td>Resultat før skatt</td>
                              <td class="right col-grey">158 705</td>
                              <td class="right">93 095</td>
                           </tr>
                           <tr>
                              <td class="right col-grey"></td>
                              <td class="right"></td>
                              <td>Årets betalte skatter</td>
                              <td class="right col-grey"></td>
                              <td class="right"></td>
                           </tr>
                           <tr>
                              <td class="right col-grey">16 679</td>
                              <td class="right">11 285</td>
                              <td>Årets ordinære avskrivninger</td>
                              <td class="right col-grey">6 339</td>
                              <td class="right">5 631</td>
                           </tr>
                           
                           <tr>
                              <td class="col-grey">&nbsp;</td>
                              <td></td>
                              <td>Avgang datterselskap ved fusjon</td>
                              <td class="col-grey">&nbsp;</td>
                              <td></td>
                           </tr>
                           <tr>
                              <td class="right col-grey">-61</td>
                              <td class="right">-2 803</td>
                              <td>Gevinst/tap aksjer og andeler</td>
                              <td class="right col-grey">-61</td>
                              <td class="right">-7 237</td>
                           </tr>
                           <tr>
                              <td class="right col-grey">-92 211</td>
                              <td class="right">-61 523</td>
                              <td>Gevinst/tap salg av anleggsmidler</td>
                              <td class="right col-grey">-91 681</td>
                              <td class="right">-54 727</td>
                           </tr>
                           <tr>
                              <td class="right col-grey">-12 031</td>
                              <td class="right">1 523</td>
                              <td>Verdiendring markedsbaserte finansielle omløpsmidler</td>
                              <td class="right col-grey">-11 381</td>
                              <td class="right">1 801</td>
                           </tr>
                           <tr>
                              <td class="right col-grey">8 933</td>
                              <td class="right">1 796</td>
                              <td>Ikke utbetalt resultatandel datter- og tilknyttede selskap</td>
                              <td class="right col-grey">-5 106</td>
                              <td class="right">-17 685</td>
                           </tr>
                           <tr>
                              <td class="right col-grey">82</td>
                              <td class="right">2 248</td>
                              <td>Endring i varebeholdning</td>
                              <td class="right col-grey">26</td>
                              <td class="right">-1 611</td>
                           </tr>
                           <tr>
                              <td class="right col-grey">17 566</td>
                              <td class="right">32 420</td>
                              <td>Endring i fordringer</td>
                              <td class="right col-grey">49 252</td>
                              <td class="right">-62 503</td>
                           </tr>
                           <tr>
                              <td class="right col-grey">-39 190</td>
                              <td class="right">-74 921</td>
                              <td>Endring i andre tidsavgrensningsposter</td>
                              <td class="right col-grey">-12 367</td>
                              <td class="right">5 138</td>
                           </tr>
                           <tr class="bold line-over-under">
                              <td class="right col-grey">42 596</td>
                              <td class="right">-3 395</td>
                              <td>Netto likviditetsendring fra virksomheten</td>
                              <td class="right col-grey">93 727</td>
                              <td class="right">-38 424</td>
                           </tr>
                           <tr>
                              <td class="col-grey">&nbsp;</td>
                              <td></td>
                              <td></td>
                              <td class="col-grey">&nbsp;</td>
                              <td></td>
                           </tr>
                           <tr>
                              <td class="col-grey">&nbsp;</td>
                              <td></td>
                              <td class="bold">Kontantstrøm fra investeringsaktiviteter</td>
                              <td class="col-grey">&nbsp;</td>
                              <td></td>
                           </tr>
                           <tr>
                              <td class="col-grey">&nbsp;</td>
                              <td></td>
                              <td></td>
                              <td class="col-grey">&nbsp;</td>
                              <td></td>
                           </tr>
                           <tr>
                              <td class="right col-grey">-17 294</td>
                              <td class="right">-4 876</td>
                              <td>Investering i varige driftsmidler</td>
                              <td class="right col-grey">-12 153</td>
                              <td class="right">-4 876</td>
                           </tr>
                           <tr>
                              <td class="right col-grey">92 832</td>
                              <td class="right">65 234</td>
                              <td>Salg av varige driftsmidler (salgssum)</td>
                              <td class="right col-grey">92 302</td>
                              <td class="right">55 484</td>
                           </tr>
                           <tr>
                              <td class="right col-grey">-25 419</td>
                              <td class="right">-64 000</td>
                              <td>Investering i verdipapirer</td>
                              <td class="right col-grey">-41 299</td>
                              <td class="right">-45 000</td>
                           </tr>
                           <tr>
                              <td class="right col-grey">13 633</td>
                              <td class="right">13 633</td>
                              <td>Salg av verdipapir (salgssum)</td>
                              <td class="right col-grey">656</td>
                              <td class="right">24 018</td>
                           </tr>
                           <tr>
                              <td class="right col-grey">1 682</td>
                              <td class="right">135</td>
                              <td>Endring i andre langsiktige investeringer</td>
                              <td class="right col-grey">-12 314</td>
                              <td class="right">6 798</td>
                           </tr>
                           <tr class="bold line-over-under">
                              <td class="right col-grey">65 434</td>
                              <td class="right">10 126</td>
                              <td>Netto likviditetsendring fra investeringer</td>
                              <td class="right col-grey">27 192</td>
                              <td class="right">36 424</td>
                           </tr>
                           <tr>
                              <td class="col-grey">&nbsp;</td>
                              <td></td>
                              <td></td>
                              <td class="col-grey">&nbsp;</td>
                              <td></td>
                           </tr>
                           <tr>
                              <td class="col-grey">&nbsp;</td>
                              <td></td>
                              <td class="bold">Kontantstrøm fra finansieringsaktiviteter</td>
                              <td class="col-grey">&nbsp;</td>
                              <td></td>
                           </tr>
                           <tr>
                              <td class="col-grey">&nbsp;</td>
                              <td></td>
                              <td></td>
                              <td class="col-grey">&nbsp;</td>
                              <td></td>
                           </tr>
                           <tr>
                              <td class="col-grey right">-100 000</td>
                              <td></td>
                              <td>Nedbetaling av gjeld</td>
                              <td class="col-grey right">-100 000</td>
                              <td></td>
                           </tr>
                           <tr>
                              <td class="right col-grey"></td>
                              <td class="right">&nbsp;</td>
                              <td>Innbetaling ansvarlig lånekapital</td>
                              <td class="right col-grey"></td>
                              <td class="right">&nbsp;</td>
                           </tr>
                           <tr>
                              <td class="right col-grey"></td>
                              <td class="right">&nbsp;</td>
                              <td>Innbetaling av selskapskapital</td>
                              <td class="right col-grey"></td>
                              <td class="right">&nbsp;</td>
                           </tr>
                           <tr>
                              <td class="right col-grey">-40 100</td>
                              <td class="right">-11 300</td>
                              <td>Betalt utbytte</td>
                              <td class="right col-grey">-40 100</td>
                              <td class="right">-11 300</td>
                           </tr>
                           <tr class="bold line-over-under">
                              <td class="right col-grey">-140 100</td>
                              <td class="right">-11 300</td>
                              <td>Netto likviditetsendring fra finansiering</td>
                              <td class="right col-grey">-140 100</td>
                              <td class="right">-11 300</td>
                           </tr>
                           <tr>
                              <td class="col-grey">&nbsp;</td>
                              <td class="right"></td>
                              <td></td>
                              <td class="col-grey">&nbsp;</td>
                              <td></td>
                           </tr>
                           <tr>
                              <td class="right col-grey">-32 070</td>
                              <td class="right">-4 569</td>
                              <td>Netto endring likvider i året</td>
                              <td class="right col-grey">-19 181</td>
                              <td class="right">-12 974</td>
                           </tr>
                           <tr>
                              <td class="right col-grey">84 124</td>
                              <td class="right">97 129</td>
                              <td>Likviditetsbeholdning 01.01.</td>
                              <td class="right col-grey">54 927</td>
                              <td class="right">67 901</td>
                           </tr>
                           <tr>
                              <td class="right col-grey"></td>
                              <td class="right">&nbsp;</td>
                              <td>Tilgang likvider oppkjøp</td>
                              <td class="right col-grey"></td>
                              <td class="right"></td>
                           </tr>
                           <tr>
                              <td class="right col-grey">&nbsp;</td>
                              <td class="right">-8 437</td>
                              <td>Avgang likvider endring i prinsipp for konsolidering</td>
                              <td class="right col-grey"></td>
                              <td class="right"></td>
                           </tr>
                           <tr class="bold line-over-under">
                              <td class="right col-grey">52 054</td>
                              <td class="right">84 124</td>
                              <td>Likviditetsbeholdning 31.12.</td>
                              <td class="right col-grey">35 744</td>
                              <td class="right">54 927</td>
                           </tr>
                        </table>
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
