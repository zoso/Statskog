<?php
    // $str = $_SERVER['SCRIPT_NAME'];
    //basename $(dirname $str);

    $url = explode("/", $_SERVER['PHP_SELF']);
    
    $prefix = "php/";

    //switch for production

    if ($url[3] == "php") {
        $prefix = "";
    }

    //var_dump($url);
    
?>
<ul id="main-menu" class="main-menu">
    <li>
        <a href="#" class="">Om Statskog<span class="down"></span></a>
        <div class="sub-menu ">
            <div><a href="<?php echo $prefix; ?>sentrale-mal-strategier.php">Sentrale mål og strategier</a></div>
            <div><a href="<?php echo $prefix; ?>samfunnsansvar.php">Samfunnsansvar</a></div>
            <div><a href="<?php echo $prefix; ?>kjerneomraader.php">Aktiviteter innenfor kjerneområdene</a></div>
            <!-- <div><a href="<?php echo $prefix; ?>regioner.php">Regioner</a></div> -->
            <div><a href="<?php echo $prefix; ?>fjelltjenesten.php">Fjelltjenesten</a></div>
            <div><a href="<?php echo $prefix; ?>styring-ledelse.php">Styring og ledelse</a></div>
            <div><a href="<?php echo $prefix; ?>hoydepunkter-2012.php">Høydepunkter 2012</a></div>
        </div>
    </li>
    <li>
        <a href="#" class="">Arealene i kart<span class="down"></span></a>
        <div class="sub-menu">
            <div><a href="<?php echo $prefix; ?>oversikt-over-vernede-omraader.php">Statskogs eindommer</a></div>
            <div><a href="<?php echo $prefix; ?>produkter-skog.php">Produkter skog</a></div>
            <div><a href="<?php echo $prefix; ?>skogsbilveier.php">Skogsbilveier</a></div>
            <div><a href="<?php echo $prefix; ?>solgte-arealer.php">Solgte arealer</a></div>
            <div><a href="<?php echo $prefix; ?>solgte-arealer.php">Reindriftsoråder</a></div>
            <div><a href="<?php echo $prefix; ?>solgte-arealer.php">Vernede områder</a></div>
            <!-- <div><a href="<?php echo $prefix; ?>energiprosjekter.php">Energiprosjekter</a></div> -->
            <!-- <div><a href="<?php echo $prefix; ?>arealinndeling-storviltjakt.php">Arealinndeling storviltjakt</a></div> -->
        </div>
    </li>
    <li>
        <a href="#">Regnskap og nøkkeltall<span class="down"></span></a>
        <div class="sub-menu">
            <div><a href="<?php echo $prefix; ?>regnskap.php">Regnskap</a></div>
            <div><a href="<?php echo $prefix; ?>noter.php">Noter</a></div>
            <div><a href="<?php echo $prefix; ?>tall-grafer.php">Nøkkeltall og grafer</a></div>
        </div>
    </li>
    <li>
        <a href="#">Årsberetning<span class="down"></span></a>
        <div class="sub-menu">
            <div><a href="<?php echo $prefix; ?>styrets-aarsberetning.php">Styrets årsberetning</a></div>
            <div><a href="<?php echo $prefix; ?>adm-dir-har-ordet.php">Administrerende direktør har ordet</a></div>
            <!-- <div><a href="<?php echo $prefix; ?>regnskap.php">Regnskap</a></div>
            <div><a href="<?php echo $prefix; ?>noter.php">Noter</a></div> -->
        </div>
    </li>
    <li>
        <a href="<?php echo $prefix; ?>historie.php">Historie</a>
    </li>
    <li>
        <a href="<?php echo $prefix; ?>kontakt-oss.php">Kontakt oss</a>
    </li>
</ul>
