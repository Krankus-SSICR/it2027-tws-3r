<?php
    $serb = $_SERVER["REQUEST_URI"];
    $serbian = explode("/", $serb);
    $serbian = end($serbian);
    $title;
 
    switch($serbian){
        case "index.php":
            $title = "Úvodní stránka";
        break;
        case "historie.php":
            $title = "Historie";
        break;
        case "kultura.php":
            $title = "Kultura";
        break;
        case "galerie.php":
            $title = "Galerie";
        break;
 
        default:
            $title = "Srbsko";
    }
?>
<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Srbsko - <?php echo $title; ?></title>
    <link rel="stylesheet" href="style.css">
</head>
 
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php" style="<?php if($serbian == "index.php" ){echo "color: #0033cc;";}else{echo "";} ?>">Domů</a></li>
                <li><a href="historie.php" style="<?php if($serbian == "historie.php" ){echo "color: #0033cc;";}else{echo "";} ?>">Historie</a></li>
                <li><a href="kultura.php" style="<?php if($serbian == "kultura.php" ){echo "color: #0033cc;";}else{echo "";} ?>">Kultura</a></li>
                <li><a href="galerie.php" style="<?php if($serbian == "galerie.php" ){echo "color: #0033cc;";}else{echo "";} ?>">Galerie</a></li>
            </ul>
        </nav>
    </header>
</body>
 
</html>