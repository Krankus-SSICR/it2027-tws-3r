<?php
    require_once "processData.php";
    $region3 = new Region("Skellige");

        $region3->start_section();

        $region3->put_content(
            "Kaer Trolde",
            "img/Kaer_Trodle.png",
            "The main stronghold of Skellige, home of Clan an Craite and the seat of its jarls."
        );

        $region3->put_content(
            "Hindarsfjall",
            "img/hindarsfjall.jpg",
            "A sacred island where druidic rituals and ancient traditions are still practiced."
        );

        $region3->end_section();
    ?>
