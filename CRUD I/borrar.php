<?php 
    //no me funciona el include asi que a mecanografiar
    //include 'conexion.php';
    try {
        $base = new PDO("mysql:host=localhost; dbname=test", "root","");
        
        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $base->exec("SET CHARACTER SET UTF8");
        
    } catch (Exception $e) {
        die("Error " .$e->getMessage() . "<br>");
        echo "Linea del error: " . $e->getLine();
    }
    
    $id = $_GET["id"];
    $base->query("DELETE FROM datos_usuarios WHERE ID = '$id'");
    
    header("Location:index.php");

?>