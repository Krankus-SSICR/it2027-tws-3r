<?php 
require('db.php');
include('parts/header.php');

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $nadpis = $_POST['nadpis'];
    $datum = $_POST['datum'];
    $text = $_POST['text'];

    //zpracování nahraného obrázku
    $cilova_slozka = "aktuality/";
    $obrazek_nazev = basename($_FILES['foto']['name']);
    $obrazek_cesta = $cilova_slozka . $obrazek_nazev;

    //přesun souboru ze serveru do kořenové složky
    move_uploaded_file($_FILES['foto']['tmp_name'], $obrazek_cesta);

    $pridat = $conn->prepare("INSERT INTO aktuality(nadpis, datum, text_aktuality, foto_cesta) VALUES (?, ?, ?, ?)");
    //připravíme SQL dotaz a určíme, kam chceme uložit data
    $pridat->bind_param("ssss", $nadpis, $datum, $text, $obrazek_cesta);
    //pomocí funkce bind_param zabalíme hodnoty do námi určených datových typů

    if ($pridat->execute() === TRUE) {
        header("Location: index.php?pridano=1");
        exit();
    }
}
?>
<h3>Přidat aktualitu</h3>
<form action="pridat.php" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="foto">Foto aktuality:</label>
        <input type="file" id="foto" name="foto" accept="image/*" required>
    </div>
    <div class="form-group">
        <label for="nadpis">Nadpis aktuality:</label>
        <input type="text" id="nadpis" name="nadpis" required>
    </div>
    <div class="form-group">
        <label for="datum">Datum aktuality:</label>
        <input type="date" id="datum" name="datum" required>
    </div>
    <div class="form-group">
        <label for="text">Text aktuality:</label>
        <textarea name="text" id="text"></textarea>
    </div>
    <input type="submit" value="Přidat aktualitu">
</form>
<?php include('parts/footer.php');?>