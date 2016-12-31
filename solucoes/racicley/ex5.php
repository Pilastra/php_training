<?php 

$sudeste["rj"] = "Rio de Janeiro";
$sudeste["sp"] = "São Paulo";
$sudeste["mg"] = "Belo Horizonte";
$sudeste["es"] = "Vitória";

foreach($sudeste as $capital){
	echo "O estado " . key($sudeste) . " tem a capital " .$capital . "<br>";
	next($sudeste);
}


/*
	Obs.:
	Um jeito mais fácil de fazer é usar o foreach pra listar a chave e o valor juntos ( foreach( $vetor as $chave => $valor) ), e não precisa usar o next, o próprio foreach controla isso: 

	foreach($sudeste as $sigla => $capital){
		echo 'O estado ' . $sigla . ' tem a capital ' .$capital . '<br>';
	}	

	Dica:
	As aspas duplas("") são mais lentas que as aspas simples(''), então sempre que não tiver nada pra ser escapado de dentro do texto use aspas simples :)

*/
?>