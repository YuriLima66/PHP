<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if (isset($_COOKIE['usuario'])) {
        echo"bem vindo " .$_COOKIE['usuario'] ."! <br>"; 
    }else {
        echo "usuario novo, saja bem vindo <br>"  ;
    }
    
    
    ?>
    
</body>
</html>