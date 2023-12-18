<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Exercício 18</title>

</head>
<body>
<?php
    //Criar 2 vetores com 10 números inteiros cada. Gerar e imprimir um vetor dos números não comuns aos ????? e vetores

    $vetor1 = array(10, 5, 8, 20, 15, 30, 25, 12, 7, 18);
    $vetor2 = array(20, 3, 9, 6, 23, 17, 11, 28, 4, 14);

    $vetorNaoComuns = array_merge(array_diff($vetor1, $vetor2), array_diff($vetor2, $vetor1));

    echo "Números não comuns: " . implode(", ", $vetorNaoComuns);
?>
</body>
</html>