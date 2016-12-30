<?php

$alunos[] = ["João","7","6.67"];
$alunos[] = ["Joana","5","10"];
$alunos[] = ["José","3","5.65"];
$alunos[] = ["Julsofa","9","8.5"];
$alunos[] = ["Jeremias","5","4.99"];
$alunos[] = ["Lindomar","3.8","6.2"];


function calcula_media($alu){
	
	$aprovados;
	
	for($i = 0;$i < count($alu);$i++){
			$nota_final = ($alu[$i][1] + 2 * $alu[$i][2])/3;
			if($nota_final >= 5){
				$aprovados[] = [$alu[$i][0], $nota_final];
				$nota_final = 0;
			}
	}
	
	return $aprovados;
	
}

function printa_aprovados($aprov){
	
	$ordenados = sort($aprov);
	
	for($i = 0;$i < count($aprov);$i++){
		echo "<b>Nome:</b> " . $aprov[$i][0] . " || <b>Média:</b> " . $aprov[$i][1] . "<br>";
	}
}

$ap = calcula_media($alunos);
printa_aprovados($ap);

?>













