<html>
<head>
    <title>Exercício 10</title>
</head>
<body>

<?php

    //código que recebe 20 números, soma os positivos e fala quantos negativos temos


function random(){
    $negativo = 0;
    $positivo = 0;
    $total = array();

    echo "Números sorteados aleatóriamente: ";
    for ($i=1; $i<=20; $i++) {
        $numeros = rand(-100, 100);
        $total[$i] = $numeros;

        if ($numeros <= 0) {
            $negativo++;
        } else {
            $positivo += $numeros;
        }
        if($i == 20){
            echo $total[$i] . "</br>";
        }else{
            echo $total[$i] . ",";
        }

    }

    echo "A Soma dos positivos é: " . $positivo . "</br> A quantidade de negativos é: " . $negativo . "</br>"; 
         
} 

random();
?>