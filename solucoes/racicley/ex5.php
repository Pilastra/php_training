<?php 

$sudeste["rj"] = "Rio de Janeiro";
$sudeste["sp"] = "São Paulo";
$sudeste["mg"] = "Belo Horizonte";
$sudeste["es"] = "Vitória";

foreach($sudeste as $capital){
	echo "O estado " . key($sudeste) . " tem a capital " .$capital . "<br>";
	next($sudeste);
}
?>