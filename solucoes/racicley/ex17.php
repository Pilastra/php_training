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

?>