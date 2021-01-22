<?php 
//puede ser necesario un ajuste en dbname
    try {
        
        $base = new PDO("mysql:host=localhost; dbname=test", "root", "");
        
        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $base->exec("SET CHARACTER SET UTF8");
        
    } catch (Exception $e) {
        die("Error: " . $e->getMessage() . "<br>");
        echo "Linea del error: " . $e->getLine();
    }
?>