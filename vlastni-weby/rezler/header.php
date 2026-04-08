<?php
$stika = $_SERVER['REQUEST_URI'];
$vyvar = explode("/", $stika);
$vyvar = end($vyvar);


switch($vyvar){
    case "index.php":
        $title = "Úvodní stránka";
        break;
    case "konoha.php":
        $title = "Skrytá Listová (Konoha)";
        break;
    case "suna.php":
        $title = "Skrytá Písečná (Suna)";
        break;
    case "kiri.php":
        $title = "Skrytá Mlžná (Kiri)";
        break;
    case "iwa.php":
        $title = "Skrytá Kamenná (Iwa)";
        break;
    case "kumo.php":
        $title = "Skrytá Oblačná (Kumo)";
        break;
    default:
        $title = "Naruto svět";
        break;
}
switch($vyvar){
    case "konoha.php":
        $bgColor = "#7BB369";
        break;
    case "suna.php":
        $bgColor = "#e8c9a0";
        break;
    case "kiri.php":
        $bgColor = "#6ba3f5";
        break;
    case "iwa.php":
        $bgColor = "#d7ccc8";
        break;
    case "kumo.php":
        $bgColor = "#e1bee7";
        break;
    default:
        $bgColor = "#F5F5DC"; 
        break;
}
?>

<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Naruto svět - <?php echo $title; ?></title>
    <link rel="stylesheet" href="styles.css">
</head>
<body style="background: <?php echo $bgColor; ?>;">
<header>
    <nav>
        <ul>
            <li><a href="index.php" class="<?php if($vyvar=="index.php" || $vyvar==""){echo 'active';} ?>">Domů</a></li>
            <li><a href="konoha.php" class="<?php if($vyvar=="konoha.php"){echo 'active';} ?>">Konoha</a></li>
            <li><a href="suna.php" class="<?php if($vyvar=="suna.php"){echo 'active';} ?>">Suna</a></li>
            <li><a href="kiri.php" class="<?php if($vyvar=="kiri.php"){echo 'active';} ?>">Kiri</a></li>
            <li><a href="iwa.php" class="<?php if($vyvar=="iwa.php"){echo 'active';} ?>">Iwa</a></li>
            <li><a href="kumo.php" class="<?php if($vyvar=="kumo.php"){echo 'active';} ?>">Kumo</a></li>
        </ul>
    </nav>
</header>
