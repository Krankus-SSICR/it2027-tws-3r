<?php include('parts/header.php');
require('db.php');
$prehled = "SELECT * FROM aktuality";
$prehled = $conn->query($prehled);

?>
<h2>Přehled aktualit</h2>
<table class="prehled">
    <tr>
        <th>Nadpis</th>
        <th>Datum</th>
        <th>Text aktuality</th>
        <th>Smazat</th>
        <th>Upravit</th>
    </tr>
    <?php while($radek = $prehled->fetch_assoc()):?>
        <tr>
            <td><?= $radek['nadpis'];?></td>
            <td><?= $radek['datum'];?></td>
            <td><?= $radek['text_aktuality'];?></td>
            <td><a href="smazat.php?smazat=<?= $radek['id']?>">Smazat</a></td>
        </tr>
    <?php endwhile;?>
</table>
<?php include('parts/footer.php'); ?>