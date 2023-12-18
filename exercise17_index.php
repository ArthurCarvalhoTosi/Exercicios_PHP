<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Exercício 17</title>

</head>
<body>
<?php
    //Criar um vetor com 20 elementos inteiros. Imprimir o maior e o menor, sem ordenar, o percentual de números pares e média dos elementos do vetor
    
    $vetor = array(10, 5, 8, 20, 15, 30, 25, 12, 7, 18, 21, 14, 3, 9, 6, 23, 17, 11, 28, 4);

    $maior = $vetor[0];
    $menor = $vetor[0];
    $contadorPares = 0;
    $soma = 0;

    foreach ($vetor as $numero) {
        if ($numero > $maior) {
            $maior = $numero;
        }

        if ($numero < $menor) {
            $menor = $numero;
        }

        $soma += $numero;

        if ($numero % 2 == 0) {
            $contadorPares++;
        }
    }
    $percentualPares = ($contadorPares / count($vetor)) * 100;

    $media = $soma / count($vetor);

    echo "Maior valor: " . $maior . "<br>";
    echo "Menor valor: " . $menor . "<br>";
    echo "Percentual dos pares: " . $percentualPares . "%<br>";
    echo "Média: " . $media . "<br>";
?>

</body>
</html>