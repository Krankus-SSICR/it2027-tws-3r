<?php 
    $kybl = $_GET["kybl"];
    $predmet = $_GET["barvicka"];
    //echo $predmet;

    if (!empty($_GET["videohry"])) {
        $videohry = $_GET["videohry"];
        echo "Vybráno bylo: " . implode("|", ($videohry));
    } else {
        echo "Nebylo nic vybráno";
    }
?>