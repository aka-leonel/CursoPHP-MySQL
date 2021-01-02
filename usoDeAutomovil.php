<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Video25: POO IV</title>
</head>
<body>
<?php 
    include 'automovil.php';
    $volkswagen = new automovil();
    //$volkswagen->encenderMotor();
    //$volkswagen->color="Negro a rayas";
    //$volkswagen->establecerColor("rouge & noir", "volkswagen");
   // echo "el color es: " . $volkswagen->color ."<br>";
    
    $yamaha = new motocicleta();
    
    echo "Las ruedas del VW : " . $volkswagen->get_ruedas() . "<br>";
    echo "El motor del VW es de " . $volkswagen->get_motor() . " cc <br><br>";
    
    echo  "las ruedas de la Yahama: " . $yamaha->get_ruedas() . "<br>";
    echo "la yamaha tiene un motor de: " . $yamaha->get_motor() . "cc <br><br>";
    
?>
</body>
</html>