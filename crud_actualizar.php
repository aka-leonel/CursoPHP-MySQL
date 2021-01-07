<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>INSERTAR REGISTRO</title>
</head>
<body>

<?php 
//recupero con $_GET la informacion de formularioRegistro.php
    $secc=$_GET["secc_art"];
    $nomb=$_GET["nomb_art"];
    $fech=$_GET["fech_art"];
    $pais=$_GET["pais_art"];
    $prec=$_GET["prec_art"];
    //datos de conexion
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
    
   // mysqli_select_db($conexion, $db_mydatabase) or die ("No se encuentra la BBDD");
    
    //1.2 set charset
    mysqli_set_charset($conexion, "utf8");
        
    //2 declaro mi query
    
    $consulta="UPDATE ARTICULOS SET SECCIoN='$secc', NOMBREARTiCULO='$nomb', FECHA='$fech', PaiS='$pais', PRECIO='$prec' WHERE NOMBREARTiCULO LIKE'%$nomb%'";
    echo "Se ejecuto: <br> UPDATE ARTICULOS  SET SECCIoN='$secc', NOMBREARTiCULO='$nomb', FECHA='$fech', PaiS='$pais', PRECIO='$prec' WHERE NOMBREARTiCULO like'%$nomb%'; <br>";
    //3 hago query y almaceno array resultado
    $resultado=mysqli_query($conexion, $consulta);
    //mysqli_query($conexion, $consulta);

    if(!$resultado){
        echo "Error en la consulta";
    }else{
        echo "<br>Registro guardado<br>";
        echo "SECCIoN:$secc NOMBREARTiCULO:$nomb FECHA:$fech PaiS:$pais PRECIO:$prec <br>";
        
    }
    //6 cierro conexion
    mysqli_close($conexion);         
    
?>


</body>
</html>