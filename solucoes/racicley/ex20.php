<?php

$vet[0] = 10;
$vet[1] = 20;
$vet[2] = 30;
$vet[3] = 40;
$vet[4] = 50;
$vet[5] = 60;

$vet[] = 70;
$vet[] = 80;
$vet[] = 90;
$vet[] = 100;

print_r($vet);

echo "<br><br>";

foreach($vet as $valor){
	echo $valor . "<br><br>";
} 

?>