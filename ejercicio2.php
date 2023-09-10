
<?php

// Se valida si se envio información
if($_POST) {

/*
Se obtienen valores del formulario:
variable txtNombre

*/
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
    <title>Comentario cortos y largos</title>
</head>
<body>
    <form action="ejercicio2.php" method="post">
        <label for="Nombre">Nombre:</label>
        <input type="text" name="txtNombre" id="">
        <input type="submit" value="Enviar">
    </form>

</body>
</html>