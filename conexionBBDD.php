<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Video 36: Conectando la web con la BBDD</title>
</head>
<body>
<?php 
    //ubicacion de la BBDD, en este caso es LOCAL
    $db_host="localhost";
    
    //nombre de la BBDD- Aun no se la extension del archivo 
    $db_namebbdd="pruebas";
    $db_user="root";
    $db_password="";
    //guardo mi consulta en una vvariable
    $conexion=mysqli_connect($db_host, $db_user, $db_password);
    
    
    if(mysqli_connect_errno()){
        echo "Error al conectar con la BBDD " . "<br>";
        exit();
    }
    
    mysqli_select_db($conexion, $db_namebbdd) or die("No se encuentra la BBDD");
    
    //instruccion para reconocer caracteres latinos
    mysqli_set_charset($conexion, "utf8");
    
    $query="SELECT * FROM DATOSPERSONALES";
    //luego, ejecuto mi consulta
    $resultados=mysqli_query($conexion, $query);
    
        
    while(($fila=mysqli_fetch_row($resultados))==TRUE){
        echo $fila[0]. "  ";
        echo $fila[1]. "  ";
        echo $fila[2]. "  " . "<br>";
    }
    
    
    //-------------cierro la conexion
    mysqli_close($conexion);

?>
</body>
</html>