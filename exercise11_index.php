<html>
<head>
    <title>Exercício 11</title>
</head>
<body>

<form method="POST">

Digite um número <input type="numeric" name="num"/><br>

<input type="submit">
</form>
<?php
//algoritmo que imprime a tabuada de um número

$num1 = $_POST["num"];

echo"<br>";
    for($i=0; $i-1 < 10; $i++){
        
    
        echo "$num1 x $i=" . ($i*$num1) . "<br>";
              
}
?>