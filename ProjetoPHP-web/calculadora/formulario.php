<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario PHP</title>
 
</head>
<body>
    <form action="calcula.php" method="post">
        Numero 1:
        <input type="text" name="num1" value="" placeholder="Insira o numero 1"    maxlength="10" required > <br><br>
        Numero 2:
        <input type="text" name="num2" value="" placeholder="Insira o numero 2"    maxlength="10"
         required > <br><br>
        <input type="submit" value="Calcular" >
        <input type="reset" value="Limpar" >



    </form>
    
</body>
</html>