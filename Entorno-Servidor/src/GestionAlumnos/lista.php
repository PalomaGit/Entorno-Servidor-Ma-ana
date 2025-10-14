<?php
session_start();

?>


<h3>Lista actual de estudiantes:</h3>
<ul>
    <?php

    foreach ($_SESSION['estudiantes'] as $est) {
        echo "<li><strong>" . $est['nombre'] . "</strong><strong> → Notas: </strong>" . implode(", ", $est['notas']) . "<strong> → Promedio: </strong>" . number_format($est['promedio'], 2) . "<strong> → Estado: </strong>" . $est["estado"] . "</li>";
    }
    ?>
</ul>

<p><a href="index.php">⬅ Volver al menú</a></p>