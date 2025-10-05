<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor Euros a Pesetas</title>
</head>

<body>

    <form method="post" action="ej3.php">
        <?php
        if (!isset($_POST["conversor"])) {
            ?>
            <table>
                <thead>
                    <tr>
                        <th colspan="2">
                            <h1>Conversor Euros</h1>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><b>Euros</b>
                            <input type="text" name="eur" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="div"><b>Divisa</b></label>
                            <select name="div" id="div" aria-placeholder="elige una" required>  
                                <option name="pesetas">Pesetas</option>
                                <option name="dolar">Dólares</option>
                                <option name="libra">Libra Esterlina</option>
                                <option name="yen">Yen Japonés</option>
                            </select>
                        </td>
                    </tr>
                </tbody>
            </table>
            <button type="submit" name="conversor">Convertir</button>
            <br><br>
            <?php

        } else {

            if ($_POST["div"] == "pesetas") {
                $cambio = 166.386;
            } elseif ($_POST["div"] == "dolar") {
                $cambio = 1.05;
            } elseif ($_POST["div"] == "libra") {
                $cambio = 0.87;
            } else {
                $cambio = 157.25;
            } 
            $euro = $_POST["eur"];


            $resultado = $euro * $cambio;
            echo "<h2>$euro € son $resultado {$_POST['div']}</h2><br>"; ?>


            <a href="ej3.php"><button>Volver</button></a>
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