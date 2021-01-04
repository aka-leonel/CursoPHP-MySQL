<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Video 36: Conectando la web con la BBDD</title>
</head>
<body>
<?php 
    $db_host="localhost";
    $db_namebbdd="pruebas";
    $db_user="root";
    $db_password="";
    
    $conexion=mysqli_connect($db_host, $db_user, $db_password, $db_namebbdd);
    //guardo mi consulta en una vvariable
    $query="SELECT * FROM DATOSPERSONALES";
    //luego, ejecuto mi consulta
    $resultados=mysqli_query($conexion, $query);
    
    $fila = mysqli_fetch_row($resultados);
    
    echo $fila[0]. "  ";
    echo $fila[1]. "  ";
    echo $fila[2]. "  " . "<br>";
    

?>
</body>
</html>