<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generador de Números Aleatorios</title>
</head>
<body>
    <h2>Generación y Ordenación de Números Aleatorios</h2>

    <?php

    $numeros = [];
    for ($i = 0; $i < 20; $i++) {
        $numeros[] = rand(0, 100);
    }


    echo "<h3>Array Original</h3>";
    echo "<pre>";
    print_r($numeros);
    echo "</pre>";


    $pares = [];
    $impares = [];
    foreach ($numeros as $numero) {
        if ($numero % 2 == 0) {
            $pares[] = $numero;
        } else {
            $impares[] = $numero;
        }
    }


    $numerosOrdenados = [...$pares, ...$impares];

    echo "<h3>Array Ordenado</h3>";
    echo "<pre>";
    print_r($numerosOrdenados);
    echo "</pre>";
    ?>

</body>
</html>
