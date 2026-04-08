<?php
    $stika = $_SERVER["REQUEST_URI"];
    $vyvar = explode("/", $stika);
    $vyvar = end($vyvar);
    $title;

    switch($vyvar){
        case "index.php":
            $title = "Úvodní stránka";
        break;
        case "hlavni.php":
            $title = "Hlavní město";
        break;
        case "zajimavosti.php":
            $title = "Zajímavosti";
        break; 

        case "fotogalerie.php":
            $title = "Fotogalerie";
        break;
        
        default:
            $title = "IT-2027";
    }


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kompletní web - <?php echo $title; ?></title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php" style="<?php if($vyvar == "index.php" || $vyvar == ""){echo "color: red;";}else{echo "";} ?>">Domov</a></li>
                <li><a href="hlavni.php" style="<?php if($vyvar == "hlavni.php" ){echo "color: blue;";}else{echo "";} ?>">Hlavní město</a></li>
                <li><a href="zajimavosti.php" style="<?php if($vyvar == "zajimavosti.php" ){echo "color: red;";}else{echo "";} ?></a>">Zajímavosti</a></li>
                <li><a href="fotogalerie.php" style="<?php if($vyvar == "fotogalerie.php" ){echo "color: blue;";}else{echo "";} ?></a>">Fotogalerie</a></li>
            </ul>
        </nav>
    </header>
</body>

</html>