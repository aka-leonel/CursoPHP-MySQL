<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Busqueda por PROCEDIMIENTOS</title>
</head>
<body>


<?php 
    $db_host="localhost";
    $db_user="root";
    $db_pass="";
    $db_mydatabase="minegocio";
    //1 creo enlace,link,conexion...
    $conexion=mysqli_connect($db_host, $db_user, $db_pass, $db_mydatabase);
    
    //1.1 set charset
    mysqli_set_charset($conexion, "utf8");
    
    //1.2check connection
    if(mysqli_errno($conexion)){
        printf("Fallór la conexión: %s", mysqli_connect_error());
        exit();
    }
    
    //2 declaro mi query
    $consulta="SELECT * FROM ARTICULOS WHERE NOMBREARTICULO LIKE '%aballe%'";
    
    //3 hago query y almaceno array resultado
    $resultado=mysqli_query($conexion, $consulta);

    //4mostrar array asociativo
    if($resultado){
        while($fila=mysqli_fetch_row($resultado)){
            printf("%s %s %s %s<br>", $fila[0], $fila[1], $fila[2], $fila[3], $fila[4]);
        }
        
        //5 libero array
        mysqli_free_result($resultado);
    }
    //6 cierro conexion
    mysqli_close($conexion);   
    
    
    
    
    
    
    
    
?>
</body>
</html>