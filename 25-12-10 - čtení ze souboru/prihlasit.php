<?php 
    $login = $_POST['login'];
    $heslo = $_POST['heslo'];

    file_put_contents("login.txt", $login);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Výpis dat ze souboru</title>
</head>
<body>
    <h2>Poslední login</h2>
    <p>
    <?php 
        $posledni_login = file_get_contents('login.txt');
        echo $posledni_login;
    ?>
    </p>
    <p><a href="index.php">Další přihášení</a></p>
</body>
</html>