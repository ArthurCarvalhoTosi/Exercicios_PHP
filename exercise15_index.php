<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Exercício 15</title>

</head>
<body>

	<form method="POST">
		<label>Digite um número da massa</label>
		<input type="text" name="numero"><br>
		<input class="btn" type="submit" name="btnCalcular" value="Calcular"/>
	</form>
    <?php
    //Na usina de Angra dos Reis, os técnicos analisam a perda de massa de um material radioativo. 
    //Sabendo-se que este perde 25% de sua massa a cada 30 segundos,
    //criar um algoritmos que imprima o tempo necessário para que a massa desse material seja menor que 0.10
        $massa = $_POST["numero"];
        $massaFinal = 0.10;
        $taxaDecaimento = 0.25;

        $intervalo = 30;
        $tempoDecorrido = 0;

        while ($massa > $massaFinal) {
            $massa *= (1 - $taxaDecaimento);
            $tempoDecorrido += $intervalo;
        }
        echo "Tempo necessário: " . $tempoDecorrido . " segundos\n";
    ?>
</body>
</html>