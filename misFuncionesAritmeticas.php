
<?php


if(isset($_POST["button"])){
    $numero1=$_POST["num1"];
    $numero2=$_POST["num2"];
    $operacion=$_POST["operacion"];
    
    calcular($numero1,$numero2,$operacion);
}
function calcular($numero1, $numero2, $operacion) {
    
    if(!strcmp("Suma", $operacion)){
        echo "El resultado es: " . ($numero1 + $numero2);
    }
    
    if(!strcmp("Resta", $operacion)){
        echo "El resultado es: " . ($numero1 - $numero2);
    }
    
    if(!strcmp("Producto", $operacion)){
        echo "El resultado es: " . ($numero1 * $numero2);
    }
    
    if(!strcmp("Cociente", $operacion)){
        if($numero2 ==0)
        {
            echo "<br>ERROR: division por cero";
        }
        else{
            echo "El resultado es: " . ($numero1 / $numero2);
        }
        
        if(!strcmp("Modulo", $operacion)){
            echo "El resultado es: " . ($numero1 % $numero2);
        }
    }
    
}

    

?>
