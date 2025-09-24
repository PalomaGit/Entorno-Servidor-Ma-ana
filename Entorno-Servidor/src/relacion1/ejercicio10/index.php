<?php
$colores = ["rojo", "verde", "azul"];

$colores = array(...$colores, "amarillo" );

echo "<pre>";
var_dump ($colores);
echo "</pre>";
echo "<pre>";

foreach ($colores as $color) {
    echo "$color<br>";
}
echo "</pre>";
