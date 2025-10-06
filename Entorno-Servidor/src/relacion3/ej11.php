<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Número al revés</title>
</head>
<body>
    <form action="ej11.php" method="post">
        <label for="n">Introduce un número: </label>
        <input type="number" name="n" required><br>
        <br>
        <input type="submit" value="Aceptar">
    </form>
    <?php
    if (isset($_POST["n"])) {
        $n = $_POST["n"];
        echo "<pre>";
        var_dump($n);
        echo "</pre>";

        $invertido = "";

        for ($i = strlen($n)-1 ; $i >= 0 ; $i--) {
            $invertido .= $n[$i];
        }

        echo "Invertido: " . $invertido ;
        
    }

    ?>
    
</body>
</html>