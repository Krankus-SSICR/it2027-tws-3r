<?php
    $stika = $_SERVER["REQUEST_URI"];
    $rizek = explode("/", $stika);
    $rizek = end($rizek);
    $title;

    switch($rizek){
        case "index.php";
        $title = "Úvodní stránka";
        break;
        case "historie.php":
        $title = "Historie";
        break;
        case "sport.php":
        $title = "Sport a Motorsport";
        break;
        case "politika.php":
        $title = "Politická Situace";
        break;
        case "osobnosti.php":
        $title = "Známé Osobnosti";
        break;

        default:
            "IT2027";
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title><?php echo $title; ?></title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Lexend:wght@100..900&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php" style="<?php if($rizek == "index.php" || $rizek == "") {echo "color: green;";} else {echo "";}?>">Úvodní stránka</a></li>
                <li><a href="basic-info.php" style="<?php if($rizek == "basic-info.php" || $rizek == "") {echo "color: green;";} else {echo "";}?>">Základní Informace</a></li>
                <li><a href="historie.php" style="<?php if($rizek == "historie.php" || $rizek == "") {echo "color: green;";} else {echo "";}?>">Historie</a></li>
                <li><a href="motorsport.php" style="<?php if($rizek == "motorsport.php" || $rizek == "") {echo "color: green;";} else {echo "";}?>">Motorsport</a></li>
                <li><a href="politika.php" style="<?php if($rizek == "politika.php" || $rizek == "") {echo "color: green;";} else {echo "";}?>">Politická Situace</a></li>
                <li><a href="osobnosti.php" style="<?php if($rizek == "osobnosti.php" || $rizek == "") {echo "color: green;";} else {echo "";}?>">Známé Osobnosti</a></li>
            </ul>
        </nav>
    </header>
</body>

</html>