<?php
session_start();
if ($_SESSION["classe"]!= "master") {
    session_destroy();
    header("location:sessao_bloqueando_paginas.php");
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p> Seja bem vindo, <?php echo $_SESSION["nome"];?> </p>
</body>
</html>
