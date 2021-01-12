<!doctype html>
<html>
<head>
<meta charset="utf-8">
</head>
<title></title>
<body>

<?php 

    session_start();
    
    session_destroy();
    
    header("location:login.php.");

?>

</body>
</html>