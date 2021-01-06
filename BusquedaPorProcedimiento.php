<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Busqueda por PROCEDIMIENTOS</title>

<?php 
function ejecutar_consulta($mibusqueda) {

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
    
    //1.2 set charset
    mysqli_set_charset($conexion, "utf8");
        
    //2 declaro mi query
    $consulta="SELECT * FROM ARTICULOS WHERE NOMBREARTICULO LIKE '%$mibusqueda%'";
    
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
    }
?>

</head>
<body>

<?php
    $mibusqueda=$_GET["buscar"];
    $mipag=$_SERVER["PHP_SELF"];
    
    if($mibusqueda!=NULL){
        ejecutar_consulta($mibusqueda);
    }else{
        echo ("<form action='".$mipag."' method='get'>
            <label>Buscar:<input type='text' name='buscar'></label>
            <input type='submit' name='enviando' value='Go!'>
            </form>");
    }

?>






</body>
</html>