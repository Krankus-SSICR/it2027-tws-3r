<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}
include "parts/header.php";
?>
<a href="logout.php">Odhlásit se</a>
<?php if (isset($_GET['pridano']) && $_GET['pridano'] == 1): ?>
    <p class="spravne">Záznam byl úspěšně přidán.</p>
<?php endif; ?>
<section id="prehled">
    <a href="prehled.php">Přehled aktualit</a>
    <a href="pridat.php">Nová Aktualita</a>
</section>
<?php include "parts/footer.php"; ?>