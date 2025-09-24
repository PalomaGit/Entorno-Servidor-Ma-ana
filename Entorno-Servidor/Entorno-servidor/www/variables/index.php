<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables</title>
</head>
<body>
    <h1>Variables y constantes en PHP</h1>
    <?php
    // $x=10;
    // $y=5;
    // $ciudad="Málaga";
    // $color="rojo";

    // $$color="tomate<br>";

    // echo $rojo;

    // echo $ciudad . "<br>";
    // echo $resultado=$x+$y , "<br>";

    echo "<pre>";
    print_r ($frutas = ["manzana" , "pera", "melón"]);
    echo "</pre>";

    $frutas[] = "fresa";

    // echo "<pre>";
    // print_r ($frutas);
    // echo "</pre>";

    // unset($frutas[2]);
    // echo "<pre>";
    // var_dump ($frutas[3]);
    // echo "</pre>";

    echo "<pre>";
    var_dump ($tipos = ["manzana" , "pera", 7, 7.5, false]);
    echo "</pre>";

    echo $frutas[3] , "<br>";


    function saludar(String $nombre) {
    echo "Hola $nombre";
    }
    
    saludar("Paloma");

    
    echo "<pre>";
    print_r($_SERVER);
    echo "</pre>";


    ?>
</body>
</html>