<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>
<body>

<?php 
    setcookie("nombre_usuario", "juan", time()-1);
    echo "Cookie destruida";
?>

</body>
</html>