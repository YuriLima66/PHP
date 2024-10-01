<?php
$num1= $_POST["num1"];
$num2= $_POST["num2"];
$resp= $num1 + $num2;

if( $resp<=10){
    echo "$resp é menor que 10";
} else{
    echo "$resp é maior que 10";

}
