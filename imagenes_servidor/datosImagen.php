<?php

//recibimos los datos de la imagen
//$_FILES["nombreArchivo"][name || type || size || tmp_name || error]

$nombre_imagen =$_FILES["imagen"]["name"];
$tipo_imagen = $_FILES["imagen"]["type"];
$tamanio_imagen =$_FILES["imagen"]["size"];

//ruta de la carpeta destino en servidor
$carpeta_destino = $_SERVER['DOCUMENT_ROOT'] . '/cursoPHP/uploads/';
//movewmos la imagen del directorio temporal al dir elegido
move_uploaded_file($_FILES['imagen']['tmp_name'], $carpeta_destino.$nombre_imagen);

?>