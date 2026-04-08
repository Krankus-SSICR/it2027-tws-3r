<?php
$link = $_SERVER["REQUEST_URI"];
$linkbom = explode("/", $link);
$linkbom = end($linkbom);

switch ($linkbom) {
    case "index.php":
        $title = "- homepage";
        break;
    case "obecne.php":
        $title = "- obecne";
        break;
    case "fotogalerie.php":
        $title = "- fotogalerie";
        break;
    case "situace.php":
        $title = "- situace";
        break;
    default:
        $title =" - default";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zeme <?php echo $title ?></title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a style="<?php if($linkbom == "index.php") {echo "color: red;";} else {echo "";}?>" href="index.php">Domu</a></li>
                <li><a style="<?php if($linkbom == "obecne.php") {echo "color: red;";} else {echo "";}?>"href="obecne.php">Obecne</a></li>
                <li><a style="<?php if($linkbom == "fotogalerie.php") {echo "color: red;";} else {echo "";}?>"href="fotogalerie.php">Fotogalerie</a></li>
                <li><a style="<?php if($linkbom == "situace.php") {echo "color: red;";} else {echo "";}?>"href="situace.php">Situace</a></li>
            </ul>
            <img src="img/burger-menu.svg" alt="">
        </nav>
    </header>