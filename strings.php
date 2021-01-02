<!doctype html>
<html>
<head>
<title>Strings, cadenas</title>

<style>
    .resaltar{
        color:#F00;
        font-weight:bold;
       }    
</style>
</head>
<body>

<?php
    $nombre ="Joven Zeta";
    echo "<p class=\"resaltar\">Esto es un string";
    echo "<p class='resaltar'>Esto es otro string";
    
    echo "<br>Hola $nombre";
    echo '<br>Hola $nombre<br>';
    //strcmp($str1, $str2); SENSITIVE
    //strcasecmp($str1, $str2); INSENSITIVE
    $palabra1="Casa";
    $palabra2="casa";
    $resultadoStrcmp= strcmp($palabra1, $palabra2);
    $resultadoStrcasecmp =strcasecmp($palabra1, $palabra2);
    
    echo "<br>El resultado de strcmp -sensible- es $resultadoStrcmp";
    echo '<br>El resutado de strcasecmp-insen- es ' . $resultadoStrcasecmp . "<br>";
    if($resultadoStrcmp){
        echo "<br>No coinciden";
    }else{
        "<br>Coinciden";
    }
        
?>

</body>
</html>