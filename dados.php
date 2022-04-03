<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="modelo.css">
    <title>Formulários</title>
</head>
<body>
    <h1>Formulários com PHP</h1>
    <div>
        <?php

        $valor = $_GET["num"];
        echo "O valor enviado foi o número ${valor} <br>";
        $rq = sqrt($valor);
        echo "E a raiz quadrada desse número é ".number_format($rq,2);
        echo "<br>";

        ?>

        <a href="formulario.html"> Voltar</a>
    </div>

  
    
</body>
</html>