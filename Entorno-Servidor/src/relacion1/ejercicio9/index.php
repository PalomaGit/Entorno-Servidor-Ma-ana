<?php
$colores = ["rojo", "verde", "azul"];
echo "<pre>";
var_dump ($colores);
echo "</pre>";

$colores = array("rojo", "verde", "azul");
echo "<pre>";
foreach ($colores as $color) {
    echo "$color<br>";
}
echo "</pre>";
