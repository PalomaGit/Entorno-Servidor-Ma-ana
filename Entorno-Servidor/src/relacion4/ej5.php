<?php
const CONSTANTE = 1;

$mult = function (int $num): int {
    return $num * CONSTANTE;    
};

echo $mult(5);

