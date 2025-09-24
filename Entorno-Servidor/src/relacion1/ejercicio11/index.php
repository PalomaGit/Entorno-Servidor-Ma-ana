<?php
$colores = ["rojo", "verde", "azul"];

$colores = array(...$colores, "amarillo" );




unset($colores[2]);
$colores[2] = "morado";

echo "<pre>";
var_dump ($colores);
echo "</pre>";
echo "<pre>";

foreach ($colores as $color) {
    echo "$color<br>";
}
echo "</pre>";
