<?php
$stika = $_SERVER['REQUEST_URI'];
$vyvar = explode("/", $stika);
$vyvar = end($vyvar);

switch ($vyvar) {
    case "":
    case "index.php":
        $title = "Úvod";
        break;
    case "mapy.php":
        $title = "Mapy";
        break;
    case "biomy.php":
        $title = "Biomy";
        break;
    case "tvorove.php":
        $title = "Tvorové";
        break;
    default:
        $title = "Svět Ark Survival Evolved";
}
?>
<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Svět ASE - <?php echo $title; ?></title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<header>
    <div class="logo">
        <h1>Ark Survival Evolved</h1>
        <p>Mapy • Biomy • Tvorové</p>
    </div>
    <nav>
        <ul>
            <li><a href="index.php" class="<?php echo ($vyvar == '' || $vyvar == 'index.php') ? 'aktivni' : ''; ?>">Úvod</a></li>
            <li><a href="mapy.php" class="<?php echo ($vyvar == 'mapy.php') ? 'aktivni' : ''; ?>">Mapy</a></li>
            <li><a href="biomy.php" class="<?php echo ($vyvar == 'biomy.php') ? 'aktivni' : ''; ?>">Biomy</a></li>
            <li><a href="tvorove.php" class="<?php echo ($vyvar == 'tvorove.php') ? 'aktivni' : ''; ?>">Tvorové</a></li>
        </ul>
    </nav>
</header>
<main>
