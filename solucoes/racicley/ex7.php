<?php 

for($i = 0;$i < 10;$i++)
	$rand_num[$i] = rand();

sort($rand_num);

echo "<table>
<tr>
	<th>Id</th>
	<th>Número Randomico</th>
</tr>";

foreach($rand_num as $key => $val){
	echo "<tr> 
		<td>". $key ."</td>
		<td>". $val ."</td>
	</tr>";
}

echo "</table>";

?> 