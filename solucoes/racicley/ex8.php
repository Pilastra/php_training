<?php 

$nome[0] = "Cristina";
$nome[1] = "Sandra";
$nome[2] = "Freya";
$nome[3] = "Ipanema";
$nome[4] = "Manuelly";
$nome[5] = "Núbia";
$nome[6] = "Agata";
$nome[7] = "Samela";
$nome[8] = "Rayane";
$nome[9] = "Zoraide";

sort($nome);

echo "<table>
		<tr>
			<th>Id</th>
			<th>Nome</th>
		</tr>";
for($i = 0; $i < 10; $i++){
	echo "
		<tr>
			<td>" . $i ."</td>
			<td>". $nome[$i] ."</td>
		</tr>";
}
echo "</table>"
?>