<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla Arrays</title>
</head>

<body>
    <form action="ej13.php" method="POST">
        <b>Introduce 10 números:</b><br><br>
        <?php for ($i = 0; $i < 10; $i++){ ?>
            Número <?php echo $i + 1; ?>: <input type="number" name="x[]" required><br><br>
        <?php }; ?>
        <input type="submit" value="Aceptar">
    </form>
    <?php
    if (isset($_POST["x"])) {
        $x = $_POST["x"];
        echo "<table border='1' cellpadding='5' cellspacing='0' style='border-collapse: collapse;'>";
        foreach ($x as $indice => $numero) {
            
            echo "<th>$indice</th>";
            echo "<tr><td>" . $numero . "</td></tr>";
            
        }
        echo "</table>";
    }
    ?>
</body>
</html>