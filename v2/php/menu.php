<?php
    $url = explode("/", $_SERVER['PHP_SELF']);    
    $myurl = explode(".", $_SERVER['SERVER_NAME']);
    $nr = 3;
    $prefix = "php/";
    if ($myurl[0] == 'testserver') {
        $nr = 3;
    } else {
        $nr = 4;
    }
    if ($url[$nr] == "php") {
        $prefix = "";
    }
?>
<ul id="main-menu" class="main-menu">
    <!-- <li>
        <a href="../index.php">Forsiden</a>
    </li> -->
    <li>
        <a href="#" class="">Om Statskog<span class="down"></span></a>
        <div class="sub-menu">
            <!-- <div class="down-arrow">&nbsp;</div> -->
            <div class="sub">
                <div><a href="<?php echo $prefix; ?>fakta-om-statskog.php">Fakta om Statskog</a></div>
                <div><a href="<?php echo $prefix; ?>sentrale-mal-strategier.php">Sentrale mål og strategier</a></div>
                <div><a href="<?php echo $prefix; ?>samfunnsansvar.php">Samfunnsansvar</a></div>
                <div><a href="<?php echo $prefix; ?>kjerneomraader.php">Aktiviteter innenfor kjerneområdene</a></div>
                <!--<div><a href="<?php echo $prefix; ?>regioner.php">Regioner</a></div>-->
                <div><a href="<?php echo $prefix; ?>fjelltjenesten.php">Fjelltjenesten</a></div>
                <div><a href="<?php echo $prefix; ?>styring-ledelse.php">Eierstyring og selskapsledelse</a></div>
                <div><a href="<?php echo $prefix; ?>organisasjonskart.php">Organisasjonskart</a></div>
                <div><a href="<?php echo $prefix; ?>hoydepunkter-2012.php">Aktuelle hendelser i 2012</a></div>
            </div>
        </div>
    </li>
    <li>
        <a href="#" class="">Arealene i kart<span class="down"></span></a>
        <div class="sub-menu">
            <div class="sub">
                <div><a href="<?php echo $prefix; ?>statskogs-eiendommer.php">Statskogs eiendommer</a></div>
                <div><a href="<?php echo $prefix; ?>produktiv-skog.php">Produktiv skog</a></div>
                <div><a href="<?php echo $prefix; ?>skogsbilveier.php">Skogsbilveier</a></div>
                <div><a href="<?php echo $prefix; ?>solgte-arealer.php">Solgte arealer</a></div>
                <!--<div><a href="<?php echo $prefix; ?>reindriftsomrader.php">Reindriftsområder</a></div>-->
                <div><a href="<?php echo $prefix; ?>oversikt-over-vernede-omraader.php">Vernede områder</a></div>
                <!-- <div><a href="<?php echo $prefix; ?>energiprosjekter.php">Energiprosjekter</a></div> -->
                <!-- <div><a href="<?php echo $prefix; ?>arealinndeling-storviltjakt.php">Arealinndeling storviltjakt</a></div> -->
            </div>
        </div>
    </li>
    <li>
        <a href="#">Regnskap og nøkkeltall<span class="down"></span></a>
        <div class="sub-menu">
            <div class="sub">
                <div><a href="<?php echo $prefix; ?>regnskapsprinsipper.php">Regnskapsprinsipper</a></div>
                <div><a href="<?php echo $prefix; ?>regnskap.php">Regnskap</a></div>
                <div><a href="<?php echo $prefix; ?>noter.php">Noter</a></div>
                <div><a href="<?php echo $prefix; ?>tall-grafer.php">Nøkkeltall og grafer</a></div>
                <div><a href="<?php echo $prefix; ?>regnskap-grunneierfondet.php">Grunneierfondet</a></div>
            </div>
        </div>
    </li>
    <li>
        <a href="#">Årsberetning<span class="down"></span></a>
        <div class="sub-menu">
            <div class="sub">
                <div><a href="<?php echo $prefix; ?>styrets-aarsberetning.php">Styrets årsberetning</a></div>
                <div><a href="<?php echo $prefix; ?>adm-dir-har-ordet.php">Administrerende direktør har ordet</a></div>
                <!-- <div><a href="<?php echo $prefix; ?>regnskap.php">Regnskap</a></div>
                <div><a href="<?php echo $prefix; ?>noter.php">Noter</a></div> -->
            </div>
        </div>
    </li>
    <li>
        <a href="<?php echo $prefix; ?>historie.php">Historie</a>
    </li>
    <li>
        <a href="<?php echo $prefix; ?>kontakt-oss.php">Kontakt oss</a>
    </li>
</ul>
