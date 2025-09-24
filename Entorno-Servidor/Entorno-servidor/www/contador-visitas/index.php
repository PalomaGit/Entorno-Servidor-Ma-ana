<?php
session_start();

if (isset($_SESSION["visitas"])) {
    $_SESSION["visitas"]++;
} else {
    $_SESSION["visitas"] = 1;
}

$_SESSION["nombreUsuario"] = "Paloma";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador de visitas</title>
</head>
<body>
    <h1>Contador de visitas</h1>
    <h1><?= $_SESSION["visitas"] ?></h1>

    <a href="creditos.php">Créditos</a>

     <div class="botones">
        <a href="index.php"><button>Volver</button></a>
        <a href="reset.php"><button>Reiniciar</button></a>

    </div>
</body>
</html>