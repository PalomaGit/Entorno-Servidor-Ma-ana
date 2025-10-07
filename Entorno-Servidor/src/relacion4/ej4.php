<?php

function numCadena(int|string $number): int|string
{
    if (is_int($number)) {
        return $number * 2;
    } else {
         $contador = 0;
        foreach (str_split($number) as $letra) {
            $contador++;
        }
        return $contador;
        //return strlen($number);
    }
}

echo numCadena("Paloma")."<br>";
print_r(numCadena(5));