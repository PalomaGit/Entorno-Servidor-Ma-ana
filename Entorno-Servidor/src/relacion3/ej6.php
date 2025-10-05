<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de multiplicar</title>
</head>

<body>
      <h1>ax² + bx + c = 0</h1>
    <form action="ej6.php" method="POST">
        a = <input type="number" name="a">
        b = <input type="number" name="b"> 
        c = <input type="number" name="c"> 
        <input type="submit" name="x" value="Aceptar">
    </form>
    <?php
    if (isset($_POST["x"])) {
        $a = $_POST["a"];
        $b = $_POST["b"];
        $c = $_POST["c"];
        $x1 = (-$b + ($b*$b - (4 * $a * $c))**0.5)/2*$a;
        $x2 = (-$b - ($b*$b - (4 * $a * $c))**0.5)/2*$a;
        echo "<br><h2>x1 = $x1 y x2 = $x2</h2>";
    }
    ?>
</body>
</html>