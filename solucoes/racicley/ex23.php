<?php

include 'ex1.php';
include 'ex21.php';

echo '<pre>';
print_r(conta_letra('ratazana verde'));
echo '</pre>';


/*
	Pegou a diferença entre include e require ? e as variações _once ?

	include : se der erro ao incluir o arquivo o programa continua (warning)
	require : se der erro ao incluir o arquivo o programa aborta (error)

	include_once, require_once : Só inclui o arquivo uma vez, se o arquivo já foi incluso ele ignora e não duplica a inclusão.

*/

?>