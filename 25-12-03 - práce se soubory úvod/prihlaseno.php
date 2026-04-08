<?php 
    $login = $_POST['login'];
    file_put_contents("priklad.txt", $login . PHP_EOL, FILE_APPEND);
?>