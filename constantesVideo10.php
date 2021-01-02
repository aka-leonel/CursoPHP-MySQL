<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Definicion y Declaracion de constantes</title>
</head>

<body>
<?php 
//define ("AUTOR", "Leonel", FALSE);
//echo "El autor es: " . autor;
    define ("AUTOR", "Leonel");
    echo "El autor es: " . AUTOR;
    
    echo "<br>La linea de esta instruccion es: " . __LINE__;
    echo "<br>Estamos trabajando con el archivo: ". __FILE__;
    

?>
</body>
</html>