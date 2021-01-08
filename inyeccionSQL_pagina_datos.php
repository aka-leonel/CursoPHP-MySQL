<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Buscar</title>
</head>
<body>    
    <?php
    //$busqueda=$_GET["buscar"];
    $usuario=$_GET["usu"];
    $pass=$_GET["con"];
    
    $db_host= "localhost";
    $db_name="inyeccion_sql";
    $db_user="root";
    $db_pass="";
    //establezco conexion
    $conexion=mysqli_connect($db_host,$db_user,$db_pass);
    
    //comprobar la conexión con HOST
    if(mysqli_connect_errno()){
        echo "Error al conectar con HOST<br>";
        exit();
    }
    //comprobar conexion con BBDD
    mysqli_select_db($conexion, $db_name) or die ("No se encuentra la BBDD <br>");
    mysqli_set_charset($conexion, "utf8");
    //$consulta="SELECT * FROM ARTICULOS WHERE NOMBRE LIKE '%$busqueda%'";
    $consulta="SELECT * FROM datos_usuarios WHERE USUARIO = '$usuario' AND CLAVE = '$pass'";
    
    echo "Su consulta fue: $consulta <br><br>";
    //hago mi consulta y la guardo en una variable
    $resultado=mysqli_query($conexion, $consulta);
    while ($fila = mysqli_fetch_array($resultado)) {
        echo "Bienvenido $usuario <br> Tus datos: <br>";
        echo "<table><tr><td>";
            echo "usuario: " . $fila['USUARIO'] . "</td><td> ";
            echo "clave: " . $fila['CLAVE']. "</td><td> ";
            echo "telefono: " . $fila['TELEFONO'] . "</td><td> ";
            echo "direccion: " . $fila['DIRECCION'] . "</td><td></tr></table>";
        echo "<br><br>";   
    }
    
    mysqli_close($conexion);
    
    ?>
</body>
</html>   
