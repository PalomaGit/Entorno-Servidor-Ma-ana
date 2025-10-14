<?php
session_start();

$mensaje = "";

if (!isset($_SESSION['estudiantes'])) {
    $_SESSION['estudiantes'] = [];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $notas = explode(',', $_POST['notas']);

    $errores = false;
    $promedio = 0;

    foreach ($notas as $nota) {
        $promedio += $nota;

        if (!is_numeric($nota) || $nota < 0 || $nota > 10 || count($notas) != 3) {
            $errores = true;
        }
    }

    $promedio= $promedio/3;

    if ($promedio>4) {
        $estado = "Aprobado";
    } else {
        $estado = "Suspenso";
    }

    if ($errores) {
        $mensaje = "<p style='color:red;'>Las notas deben ser 3 números entre 0 y 10.</p>";

    } else {

        $_SESSION['estudiantes'][] = [
            'nombre' => $nombre,
            'notas' => $notas,
            'promedio' => $promedio ,
            'estado' => $estado
        ];

        $mensaje = "<p style='color:green;'>Estudiante agregado correctamente.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar Estudiante</title>
</head>
<body>
    <h2>Agregar un nuevo estudiante</h2>

    <form method="POST" action="">
        <label>Nombre:</label><br>
        <input type="text" name="nombre" required><br><br>

        <label>Notas (separadas por comas):</label><br>
        <input type="text" name="notas" placeholder="8,7,9"><br><br>

        <input type="submit" value="Guardar">
    </form>

    <?= $mensaje; ?>

    

    <p><a href="index.php">⬅ Volver al menú</a></p>
</body>
</html>
