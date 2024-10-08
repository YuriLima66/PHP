<?php

 $HOST = "localhost";
 $DB= "dbloja";
 $LOGIN= "yuri";
 $SENHA="123456";

 $con= mysqli_connect($HOST, $DB, $LOGIN, $SENHA);

 if (mysqli_conect_errno($con)) {
    echo"erro ao conectar ao banco de dados"
    . mysqli_conect_error();
 }else {
    echo "banco de bados conectado";
 }