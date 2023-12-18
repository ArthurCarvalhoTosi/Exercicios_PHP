<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Exercicio 6</title>

</head>
<body>
		<h3>Ler um número inteiro entre 1 e 12 e escrever o mês correspondente. Caso o número seja fora desse intervalo, informar que não existe mês com este número.</h3>
		
        <form method="POST">
				<label>Digite um número de 1 a 12</label>
				<input type="text" name="Mes"/><br><br>
			<input class="btn" type="submit" name="btnCalcular" value="Mês Correspondente: "/>
        </form>
        
	<?php
		$variavel = $_POST["Mes"];
		switch ($variavel) {
			  case 1:
				  echo "O Mês é Janeiro";
			  break;
			  case 2:
				  echo "O Mes é Fevereiro";
			  break;
			  case 3:
				  echo "O Mes é Março";
			  break;
			  case 4: 
				  echo "O Mês é Abril";
			  break;
			  case 5:
				  echo "O Mês é Maio";
			  break;
			  case 6:
				  echo "O Mês é Junho";
			  break;
			  case 7:
				  echo "O Mês é Julho";
			  break;
			  case 8:
				  echo "O Mês é Agosto";
			  break;
			  case 9:
				  echo "O Mês é Setembro";
			  break;
			  case 10:
				  echo "O Mês é Outubro";
			  break;
			  case 11:
				  echo "O Mês é Novembro";
			  break;
			  case 12:
				  echo "O Mês é Dezembro";
			  break;
			  default:
				  echo "Operação invalida";
			  break;
		}
?>


</body>
</html>
