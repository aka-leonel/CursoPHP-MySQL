<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Busqueda Estilo Orientado a Objetos</title>
<?php
function ejecutar_consulta($mibusqueda) {
   
    $db_host="localhost";
    $db_usuario="root";
    $db_pass="";
    $db_nombreDB="minegocio";
    
    //1 establezco conexion
    $conexion = new mysqli($db_host, $db_usuario, $db_pass, $db_nombreDB);
    
    //1.1 check conexion
    if(mysqli_connect_errno()){
        echo "Falló la conexión <br>";
        exit();
    }
    //1.2 set charset
    mysqli_set_charset($conexion, "utf8");
    
    //2 declaro mi query
    $consulta="SELECT * FROM ARTICULOS WHERE NOMBREARTICULO LIKE '%$mibusqueda%'";
    
    //3 hago query y almaceno array resultado
    if( $resultado = $conexion->query($consulta)){
        //4mostrar array asociativo
        while ($fila=$resultado->fetch_row()){
            printf("%s %s %s %s <br>", $fila[0],$fila[1],$fila[2],$fila[3],$fila[4]);
        }
        //5 libero array
        $resultado->close();
    }
    //6 cierro conexion
    $conexion->close();
    
    
    
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