<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>cargando articulos a BBDD</title>
</head>

<body>
<?php
    $codigo=$_POST["codigo_art"];
   
    try {
        $base= new PDO('mysql:host=localhost; dbname=test', 'root', '');
        
        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $base->exec("SET CHARACTER SET utf8");
        //consulta
        $sql="DELETE FROM ARTICULOS WHERE CODIGO= :CODI";
        
        $resultado=$base->prepare($sql);
        //asociar :marcadores con $variabes
        //$resultado->execute(array(":CODI"=>$codigo, ":SECC"=>$seccion, ":NOMB"=>$nombre, ":FECH"=>$fecha, ":PAIS"=>$pais, ":PREC"=>$precio));
        $resultado->execute(array(":CODI"=>$codigo));
        
        
        /*
        while ($registro=$resultado->fetch(PDO::FETCH_ASSOC)) {
            echo "Codigo: " . $registro["CODIGO"] . " Seccion: " . $registro["SECCION"] . " Nombre: " . $registro["NOMBRE"] . " Fecha: " . $registro["FECHA"] . " Pais: " . $registro["PAIS"] . " Precio: $ " . $registro["PRECIO"];
            
        }*/
        echo "Registro eliminado<br>";
        //echo "Registro Cargado<br>";
        $resultado->closeCursor();
        
    } catch (Exception $e) {
        
        echo "<br>Codigo error: " . $e->getCode() . "<br>";
        echo "Linea del error: " . $e->getLine();
    }finally {
        $base=NULL;
    }


?>














</body>
</html>