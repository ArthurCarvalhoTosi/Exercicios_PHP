<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio 13</title>
</head>
<body>
        <form method="POST"> 
           digite os valores como o exemplo (1,2,3,4,5...) 
           <input type="text" name="numbers"/> <br>
           <input type="submit"><br>
        </form>

        <?php
            $count = 0;
            $value = explode("," , $_POST["numbers"]);
            
            for ($i = 0; $i < sizeof($value);$i++){
                if(($value[$i] >= 100) && ($value[$i] <= 200)){
                    $count ++;
                }
                if($value[$i] == 0){
                    break;
                }
            }
                echo $count;
        
        ?>
</body>
</html>