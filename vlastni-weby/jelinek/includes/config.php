<?php
/**
 * Konfigurační soubor
 * Nastavení webu o Finsku
 */

// Definování stránek a jejich vlastností
$pages = array(
    'home' => array(
        'url' => 'index.php',
        'title' => 'Domů - Finsko',
        'description' => 'Objevte krásu Finska - severní zemi tisíců jezer, aurory a saun',
        'name' => 'Domů'
    ),
    'about' => array(
        'url' => 'o-finsku.php',
        'title' => 'O Finsku - Zajímavosti a tradice',
        'description' => 'Seznamte se s finskou kulturou, přírodou a zajímavostmi',
        'name' => 'O Finsku'
    ),
    'gallery' => array(
        'url' => 'galerie.php',
        'title' => 'Fotogalerie - Finsko v obrázcích',
        'description' => 'Krásné fotografie z různých koutů Finska',
        'name' => 'Galerie'
    ),
    'contact' => array(
        'url' => 'kontakt.php',
        'title' => 'Kontakt - Napište nám',
        'description' => 'Máte otázky o Finsku? Napište nám!',
        'name' => 'Kontakt'
    )
);

// Funkce pro určení aktuální stránky
function getCurrentPage() {
    $current = basename($_SERVER['PHP_SELF'], '.php');
    if ($current == 'index') return 'home';
    if ($current == 'o-finsku') return 'about';
    if ($current == 'galerie') return 'gallery';
    if ($current == 'kontakt') return 'contact';
    return 'home';
}

// Funkce pro získání názvu aktuální stránky
function getPageTitle() {
    global $pages;
    $current = getCurrentPage();
    return $pages[$current]['title'];
}

// Funkce pro získání popisu stránky
function getPageDescription() {
    global $pages;
    $current = getCurrentPage();
    return $pages[$current]['description'];
}

$gallery_images = array(
    array(
        'src' => 'https://www.cksen.cz/modules/articles/images/helsinska-katedrala.jpg',
        'title' => 'Helsinky - Hlavní město',
        'description' => 'Nádherná architektura finské metropole'
    ),
    array(
        'src' => 'https://www.spa.cz/spacz/images/procedures/Finsk%C3%A1%20such%C3%A1%20sauna.jpg',
        'title' => 'Tradice saun',
        'description' => 'Finská sauna - tradice starou tisíce let'
    ),
    array(
        'src' => 'https://i.ccdn.cz/acm/1046/813663/l6.jpg',
        'title' => 'Krásná jezera',
        'description' => 'Finsko je zemí tisíců jezer'
    ),
    array(
        'src' => 'https://www.mundo.cz/sites/default/files/styles/mt2020_346/public/images/finsko/finsko-lesy-jezera.jpg?itok=zJn7pduG',
        'title' => 'Severský les',
        'description' => 'Nádherné finské lesy'
    ),
    array(
        'src' => 'https://www.lonelyplanet.cz/assets/images/uploads/9b35dc1e0c228641757593a1ac854456.jpg',
        'title' => 'Severní světla',
        'description' => 'Aurora borealis - přírodní kouzlo'
    ),
    array(
        'src' => 'https://cdn.kudyznudy.cz/services/webpmedia.ashx?file=/bf571153-99d7-4f75-9d5b-9e69dc8ac8e3/098-finsko-shutterstock-2246773009.jpg.aspx',
        'title' => 'Zimní krajina',
        'description' => 'Sněhová přikrývka finské přírody'
    ),
    array(
        'src' => 'https://st2.depositphotos.com/2716431/5398/i/450/depositphotos_53980883-stock-photo-cottage-by-the-lake-in.jpg',
        'title' => 'Rybaření',
        'description' => 'Tradiční finská chata u jezera'
    ),
    array(
        'src' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/b8/Turkucastle_edit.jpg/1280px-Turkucastle_edit.jpg',
        'title' => 'Turku - Nejstarší město',
        'description' => 'Historické město na jihozápadě Finska'
    ),
    array(
        'src' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR7Vmsv9PknKWXuhg3BE9Q80NG44Dcjty3Qpg&s',
        'title' => 'Jezero v létě',
        'description' => 'Léto v Finsku je kouzelné'
    ),
    array(
        'src' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/dc/Pikisaari_20060402.JPG/1200px-Pikisaari_20060402.JPG',
        'title' => 'Oulu - Druhé největší město',
        'description' => 'Severní město na Baltském moři'
    ),
    array(
        'src' => 'https://www.obletsvet.cz/images/a09850cd-84aa-4fc4-aa8e-cb8a849b42ff/suomenlinna.jpg.jpg',
        'title' => 'Suomenlinna - Pevnost',
        'description' => 'Historická pevnost nedaleko Helsinek'
    )
);
?>
