<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplicación</title>
</head>

<body>
    <h1>Introduce dos números</h1>
    <form action="ej1.php" method="POST">
        <input type="number" name="x"> *
        <input type="number" name="y">
        <button type="submit">Aceptar</button>
    </form>
    <?php
    if (isset($_POST["x"])) {
        $x = $_POST["x"];
        $y = $_POST["y"];
        $z = $x * $y;
        echo "<br><h2>El resultado de multiplicar $x y $y es: $z</h2>";
    }
    ?>
</body>
</html>