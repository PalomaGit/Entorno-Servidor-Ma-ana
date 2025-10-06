<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pirámide</title>
</head>
<body>
    <form action="ej10.php" method="post">
        <label for="altura">Introduce la altura de la pirámide: </label>
        <input type="number" name="altura" required><br>
        <label for="simbolo">Introduce el símbolo con el que pintar la pirámide: </label>
        <select name="simbolo" id="" required>
            <option value="*">*</option>
            <option value="$">$</option>
            <option value="@">@</option>
            <option value="#">#</option>
        </select><br>
        <input type="submit" value="Aceptar">
    </form>
    <?php
    if (isset($_POST["altura"])) {
        $altura = $_POST["altura"];
        $simbolo = $_POST["simbolo"];

        echo "<pre>";
        for ($i=1; $i <= $altura; $i++) { 

            for ($j=0; $j < $altura-$i; $j++) { 
               echo " ";
            }
           
            for ($k = 0; $k < 2 * $i - 1; $k++) {
                echo $simbolo;
            }

            echo "<br>";
        }

        echo "</pre>";

    }

    ?>
    
</body>
</html>