<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Buscar</title>
</head>
<body>    
    <?php
   
    $db_host= "localhost";
    $db_name="inyeccion_sql";
    $db_user="root";
    $db_pass="";
    //establezco conexion
    $conexion=mysqli_connect($db_host,$db_user,$db_pass);
    
    //$busqueda=$_GET["buscar"];
    $usuario=mysqli_real_escape_string($conexion, $_GET["usu"]);
    $pass=mysqli_real_escape_string($conexion, $_GET["con"]);
    
    
    //comprobar la conexión con HOST
    if(mysqli_connect_errno()){
        echo "Error al conectar con HOST<br>";
        exit();
    }
    //comprobar conexion con BBDD
    mysqli_select_db($conexion, $db_name) or die ("No se encuentra la BBDD <br>");
    mysqli_set_charset($conexion, "utf8");
    //$consulta="SELECT * FROM ARTICULOS WHERE NOMBRE LIKE '%$busqueda%'";
    //$consulta="SELECT * FROM datos_usuarios WHERE USUARIO = '$usuario' AND CLAVE = '$pass'";
    $consulta="DELETE FROM datos_usuarios WHERE USUARIO = '$usuario' AND CLAVE='$pass'";
    echo "Su consulta fue: $consulta <br><br>";
    //hago mi consulta y la guardo en una variable
    mysqli_query($conexion, $consulta);
    if(mysqli_affected_rows($conexion)){
        echo "Baja procesada<br>";
    }else{
        echo "No se ha eliminado registro<br>";
    }
    /*if(mysqli_query($conexion, $consulta)){
        echo "Baja procesada<br>";
    }*/

    
    mysqli_close($conexion);
    
    ?>
</body>
</html>   
