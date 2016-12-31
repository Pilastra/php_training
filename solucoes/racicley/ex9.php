<?php 

echo"
	<script>
		alert(\"Ei seu bunda mole!\");
	</script>";

/*
	Dica:
	Use aspas simples para o php e aspas duplas para o javascript:

	echo '<script>alert("Ei seu bunda mole!");</script>';



	Dica2:
	O código HTML e JS não precisam ficar dentro do php:

	<?php
		//... php aqui ...
	?>
	<script>alert("Ei seu bunda mole!");</script>
	<?php
		//... mais php aqui ...
	?>

	Dica3:
	Pode-se usar também a tag de saída rápida do php, serve pra dar echo em variáveis de maneira curta, usado geralmente dentro do HTML/JS :
	<?=$var;?>  ===  <?php echo $var; ?>

	<?php
		$var = "teste";
	?>

	<h1><?=$var;?></h1>
*/

?>
