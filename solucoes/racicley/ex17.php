<?php
	//Pega caminho
   $path = getcwd();
   echo "O caminho é: ";
   echo $path . "<br>";
   
   if ($handle = opendir('C:\xampp\htdocs\exercicios')) {
    //echo "Manipulador de diretório:". $handle ."<br>";
    //echo "Arquivos: <br>";

    /* Esta é a forma correta de varrer o diretório */
    while (false !== ($file = readdir($handle))) {
        echo getcwd(). " " ."$file<br>";
    }
    closedir($handle);
}

/*
  Obs:
    Você salva o caminho na variável $path, mas usa um caminho fixo pra percorrer o diretório: opendir('C:\xampp\htdocs\exercicios'), que não existe no meu PC, logo seu exemplo não funciona. Típo erro: "Mas na minha máquina funcinava!" hsauahsuashuashasu tem que tomar cuidado.


    A saída do seu prog no meu PC:

    O caminho é: C:\Program Files (x86)\EasyPHP-Devserver-16.1\eds-www\php_training\solucoes\racicley

    Warning: opendir(C:\xampp\htdocs\exercicios,C:\xampp\htdocs\exercicios): O sistema n�o pode encontrar o caminho especificado. (code: 3) in C:\Program Files (x86)\EasyPHP-Devserver-16.1\eds-www\php_training\solucoes\racicley\ex17.php on line 7

    Warning: opendir(C:\xampp\htdocs\exercicios): failed to open dir: No such file or directory in C:\Program Files (x86)\EasyPHP-Devserver-16.1\eds-www\php_training\solucoes\racicley\ex17.php on line 7

*/

?>