<?php 
    
    require 'devuelveArticulos.php';
    
    $pais=$_POST["buscar"];
    
    $articulos= new devuelveArticulos();
    
    $array_articulos=$articulos->get_articulos($pais);
    
    
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Buscar articulos</title>
</head>

<body>
<?php 
    
foreach ($array_articulos as $elemento){
    
    echo "<table><tr><td>";
    echo $elemento["CODIGO"] . "</td><td>";
    echo $elemento["SECCION"] . "</td><td>";
    echo $elemento["NOMBRE"] . "</td><td>";
    echo $elemento["FECHA"] . "</td><td>";
    echo $elemento["PAIS"] . "</td><td>";
    echo $elemento["PRECIO"] . "</td></tr></table>";
    echo "<br><br>";
}



?>
</body>

</html>