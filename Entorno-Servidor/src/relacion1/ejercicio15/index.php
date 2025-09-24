<?php
$clases = [
        "nombre" => ["Pedro Pérez", "Gema Gómez"],
        "cursos" => ["Biología", "Química"]
];

echo "<pre>";
var_dump ($clases);
echo "</pre>";

$clases ["cursos"] [0] = "Física";
echo "<pre>";
var_dump ($clases);
echo "</pre>";