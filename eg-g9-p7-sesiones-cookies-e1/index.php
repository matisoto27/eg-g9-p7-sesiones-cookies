<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 7</title>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST["estilo"])) {
                $estilo = $_POST["estilo"];
                setcookie("estilo", $estilo, time() + (60 * 60 * 24 * 90));
            } else {
                if (isset($_COOKIE["estilo"])) {
                    $estilo = $_COOKIE["estilo"];
                }
            }
            if (isset($estilo)) {
                echo '<link rel="STYLESHEET" type="text/css" href="' . $estilo .'.css">';
            }
        }
    ?>
</head>
<body>
    <form action="index.php" method="post">
        Aquí puedes seleccionar el estilo (color de fondo) que deseas la página:
        <br>
        <select name="estilo">
            <option value="verde">Verde
            <option value="rosa">Rosa
            <option value="negro">Negro
        </select>
        <input type="submit" value="Actualizar el estilo">
    </form>
</body>
</html>