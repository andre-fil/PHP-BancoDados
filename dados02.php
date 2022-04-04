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
            $nome = isset( $_GET['nome'])? $_GET["nome"]:"[não informado]";
            $nasc = isset($_GET['nasc'])?$_GET['nasc']:0;
            $sexo = isset($_GET['sexo'])?$_GET['sexo']:'[sem sexo]';
            $anos = date("Y") - $nasc;
            echo "O nome recebido é $nome, do sexo $sexo, e tem $anos anos <br>";
            if ($anos <16){
                $vota = "não vota";
            } elseif(($anos >=16 && $anos <18) || ($anos > 65)){
                $vota = "voto opcional";
            } else{
                $vota = "voto obrigatório";
            }
             echo "O tipo de voto de $nome é $vota";

        ?>
         <br/>
        <a href="formulario02.html"> Voltar</a>
    </div>

  
    
</body>
</html>