<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Pagina de Busqueda PDO</title>
</head>
<body>
<?php 
    $busqueda=$_POST["buscar"];
    try{
        $base=new PDO('mysql:host=localhost; dbname=pdo_clase53', 'root', '');
        
        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo 'Conexion OK<br>';
        $base->exec("SET CHARACTER SET utf8");
        
        $sql="SELECT * FROM articulos WHERE nombre=?";
        //el metodo prepare devuelve un objeto del tipo PDO statement
        $resultado=$base->prepare($sql);
        
        $resultado->execute(array($busqueda));
        
        while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
            
            echo "Codigo art: " . $registro['CODIGO'] . ' Nombre art: ' . $registro['NOMBRE'] . ' Seccion: ' . $registro['SECCION'] . "Fecha: " . $registro['FECHA'] . "Pais: " . $registro['PAIS'] . " Precio: " . $registro['PRECIO'] . "<br>";
        }
        
        $resultado->closeCursor();
    
    }catch (Exception $e){
        die('Error: ' . $e->getMessage());
        
    }finally {
        $base=null;
    }
?>
</body>
</html>