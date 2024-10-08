<?php
$value="yuri";

setcookie("ocupacao",$value);
/*expira no final da sessão*/


setcookie("ocupacao",$value,time()+60);
/*expira em 60 segundos */

echo $_COOKIE['ocupacao'];