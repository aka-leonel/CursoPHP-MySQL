<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>

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

	<form action="v54_pagina_busqueda_PDO.php" method="post">
	<table>
		<tr><td>Seccion: </td><td><input type="text" name="seccion_a"></td></tr>
		<tr><td>Pais: </td><td><input type="text" name="pais_a"></td></tr>
		<tr><td colspan="2"><input type="submit" name="enviando" value="Dale!">
	</td></tr></table>
	</form>
	
</body>
</html>