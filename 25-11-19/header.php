<?php
    $url = $_SERVER['REQUEST_URI'];
    $ryba = explode("/", $url);
    $ryba = end($ryba);

    switch ($ryba) {
        case "index.php":
            $titulek = " - Domů";
            $pozadi = "style='background: hotpink;'";
            break;
        case "o-hre-link.php":
            $titulek = " - O hře";
            $pozadi = "style='background: salmon;'";
            break;
        case "fotogalerie-link.php":
            $titulek = " - Fotogalerie";
            $pozadi = "style='background: aquamarine;'";
            break;
        default:
            $titulek = "";
            $pozadi = "";
    }
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prehistorik 2<?php echo $titulek;?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body <?php echo $pozadi;?>>
    <header>
        <div class="logo"><img src="logo.png" alt="Logo Prehitorik 2"></div>
        <nav>
            <ul>
                <li><a href="index.php" class="<?php if ($ryba === "index.php") {echo "aktivni";} else {echo "";}?>">Domů</a></li>
                <li><a href="o-hre-link.php" class="<?php if ($ryba === "o-hre-link.php") {echo "aktivni";} else {echo "";}?>">O hře</a></li>
                <li><a href="fotogalerie-link.php" class="<?php if ($ryba === "fotogalerie-link.php") {echo "aktivni";} else {echo "";}?>">Fotogalerie</a></li>
            </ul>
        </nav>
    </header>