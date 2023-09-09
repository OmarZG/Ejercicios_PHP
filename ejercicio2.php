
<?php

if($_POST) {

$nombre=$_POST['txtNombre'];
$nombre = "<h1>Hola ".$nombre."</h1>";

echo $nombre;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ejercicio2.php" method="post">
        <label for="Nombre">Nombre:</label>
        <input type="text" name="txtNombre" id="">
        <input type="submit" value="Enviar">
    </form>

</body>
</html>