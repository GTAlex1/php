<?php
    declare(strict_types=1);
    function saludo(string $saludo): string {
        return "Hola, " . $saludo . ", bienvenido a mi primer script de PHP";
    }

    echo saludo("Kazus");
    echo PHP_EOL;
?>

