<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Operadores de comparacion</title>
<style>
    h1{
        text-align:center;
    }
    
    table{
        background-color:#FFC;
        padding:5px;
        border:#666 5px solid;
    }
    
    .no_validado{
        font-size:18px;
        color:#F00;
        font-weight:bold;
    }
    
    .validado{
        font-size:18px;
        color:#0C3;
        font-weight:bold;
    }
        
        
</style>
</head>

<body>
<h1>Usando operadores de comparacion</h1>

<form action="formularioNombreEdad.php" method="post" name="datos_usuario" id="datos_usuario">
	<table>
		<tr>
			<td>Nombre:</td>
			<td><label for="nombre_usuario"></label>
			<input type="text" name="nombre_usuario" id="nombre_usuario"></td>
		</tr>
		<tr>
			<td>Edad:</td>
			<td><label for="edad_usuario"></label>
			<input type="text" name="edad_usuario" id="edad_usuario"></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" name="enviando" id="enviando" value="Enviar info"></td>
		</tr>
	</table>
</form>

</body>
</html>















