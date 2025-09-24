<?php

$puntuacion = 30 ; 

echo match (true) {
    $puntuacion <= 49 => "Novato" ,
    $puntuacion <= 69 => "Intermedio",
    $puntuacion <= 89 => "Avanzado",
    $puntuacion <= 100 => "Experto",
    default => "Introduce un número entre 0-100",
} ; 