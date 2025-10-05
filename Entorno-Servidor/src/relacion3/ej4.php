<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Triángulo</title>
</head>

<body>
    <h1>Área de un triángulo (A=b·h/2)</h1>
    <form action="ej4.php" method="POST">
        <input type="number" name="b"> *
        <input type="number" name="h"> / 2
        <input type="submit" name="A" value="Aceptar">
    </form>
    <?php
    if (isset($_POST["b"])) {
        $b = $_POST["b"];
        $h = $_POST["h"];
        $A = $b * $h /2;
        echo "<br><h2>A = $A  m</h2>";
    }
    ?>
</body>
</html>