<!doctype html>
<html>
<head>
<title>Carga de articulos</title>
<meta charset="utf-8">
<style>
    table{
        width:400px;
        margin:auto;
        background-color:#FFC;
        border:2px solid #F00;
        padding:5px;
        }
        
    td{
        text-align:center;
        }

</style>
</head>

<body>
</body>
	<form action="v56_insertarPDO.php" method="post">
	<table><tr>
		<td>Codigo </td><td><input type="text" name="codigo_art" id="codigo_art"></td></tr>
		<tr>
		<td>Seccion </td><td><input type="text" name="seccion_art" id="seccion_art"></td></tr>
		<tr>
		<td>Articulo </td><td><input type="text" name="nombre_art" id="nombre_art"></td></tr>
		<tr>
		<td>Fecha </td><td><input type="text" name="fecha_art" id=fecha_art></td></tr>
		<tr>
		<td>Pais </td><td><input type="text" name="pais_art" id="pais_art"></td></tr>
		<tr> 
		<td>Precio </td><td><input type="number" name="precio_art" id="precio_art"></td></tr>
		<tr><td colspan="2"><input type="submit" name="enviando" value="Cargar!"></td></tr>
	
	
	</table>
		
	
	</form>

</html>