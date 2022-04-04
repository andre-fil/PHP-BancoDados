<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="modelo.css">
    <title>FNotas</title>
    <style>
        span{
            color: red;
            font-weight: bolder;
        }
    </style>
</head>
<body>
    <h1>Calcular Média</h1>
    <div>
        <?php
           $n1 = isset($_GET['nota1'])?$_GET['nota1']:0;
           $n2 = isset($_GET['nota2'])?$_GET['nota2']:0;
           $media = ($n1+$n2) / 2;
           if ($media >=6){
               $situ = 'APROVADO';
               
           } else{
               $situ = 'REPROVADO';
              
           }

           echo "A média entre <span>$n1</span> e <span>$n2</span> é <span>$media</span> <br>";
           echo "O aluno está <span>$situ</span>"







        ?>
        <br/>
        <a href="notas.html">Voltar</a>
    </div>

  
    
</body>
</html>