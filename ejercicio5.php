<?php

if ($_POST) {

    $nombre = $_POST['txtNombre'];
    $apellido = $_POST['txtApellido'];
    $nombreCompleto = "<h1>Hola " . $nombre . " " . $apellido . "</h1>";

    echo $nombreCompleto;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String y concatenación de variables</title>
</head>

<body>
    <form action="ejercicio5.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" name="txtNombre" id="">
        <br>
        <label for="apellido">Apellido:</label>
        <input type="text" name="txtApellido" id="">
        <br>
        <input type="submit" value="Enviar">
    </form>

</body>

</html>