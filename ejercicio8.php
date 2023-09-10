<?php

if ($_POST) {

    $valorA = $_POST['valorA'];
    $valorB = $_POST['valorB'];

    // Suam
    $suam = $valorA + $valorB;
    // Resta
    $resta = $valorA - $valorB;
    // Division
    $division = $valorA / $valorB;
    // Multiplicación
    $multiplicacion = $valorA * $valorB;

    echo "<br/>".$suam;
    echo "<br/>".$resta;
    echo "<br/>".$division;
    echo "<br/>".$multiplicacion;

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores aritmeticos</title>
</head>

<body>

    <form action="ejercicio8.php" method="post">
        <label for="">valor A:</label>
        <input type="text" name="valorA" id="">
        <br>
        <label for="">valor B:</label>
        <input type="text" name="valorB" id="">
        <br>
        <input type="submit" value="Calcular">
    </form>
</body>

</html>