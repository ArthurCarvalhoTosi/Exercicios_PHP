<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Exercício 16</title>

</head>
<body>
    <?php
	//Armazenar 15 números inteiros em um vetor e imprimir uma mensagem contendo o número e uma das mensagens: par ou ímpar

	$numeros = array(2, 5, 8, 10, 15, 20, 25, 30, 35, 40, 45, 50, 55, 60, 65);

	foreach ($numeros as $numero){
		if ($numero % 2 == 0) {
			echo "{$numero} é par.\n";
		} else {
			echo "{$numero} é ímpar.\n";
		}
	}
	?>

</body>
</html>
