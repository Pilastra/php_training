<?php
echo '<html>
<head>
<title> Exercício 24</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>  
<div class="container">
<div class="alert alert-success" role="alert">
        
      
'; 
echo 'Certificamos que o aluno <strong>' . $_POST['nome'] . '</strong><br>';
echo 'Participou do curso de <strong>' . $_POST['curso'] . '</strong> que ocorreu entre os dias 17 a 21 de Setembro.'; 

echo '</div>
</div>
</body>
</html>';



/*
	Obs1: O Código HTML não precisa ficar em echo, lembra que o php e html podem ficar juntos? Então, o ideal seria todo o HTML focar fora, e usar o php só pra exibir os dados. EX:

		<html>
		<head>
		<title> Exercício 24</title>
		...       
		      
		Certificamos que o aluno <strong> <?= $_POST['nome']; ?> </strong><br>
		Participou do curso de <strong> <?php echo $_POST['curso']; ?> </strong> que ocorreu entre os dias 17 a 21 de Setembro.

		</div>
		
		...

		</html>

	
	Obs2: Cuidado com a codificação da página, senão os acentos e caracteres especiais ficam cagados:	Ciência da Computa�ão
		Salve seu arquivo sempre como UTF-8 e adicione a tag HTML: <meta charset="UTF-8">


	Obs3: Bootstrap ++ :)

*/

?>