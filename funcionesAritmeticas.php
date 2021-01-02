<style>
.resultado{
    color:F00;
    font-weight:bold;
    font-size:22px;

</style>
<?php 

function calcular($numero1, $numero2, $operacion) {
        
    
    if(strcmp("Suma", $operacion)==0){
        echo "<p class='resultado'>El resultado es: "  . ($numero1+$numero2);
    }
    
    if(strcmp("Resta", $operacion)==0){
        echo "<p class='resultado'>El resultado es: "  . ($numero1-$numero2);
    }
    
    if(strcmp("Producto", $operacion)==0){
        echo "<p class='resultado'>El resultado es: "  . ($numero1*$numero2);
    }
    
    if(strcmp("Cociente", $operacion)==0){
        echo "<p class='resultado'>El resultado es: "  . ($numero1/$numero2);
    }
    
    if(strcmp("Modulo", $operacion)==0){
        echo "<p class='resultado'>El resultado es: "  . ($numero1%$numero2);
    }
    
  }


?>