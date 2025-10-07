<?php

function sumaVariada(float ...$numeros): float
 {
    $sum = 0;
    foreach ($numeros as $numero) {
        $sum=$numero + $sum;
    }
    return $sum;
}

print_r(sumaVariada(1,2,3,4,5,6,7,8,9,10));