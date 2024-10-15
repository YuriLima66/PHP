<?php
$host="10.23.45.33";
$login="adm";
$senha="123456";
$db="dbescola";

$conn = mysqli_connect($host, $login, $senha, $db);

if (mysqli_connect_errno()) {
    echo "erro ao conectar na base de dados"
    . mysqli_connect_error();
}else{
    echo "Banco de dados conectado";
    $sql="insert into tbclientes(nomeCli,sobreNomeCli,emailCli, idadeCli)values('JESUS', 'DE NAZARÉ','AMÉM@gmail.com',33);";
    mysqli_query($conn,$sql);
    mysqli_close($conn);
}
