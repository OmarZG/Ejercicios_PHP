
<?php

if($_POST) {

$nombre=$_POST['txtNombre'];
$nombre = "<h1>Hola ".$nombre."</h1>";

echo $nombre;
}
?>
