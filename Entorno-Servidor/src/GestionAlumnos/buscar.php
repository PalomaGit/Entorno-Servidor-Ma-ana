<?php
session_start();

if (isset($_POST["buscar"])) {
    $nombre = $_POST["nombreBuscar"];
    
    if (isset($_SESSION["estudiantes"]) && count($_SESSION["estudiantes"]) > 0) {
        $lista = $_SESSION["estudiantes"];
        $encontrado = false;

        foreach ($lista as $estudiante) {
            if (strtolower($estudiante['nombre']) === strtolower($nombre)) { 
                $notas = implode(", ", $estudiante['notas']);
                $promedio = $estudiante['promedio'];
                $estado = $estudiante['estado'];

                echo "<h3>Resultado de la búsqueda</h3>";
                echo "<p><strong>{$estudiante['nombre']}</strong> → Notas: $notas | Promedio: " . number_format($promedio, 2) . " | Estado: $estado</p>";
                
                $encontrado = true;
            }
        }

        if (!$encontrado) {
            echo "<p style='color:red;'>Estudiante no encontrado.</p>";
        }
    } else {
        echo "<p style='color:red;'>No hay estudiantes registrados.</p>";
    }
}
?>

<h2>Buscar estudiante</h2>
<form action="buscar.php" method="post">
    <label>Nombre:</label>
    <input type="text" name="nombreBuscar" required>
    <input type="submit" name="buscar" value="Buscar">
</form>

<p><a href="index.php">Volver al menú</a></p>
