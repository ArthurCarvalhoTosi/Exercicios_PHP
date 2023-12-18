<html>
	<head>
		<title>Exercicio5</title>
	</head>
	<body>

		<form method="post" action="#">
			<label>V1: </label>
			<input type="text"  name="V1" /><br />

			<label>V2: </label>
			<input type="text"  name="V2" /><br />

			<label>V3: </label>
			<input type="text"  name="V3" /><br />
			<input type="submit" value="OK" />
		</form>

		<?php
		if($_POST["V1"]!="" and $_POST["V2"]!="" and $_POST["V3"]!=""){

			if ($_POST["V1"]==$_POST["V2"] and $_POST["V2"]==$_POST["V3"]) {
				echo "<br>Equilatero";
			}elseif ($_POST["V1"]!=$_POST["V3"] and $_POST["V1"]!=$_POST["V2"] and $_POST["V2"]!=$_POST["V3"]){
					echo "<br>Escaleno";
			}else{
				echo "<br>Isosceles";
			}

		}else{
			echo "digite um valor";
		}
		?>
	</body>
</html>