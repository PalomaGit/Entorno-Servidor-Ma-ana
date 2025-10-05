<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor Euros a Pesetas</title>
</head>

<body>

    <form method="post" action="ej2.php">
            <?php
            if (!isset($_POST["conversor"])) {
                ?>
                <table>
                    
                    <thead>
                        <tr>
                            <th colspan="2"><h1>Conversor Euros → Pesetas</h1></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><b>Euros</b></td>
                            <td><input type="text" name="eur" required></td>
                        </tr>
                    </tbody>
                </table>
                <button type="submit" name="conversor">Convertir</button>
                <br><br>
                <?php

            } else {
                $cambio = 166.386;
                $euro = $_POST["eur"];


                $resultado = $euro * $cambio;
                echo "<h2>$euro € son $resultado pesetas</h2><br>"; ?>


                <a href="ej2.php"><button>Volver</button></a>
                <?php

            }
            ?>


        </div>
    </form>

</body>
<footer>
    <h4>© Paloma Ocaña Piña</h4>
</footer>

</html>