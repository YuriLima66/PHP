<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>autenticacao</title>
    
    <?php
session_start();
$_SESSION["nome"] = $_POST['nome'];
$_SESSION["senha"] = $_POST['senha'];
$_SESSION["classe"] = $_POST['class'];
date_default_timezone_set("America/Sao_Paulo")
?>
</head>
<body>
    <p>Funcionário: <?php echo $_SESSION["nome"];?>, logado com sucesso.</p>
    <p>Senha do funcionario: <?php echo $_SESSION["senha"];?></p>
    <p>Classe do funcionario: <?php echo $_SESSION["classe"];?></p>
    <p>Data da conexão : <?php echo date("d/m/Y");?></p>
    <p>Horário da conexão : <?php echo date("H:i:s");?></p>
    <p>Seu SID é : <?php echo session_id();?></p>

    <a href="sessoes_verifica_sessoes.php">Área do Administrador</a>
    
</body>
</html>