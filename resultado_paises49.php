<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Resultado busqueda</title>
</head>
<body>

<?php 
    $pais=$_GET["buscar"];
    require 'datos_conexion_clase49.php';
    
    $conexion=mysqli_connect($db_host, $db_user_name, $db_user_pass);
    
    if(mysqli_connect_errno()){
        echo "Fallo en la conexión<br>";
        exit();
    }
    mysqli_select_db($conexion, $db_name) or die ("No se encuentra la BBDD");
    mysqli_set_charset($conexion, "utf8");
    
    //1:Crear la sentencia SQL sustituyendo los valore de criterio por '?'
    $consulta="SELECT * FROM ARTICULOS WHERE PAIS =?";
    //:Crear la sentencia SQL sustituyendo los valore de criterio por '?'
    $resultado=mysqli_prepare($conexion, $consulta);
    //3: Unir parametros a la sentencia sql.
    $ok=mysqli_stmt_bind_param($resultado, "s", $pais);
    //4: Ejecutar la consulta con
    mysqli_stmt_execute($resultado);
    
    if(!$ok){
        echo "Error al ejecutar consulta <br>";
    }else{
        //5: asociar variables al resultado de la consulta. Esto lo conseguimos con la funcion
        //mysqli_stmt_bind_result(mysqli_stmt, $var1, $var2...)- return true or false.
        $ok=mysqli_stmt_bind_result($resultado, $codigo, $seccion, $nombre, $fecha, $pais, $precio);
        echo "Articuloas encontrados: <br><br>";
        
        while (mysqli_stmt_fetch($resultado)) {
            
            echo $codigo . " " . $seccion . " " . $nombre . " " . $fecha . " " . $pais . " " . $precio . "<br>";
            
        }
        mysqli_stmt_close($resultado);
        
    }
?>

</body>
</html>