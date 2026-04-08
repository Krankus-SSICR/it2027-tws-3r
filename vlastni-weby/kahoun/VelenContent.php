<?php
    require_once "processData.php";
    $region2 = new Region("Velen / No Man's Land");

        $region2->start_section();

        $region2->put_content(
            "Crookback Bog",
            "img/Crookback_bog.jpg",
            "A dark, foggy swamp ruled by the mysterious Crones, filled with danger and decay."
        );

        $region2->put_content(
            "Fyke Isle",
            "img/fyke_isle.png",
            "A plague-ridden island cursed by betrayal, ghosts, and a powerful noonwraith."
        );

        $region2->end_section();
    ?>

