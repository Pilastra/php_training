<?php

$vetores = array("oranges", "apples", "pears");

echo '<pre>';
print_r($vetores);
echo "<br>";

$troca = array_flip($vetores);

print_r($troca);
echo "<br>";

/*
	Dica: 
	Quando usar a função print_r() ou var_dump() você tem que usar a tag <pre> do HTML, senão a principal vantagem dessas funções não é obtida.

	Veja a diferença:

	echo '<pre>';
	print_r($vetores);
	echo '</pre>';

*/

?>