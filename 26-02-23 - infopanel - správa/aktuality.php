<?php 
require('db.php');
$sql = "SELECT nadpis, datum, foto_cesta FROM aktuality";
$sql = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SČMSD Humpolec infopanel - Přehled aktualit</title>
    <link rel="stylesheet" href="style.css
    ">
</head>

<body>
    <div class="container">
        <h2>Aktuality</h2>
        <?php while ($radek = mysqli_fetch_assoc($sql)):?>
        <div class="aktualita">
            <div class="obrazek" style="background: url(<?=$radek['foto_cesta'];?>);">
            </div>
            <div class="text">
                <h3><?=$radek['nadpis'];?></h3>
                <p>Datum</p>
            </div>
        </div>
        <div class="rozdeleni_aktuality"></div>
        <?php endwhile;?>
    </div>
</body>

</html>