<?php 

$frase = "Lembrei @do dia em que eu tava no avião,@ aí do nada chegou@ uma nuvem e sentou@ do meu lado.@ Eu fiquei sem entender a situação@ até que eu me toquei que aquela @era uma nuvem passageira.";
$delim = "@";

echo "FRASE: Lembrei @do dia em que eu tava no avião,@ aí do nada chegou@ uma nuvem e sentou@ do meu lado.@ Eu fiquei sem entender a situação@ até que eu me toquei que aquela @era uma nuvem passageira.<br><br><br><br><br>";

$splitados = preg_split("/\@/",$frase);

foreach($splitados as $vetor){
	echo $vetor . "<br>";
}
?>