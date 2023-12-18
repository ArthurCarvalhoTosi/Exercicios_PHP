<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 9
    </title>
</head>
<body>
    <form method="POST">
        <input type="text"name="numero">
        <input class="btn" type="submit" name="btnCalcular" value="calcular">
    </form>
    
    <?php
    function calcular(){
        $numero = $_POST["numero"];

        echo str_repeat("SOL ", $numero);
        
    }
    
    calcular();
    ?>
</body>
</html>