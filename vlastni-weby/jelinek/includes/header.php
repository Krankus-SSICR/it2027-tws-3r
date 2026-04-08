<?php
// Includenutí konfigurace
require_once 'includes/config.php';

// Funkce pro zvýraznění aktivního odkazu
function isActive($page) {
    return getCurrentPage() == $page ? 'active' : '';
}
?>
<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo getPageDescription(); ?>">
    <meta name="author" content="Finsko Web">
    <title><?php echo getPageTitle(); ?></title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <header class="header">
        <div class="header-container">
            <div class="logo">
                <h1>Finsko</h1>
                <p class="tagline">Země tisíců jezer a aurory</p>
            </div>
            
            <nav class="navbar">
                <button class="nav-toggle" id="navToggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                
                <ul class="nav-list" id="navList">
                    <li><a href="index.php" class="nav-link <?php echo isActive('home'); ?>">Domů</a></li>
                    <li><a href="o-finsku.php" class="nav-link <?php echo isActive('about'); ?>">O Finsku</a></li>
                    <li><a href="galerie.php" class="nav-link <?php echo isActive('gallery'); ?>">Galerie</a></li>
                    <li><a href="kontakt.php" class="nav-link <?php echo isActive('contact'); ?>">Kontakt</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="main-content">
