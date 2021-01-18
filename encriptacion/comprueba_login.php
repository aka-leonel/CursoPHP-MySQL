<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>

<?php 
try {
    $login= htmlentities(addslashes($_POST["login"]));
    $password= htmlentities(addslashes($_POST["password"]));
    //$login= $_POST["login"];
    //$password= $_POST["password"];
    $contador =0;
   
    $base = new PDO("mysql:host=localhost; dbname=test", "root", "");
    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
    $sql= "SELECT * FROM users_pass WHERE USUARIO = :login";
    $resultado= $base->prepare($sql);
    $resultado->execute(array(":login"=>$login));
   
    while ($registro=$resultado->fetch(PDO::FETCH_ASSOC)) {
        //echo "Usuario: " . $registro["usuario"] . " Contrseña: " . $registro["pass"] . "<br>";
       if(password_verify($password, $registro["PASS"]))
           $contador++;        
        }

        if($contador>0){
            echo "usuario registrado. Contador: " . $contador ;
            
        }else {
            echo "usuario no registrado";
        }
    $resultado->closeCursor();
        
    } catch (Exception $e) {
        echo "Exception : ". $e;
    }

?>


</body>

</html>