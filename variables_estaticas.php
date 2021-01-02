<!doctype html>
<html>

<head>
<meta charset="utf-8">
<title>Variables Estaticas</title>
</head>

<body>
<?php
    //print "this works!";
    function incrementarVar() {
        static $contador=0;
        //STATIC: esa linea se ejecutara solo la primera vez
        //y el valor no sera destruido al finalizar la funcion
        $contador++;
        echo "valor" . $contador . "<br>";
        
    }
    incrementarVar();
    incrementarVar();

?>
</body>

</html>