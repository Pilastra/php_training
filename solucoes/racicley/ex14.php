<?php 

$vet["ab"] = "atípicas";
$vet["ba"] = "tecnológico";
$vet["ac"] = "mercados";
$vet["rf"] = "desenvolvimento";
$vet["an"] = "contribuição";
$vet["ag"] = "importância";
$vet["aa"] = "positivamente";
$vet["at"] = "valorização";
$vet["ax"] = "apropriadas";

if(in_array("mercados",$vet)){
	echo "Tem a palavra mercados no vetor<br>";
}

if(array_key_exists("ax",$vet)){
	echo "Existe o índice ax no vetor";
}

?>