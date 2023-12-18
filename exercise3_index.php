<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício3</title>
</head>
<body>
<!--3. Entrar com nome, sexo e idade de uma pessoa. Se a pessoa for do sexo feminino e tiver menos que 25 anos,
imprimir nome e a a mensagem: ACEITA. Caso contrário, imprimir nome e a mensagem: NÃO ACEITA.-->

<form method="POST">
		<label>Digite seu Nome: </label>
			<input type="text" name="nome"/> <br><br>
    	<label>Digite seu sexo(F ou M): </label>
     		<input type="text" name="Sexo=F"/><br><br>
     	<label>Digite sua idade: </label>
     		<input type="text" name="Idade"> <br><br>
		<input type="submit" name="btnCalcular" value="Resultado">
	</form>
<?php

$sexo =  $_POST["Sexo=F"] ;
	$idade = $_POST["Idade"];

if ($sexo=="F" &&$idade <= 25) {
		echo " ACEITA!";
		}
	else{
		echo "Não Aceita";
	}

?>


</body>
</html>