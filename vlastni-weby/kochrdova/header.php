<?php
$stika = $_SERVER["REQUEST_URI"];
$vyvar = explode("/", $stika);
$vyvar = end($vyvar);
$title;
$barva;
$wavy;

switch ($vyvar) {
    //island obecně - welcome...blabla
    case "index.php":
        $title = "uvodní stránka";
        $barva = '#E1000D';
        $wavy = '#E1000D';
        break;
    //místa co navštívit
    case "nature.php":
        $title = "Příroda";
        $barva = '#0CC123';
        $wavy = '#0CC123';
        break;
    //island cuisine
    case "cuisine.php":
        $title = "Kuchyň";
        $barva = '#FFA500';
        $wavy = '#FFA500';
        break;
    //buildings
    case "buildings.php":
        $title = "Budovy";
        $barva = '#1A1A1A';
        $wavy = '#1A1A1A';
        break;
    //vymazat!!!!!!!!!?
    case "fotogalerie.php":
        $title = "Fotogalerie";
        $wavy = '#555';
        break;    

    default:
        $title = "IT2027";
        $barva = "#E1000D";
        $wavy = '#E1000D';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kompletní web - <?php echo $title; ?></title>
<style>
:root {
  --wave: <?= $wavy ?>;
}
</style>

    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <nav>
            <ul> 
                <h1>ISLAND</h1>     
                <div class="cara"></div>          
                <li><a href="index.php"
                        style="<?php if ($vyvar == "index.php" || $vyvar == "") {
                            echo "color: #E1000D;";
                        } else {
                            echo "";
                        } ?>">Domů</a>
                </li>
                <li><a href="nature.php"
                        style="<?php if ($vyvar == "nature.php") {
                            echo "color: #E1000D;";
                        } else {
                            echo "";
                        } ?>">Příroda</a>
                </li>
                <li><a href="cuisine.php"
                        style="<?php if ($vyvar == "cuisine.php") {
                            echo "color: #E1000D;";
                        } else {
                            echo "";
                        } ?>">Kuchyně</a>
                </li>
                <li><a href="buildings.php"
                        style="<?php if ($vyvar == "buildings.php") {
                            echo "color: #E1000D;";
                        } else {
                            echo "";
                        } ?>">Budovy</a>
                </li>
                <li><a href="fotogalerie.php"
                        style="<?php if ($vyvar == "fotogalerie.php") {
                            echo "color: #E1000D;";
                        } else {
                            echo "";
                        } ?>">Fotogalerie</a>
                </li>
            </ul>
        </nav>
    </header>
</body>

</html>