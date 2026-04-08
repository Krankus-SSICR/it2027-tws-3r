<?php
$pristup_login = "admin";
$pristup_hash = '$2y$12$lxYka8IzWdAcj6n8jlPjO.Pwi8fiHuNp4SHJr.3.VG2S7aWS2mSb.';
$chyba = "";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $login = $_POST["login"];
    $heslo = $_POST["heslo"];

    if ($login === $pristup_login && password_verify($heslo, $pristup_hash)) {
        session_start();
        $_SESSION["login"] = $login;
        header("Location: index.php");
        exit();
    } else {
        $chyba = "neco";
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Přihlášení</h2>
    <?php if ($chyba): ?>
        <p style="color: red; font-size: x-large;">Špatné heslo nebo login :/</p>
    <?php endif; ?>
    <form action="login.php" method="POST">
        <input type="text" placeholder="login" name="login" required>
        <input type="password" placeholder="heslo" name="heslo" required>
        <input type="submit" value="Přihlásit se">
    </form>
</body>

</html>