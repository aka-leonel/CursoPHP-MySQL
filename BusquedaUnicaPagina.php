<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Boton de busqueda, datos de conexion y query en una misma pagina!</title>
</head>
<body>

<form action="paginaDeBusqueda.php" method="get">
<label>Buscar: <input type="text" name="buscar"></label>
<input type="submit" name="enviando" value="Go!">
</form>


<?php 
    //datos conexion
    $db_host="localhost";
    $db_user="root";
    $db_pass="";
    $db_name="minegocio";
    
    $conexion=new mysqli($db_host, $db_user, $db_pass, $db_name);
    mysqli_set_charset($conexion, "utf8");
    //compruebo conexion
    if(mysqli_connect_errno()){
        echo "Falló la conexión <br>";
        exit();
    }
    $busqueda=$_GET["buscar"];
    $consulta="SELECT * FROM ARTICULOS WHERE NOMBREARTICULO LIKE '%$busqueda%'";
    
    if($resultado=$conexion->query($consulta)){
        //obtener array de objetos
        while($fila=$resultado->fetch_row()){
            echo "$fila[0] $fila[1] $fila[2] $fila[3] $fila[4] <br>"; 
        }
        //liberar el conjunto resultados
        $resultado->close();
    }
    //cerrar conexion
    $conexion->close();
    
    
    
    
    
?>
</body>
</html>