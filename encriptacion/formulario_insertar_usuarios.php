<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>

    <style >
    
    table{
        width:300PX;
        martin.auto;
        background-color:#FFC;
        border:2px solid #F00;
        padding:5px;
    }
    
    td{
        text-aling:center;
    }
    
    h1{
        text-align:center;
    }    
    </style>
     
</head>
<body>

<h1>Registrate</h1>

<form action="pagina_insertar_usuarios.php" method="post">
<table><tr>
	<td>usuario</td><td><input type="text" name="usu" id="usu"></td></tr>
	<tr>
	<td>contrasenia</td><td><input type="password" name="contra" id="contra"></td></tr>
	
	<tr><td colspan="2"><input type="submit" name="enviando" value="Enter!">
	</td></tr>
</table>
</form>


</body>
</html>