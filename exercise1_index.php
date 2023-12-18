<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1</title>
</head>
<body>
    <form method="POST">
        <label>Digite um valor</label>
        <input type="number" name="number1">
        <label>Digite um valor</label>
        <input type="number" name="number2">
        <input type="submit" value="Calcular">
    </form>    

<?php
function calcular(){
    if(isset($_POST["number1"]) && isset($_POST["number2"])){
        $number1 = $_POST["number1"];
        $number2 = $_POST["number2"];
        $sum = $number1 + $number2;

        if($sum >= 20){
            $total = $sum + 8;
            return $total;
        } else {
            $total2 = $sum - 5;
            return $total2;
        }
    }
}

if(isset($_POST["number1"]) && isset($_POST["number2"])){
    $resultado = calcular();
    echo "Resultado: " . $resultado;
}
?>
</body>
</html>
