<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>
<body>

<?php 

if(!$_COOKIE["idioma_seleccionado"]){
    
    header("Location:pag1.php");
    
}elseif ($_COOKIE["idioma_seleccionado"]=="es"){
    
    header("Location:spanish.php");
    
}elseif ($_COOKIE["idioma_seleccionado"]=="en"){
    
    header("Location:english.php");
}


?>

</body>

</html>