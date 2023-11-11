<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario con Cookie</title>
</head>

<body>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            require_once 'conexion.php';
            if ($connection->connect_error) die("Error al Conectar con la Base de Datos");
            $email = $_POST["email"];
            $query = "SELECT * FROM alumno WHERE email='$email'";
            $result = $connection->query($query);
            if (!$result) {
                $result->close();
                $connection->close();
                die("Error");
            } else {
                $rows = $result->num_rows;
                if ($rows == 0) echo "No existen alumnos con ese email";
                else {
                    for ($i=0; $i < $rows ; ++$i) {
                        $row = $result->fetch_array(MYSQLI_ASSOC);
                        $nombre = $row['nombre'];
                        session_start();
                        $_SESSION["nombre"] = $nombre;
                        header("Location: bienvenida.php");
                    }
                }
            }
        }
    ?>
    
</body>

</html>