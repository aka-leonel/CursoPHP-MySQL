<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>

<style>
td{ border:1px dotted #f00;}

</style>
</head>

<body>
<table>
<tr><td>Nombre art</td>

<?php 
//recorrer el array matrizproductos
foreach ($matrizProductos as $registro){
    echo "<tr><td>" . $registro["NOMBRE"] . "</tr></td>";
   }
?>

</table>
</body>

</html>