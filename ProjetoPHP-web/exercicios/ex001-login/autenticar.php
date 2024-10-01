<?php
    $usuario=$_POST['user'];
    $senha=$_POST['senha'];

    if ($usuario == "yuri" && $senha == "123456") {
        echo"Autenticado!";
    }else {
        echo"Não autenticado!";
    }


    
