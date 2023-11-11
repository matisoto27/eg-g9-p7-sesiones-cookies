<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
</head>
<body>
    <?php
        session_start();
        if (isset($_SESSION['nombre'])) {
            $nombre = $_SESSION["nombre"];
            echo 'Bienvenido ' . $nombre;
        } else {
            echo 'No puede visitar esta página';
        }
    ?>
</body>
</html>