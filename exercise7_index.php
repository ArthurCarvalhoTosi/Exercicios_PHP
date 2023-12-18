<!--A biblioteca de uma universidade deseja fazer um algoritmo que leia o nome do livro que será emprestado, o tipo de usuário (professor ou aluno) e possa imprimir um recibo conforme mostrado a seguir. Considerar que o professor tem 10 dias para devolver o livro o aluno somente 3 dias-->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <title>Exercicio 7</title>
</head>
<body>
    <form method="GET">
        <label>Nome do Livro:</label>
        <input type="text" name="book"><br>

        <label>Tipo de Usuário:</label>
        <select name="stats">
            <option value="Professor">Professor</option>
            <option value="Estudante">Estudante</option>
        </select><br>

        <label>Nome do Usuário:</label>
        <input type="text" name="nom"><br>

        <input type="submit" value="Gerar">
    </form>
    <div>
        <?php
        if (isset($_GET["book"]) && isset($_GET["stats"]) && isset($_GET["nom"])) {
            $var1 = $_GET["book"];
            $var2 = $_GET["stats"];
            $var3 = $_GET["nom"];
            $vardate = date('d-m-Y');
            
            if ($var2 == "Professor") { 
                echo "$var2: $var3 <br/> Livro: $var1 <br/> ";
                echo "Prazo de devolução 10 dias a partir do dia: $vardate";
            } elseif ($var2 == "Estudante") { 
                echo "$var2: $var3  <br/> Livro: $var1 <br/> ";
                echo "Prazo de devolução 3 dias a partir do dia: $vardate";
            }
        }
        ?>
    </div>
</body>
</html>
