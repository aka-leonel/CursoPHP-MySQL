<!doctype html>
<html>
<head>

<meta charset="utf-8">
<title>Elegir idioma</title>
</head>
<body>

<?php 

if(isset($_COOKIE["idioma_seleccionado"])){
    
    if ($_COOKIE["idioma_seleccionado"]=="es"){
        
        header("Location:spanish.php");
        
    }elseif ($_COOKIE["idioma_seleccionado"]=="en"){
        
        header("Location:english.php");
    }
}

?>

<table width="25%" border="0" align="center">
	<tr>
	<td colspan="2" align="center"><h1>Elige idioma</h1></td>
	</tr>
	<tr>
	<td align="center"><a href="crearCookie.php?idioma=es"><img src="img/espania.png" width="90" height="60"></a></td>
	<td align="center"><a href="crearCookie.php?idioma=en"><img src="img/inglaterra.jfif" width="90" height="60"></a></td>
	</tr>	
	
</table>



</body>
</html>