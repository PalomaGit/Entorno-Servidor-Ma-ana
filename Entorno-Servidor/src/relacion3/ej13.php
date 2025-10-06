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
        echo "<table cellpadding='15' style='border-collapse: collapse;'>";
        echo "<tr>";
        foreach (array_keys($x) as $indice) {
            echo "<th style='border-bottom: 1px solid grey'>$indice</th>";
        }
        echo "</tr><tr>";
        foreach ($x as $numero) {
            echo "<td>$numero</td>";
        }
        echo "</tr></table>";
    }
    ?>
</body>
</html>