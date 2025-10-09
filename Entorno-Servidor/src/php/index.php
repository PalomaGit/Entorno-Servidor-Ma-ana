<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de estudiantes</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="nombre">Nombre: </label>
        <input type="text" name="nombre" id="nombre" required><br><br>
        <label for="notas">Notas (separadas por comas): </label>
        <input type="text" name="notas" id="notas" required><br>
        <input type="submit" name="agregar" value="Agregar">
    </form>
    <?php
        if (isset($_POST["agregar"])) {
            $nombre = $_POST["nombre"];
            $notasTexto = $_POST["notas"];
            $notas = explode(",", $notas);

            echo "<pre>";
            var_dump ($nombre);
            var_dump ($notas);

            foreach ($notas as $nota) {
                if($nota >=0 && $nota <= 10) {
                    notas[""] = $nota;
                   
                    
                    
                }
            }
            echo "<pre>";
            var_dump ($nombre);
            var_dump ($notas); 
        } 
    ?>
</body>
</html>