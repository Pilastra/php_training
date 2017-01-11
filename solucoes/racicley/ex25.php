<?php
echo '<html>
<head><title>' . $_GET["titulo"] . '</title></head>
<body bgcolor=' . $_GET["corfundo"] .'>

<h1> ' . $_GET["cabecalho"] . '</h1><br>

<font color='. $_GET["cortexto"] .'>'. $_GET["texto"] .' </font><br><br><br>

<img src='. $_GET["imagem"] .'>

</body>
</html>';



/*
	Obs1: Essa era uma boa hora pra usar as funções do PHP pra validar caracteres ( strip_tags() ) e melhorar a exibição ( nl2br() )  mas tá ok!

	Obs2: Pegou a diferença entre GET e POST ?
		GET: os dados são enviados pela url: http://127.0.0.1/php_training/solucoes/racicley/ex25.php?titulo=Minha+Primeira+P%C3%A1gina&cabecalho=HomeScrem&texto=Esse+site+se+destina+ao+aprendizado+de+PHP%2C+essa+linguagem+maravilhosa%21+%3A%29%0D%0ALiebe+ist+f%C3%BCr+alle+da%21&cortexto=yellow&corfundo=black&imagem=https%3A%2F%2Fbit.ly%2Ffcc-relaxing-cat

		POST: os dados são envados por pacote http

		Em geral prefira usar POST, mais pra frente você vai perceber claramente quando usar um ou outro :)
	
*/
?>