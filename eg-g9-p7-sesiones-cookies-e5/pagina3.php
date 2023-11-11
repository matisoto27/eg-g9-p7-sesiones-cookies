<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>
<body>
    <?php
        session_start();
        $nombre = $_SESSION["nombre"];
        $clave = $_SESSION["clave"];
    ?>
    <form method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" value="<?php echo $nombre;?>" required>
        <label for="clave">Clave:</label>
        <input type="text" id="clave" name="clave" value="<?php echo $clave;?>" required>
        <input type="submit" value="Guardar">
    </form>
</body>
</html>