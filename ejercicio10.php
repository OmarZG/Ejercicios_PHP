<?php

if ($_POST) {

    $valorA = $_POST['valorA'];
    $valorB = $_POST['valorB'];

    if( ($valorA > $valorB) && ($valorA != $valorB)){
        echo "El valor de A es diferente al de B y el valor de A es mayor que el valor de B";
    }elseif( ($valorA < $valorB) || ($valorA != $valorB) ){
        echo "El valor de A es menor que el valor de B o el valor de A es diferente que el de B";
    }elseif($valorA >= $valorB){
        echo "El valor de A es mayor o igual que el valor de B";
    }elseif($valorA <= $valorB){
        echo "El valor de A es menor o igual que el valor de B";
    }else{
        echo "El valor de A es diferente que el valor de B";
    }

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cómo se usan los Operadores lógicos</title>
</head>

<body>

    <form action="ejercicio10.php" method="post">
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