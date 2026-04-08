<?php
    $url = $_SERVER['REQUEST_URI'];
    $kapr = explode("/", $url);
    $kapr = end($kapr);

    switch ($kapr) {
        case "index.php":
            $titulek = "Jídlo";
            $pozadi = "class='seda'";
            break;
        case "ceska.php":
            $titulek = "Česká kuchyně";
            $pozadi = "class='modra'";
            break;
        case "italska.php":
            $titulek = "Italská kuchyně";
            $pozadi = "class='zelena'";
            break;
        default:
            $titulek = "";
            $pozadi = "";
    }
?>