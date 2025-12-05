<?php
    declare(strict_types=1);

    $miPerfil[
        "nombre" => "Kazus",
        "edad" => "17",
        "juego" => ["Honkai: Star Rail", "Colorful Stage"],
        "nivel" => ["70", "18"]
    ];

    echo sprintf(
        "Hola, me llamo %s, tengo %d, y soy nivel %d en %s",
        $miPerfil[nombre],
        $miPerfil[edad],
        $miPerfil[nivel][1],
        $miPerfil[juego][1]
    );
    echo PHP_EOL;
?>