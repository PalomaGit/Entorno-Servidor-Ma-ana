<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posiciones</title>
</head>
<body>
    <form action="ej12.php" method="post">
        <label for="n">Introduce un número: </label>
        <input type="number" name="n" required><br>
        <label for="n">Introduce un digito: </label>
        <input type="number" name="d" required><br>
        <br>
        <input type="submit" value="Aceptar">
    </form>
    <br>
    <?php
    if (isset($_POST["n"])) {
        $n = $_POST["n"];
        $d = $_POST["d"];

         $posiciones = [];

        for ($i = 0; $i < strlen($n); $i++) {
            if ($n[$i] == $d) {

                $posiciones[] = $i + 1;

            }
        }

        if (!empty($posiciones)) {
            echo "El dígito '$d' aparece en las posiciones: " . implode(", ", $posiciones) . ".";
        } else {
            echo "El '$d' no se encuentra en el $n.";
        }
    }
        
    

    ?>
    
</body>
</html>