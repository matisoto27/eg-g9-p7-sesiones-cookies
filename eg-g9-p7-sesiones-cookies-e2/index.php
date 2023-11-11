<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 7</title>
</head>
<body>
    <?php
        if (isset($_COOKIE["cont"])) {
            $cont = $_COOKIE["cont"] + 1;
            setcookie("cont", $cont, time() + (60 * 60 * 24 * 90));
            echo 'Usted ha accedido un total de: ' . $cont . ' veces';
        } else {
            echo 'Bienvenido!';
            setcookie("cont", 1, time() + (60 * 60 * 24 * 90));
        }
    ?>
</body>
</html>