<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>

<style>
body{  font-family: sans-serif;
}

h1{text-align: center;    
}

table{
    width: 25%;
    background-color: #FFC;
    border: 2px dotted #F00;
    margin: auto;
}

td{
    text-align: center;
    padding: 10px;
}

.izp{text-align: right;}

.der{text-align: left;}

</style>
</head>

<body>

<h1>INTRODUCE TUS DATOS</h1>

<form action="comprueba_login.php" method="post">

<table>
	<tr style="">
	<td class="izq">
	Login:</td><td class="der"><input type="text" name="login"></td></tr>
	<tr><td class="izq">Password:</td><td class="der"><input type="password" name="password"></td></tr>
	<tr><td colspan="2"><input type="submit" name="enviar" value="LOGIN"></td></tr>
</table>

</form>

</body>
</html>