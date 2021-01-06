<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Buscar</title>
</head>
<body>    
    <?php
    
    
    //if(isset($_GET['buscar'])){
        $busqueda=$_GET["buscar"];
    //}else {
    //    echo "algo malo <br>";
    //}
   
    $db_host= "localhost";
    $db_name="minegocio";
    $db_user="root";
    $db_pass="";
    //establezco conexion
    $conexion=mysqli_connect($db_host,$db_user,$db_pass);
    
    //comprobar la conexión con HOST
    if(mysqli_connect_errno()){
        echo "Error al conectar con HOST<br>";
        exit();
    }
    //comprobar conexion con BBDD
    mysqli_select_db($conexion, $db_name) or die ("No se encuentra la BBDD <br>");
    mysqli_set_charset($conexion, "utf8");
    
  
    $consulta="SELECT * FROM ARTICULOS WHERE NOMBREARTiCULO LIKE '%$busqueda%'";
    //hago mi consulta y la guardo en una variable
    $resultado=mysqli_query($conexion, $consulta);
    while ($fila = mysqli_fetch_array($resultado)) {
        echo "<table><tr><td>";
        echo $fila['SECCIoN']."</td><td>";
        echo $fila['NOMBREARTiCULO']."</td><td>";
        echo $fila['PRECIO']."</td><td>";
        echo $fila['PaiS']."</td></tr></table>";
    }
    
    mysqli_close($conexion);
    
    ?>
</body>
</html>   
