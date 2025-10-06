<?php
function esPar(int $numero): bool {
    return $numero % 2 == 0;
}

function miFiltro(array $datos, $funcion): array
{
    $resultado = [];
    foreach ($datos as $item) {
        if ($funcion($item)) {
            $resultado[] = $item;
        }
    }
    return $resultado;
}

$numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$numPar = miFiltro(datos: $numeros, funcion: 'esPar');

echo "<pre>";
print_r($numPar);
echo "</pre>";



