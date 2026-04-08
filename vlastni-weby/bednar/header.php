<?php
$uri = basename($_SERVER["PHP_SELF"]);

switch($uri){
    case "index.php": $title = "Jurassic World – Úvod"; break;
    case "hra.php": $title = "O hře"; break;
    case "dinosauri.php": $title = "Dinosauři"; break;
    case "galerie.php": $title = "Galerie"; break;
    default: $title = "Jurassic World";
}
?>
<!DOCTYPE html>
<html lang="cs">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo $title; ?></title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<header>
<nav>
<ul>
<li><a href="index.php" class="<?php if($uri=='index.php') echo 'aktivni'; ?>">Úvod</a></li>
<li><a href="hra.php" class="<?php if($uri=='hra.php') echo 'aktivni'; ?>">O hře</a></li>
<li><a href="dinosauri.php" class="<?php if($uri=='dinosauri.php') echo 'aktivni'; ?>">Dinosauři</a></li>
<li><a href="galerie.php" class="<?php if($uri=='galerie.php') echo 'aktivni'; ?>">Galerie</a></li>
</ul>
</nav>
</header>
