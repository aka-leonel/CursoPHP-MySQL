<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>V50, evitando inyeccion SQL con consultas preparadas</title>
    
    <style>
        h1{
            text-align:center;
            margin-bottom:50px;
        }
        
        body{
            background-color:#FC9;
        }
        
        #boton{
          padding-top:25px;
        }
    
    </style>

</head>

<body>
<h1>Alta de articulos nuevos</h1>

	<form action="resultados_insertar_registros50.php" method="get">
	<table>
		<tr><td><label>Código artículo: </label></td><td><input type="text" name="codigo_art"></td></tr>
		<tr><td><label>Sección: </label></td><td><input type="text" name="seccion_art"></td></tr>
		<tr><td><label>Nombre artículo: </label></td><td><input type="text" name="nombre_art"></td></tr>
		<tr><td><label>Fecha: </label></td><td><input type="text" name="fecha_art"></td></tr>
		<tr><td><label>Pais origen: </label></td><td><input type="text" name="pais_art"></td></tr>
		<tr><td><label>Precio: </label></td><td><input type="text" name="precio_art"></td></tr>
		<tr><td colspan="2" align="center" id="boton"> <input type="submit" name="enviando" value="Go!"></td></tr>
	</table>	
</form>	

</body>
</html>