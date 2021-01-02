<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Pasaje de parámetros por valor y por referencia</title>
</head>
<body>
<?php 
    function incremento($valor){
        $valor++;
        return $valor;
    }
    echo incremento(5) . "<br>";
    $num=3.1415;
    echo incremento($num) . "<br>";
    
    function darFormato($param){
        $param=strtolower($param);
        $param=ucwords($param);
        return $param;
    }
    $cadena="hOlA mUNDo";
    echo "sIN foRmatear: " .$cadena . "<br>";
    echo "Formateado: ". darFormato($cadena) . "<br>";
    
    
    
?>
</body>
</html>