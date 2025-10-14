<?php
session_start();

if (count($_SESSION['estudiantes']) == 0) {
    echo "Total estudiantes = 0.\nPromedio general del grupo = 0.\nPorcentaje de aprobados = 0 %.";
} else {
    $estudiantesTotal = count($_SESSION['estudiantes']);
    $promedioTotal = 0;
    $aprobados = 0;

    foreach ($_SESSION['estudiantes'] as $key => $estudiante) {
        $promedioTotal += $estudiante['promedio'];
        if ($estudiante['estado'] === 'Aprobado') {
            $aprobados++;
        }
        $porcentaje = number_format((($aprobados/$estudiantesTotal) * 100),2);
    }
    $promedioTotal = number_format($promedioTotal, 2);

    echo "Estudiantes totales: $estudiantesTotal | Promedio de notas: $promedioTotal | Porcentaje de aprobados: $porcentaje%";

} ?>

<p><a href="index.php">⬅ Volver al menú</a></p>