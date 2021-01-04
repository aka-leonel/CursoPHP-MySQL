<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>pagina de busqueda</title>
</head>
<body>

<?php 
    
    $busqueda=$_GET["buscar"];
    
   // require ("datos_conexion.php");
    $db_host="localhost";
    //nombre de la BBDD- Aun no se la extension del archivo
    $db_namebbdd="pruebas";
    $db_user="root";
    $db_password="";
    
    $conexion=mysqli_connect($db_host, $db_user, $db_password);
    
    
    if(mysqli_connect_errno()){
        echo "Error al conectar con la BBDD " . "<br>";
        exit();
    }
    
    mysqli_select_db($conexion, $db_namebbdd) or die("No se encuentra la BBDD");
    
    //instruccion para reconocer caracteres latinos
    mysqli_set_charset($conexion, "utf8");
    
    //$query="SELECT * FROM articulos WHERE 'NOMBRE ARTiCULO' ='$busqueda'";
    $query="SELECT * FROM articulos WHERE 'NOMBRE ARTiCULO
' LIKE '%$busqueda%'";
    //luego, ejecuto mi consulta
    $resultados=mysqli_query($conexion, $query);
    
   
    while ($fila = mysqli_fetch_array($resultados)) {
        
        echo $fila['NOMBRE ARTiCULO']." ";
        echo $fila['PaiS']." ";
        echo $fila['PRECIO']." <br>";

}
    
    
    //-------------cierro la conexion
    mysqli_close($conexion);

?>
</body>
</html>