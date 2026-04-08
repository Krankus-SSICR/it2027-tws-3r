<?php
$zakaznik = $_POST['zakaznik'];
$produkt = $_POST['produkt'];
$email = $_POST['email'];
$objednavka_text = "Zákazník: $zakaznik Produkt: $produkt";

$objednavka = fopen("objednavka.txt", "w");
fwrite($objednavka, $objednavka_text);
fclose($objednavka);

file_put_contents("objednavky.txt", $objednavka_text . PHP_EOL, FILE_APPEND);
file_put_contents("emaily.txt", $email . PHP_EOL, FILE_APPEND);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Objednávky</title>
</head>

<body>
    <h3>Vaše objednávka byla přijata.</h3>
    <p><?php echo $objednavka_text; ?></p>
    <a href="index.php">Další objednávka</a>
</body>

</html>