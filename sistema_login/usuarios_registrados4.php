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

    echo "Usuario: " . $_SESSION["usuario"] . "<br><br>";
?>
<a href="http://localhost/cursoPHP/sistema_login/cierre.php">Cerrar Sesion</a>
<p>Información para usuarios loggeados</p>
<a href="http://localhost/cursoPHP/sistema_login/usuarios_registrados1.php">Volver</a>
</body>

</html>