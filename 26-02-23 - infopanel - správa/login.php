<?php
$ulozeny_login = "krankusova";
$ulozene_helso = '$2y$12$B.BH92af6NdH79OGZCqTjeGTtWZgHbAQ7ZH2keyZ0KmNaxa84yLz2';
$chyba = "";
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $zadany_login = $_POST["login"] ?? "";
    $zadane_heslo = $_POST ["heslo"] ?? "";

    if ($zadany_login ===  $ulozeny_login && password_verify($zadane_heslo, $ulozene_helso)) {
        session_start();
        $_SESSION["login"] = "zadanyLogin";
        header("Location: index.php");
        exit;
    } else {
        $chyba = "Špatné jméno nebo heslo!";
    }
}

include "parts/header.php"
;?>
<h2>Přihlášení - správa infopanelu</h2>
    <div class="prihlaseni">
        <form action="" method="POST">
            <input type="text" name="login" placeholder="Uživatelské jméno">
            <input type="password" name="heslo" placeholder="Heslo">
            <input type="submit" value="Přihlásit se">
            <?php if ($chyba):?>
                <p style="color: red;"><?= $chyba;?></p>
            <?php endif;?>
        </form>
    </div>
<?php include "parts/footer.php";?>