<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Exercício 20</title>

</head>
<body>
<?php
    // Criar um algoritmo com uma matriz 5x5 e imprima: toda a matriz, a matriz gerada só com números ímpares e outra só com números pares
    
    $matriz = array();
    for ($i = 0; $i < 5; $i++) {
        for ($j = 0; $j < 5; $j++) {
            $matriz[$i][$j] = rand(1, 100);
        }
    }

    echo "Matriz completa:<br>";
    for ($i = 0; $i < 5; $i++) {
        for ($j = 0; $j < 5; $j++) {
            echo $matriz[$i][$j] . "\t";
        }
        echo "<br>";
    }

    $matrizImpares = array();
    $matrizPares = array();

    for ($i = 0; $i < 5; $i++) {
        for ($j = 0; $j < 5; $j++) {
            if ($matriz[$i][$j] % 2 == 0) {
                $matrizPares[$i][$j] = $matriz[$i][$j];
            } else {
                $matrizImpares[$i][$j] = $matriz[$i][$j];
            }
        }
    }

    echo "<br>Matriz de números ímpares:<br>";
    for ($i = 0; $i < 5; $i++) {
        for ($j = 0; $j < 5; $j++) {
            echo isset($matrizImpares[$i][$j]) ? $matrizImpares[$i][$j] : "0";
            echo "\t";
        }
        echo "<br>";
    }

    echo "<br>Matriz de números pares:<br>";
    for ($i = 0; $i < 5; $i++) {
        for ($j = 0; $j < 5; $j++) {
            echo isset($matrizPares[$i][$j]) ? $matrizPares[$i][$j] : "0";
            echo "\t";
        }
        echo "<br>";
}
?>
</body>
</html>