<?php
/* Declaramos el strict type */
declare(strict_types=1);

/* Añadimos el array proporcionado en el enunciado */
$miPerfil = [
    "nombre" => "Kazus",
    "edad"   => 17,
    "juego"  => "Honkai: Star Rail",
    "nivel"  => 70
];

/* Foreach */
foreach ($miPerfil as $clave => $valor) {
    echo "$clave: $valor" . PHP_EOL . br;
}

?>