<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Exercício 8</title>

</head>
<body>

	<form method="POST">
		<label>Digite um número</label>
		<input type="text" name="numero"><br>
		<input class="btn" type="submit" name="btnCalcular" value="Calcular"/>
	</form>
<?php
	$numero = $_POST["numero"];
	$numero1 = 1;
	$produto = 1;
		while ($numero1 <= $numero) {
			echo $numero1 ."<br>";
			$produto = $numero1 * $produto;
			$numero1 ++;
		}
		echo "O produto é: " .($produto);
?>


</body>
</html>