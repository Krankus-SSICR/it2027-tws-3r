<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funkce fopen fwrite</title>
</head>
<body>
    <h2>Teď děláme zápis do souboru a nikdo to neví xD</h2>
    <?php
      $soubor = fopen("priklad.txt", "a");
      $text = "Toto je náš čtvrtý zápis";
      fwrite($soubor, $text . PHP_EOL); 
      fclose($soubor); 
    ?>
</body>
</html>