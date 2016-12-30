<?php 

$frase = "Lembrei do dia em que eu tava no avião, aí do nada chegou uma nuvem e sentou do meu lado. Eu fiquei sem entender a situação até que eu me toquei que aquela era uma nuvem passageira.";
$src = "ra";

$pos = strpos($frase,$src);

echo "A string " ."'".$src."'" ." aparece na posição ". $pos . " da string principal";
?>