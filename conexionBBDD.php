<!doctype html>
<html>
<head>
<style type="text/css">
    table{
        width:50%;
        border:1px dotted #FF0000;
        margin:auto;
</style>
<meta charset="utf-8">
<title>Video 36: Conectando la web con la BBDD</title>
</head>
<body>
<?php 
    require 'datos_coneccionBBDD.php';
    //guardo mi consulta en una vvariable
    
    
   
    $conexion=mysqli_connect($db_host, $db_user, $db_password);
    
    
    if(mysqli_connect_errno()){
        echo "Error al conectar con la BBDD " . "<br>";
        exit();
    }
    
    mysqli_select_db($conexion, $db_namebbdd) or die("No se encuentra la BBDD");
    
    //instruccion para reconocer caracteres latinos
    mysqli_set_charset($conexion, "utf8");
    
    $query="SELECT * FROM articulos WHERE pais='Japon'";
    //luego, ejecuto mi consulta
    $resultados=mysqli_query($conexion, $query);
    
        //horrible la tabla :)
       
    //MYSQLI_ASSOC está obsoleta en PHP7
    /* 
    while(($fila=mysqli_fetch_array($resultados, MYSQLI_ASSOC))==TRUE){
       // echo "<table width='50%' align='center' border='1'><tr><td>";
        echo "<table><tr><td>";
        echo $fila['NOMBRE ARTiCULO']. "</td><td>";
        
        echo $fila['PaiS']. "</td><td>";
        
        echo $fila['PRECIO']. "</td></tr></table>  " . "<br>" . "<br>";
        //echo $fila[5]. "  " . "<br>";
        //echo $fila[6]. "  " . "<br>";
        
    }
    */
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