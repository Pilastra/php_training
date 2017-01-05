<?php
echo '<html>
<head><title>' . $_GET["titulo"] . '</title></head>
<body bgcolor=' . $_GET["corfundo"] .'>

<h1> ' . $_GET["cabecalho"] . '</h1><br>

<font color='. $_GET["cortexto"] .'>'. $_GET["texto"] .' </font><br><br><br>

<img src='. $_GET["imagem"] .'>

</body>
</html>';
?>