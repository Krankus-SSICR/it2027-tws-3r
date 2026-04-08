<?php
$idk = $_SERVER['REQUEST_URI'];
$idk = explode("/", $idk);
$konec = end($idk);

switch ($konec) {
    case "index.php":
        $title = "Česká republika";
        break;
    case "info.php":
        $title = "Česká republika - Základní info";
        break;
    case "historie.php":
        $title = "Česká republika - Historie";
        break;
    case "jidlo.php":
        $title = "Česká republika - Jídlo";
        break;
    case "galerie.php":
        $title = "Česká republika - Galerie";
        break;
    default:
        $title = "IT 2027";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <title><?php echo $title ?></title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="media.css">
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php" class=""<?php if($konec == "index.php" || $konec == null) echo 'style="color: palevioletred;"';?>>Domů</a></li>
                <li><a href="info.php" <?php if($konec == "info.php") {echo 'style="color: palevioletred;"';} ?>>Základní info</a></li>
                <li><a href="historie.php" <?php if($konec == "historie.php") {echo 'style="color: palevioletred;"';}?>>Historie</a></li>
                <li><a href="jidlo.php" <?php if($konec == "jidlo.php") {echo 'style="color: palevioletred;"';}?>>Jídlo</a></li>
                <li><a href="galerie.php" <?php if($konec == "galerie.php") {echo 'style="color: palevioletred;"';}?>>Galerie</a></li>
            </ul>
        </nav>
    </header>