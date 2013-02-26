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
            <div><a href="<?php echo $prefix; ?>samfunnsansvar.php">Samfunnsansvar</a></div>
            <div><a href="<?php echo $prefix; ?>kjerneomraader.php">Kjerneområder</a></div>
            <div><a href="<?php echo $prefix; ?>regioner.php">Regioner</a></div>
            <div><a href="<?php echo $prefix; ?>fjelltjenesten.php">Fjelltjenesten</a></div>
            <div><a href="<?php echo $prefix; ?>styring-ledelse.php">Styring og ledelse</a></div>
            <div><a href="<?php echo $prefix; ?>hoydepunkter-2012.php">Høydepunkter 2012</a></div>
        </div>
    </li>
    <li>
        <a href="#" class="">Arealene i kart<span class="down"></span></a>
        <div class="sub-menu">
            <div><a href="<?php echo $prefix; ?>oversikt-over-vernede-omraader.php">Oversikt over vernede områder</a></div>
            <div><a href="<?php echo $prefix; ?>produkter-skog.php">Produkter skog</a></div>
            <div><a href="<?php echo $prefix; ?>skogsbilveier.php">Skogsbilveier</a></div>
            <div><a href="<?php echo $prefix; ?>solgte-arealer.php">Solgte arealer gjennom "arrinderingssalget"</a></div>
            <div><a href="<?php echo $prefix; ?>energiprosjekter.php">Energiprosjekter</a></div>
            <div><a href="<?php echo $prefix; ?>arealinndeling-storviltjakt.php">Arealinndeling storviltjakt</a></div>
        </div>
    </li>
    <li>
        <a href="#">Nøkkeltall</a>
        <div class="sub-menu">
            <div><a href="<?php echo $prefix; ?>tall-grafer.php">Tall og grafer</a></div>
        </div>
    </li>
    <li>
        <a href="#">Styrets beretning<span class="down"></span></a>
        <div class="sub-menu">
            <div><a href="<?php echo $prefix; ?>adm-dir-har-ordet.php">Adm. dir. har ordet</a></div>
            <div><a href="<?php echo $prefix; ?>styrets-aarsberetning.php">Styrets beretning</a></div>
            <div><a href="#">Regnskap</a></div>
            <div><a href="#">Noter</a></div>
        </div>
    </li>
    <li>
        <a href="<?php echo $prefix; ?>historie.php">Historie</a>
    </li>
    <li>
        <a href="<?php echo $prefix; ?>kontakt-oss.php">Kontakt oss</a>
    </li>
</ul>
