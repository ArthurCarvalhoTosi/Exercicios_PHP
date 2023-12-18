

<title>exercicio2</title> Primeiro Numero:
	
<label> saber se é disiviel por 10, 5 e 2</label>
<br>
<form method="POST">
		<label>Digite um número: </label>
			<input type="text" name="Numero1"/><br>
			<input type="submit" name="btnCalcular" value="Calcular"> 
	</form>

<?php
$num = $_POST["Numero1"];
if ($num % 10 == 0) {
	echo "<br> O número: " .($num) ;
	echo " é divisísel por 10 <br>" ; 
} 
if ($num % 5 == 0) {
	echo " O número: ".($num) ;
	echo " é divisível por 5 <br>" ; 
}
if ($num % 2 == 0) {
	echo " O número: " .($num) ;
	echo " é divisível por 2 <br> " ;
}
elseif ($num % 10 !=0 && $num  % 5 !=0 && $num % 2 !=0 ) {
	echo "O número: " .($num) ;
	echo " não é divisivel por nenhum destes"; 
}

?>