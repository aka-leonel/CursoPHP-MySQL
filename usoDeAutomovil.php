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
    $volkswagen->encenderMotor();
    //$volkswagen->color="Negro a rayas";
    $volkswagen->establecerColor("rouge & noir", "volkswagen");
    echo "el color es: " . $volkswagen->color ."<br>";
    
    $yamaha = new motocicleta();
    $yamaha->encenderMotor();
    $yamaha->ruedas=8;//no deberia poderse
    // NO SE PUEDE (private) $volkswagen->ruedas=3;
    //echo "ruedas de VW: ". $volkswagen->ruedas . "<br>";
    echo "ruenas de yamaha: " . $yamaha->ruedas . "<br>";
    //$yamaha->arrancar();
    //echo "cantidad de ruedas de la yamaha: " . $yamaha->ruedas . "<br>";
    
    
    
?>
</body>
</html>