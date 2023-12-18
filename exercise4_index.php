<!--Entrar com 3 números e imprimi-los em ordem decrescente (suponha números diferentes)-->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <title>Exercicio 4</title>
</head>
<body>
    <form method="GET">
        <label>Digite um valor</label>
        <input type="number" name="num1">
        <label>Digite um valor</label>
        <input type="number" name="num2">
        <label>Digite um valor</label>
        <input type="number" name="num3">
        <input type="submit" value="Calcular">
    </form>
    <div>
        <?php 
            $numero1 = isset($_GET['num1']) ? $_GET['num1'] : 0;
            $numero2 = isset($_GET['num2']) ? $_GET['num2'] : 0;
            $numero3 = isset($_GET['num3']) ? $_GET['num3'] : 0;
            $matr = array($numero1, $numero2, $numero3);
            rsort($matr);
            echo "Resultado: " . implode(', ', $matr); 
        ?>
    </div>
</body>
</html>
