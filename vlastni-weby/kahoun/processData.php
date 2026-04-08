<?php

class Region
{
    private $regionName;

    function __construct($regionName)
    {
        $this->regionName = $regionName;
    }

    function start_section()
    {
        echo '<section>';
        echo '<h2>' . htmlspecialchars($this->regionName) . '</h2>';
    }

    function put_content($name, $imageLoc, $description)
    {
        echo '<h3>' . htmlspecialchars($name) . '</h3>';
        echo '<div class="film">';
            echo '<div class="foto">';
                echo '<img src="' . htmlspecialchars($imageLoc) . '" alt="Location image">';
            echo '</div>';
            echo '<div class="rozdeleni"></div>';
            echo '<p>' . htmlspecialchars($description) . '</p>';
        echo '</div>';
    }

    function end_section()
    {
        echo '</section>';
    }
}






















// $regions = [
//     "White Orchard" => [
//         [
//             "name" => "Abandoned Village",
//             "image" => "img/images.jpg",
//             "description" => "A ruined settlement haunted by wraiths and dark memories from the Nilfgaardian invasion."
//         ],
//         [
//             "name" => "Devil by the Well",
//             "image" => "img/devilByTheWell.jpg",
//             "description" => "An infamous cursed well connected to a noonwraith and one of Geralt’s first contracts."
//         ]
//     ],
//     "Velen / No Man's Land" => [
//         [
//             "name" => "Crookback Bog",
//             "image" => "img/Crookback_bog.jpg",
//             "description" => "A dark, foggy swamp ruled by the mysterious Crones, filled with danger and decay."
//         ],
//         [
//             "name" => "Fyke Isle",
//             "image" => "img/fyke_isle.png",
//             "description" => "A plague-ridden island cursed by betrayal, ghosts, and a powerful noonwraith."
//         ]
//     ],
//     "Skellige" => [
//         [
//             "name" => "Kaer Trolde",
//             "image" => "img/Kaer_Trodle.png",
//             "description" => "The main stronghold of Skellige, home of Clan an Craite and the seat of its jarls."
//         ],
//         [
//             "name" => "Hindarsfjall",
//             "image" => "img/hindarsfjall.jpg",
//             "description" => "A sacred island where druidic rituals and ancient traditions are still practiced."
//         ]
//     ]
// ];



?>