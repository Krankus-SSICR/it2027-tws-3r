<?php
    $stika = $_SERVER["REQUEST_URI"];
    $vyvar = explode("/", $stika);
    $vyvar = end($vyvar);
    $title;

    switch($vyvar){
        case "index.php":
            $title = "Úvodní stránka";
        break;
        case "mesta.php":
            $title = "Města";
        break;
        case "history.php":
            $title = "Památky";
        break;
        case "kultura.php":
            $title = "Kultura";
        break;
        case "gastronomie.php":
            $title = "Gastronomie";
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
            <ul class="menu">
                <li><a href="index.php" style="<?php if($vyvar == "index.php"){echo "color: #616652ff;";}else{echo "";} ?>">Japonsko</a></li>
                <li><a href="mesta.php" style="<?php if($vyvar == "mesta.php" ){echo "color: #616652ff;";}else{echo "";} ?>">Města</a></li>
                <li><a href="history.php" style="<?php if($vyvar == "history.php" ){echo "color: #616652ff;";}else{echo "";} ?></a>">Památky</a></li>
                <li><a href="kultura.php" style="<?php if($vyvar == "kultura.php" ){echo "color: #616652ff;";}else{echo "";} ?></a>">Kultura</a></li>
                <li><a href="gastronomie.php" style="<?php if($vyvar == "gastronomie.php" ){echo "color: #616652ff;";}else{echo "";} ?></a>">Gastronomie</a></li>
            </ul>
        </nav>
    </header>
</body>

</html>