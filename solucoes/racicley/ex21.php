<?php

//$stri = "araraquara";

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

//print_r(conta_letra($stri));

/*
	Obs.:
	Assim como em C, no php as strings também são vetores de char, então você poderia escrever sua função assim:

	function contar( $str ) {
		$vet = [];
		for ($i=0; $i < strlen($str); $i++) {
			if ( isset($vet[ $str[$i] ]) ) {
				$vet[ $str[$i] ] += 1;
			} else {
				$vet[ $str[$i] ] = 1;
			}
		}
		return $vet;
	}

	$frase = 'O rato roeu a roupa do rei de roma';
	echo '<pre>';
	print_r(contar($frase));

*/



?>