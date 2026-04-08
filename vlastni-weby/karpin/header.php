<?php
$link = $_SERVER["REQUEST_URI"];
$linkbom = explode("/", $link);
$linkbom = end($linkbom);

switch ($linkbom) {
    case "index.php":
        $title = "- homepage";
        break;
    case "usa.php":
        $title = "- usa";
        break;
    case "fotogalerie.php":
        $title = "- fotogalerie";
        break;
    case "mesta.php":
        $title = "- mesta";
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
    <title>Země <?php echo $title ?></title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <header>
        <nav class="navbar">
            <ul class="nav-links">
                <li><a style="<?php if($linkbom == "index.php") {echo "color: red;";} else {echo "";}?>" href="index.php">Domu</a></li>
                <li><a style="<?php if($linkbom == "usa.php") {echo "color: red;";} else {echo "";}?>"href="usa.php">USA</a></li>
                <li><a style="<?php if($linkbom == "fotogalerie.php") {echo "color: red;";} else {echo "";}?>"href="fotogalerie.php">Fotogalerie</a></li>
                <li><a style="<?php if($linkbom == "mesta.php") {echo "color: red;";} else {echo "";}?>"href="mesta.php">Města</a></li>
            </ul>
        </nav>
    </header>