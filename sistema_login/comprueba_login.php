<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Loggeo</title>
</head>
<body>

<?php 
    try {
        
        $base= new PDO("mysql:host=localhost; dbname=test", "root", "");
        
        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $sql="SELECT * FROM users_pass WHERE USUARIO= :user AND PASS= :password";
        
        $resultado=$base->prepare($sql);
        
        $user=htmlentities(addslashes($_POST["user"]));
        
        $password=htmlentities(addslashes($_POST["password"]));
        
        $resultado->bindValue(":user", $user);
        $resultado->bindValue(":password", $password);
        
        $resultado->execute();
        
        $numero_registro=$resultado->rowCount();
        
        if($numero_registro){
            
            //echo "<h2>Ingreso correctamente</h2>";
            
            session_start();
            $_SESSION["usuario"]=$_POST["user"];
            
            
            header("Location:usuarios_registrados1.php");
            
        }else{
           header("location:login.php");
        }
   
        
    } catch (Exception $e) {
        
        die("Error: " . $e->getMessage());
    }
?>

</body>
</html>