<?php
echo '<html>
<title>Exercicio 27</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>

<body>';


if($_GET['nome'] == 'home'){
	echo '<h1><span class="label label-primary">Redirecionando para ' . $_GET['nome'] . '</span>';
}
if($_GET['nome'] == 'sobre'){
	echo '<h1><span class="label label-primary">Redirecionando para ' . $_GET['nome'] . '</span>';
}
if($_GET['nome'] == 'contato'){
	echo '<h1><span class="label label-primary">Redirecionando para ' . $_GET['nome'] . '</span>';
}
if($_GET['nome'] == 'galeria'){
	echo '<h1><span class="label label-primary">Redirecionando para ' . $_GET['nome'] . '</span>';
}

echo '</body></html>'

/*
	Obs.: Faltou o da página não encontrada

	Obs2: A carater de curiosidade, a função do PHP que redireciona a página é: 
				header("Location: página.php");
			Mas essa função só pode ser usada se não tiver nenhuma saida de texto ( echo ou print ) antes dela.

*/
?>