<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de multiplicar</title>
</head>

<body>
    <form action="ej7.php" method="POST">
        <b>Introduce un número: </b><input type="number" name="x">
        <input type="submit" name="resultado" value="Aceptar">
    </form>
    <?php
    if (isset($_POST["x"])) {
        $x = $_POST["x"];
        ?>
        <table style="border: 1px solid black; border-collapse: collapse;">
            <?php for ($i=0; $i < 11 ; $i++) { 
                $z = $x * $i ;
                echo "<tr>";
                echo "<td style='border: 1px solid black'>$x * $i = $z</td>";
                 echo "</tr>";

            }?>
        </table>
        <?php
    }
    ?>
</body>
</html>