<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Arrays Primera parte</title>
</head>
<body>
<?php 
    //arrays indexados
    $semana[]="lunes";
    $semana[]="martes";
    $semana[]="miercoles";
    echo "primer dia de semana" . $semana[0] . "<br>";
    
    $listaNumeros = array(34,45,675,43);
    echo "primer elemento de mi array: " . $listaNumeros[0] . "<br>";
    
    //array asociativo
    $datos= array("Nombre"=>"Juan", "Apellido"=>"Godoy", "Edad"=>46);
    
    echo "apellido y nombre de mi tio: " . $datos["Apellido"] . " " . $datos["Nombre"] . " <br>";

?>
</body>
</html>