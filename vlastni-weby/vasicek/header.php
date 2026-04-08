<?php
$link = $_SERVER["REQUEST_URI"];
$linkbom = explode("/", $link);
$linkbom = end($linkbom);

switch ($linkbom) {
    case "index.php":
        $title = "Dům";
        break;
    case "ozemi.php":
        $title = "O zemi";
        break;
    case "fotogalerie.php":
        $title = "Fotogalerie";
        break;
    case "armada.php":
        $title = "Armáda";
        break;
    default:
        $title ="default";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zeme <?php echo $title ?></title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a style="<?php if($linkbom == "index.php") {echo "color: white;";} else {echo "";}?>" href="index.php">Domu</a></li>
                <li><a style="<?php if($linkbom == "ozemi.php") {echo "color: white;";} else {echo "";}?>"href="ozemi.php">O zemi</a></li>
                <li><a style="<?php if($linkbom == "fotogalerie.php") {echo "color: white;";} else {echo "";}?>"href="fotogalerie.php">Fotogalerie</a></li>
                <li><a style="<?php if($linkbom == "armada.php") {echo "color: white;";} else {echo "";}?>"href="armada.php">Armáda</a></li>
            </ul>

        </nav>
    </header>