<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="modelo.css">
    <title>FNotas</title>
</head>
<body>
    <h1>Calcular</h1>
    <div>
        <?php
            $num = isset($_GET['num'])?$_GET['num']:0;
            $op = isset($_GET['oper'])?$_GET['oper']:1;
            switch($op){
                case(1):
                    $result = $num * 2;
                    break;
                case(2):
                    $result = $num ** 3;
                    break;
                case(3):
                    $result = $num * 3;
                    break;
            }   

            echo "O resultado da operação é $result";







        ?>
        <br/>
        <a href="operacao.html">Voltar</a>
    </div>

  
    
</body>
</html>