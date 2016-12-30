<?php

$stri = "araraquara";

function conta_letra($sequencia){
	$um = 1;

	//Split palavras
	$vetor_letras = str_split($sequencia);
	
	//Percorrer letras
	foreach($vetor_letras as $indice => $letra){
		
		if(!array_key_exists($letra, $vetor_letras)){
			$vetor_letras[$letra] = $um;
			
		}else{
			$vetor_letras[$letra] += $um;
		}
	}
	return $vetor_letras;
}

print_r(conta_letra($stri));

?>