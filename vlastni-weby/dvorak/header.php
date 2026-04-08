<?php
    $stika = $_SERVER["REQUEST_URI"];
    $vyvar = explode("/", $stika);
    $vyvar = end($vyvar);
    $title;

    switch($vyvar){
        case "index.php":
            $title = "Úvod";
            break;
        case "udaje.php":
            $title = "Základní údaje";
            break;
        case "zajimavosti.php":
            $title = "Zajímavosti";
            break;
        case "fotogalerie.php":
            $title = "Fotogalerie";
            break;
        default:
            $title = "USA";
    }
?>
<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oblíbená země – <?php echo $title; ?></title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="img/usaflag.svg">
</head>

<body>
<header>
    <nav>
        <ul>
            <li><a href="index.php" class="<?php if($vyvar == 'index.php') echo 'aktivni'; ?>">Úvod</a></li>
            <li><a href="udaje.php" class="<?php if($vyvar == 'udaje.php') echo 'aktivni'; ?>">Základní údaje</a></li>
            <li><a href="zajimavosti.php" class="<?php if($vyvar == 'zajimavosti.php') echo 'aktivni'; ?>">Zajímavosti</a></li>
            <li><a href="fotogalerie.php" class="<?php if($vyvar == 'fotogalerie.php') echo 'aktivni'; ?>">Fotogalerie</a></li>
        </ul>
    </nav>
</header>
