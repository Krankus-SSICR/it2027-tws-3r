<?php
    require_once "processData.php";
    $region = new Region("White Orchard");

        $region->start_section();

        $region->put_content(
            "Abandoned Village",
            "img/images.jpg",
            "A ruined settlement haunted by wraiths and dark memories from the Nilfgaardian invasion."
        );

        $region->put_content(
            "Devil by the Well",
            "img/devilByTheWell.jpg",
            "An infamous cursed well connected to a noonwraith and one of Geralt’s first contracts."
        );

        $region->end_section();
    ?>

