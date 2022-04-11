<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="modelo.css">
    <title>Primos</title>
</head>
<body>
    <h1>Primos</h1>
    <div>
        <?php
        $cont = 0;
            $num = isset($_GET['num'])?$_GET['num']:0;
            echo "Valores múltiplos: ";
            for($i = 1; $i <= $num; $i++){
                if ($num % $i == 0){
                    echo "$i ";
                   $cont += 1;
                  

                }
            }
            echo "<br> total de multiplos: $cont <br>";
            if($cont >= 2){
                echo 'não eh primo';
            } else{
                echo 'eh primo';
            }







        ?>
        <br/>
        <a href="primo.php">Voltar</a>
    </div>

  
    
</body>
</html>