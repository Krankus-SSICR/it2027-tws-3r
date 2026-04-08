<?php
    $stika = $_SERVER["REQUEST_URI"];
    $vyvar = explode("/", $stika);
    $vyvar = end($vyvar);
    $title;

    switch($vyvar){
        case "index.php":
            $title = "Úvodní stránka";
        break;
        case "WhiteOrchard.php":
            $title = "White Orchard Locations";
        break;
        case "Velen.php":
            $title = "Velens locations";
        break;
        case "Skellige.php":
            $title = "Skellige locations";
        break;

        default:
            $title = "The Withercs locations";
    }

    

    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The witchers web - <?php echo $title; ?></title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php" style="<?php if($vyvar == "index.php" || $vyvar == ""){echo "color: aquamarine;";}else{echo "";} ?>">Home</a></li>
                <li><a href="WhiteOrchard.php" style="<?php if($vyvar == "WhiteOrchard.php" ){echo "color: aquamarine;";}else{echo "";} ?>">WhiteOrchard</a></li>
                <li><a href="Velen.php" style="<?php if($vyvar == "Velen.php" ){echo "color: aquamarine;";}else{echo "";} ?></a>">Velen / No Man's Land</a></li>
                <li><a href="Skellige.php" style="<?php if($vyvar == "Skellige.php" ){echo "color: aquamarine;";}else{echo "";} ?></a>">Skellige</a></li>
                <li><a href="gallery.php" style="<?php if($vyvar == "gallery.php" ){echo "color: aquamarine;";}else{echo "";} ?></a>">Gallery</a></li>
            </ul>
        </nav>
    </header>
</body>

</html>