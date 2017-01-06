<?php

echo '<html>
<head>
<title> Exercício 26</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
<table class="table table-striped">
<tr> 
<th>Nome</th><br>
<th>Email</th>
<th>Estado</th>
<th>Critica/Sugestão</th>
<th>Info Laborátorios</th>
<th>Resposta S/N</th>
</tr>
 <tr>
<td>'. $_POST['nome'] .'</td><td>' .  $_POST['email'] . '</td><td>' . $_POST['estado'] .'</td><td>' . $_POST['critsuges'] . '</td><td> ';


if(isset($_POST['op1'])){
	echo $_POST['op1'] . '<br>';
}if(isset($_POST['op2'])){
	echo $_POST['op2'] . '<br>';
}if(isset($_POST['op3'])){
	echo $_POST['op3']. '<br>';
}if(isset($_POST['op4'])){
	echo $_POST['op4'] . '<br>';
} 

echo '</td><td>' . $_POST['resp'] . '
 </td></tr>
</table>
</div>  
</body>
</html>
';

?>