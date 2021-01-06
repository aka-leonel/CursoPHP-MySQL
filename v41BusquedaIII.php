<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ELIMINABLE- Pagina de busqueda</title>

<?php 
function ejecuta_consulta($labusqueda) {
    //$busqueda=$_GET["buscar"];
    //require 'datos_conexion';
    //datos conexion
    $db_host="localhost";
    $db_user="root";
    $db_pass="";
    $db_name="minegocio";
    //1 establezco conexion
    $conexion=mysqli_connect($db_host,$db_user,$db_pass,$db_name);
    //1.1 check conexion
    if(mysqli_connect_errno()){
        echo "Fallo al conectar BBDD";
        exit();
    }
    //1.2 set charset
    mysqli_set_charset($conexion, "utf8");
    //guardo mi consulta string
    $consulta="SELECT * FROM ARTICULOS WHERE NOMBREARTICULO LIKE '%$labusqueda%'";
    
    $resultado=mysqli_query($conexion, $consulta);
    
    //4 muestro array asociativo
    if($resultado){
        while($fila=mysqli_fetch_row($resultado)){
            echo "$fila[0] $fila[1] $fila[2] $fila[3] $fila[4] <br>";
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
        ejecuta_consulta($mibusqueda);
    }else{
        echo ("<form action='".$mipag."' method='get'>
            <label>Buscar:<input type='text' name='buscar'></label>
            <input type='submit' name='enviando' value='Go!'>
            </form>");
    }

?>



</body>

</html>