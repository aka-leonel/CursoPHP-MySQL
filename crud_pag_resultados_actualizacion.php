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
        //echo "<table><tr><td>";
        echo "<form action='crud_actualizar.php' method='get'>";
        
        echo "<input type='text' name='secc_art' value='". $fila['SECCIoN'] . "'><br>";
        
        echo "<input type='text' name='nomb_art' value='". $fila['NOMBREARTiCULO'] . "'<br>";
        
        echo "<input type='number' name='prec_art' value='". $fila['PRECIO'] . "'<br>";
        
        echo "<input type='text' name='pais_art' value='". $fila['PaiS'] . "'<br>";
        
        echo "<input type='text' name='fech_art' value='". $fila['FECHA'] . "'<br>";
        
        echo "<input type='submit' name='enviando' value='Actualizar!'>";
        
        echo "</form>";
        
        echo "<br>";
    }
    
    mysqli_close($conexion);
    
    ?>
</body>
</html>   
