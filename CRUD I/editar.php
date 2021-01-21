<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>

<style>
    table, h1{
    width:50%;
   position:relative;
   left: 100px;
    }
</style>

</head>
<body>

<h1>ACTUALIZAR</h1>

<?php 
    $id = $_GET["id"];
    $nom = $_GET["nom"];
    $ape = $_GET["ape"];
    $dir = $_GET["dir"];  

?>


<p></p>

<p>&nbsp;</p>

<form name="form1" method="get" action="">
	<table>
		<tr>
			<td>id</td>
			<td><label for="id"></label>
			<input type="hidden" name="id" id="id"></td>
		</tr>
		<tr>
			<td>Nombre</td>
			<td><label for="nom"></label>
			<input type="text" name="nom" id="nom" value="<?php echo $nom ?>"></td>
		</tr>
		<tr>
			<td>Apellido</td>
			<td><label for="ape"></label>
			<input type="text" name="ape" id="ape" value="<?php echo $ape?>"></td>
		</tr>
		<tr>
			<td>Direccion</td>
			<td><label for="dir"></label>
			<input type="text" name="dir" id="dir" value="<?php echo $dir?>"></td>
		</tr>
		<tr>
		<td colspan="2"><input type="submit" name="bot_actualizar" id="bot_actualizar" value="Actualizar"></td>
		</tr>
		
		
	</table>

</form>

</body>
</html>