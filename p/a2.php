<?php
    declare(strict_types=1);
    const LENGUAJE = "PHP 8.4";
    function presentacion(string $nombre): string {
        return "Hola, " . $nombre . ", bienvenido a mi primer script de " . LENGUAJE;
    }

    echo presentacion("Kazus");
    echo PHP_EOL;
?>


