<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Exercício 19</title>

</head>
<body>
<?php
    //Criar um algoritmo com uma matriz 5x5 e escreva os elementos da diagonal principal
    
    $matriz = array(
        array(1, 2, 3, 4, 5),
        array(6, 7, 8, 9, 10),
        array(11, 12, 13, 14, 15),
        array(16, 17, 18, 19, 20),
        array(21, 22, 23, 24, 25)
    );

    echo "Elementos na primeira diagonal: ";
    for ($i = 0; $i < 5; $i++) {
        echo $matriz[$i][$i] . " ";
}
?>

</body>
</html>