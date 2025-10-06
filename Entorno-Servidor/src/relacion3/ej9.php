<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial</title>
</head>
<body>
    <form action="ej9.php" method="post">
        <label for="numIntroducido">Introduce un número: </label>
        <input type="number" name="numIntroducido">
        <input type="button" value="Aceptar">
    </form>
    <?php
    if (isset($_POST["numIntroducido"])) {
        $numIntroducido = $_POST["numIntroducido"];
        $n=1;
        if ($numIntroducido == 0) {
            $n = 0;

        } else {
            for ($i= 0; $i<$numIntroducido; $i++){
            $n = $n + $n * $i;
       }
        }
        
       echo "El factorial de {$numIntroducido}! = $n.";
    }
    ?>
    
</body>
</html>