<?php 

$valor1 = 10;
$valor2 = 3;

//Soma
$soma = $valor1 + $valor2;

//Subtracao
$sub = $valor1 - $valor2;

//Divisao Fracionaria
$divi = $valor1 / $valor2;

//Divisao inteira
$diviint = (int)($valor1 / $valor2);

//Multiplicacao
$mult = $valor1 * $valor2;

//Potencia
$pot = pow($valor1,$valor2);

//Resto
$mod = $valor1 % $valor2;

echo "Soma = " . $soma . "<br>Subtração = ". $sub . "<br>Divisão Fracionaria = " . $divi . "<br>Divisao Inteiro = " . $diviint . "<br>Multiplicação = " . $mult . "<br>Potência = " . $pot . "<br>Resto = " . $mod;  

?>