<!doctype html>
<html>
<head>
<meta charset="utf-8" />
<title>PDO conexi�n a BBDD</title>
</head>
<body>

<?php 
    try{
        
        $base= new PDO('mysql:host=localhost; dbname=minegocio', 'root', '');
        echo 'Conexi�n OK<br>';
    
    }catch(Exception $e){
        
        die('Error: '. $e->getMessage());
    } finally {
        echo "Esta linea siempre se ejecuta<br>";
        $base=NULL;
    }
?>

</body>
</html>