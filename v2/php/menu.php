<?php
    // $str = $_SERVER['SCRIPT_NAME'];
    //basename $(dirname $str);

    $url = explode("/", $_SERVER['PHP_SELF']);
    
    $prefix = "php/";
    if ($url[3] == "php") {
         $prefix = "";
    }
    
?>
<ul id="main-menu" class="main-menu">
    <li>
        <a href="#">Om Statskog</a>
        <div class="sub-menu">
            <div><a href="<?php echo $prefix; ?>samfunnsansvar.php">Samfunnsansvar</a></div>
            <div><a href="<?php echo $prefix; ?>kjerneomraader.php">Kjerneområder</a></div>
            <div><a href="<?php echo $prefix; ?>regioner.php">Regioner</a></div>
            <div><a href="<?php echo $prefix; ?>fjelltjenesten.php">Fjelltjenesten</a></div>
            <div><a href="<?php echo $prefix; ?>styring-ledelse.php">Styring og ledelse</a></div>
            <div><a href="<?php echo $prefix; ?>hoydepunkter-2012.php">Høydepunkter 2012</a></div>
        </div>
    </li>
    <li>
        <a href="#">Arealene i kart</a>
        <div class="sub-menu">
            <div><a href="<?php echo $prefix; ?>oversikt-over-vernede-omraader.php">Oversikt over vernede områder</a></div>
            <div><a href="#">Produkter skog</a></div>
            <div><a href="#">Skogsbilveier</a></div>
            <div><a href="#">Solgte arealer gjennom "arrinderingssalget"</a></div>
            <div><a href="#">Energiprosjekter</a></div>
            <div><a href="#">Arealinndeling storviltjakt</a></div>
        </div>
    </li>
    <li>
        <a href="#">Nøkkeltall</a>
        <div class="sub-menu">
            <div><a href="#">Tall og grafer</a></div>
        </div>
    </li>
    <li>
        <a href="#">Styrets beretning</a>
        <div class="sub-menu">
            <div><a href="<?php echo $prefix; ?>adm-dir-har-ordet.php">Adm. dir. har ordet</a></div>
            <div><a href="<?php echo $prefix; ?>styrets-aarsberetning.php">Styrets beretning</a></div>
            <div><a href="#">Regnskap</a></div>
            <div><a href="#">Noter</a></div>
        </div>
    </li>
    <li>
        <a href="#">Historie</a>
    </li>
    <li>
        <a href="#">Kontakt oss</a>
    </li>
</ul>
