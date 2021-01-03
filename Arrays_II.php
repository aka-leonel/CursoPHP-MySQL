<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Arrays Parte II</title>
</head>
<body>

<?php 
    
$datos= array("Nombre"=>"Juan", "Apellido"=>"Godoy", "Edad"=>46);
//$datos = "Martin";
if(is_array($datos)){
    
    echo "Es array" . "<br>";
}else {
    echo "NO es un array" . "<br";
}

$datos["Pais"]="España";
//echo $datos["Edad"];

foreach ($datos as $campo =>$valorCampo){
    echo "A $campo le corresponde $valorCampo" . "<br>";
}


?>

</body>
</html>