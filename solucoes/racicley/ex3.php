<?php 
echo "Usando for<br>";
for($i = 1; $i <=10;$i++)
	echo $i . "<br>";

$j = 1;
echo "Usando while<br>";
while($j <=10){
	print $j . "<br>";
	$j++;
}
echo "Usando do_while<br>";
$k = 1;
do {
	echo $k . "<br>";
	$k++;
}while($k <= 10)
?>