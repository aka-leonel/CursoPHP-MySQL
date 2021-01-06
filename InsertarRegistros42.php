<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>V24 INSERTAR REGISTROS</title>
</head>
<body>

<?php 

    //datos de conexion
    $db_host="localhost";
    $db_user="root";
    $db_pass="";
    $db_mydatabase="minegocio";
    //1 creo enlace,link,conexion...
    $conexion=mysqli_connect($db_host, $db_user, $db_pass, $db_mydatabase);
    
    //1.1check connection
    if(mysqli_errno($conexion)){
        printf("Fallór la conexión: %s", mysqli_connect_error());
        exit();
    }
    
   // mysqli_select_db($conexion, $db_mydatabase) or die ("No se encuentra la BBDD");
    
    //1.2 set charset
    mysqli_set_charset($conexion, "utf8");
        
    //2 declaro mi query
    
    $consulta='INSERT INTO ARTICULOS (SECCIoN, NOMBREARTiCULO, PRECIO) VALUES ("CIENCIA", "MICROSCOPIO", 140)';
    
    //3 hago query y almaceno array resultado
    //$resultado=mysqli_query($conexion, $consulta);
    
    mysqli_query($conexion, $consulta);

    
    //6 cierro conexion
    mysqli_close($conexion);         
    
?>


</body>
</html>