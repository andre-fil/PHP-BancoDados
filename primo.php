<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="modelo.css">
    <title>Primo</title>
</head>
<body>
    <h1>Número primo</h1>
    <div>
        <form action="primo02.php" method="get">
            <select name="num" id="num">
                <?php
                for($i = 0;$i <=50;$i++){
                    echo "<option>$i</option>";
                }

                ?>
            </select>
            <input type="submit" value="verificar">
        </form>
      
        <br/>
    </div>

  
    
</body>
</html>