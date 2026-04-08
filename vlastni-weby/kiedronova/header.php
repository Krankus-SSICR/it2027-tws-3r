<?php
    $mexico = $_SERVER ["REQUEST_URI"];
    $spanelsko = explode("/", $mexico);
    $spanelsko = end($spanelsko);
    $titulek;
    
    switch($spanelsko){
        case "index.php":
            $titulek = "Úvodní stránka";
        break;
        
        case"mesta.php":
            $titulek = "Města";
        break;
        case"kuchyne.php":
            $titulek = "Kuchyně";
        break;
        case"sport.php":
            $titulek = "Sport";
        break;
        case"fotogalerie.php":
            $titulek = "Fotogalerie";
        break;
        default:
            $titulek = "Španělsko";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Španělsko - <?php echo $titulek;?></title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php" style="<?php if($spanelsko== "index.php" ){echo "color:white;";}else{echo "";}  ?>">Domů</a></li>
                <li><a href="mesta.php" style="<?php if($spanelsko== "mesta.php" ){echo "color:white;";}else{echo "";}  ?>">Města</a></li>
                <li><a href="kuchyne.php" style="<?php if($spanelsko== "kuchyne.php" ){echo "color:white;";}else{echo "";}  ?>">Kuchyně</a></li>
                <li><a href="sport.php" style="<?php if($spanelsko== "sport.php" ){echo "color:white;";}else{echo "";}  ?>">Sport</a></li>
                <li><a href="fotogalerie.php" style="<?php if($spanelsko== "fotogalerie.php" ){echo "color:white;";}else{echo "";}  ?>">Fotogalerie</a></li>

            </ul>
        </nav>
    </header>
</body>
</html>