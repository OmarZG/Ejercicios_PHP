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

    if( $valorA == $valorB){
        echo "<br/> El valor de A es igual al valor de B";
        if($valorA == 4){
            echo "<br/> El valor de A es 4";
        }

        if($valorA == 5){
            echo "<br/> El valor de A es 5";
        }

    }

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

    <form action="ejercicio11.php" method="post">
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