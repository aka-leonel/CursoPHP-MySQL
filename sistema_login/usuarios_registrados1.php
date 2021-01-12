<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Pagina de bienvenida a usuarios registrados</title>
</head>
<body>

<?php 
    
    session_start();

    if(!isset($_SESSION["usuario"])){
        
        header("Location:login.php");
        
    }
?>

<h1>Bienvenidos Usuarios</h1>

<?php 

    echo "Hola: " . $_SESSION["usuario"] . "<br><br>";
?>

<p>Información para usuarios loggeados</p>
</body>

</html>