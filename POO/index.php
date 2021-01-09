<?php

    require 'devuelveProductos.php';
    
    $productos=new devuelveProductos();
    
    $array_prouctos=$productos->get_productos();
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>
<body>
<?php 

foreach ($array_prouctos as $elemento){
    echo "<table><tr><td>";
    echo $elemento['CODIGO'] . "</td><td>";
    echo $elemento['SECCION'] . "</td><td>";
    echo $elemento['NOMBRE'] . "</td><td>";
    echo $elemento['FECHA'] . "</td><td>";
    echo $elemento['PAIS'] . "</td><td>";
    echo $elemento['PRECIO'] . "</td><td></tr></table>";
    
    echo "<br><br>";
    
}


?>



</body>
</html>