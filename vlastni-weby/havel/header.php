<?php
    
    $uri = $_SERVER['REQUEST_URI'] ?? 'index.php';
    $parts = explode('/', $uri);
    $page = end($parts);
    if ($page === '' || $page === false) {
        $page = 'index.php';
    }
   
    $page = explode('?', $page)[0];

   
switch ($page) {
    case 'index.php':
        $title = 'Úvod';
        break;
    case 'historie.php':
        $title = 'Historická databáze';
        break;
    case 'lokace.php':
        $title = 'Lokace';
        break;
    case 'galerie.php':
        $title = 'Obrazový vault';
        break;
    default:
        $title = 'Vault-Tec Dossier';
}


    function isActive(string $current, string $target): string {
        return $current === $target ? 'aktivni' : '';
    }
?>
<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vault terminál 88 – <?php echo htmlspecialchars($title, ENT_QUOTES, 'UTF-8'); ?></title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header class="site-header">
        <div class="brand">
           
            <div class="brand-text">
                <div class="brand-title">ROBCO INDUSTRIES UNIFIED OPERATING SYSTEM<br>
COPYRIGHT 2075–2077 ROBCO INDUSTRIES
<br>-SERVER 1-</div>
            </div>
        </div>

        <nav class="site-nav" aria-label="Hlavní navigace">
            <ul>
                <li><a class="<?php echo isActive($page, 'index.php'); ?>" href="index.php">Úvod</a></li>
                <li><a class="<?php echo isActive($page, 'historie.php'); ?>" href="historie.php">Historie</a></li>
                <li><a class="<?php echo isActive($page, 'lokace.php'); ?>" href="lokace.php">Lokace</a></li>
                <li><a class="<?php echo isActive($page, 'galerie.php'); ?>" href="galerie.php">Fotogalerie</a></li>
            </ul>    
        </nav>
    </header>

    <main class="site-main">
