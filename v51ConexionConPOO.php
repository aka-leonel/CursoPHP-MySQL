<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Conexion a BBDD estilo POO</title>
</head>

<body>
<?php 
    $conexion = new mysqli("localhost", "root", "", "clase49");
    if ($conexion->connect_errno){
        echo "Falló la conexión" . $conexion->connect_errno;
    }
    //en los comentarios figuran las funciones estilo procedimiento
    //mysqli_set_charset($conexion, "utf8");
    $conexion->set_charset("utf8");
    
    $consulta="SELECT * FROM ARTICULOS";
    //$resultados=mysqli_query($conexion, $consulta);
    $resultados=$conexion->query($consulta);
    
    if($conexion->errno){
        die($conexion->error);
    }
    //while ($fila=mysqli_fetch_array($resultados, MYSQL_ASSOC)) 
    /*usando array ASOCIATIVO
     while($fila=$resultados->fetch_assoc() ){
        echo "<table><tr><td>";
        echo $fila['CODIGO'] . "</td><td> ";
        echo $fila['SECCION'] . "</td><td> ";
        echo $fila['NOMBRE'] . "</td><td> ";
        echo $fila['FECHA'] . "</td><td> ";
        echo $fila['PAIS'] . "</td><td> ";
        echo $fila['PRECIO'] . "</td><td></tr></table> ";
        echo "<br><br>";
    }*/
    
    //usando ARRAY INDEXADO
    while($fila=$resultados->fetch_array() ){
        echo "<table><tr><td>";
        echo $fila[0] . "</td><td> ";
        echo $fila[1] . "</td><td> ";
        echo $fila[2] . "</td><td> ";
        echo $fila[3] . "</td><td> ";
        echo $fila[4] . "</td><td> ";
        echo $fila[5] . "</td><td></tr></table> ";
        echo "<br><br>";
    }
    
    //mysqli_close($conexion);
    $conexion->close();
?>
</body>
</html>