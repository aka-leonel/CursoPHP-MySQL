<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Conexion a bases de datos</title>
<style>
    table{
    wifth:50%;
    border:1px dotted #000000;
    margin:auto;
    }
</style>
</head>
<body>
<?php  
    //require 'datos_conexion.php';
    //establezco conexion
    $db_host= "localhost";
    $db_name="minegocio";
    $db_user="root";
    $db_pass="";
    $conexion=mysqli_connect($db_host,$db_user,$db_pass);
    
    //comprobar la conexi�n con HOST
    if(mysqli_connect_errno()){
        echo "Error al conectar con HOST<br>";
        exit();
    }
    //comprobar conexion con BBDD
    mysqli_select_db($conexion, $db_name) or die ("No se encuentra la BBDD <br>");
    mysqli_set_charset($conexion, "utf8");

    //guardo query en una string
    //$consulta="SELECT * FROM articulos WHERE Pais LIKE 'e%'";
    //$consulta="SELECT * FROM ARTICULOS WHERE PRECIO < 100";
    //$consulta= "SELECT * FROM `articulos` WHERE `NoMBRE ARTiCULO` LIKE '%aballe%'";
    $consulta="SELECT * FROM ARTICULOS WHERE Pais LIKE '%i%a%'";
    //hago mi consulta y la guardo en una variable
    $resultado=mysqli_query($conexion, $consulta);
    while ($fila = mysqli_fetch_array($resultado)) { 
        echo "<table><tr><td>";
        echo $fila['SECCIoN']."</td><td>";
        echo $fila['NOMBRE ARTiCULO']."</td><td>";
        echo $fila['PRECIO']."</td><td>";
        echo $fila['PaiS']."</td></tr></table>";
}
        
    mysqli_close($conexion);  
    
?>
</body>
</html>
