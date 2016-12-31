<?php

$aleat = rand(10,100);

for($i = 1;$i < $aleat;$i++)
	if($i % 2 != 0)
		echo $i . "<br>";

/*
	Obs.:
	Poderia ser feito também usando o incremento no loop for: $i += 2
	
	for($i = 1;$i <= $aleat; $i+=2)
		echo $i . "<br>";

	Obs2:
	Faltou exibir o número sorteado:
		echo $aleat . '<br/><br/>'; 
	
	Obs3:
	Com o teste: $i < $aleat, se o número aleatório for ímpar ele não será exibido, então o correto seria: $i <= $aleat

*/

	
?>