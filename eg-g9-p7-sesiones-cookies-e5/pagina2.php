<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redireccionando...</title>
</head>
<body>
    Variables de sesion creadas
    <?php
        session_start();
        $_SESSION["nombre"]=$_POST["nombre"];
        $_SESSION["clave"]=$_POST["clave"];
        header("Location: pagina3.php");
    ?>
</body>
</html>