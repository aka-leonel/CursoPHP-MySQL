<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Página de Login</title>

<style>
    
    h1{text-align:center;
    }
    
    table{
        width:25%;
        background-color:#FFC;
        border: 2px dotted #F00;
        margin:auto;
     }
        
     .izq{text-align:left;
     }
     
     .der{text-align:right;
     }
     
     td{
        text-align:center;
        padding:10px;
        }
        


</style>

</head>

<body>

<h1>INTRODUCE TUS DATOS</h1>

<form action="comprueba_login.php" method="post">

<table>
	<tr>
	<td class="izq">Usuario: </td>
	<td class="der"><input type="text" name="user"></td></tr>
	
	<tr><td class="izq">Password: </td>
	<td class="der"><input type="password" name="password"></td></tr>
				
	<tr><td colspan="2"><input type="submit" name="enviar" value="Login"></td></tr>
	
</table>

</form>

</body>

</html>