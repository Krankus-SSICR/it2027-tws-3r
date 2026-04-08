<?php
    $url = $_SERVER['REQUEST_URI'];
    $text = explode("/", $url);
    $end = end($text);

    switch($end) {
        case "index.php":
            $titulek = " - úvodní stránka";
            $pozadi = "";
            break;
        case "popis.php":
            $titulek = " - Popis";
            break;
        case "londyn.php":
            $titulek = " - Vše o Londýně";
            break;
        case "jidla.php":
            $titulek = " - Jídla";
            break;
        case "galerie.php":
            $titulek = " - Fotogalerie";
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
    <title>Spojené království <?php echo $titulek;?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>SPOJENÉ KRÁLOVSTVÍ</h1>
        <nav>
            <ul>
                <li><a href="index.php" style="<?php if($end == "index.php" || $end == ""){echo "background: white; color: red;";}else{echo "";}?>">Domů</a></li>
                <li><a href="popis.php" style="<?php if($end == "popis.php"){echo "background: white; color: red;";}else{echo "";}?>">Popis</a></li>
                <li><a href="londyn.php" style="<?php if($end == "londyn.php"){echo "background: white; color: red;";}else{echo "";}?>">Vše o Londýně</a></li>
                <li><a href="jidla.php" style="<?php if($end == "jidla.php"){echo "background: white; color: red;";}else{echo "";}?>">Jídla</a></li>
                <li><a href="galerie.php" style="<?php if($end == "galerie.php"){echo "background: white; color: red;";}else{echo "";}?>">Fotogalerie</a></li>
            </ul>
        </nav>
    </header>
