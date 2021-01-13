<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>
<body>

<?php 
    setcookie("idioma_seleccionado", $_GET["idioma"], time()+86400);
    
    header("Location:ver_cookie.php");
    
?>

</body>
</html>