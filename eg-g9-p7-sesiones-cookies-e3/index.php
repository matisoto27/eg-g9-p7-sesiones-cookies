<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    setcookie("usuario", $nombre, time() + (30 * 24 * 60 * 60), "/");
} else {
    if (isset($_COOKIE["usuario"])) {
        $nombre = $_COOKIE["usuario"];
    } else {
        $nombre = "";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario con Cookie</title>
</head>

<body>
    <form method="post" action="">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" value="<?php echo $nombre; ?>" required>
        <input type="submit" value="Guardar Nombre">
    </form>
</body>

</html>