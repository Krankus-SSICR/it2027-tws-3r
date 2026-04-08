<?php
    $titulek = "Změna titulku";
    
    $url = "https://student.stredniskola.com/krankus/it2027/tws/25-11-12/index.php";
    $casti = explode('/', $url);

    $posledni = end($casti);

    if ($posledni == "index.php") {
        $titulek = "Změna se provedla jsme na domovské stránce";
    } else {
        $titulek = "Změna titulku";
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulek;?></title>
</head>
<body>
    <h2>index.php</h2>
    <p>obsah webu</p>
    <ul>
        <li><a href="brambora.php">Brambora</a></li>
        <li><a href="kachna.php">Kachna</a></li>
    </ul>
</body>
</html>