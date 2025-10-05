<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salario semanal</title>
</head>

<body>
    <h1>Horas trabajadas:</h1>
    <form action="ej5.php" method="POST">
        <input type="number" name="b">
        <input type="submit" name="a" value="Aceptar">
    </form>
    <?php
    if (isset($_POST["a"])) {
        $b = $_POST["b"];
        $a= $b * 12;
        echo "<br><h2>Salario de $b horas = $a €</h2>";
    }
    ?>
</body>
</html>