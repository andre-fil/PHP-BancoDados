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
    <h1>Array</h1>
    <div>
        <pre>
            <table border="1"><tr>
                <?php
                  $vetor = array(3,5,1,2);
                  print_r($vetor);
                  foreach($vetor as $c){
                      echo "<td>$c ";
                  }
                  
                ?>
                </tr>
            </table>
        </pre>
      
    </div>

  
    
</body>
</html>