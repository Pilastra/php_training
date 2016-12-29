<?php 

$aluno["Papaco"] = 35;
$aluno["Jailson"] = 45;
$aluno["Guina"] = 39; 

foreach($aluno as $idade){
	echo "ALUNO: " . key($aluno) . " IDADE: " . $idade . "<br>";
	next($aluno);
}
?>