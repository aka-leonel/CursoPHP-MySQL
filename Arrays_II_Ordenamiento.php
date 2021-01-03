<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Arrays Parte II</title>
</head>
<body>

<?php 

//array de semana

$semana[]="lunes";
$semana[]="martes";
$semana[]="miercoles";
$semana[]="jueves";

for($i=0;$i<count($semana);$i++){
    echo $semana[$i] . "<br>";
}

sort($semana);
for($i=0;$i<count($semana);$i++){
    echo $semana[$i] . "<br>";
}


?>

</body>
</html>