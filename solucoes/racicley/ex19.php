<?php
//Quebra de linha com \n
echo nl2br("A certificação de metodologias que nos auxiliam a lidar com a crescente influência\n da mídia exige a precisão e a definição do impacto na agilidade decisória.\n\n");

//str_replace()
$vogais = array("a","e","i","o","u","A","E","I","O","U");

$frase = "A certificação de metodologias que nos auxiliam a lidar com a crescente influência da mídia exige a precisão e a definição do impacto na agilidade decisória.";

$nova = str_replace($vogais,"",$frase);

echo $nova . "<br><br>";

$var = 10;

//is_int verifica se é inteiro 
echo var_dump(is_int($var)) . "<br><br>";

//is_double verifica se é double 
echo var_dump(is_double($var)) . "<br><br>";

//is_float verifica se é float 
echo var_dump(is_float($var)) . "<br><br>";

//is_long verifica se é long 
echo var_dump(is_long($var)) . "<br><br>";

//is_array verifica se é array 
echo var_dump(is_array($var)) . "<br><br>";

//is_bool verifica se é boolean 
echo var_dump(is_bool($var)) . "<br><br>";

//is_null verifica se é null 
echo var_dump(is_null($var)) . "<br><br>";

//is_numeric verifica se é uma variavel númerica, ou string númerica 
echo var_dump(is_numeric($var)) . "<br><br>";

//is_object verifica se é objeto 
echo var_dump(is_object($var)) . "<br><br>";

//is_real verifica se é um número pertencente aos Reais, apelido para is_float 
echo var_dump(is_real($var)) . "<br><br>";

//is_resource verifica se é um caminho válido
echo var_dump(is_resource($var)) . "<br><br>";


//is_scalar Variáveis escalares são as que contém integer, float, string ou boolean. os tipos array, object e resource não são escalares.
echo var_dump(is_scalar($var)) . "<br><br>";

//is_string verifica se é do tipo string
echo var_dump(is_string($var)) . "<br><br>";

//count() Conta os elementos de um array, ou propriedades em um objeto.
echo count($vogais) . "<br><br>";


//addslashes Retorna uma string com barras invertidas antes de caracteres que precisam ser 
//escapados para serem escapados em query a banco de dados, etc. Estes caracteres são 
//aspas simples ('), aspas duplas ("), barra invertida (\) e NUL (o byte NULL).
$chaves = "'Eu prefiro morrer do que perder a vida!'";
echo addslashes($chaves) . "<br><br>";

//strip_tags retira todas as tags HTML e PHP de uma string
$site = "<HTML>

<HEAD>

<TITLE>Seu título aqui</TITLE>

</HEAD>  

<BODY BGCOLOR='FFFFFF'>

<CENTER><IMG SRC='clouds.jpg' ALIGN='BOTTOM'> </CENTER>

<HR>

<a href='http://umsitemuitobom.com.br'>Nome do Link</a>

é o link para outro site atraente.

<H1>Este é um cabeçalho</H1>

<H2>Este é um cabeçalho médio</H2>

Envie-me um e-mail para <a href='mailto:suporte@suaempresa.com.br'>

suporte@suaempresa.com.br</a>.  

<P> Isto é um novo parágrafo!

<P> <B>Este é um parágrafo novo!</B>

<BR> <B><I>Esta é uma nova sentença sem quebra de parágrafo, em negrito e itálico.</I></B>  

<HR>

</BODY>  

</HTML>";

echo strip_tags($site) . "<br><br>";

$dia = "17";
$mes = "5";
$ano = "1991";

echo sprintf("%02d-%02d-%04d", $dia, $mes, $ano) . "<br><br>";

//trim() retira espaço no inicio e no final de uma string
$str = " Hello World! ";
echo trim($str). "<br><br>";

//htmlentities() Converte todos os caracteres aplicáveis em entidades html. REVER
$str = "A 'quote' is <b>bold</b>";
echo htmlentities($str, ENT_QUOTES);

//htmlspecialchars()

//exec()
?>