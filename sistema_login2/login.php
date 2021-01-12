<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Página de Login</title>

<style>
    
    h1{text-align:center;
    }
    
    table{
        width:25%;
        background-color:#FFC;
        border: 2px dotted #F00;
        margin:auto;
     }
        
     .izq{text-align:left;
     }
     
     .der{text-align:right;
     }
     
     td{
        text-align:center;
        padding:10px;
        }
        


</style>

</head>

<body>


<?php

if(isset($_POST["enviar"])){
    
 
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
                       
           // header("Location:usuarios_registrados1.php");
            
        }else{
           //header("location:login.php");
           echo "Usuario o password incorrecto <br>";
        }
   
        
    } catch (Exception $e) {
        
        die("Error: " . $e->getMessage());
    }
    
}
?>


<?php 
if(!isset($_SESSION["usuario"])){
    include 'formulario.html';
}else{
    echo "Usuario: " . $_SESSION["usuario"];
}
?>


<h2>Contenido de la web</h2>
<table width="800" border="1">
	<tr>
	<td><img src="imagenes/1.jpg" width="300" height="166"></td>
	<td><img src="imagenes/2.jpg" width="300" height="166"></td>
	</tr>
	<tr>
	<td><img src="imagenes/3.jpg" width="300" height="166"></td>
	<td><img src="imagenes/4.jpg" width="300" height="166"></td>
	</tr>
</table>


</body>
</html>