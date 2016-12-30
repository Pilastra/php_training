<?php
//Pegando IP
$ip = $_SERVER["SERVER_ADDR"];

//Pegando o navegador
$navegador = $_SERVER["HTTP_USER_AGENT"];



echo $ip . "<br><br>";
echo $navegador . "<br><br>";

//Sistema operacional
echo php_uname() . "<br><br>";



?>