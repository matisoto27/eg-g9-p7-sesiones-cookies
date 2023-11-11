<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $titulo = $_POST["titulo"];
            setcookie("titulo", $titulo, time() + (30 * 24 * 60 * 60), "/");
        } else {
            if (isset($_COOKIE["titulo"])) {
                $titulo = $_COOKIE["titulo"];
            } else {
                $titulo = "Titulo por defecto";
            }
        }
        echo '
        <title>' . $titulo . '</title>';
    ?>
</head>
<body>
    <form action="index.php" method="post">
        Aquí puedes seleccionar seleccionar qué titular debe mostrar el periódico:
        <div>
            <input type="radio" id="op1" name="titulo" value="Noticia política"/>
            <label for="op1">Noticia política</label>

            <input type="radio" id="op2" name="titulo" value="Noticia económica"/>
            <label for="op2">Noticia económica</label>

            <input type="radio" id="op3" name="titulo" value="Noticia deportiva"/>
            <label for="op3">Noticia deportiva</label>
        </div>
        <input type="submit" value="Actualizar titulo">
    </form>
</body>
</html>