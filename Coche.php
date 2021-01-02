<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Programacion Orientada a Objetos(POO) ep III</title>
</head>
<body>
<?php
    include 'vehiculos.php';
    $volkswagen=new Coche();
    $volkswagen->encenderMotor();
    echo $volkswagen->año;
    
    $iveco = new Camion();
    echo $iveco->color . "<br>";
    $iveco->color="rojo";
    echo $iveco->color . "<br>";
?>
</body>
</html>