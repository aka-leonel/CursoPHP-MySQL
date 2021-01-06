<!doctype html>
<html><head>
<meta charset="utf-8">
<title>Baja Producto</title>
<style>

h1 {
    text-align:center;
    color:#00F;
    border-bottom:dotted #0000FF;
    width: 50%;
    margin:auto;
}    

td {
    align: center;
}
table {
    border:1px solid #F00;
    padding:20px 50px;
    margin-top:50px;
}

body{
       background-color:#FFC;
}

</style>
</head>
<body>

<h1>ELIMINAR articulos</h1>
<form name="form1" method="get" action="EliminarRegistro.php">
	<table border=1 >
		<tr>

			<td>SECCIoN</td>
			<td><label for="sec_art"></label>
			<input type="text" name="sec_art" id="sec_art"></td>
		</tr>
		<tr>
			<td>NOMBREARTiCULO</td>
			<td><label for="nom_art"></label>
			<input type="text" name="nom_art" id="nom_art"></td>
		</tr>
		<tr>
			<td>FECHA</td>
			<td><label for="fecha_art"></label>
			<input type="text" name="fecha_art" id="fecha_art"></td>
		</tr>
		<tr>
			<td>PaiS</td>
			<td><label for="pais_art"></label>
			<input type="text" name="pais_art" id="pais_art"></td>
		</tr>
		<tr>
			<td>PRECIO</td>
			<td><label for="precio_art"></label>
			<input type="number" name="precio_art" id="precio_art"></td>
		</tr>
			
	</table>
	<input type="submit" name="enviando" value="Eliminar!">
</form>

</body>

</html>