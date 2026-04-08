<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}
include "parts/header.php";
?>
<a href="logout.php">Odhlásit se</a>
<section id="prehled">
    <a href="">Přehled aktualit</a>
    <a href="pridat.php">Nová Aktualita</a>
</section>
<?php include "parts/footer.php";?>