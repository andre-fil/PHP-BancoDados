<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="modelo.css">
    <title>Formulários-02</title>
</head>
<body>
    <h1>Formulários com PHP.2</h1>
    <div>
        <?php
            $num = isset($_GET['num'])?$_GET['num']:'[Não Informado]';
            $fat = 1;
            $c = $num;
            do{
                $fat = $fat * $c;
                $c --;
            } while($c >= 1);

            echo "${num} ! = {$fat}";
        ?>
         <br/>
        <a href="fatorial.html"> Voltar</a>
    </div>

  
    
</body>
</html>