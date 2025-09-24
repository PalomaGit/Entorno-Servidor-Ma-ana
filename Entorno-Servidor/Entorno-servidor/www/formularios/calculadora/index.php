<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <h1>Calculadora</h1>

    <form method="post">
        <input type="number" name="x" > + 
        <input type="number" name="y" >
        <button type="submit">=</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $x = $_POST["x"];
        $y = $_POST["y"];
        $suma = $x + $y;
        echo "<h2>Resultado: $suma</h2>";
    }
    ?>
</body>
</html>
