<?php
session_start();

$mensaje = "";

if (isset($_POST['eliminar'])) {
    $nombre = $_POST['nombreEliminar'];

    if (isset($_SESSION['estudiantes']) && count($_SESSION['estudiantes']) > 0) {
        $lista = $_SESSION['estudiantes'];
        $encontrado = false;

        foreach ($lista as $key => $estudiante) {
            if (strtolower($estudiante['nombre']) === strtolower($nombre)) {

                unset($_SESSION['estudiantes'][$key]);

                $_SESSION['estudiantes'] = array_values($_SESSION['estudiantes']);

                $encontrado = true;
                
            }
        }

        if (!$encontrado) {
            $mensaje = "<p style='color:red;'>Estudiante no encontrado.</p>";
        }

    } else {
        $mensaje = "<p style='color:red;'>No hay estudiantes registrados.</p>";
    }
}
if (isset($_POST['eliminarTodos'])) {
    $_SESSION['estudiantes'] = [];
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Eliminar Estudiante</title>
</head>
<body>
    <h2>Eliminar un estudiante</h2>

    <form method="POST" action="">
        <label>Nombre del estudiante a eliminar:</label><br>
        <input type="text" name="nombreEliminar" required><br><br>
        <input type="submit" name="eliminar" value="Eliminar">
    </form>
    <h2>Eliminar todos los estudiantes</h2>

    <form method="POST" action="">
        <input type="submit" name="eliminarTodos" value="Eliminar todos">
    </form>

    <?= $mensaje; ?>

    <p><a href="index.php">⬅ Volver al menú</a></p>
</body>
</html>
