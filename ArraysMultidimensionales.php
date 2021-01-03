<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Arrays Primera parte</title>
</head>
<body>
<?php 

$alimentos=array("fruta"=>array("tropical"=>"kiwi",
                                "citrico"=>"naranja",
                                "otros"=>"manzana"),
    
                "leche"=>array("vegetal"=>"de coco",
                                "animal"=>"de vaca"),
    
                 "carne"=>array("vacuna"=>"lomo",
                                "porcino"=>"tocino"));

   // echo $alimentos["leche"]["vegetal"];              

    foreach ($alimentos as $tipo) {
        //echo "$categoria:<br>";
       // while(list($categ, $valor)=each($alim)){
       //echo "$categ=$valor <br>";
      foreach ($tipo as $categ=>$valor){
            echo "$categ=$valor <br>";
       }
        //}
        echo "<br>";
    
    }
    ////////segunda forma
    foreach ($alimentos as $clave_alim=> $alim) {
        echo "$clave_alim: <br>";
        
        foreach ($alim as $clave=> $valor) {
            echo "$clave: $valor <br>"; }
    }
    ///////////tercer forma
    
   echo var_dump($alimentos); 
    
?>
</body>
</html>