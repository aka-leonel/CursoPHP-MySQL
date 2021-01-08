<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Resultado busqueda</title>
</head>
<body>

<?php 
    $codigo=$_GET["codigo_art"];
    $nombre=$_GET["nombre_art"];
    $seccion=$_GET["seccion_art"];
    $pais=$_GET["pais_art"];
    $precio=$_GET["precio_art"];
    $fecha=$_GET["fecha_art"];
    
    $db_host="localhost";
    $db_user_name="root";
    $db_user_pass="";
    $db_name="clase49";
    
    $conexion=mysqli_connect($db_host, $db_user_name, $db_user_pass);
    
    if(mysqli_connect_errno()){
        echo "Fallo en la conexión<br>";
        exit();
    }
    mysqli_select_db($conexion, $db_name) or die ("No se encuentra la BBDD");
    mysqli_set_charset($conexion, "utf8");
    
    //1:Crear la sentencia SQL sustituyendo los valores de criterio por '?'
    $consulta="INSERT INTO ARTICULOS (CODIGO, SECCION, NOMBRE, FECHA, PAIS, PRECIO) VALUES (?,?,?,?,?,?)";
    
    //2: mysqli_prepare($conexion, $consulta). Return un objeto de tipo mysqli_stmt
    $resultado=mysqli_prepare($conexion, $consulta);
    
    //3: Unir parametros a la sentencia sql.
    $ok=mysqli_stmt_bind_param($resultado, "sssssi", $codigo, $seccion, $nombre, $fecha, $pais, $precio);
    
    //4: Ejecutar la consulta con
   $ok= mysqli_stmt_execute($resultado);
    
    if(!$ok){
        echo "Error al ejecutar consulta <br>";
    }else{
        //5: asociar variables al resultado de la consulta        
        //$ok=mysqli_stmt_bind_result($resultado, $codigo, $seccion, $nombre, $fecha, $pais, $precio);
        echo "Agregado nuevo registro <br><br>";
        
        /*while (mysqli_stmt_fetch($resultado)) {
            
            echo $codigo . " " . $seccion . " " . $nombre . " " . $fecha . " " . $pais . " " . $precio . "<br>"; 
        }*/
        mysqli_stmt_close($resultado);
        
    }
?>

</body>
</html>