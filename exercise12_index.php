<html>
<head>
    <title>Exercício 12</title>

</head>
<body>

<form method="POST">

  Digite uma palavra <input type="text" name="nome"/> <br>
    <input type="submit"><br>

<?php
    // código para repetir uma palavra em sequencia(1, 2 2, 3 3 3, 4 4 4 4...)
    $nome = $_POST["nome"];
    
   for ($i=1; $i < 30; $i++){
        echo $nome . " <br>";
   }
    
        
?>