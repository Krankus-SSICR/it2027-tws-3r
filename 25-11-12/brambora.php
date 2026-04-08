<?php
    $titulek = "Změna titulku";
    
    $url = "https://student.stredniskola.com/krankus/it2027/tws/25-11-12/brambora.php";
    $casti = explode('/', $url);

    $posledni = end($casti);

    if ($posledni == "index.php") {
        $titulek = "Změna se provedla jsme na domovské stránce";
    } else {
        $titulek = "Změna titulku neproběhla";
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulek?></title>
</head>
<body>
    <h2>Brambora</h2>
    <a href="index.php">Návrat zpět</a>
</body>
</html>