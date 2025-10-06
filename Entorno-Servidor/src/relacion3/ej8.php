<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calcular media</title>
</head>
<body>
    <h1>Media de números positivos</h1>

    <form action="" method="post">
        <label for="numeros">Introduce números positivos separados por comas:</label><br>
        <input type="number" name="numeros" required>
        <br><br>
        <button type="submit">Calcular media</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["numeros"])) {
        $numeros = $_POST["numeros"];

        $partes = explode(",", $numeros);

        $suma = 0;
        $contador = 0;

        foreach ($partes as $parte) {
           
                if ($num >= 0) {
                    $suma += $num;
                    $contador++;
                }
        }

        if ($contador > 0) {
            $media = $suma / $contador;
            echo "<h2>Resultado</h2>";
            echo "<p>Números válidos contados: $contador</p>";
            echo "<p>Suma: $suma</p>";
            echo "<p>Media: " . number_format($media, 2) . "</p>";
        } else {
            echo "<p>El número no es válido.</p>";
        }

       
    }
    ?>

</body>
</html>
