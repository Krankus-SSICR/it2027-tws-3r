<?php
    $stika = $_SERVER["REQUEST_URI"];
    $vyvar = explode("/", $stika);
    $vyvar = end($vyvar);
    $title;

    switch($vyvar){
        case "index.php":
            $title = "Úvodní stránka";
        break;
        case "ceske.php":
            $title = "České filmy";
        break;
        case "zahranicni.php":
            $title = "Zahraniční filmy";
        break;
        case "serialy.php":
            $title = "Seriály";
        break;
        case "gastronomie.php":
            $title = "Gastronomie";
        break;

        default:
            $title = "IT-2027";
    }

    

    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kompletní web - <?php echo $title; ?></title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <nav>
            <ul class="menu">
                <li><a href="index.php" style="<?php if($vyvar == "index.php"){echo "color: aquamarine;";}else{echo "";} ?>">Domů</a></li>
                <li><a href="ceske.php" style="<?php if($vyvar == "ceske.php" ){echo "color: aquamarine;";}else{echo "";} ?>">Švýcarské</a></li>
                <li><a href="zahranicni.php" style="<?php if($vyvar == "zahranicni.php" ){echo "color: aquamarine;";}else{echo "";} ?>"> Historie </a></li>
                <li><a href="serialy.php" style="<?php if($vyvar == "serialy.php" ){echo "color: aquamarine;";}else{echo "";} ?>">Kultura</a></li>
                <li><a href="gastronomie.php" style="<?php if($vyvar == "gastronomie.php" ){echo "color: aquamarine;";}else{echo "";} ?>">Jidlo</a></li>
            </ul>
        </nav>
    </header>
</body>

</html>