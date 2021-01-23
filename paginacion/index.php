<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
<?php 

try {
    $base = new PDO("mysql:host=localhost; dbname=test", "root", "");
    
    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $base->exec("SET CHARACTER SET UTF8");
   
    
    
    
    
    
    //esta variable determina la cantidad de registros a mostrar por pagina
    $registrosPorPagina=3;
    
    if(isset($_GET["pagina"])){
        if ($_GET["pagina"]==1) {
            header("Location:index.php");
        } else {
            $pagina = $_GET["pagina"];
        }
    } else{
        //pagina en la que se enra por primera vez al cargar el sitio
        $pagina=1;
    }
    
    $empezar_desde=($pagina - 1) * $registrosPorPagina;
    $sql_total = "SELECT NOMBRE, PAIS, PRECIO FROM articulos";
    
    $resultado= $base->prepare($sql_total);
    
    $resultado->execute(array());
    
    $numeroDeFilas=$resultado->rowCount();
    
    //totalPag = redondear( numFilas / regXpagina )
    $totalPaginas = ceil($numeroDeFilas / $registrosPorPagina);
    
    echo "Numero de registros de la consulta: " . $numeroDeFilas . "<br>";
    echo  "mostramos " . $registrosPorPagina . " registros por pagina <br>";
    echo  "Mostrando la p&aacutegina " . $pagina . " de " . $totalPaginas . "<br>";
    
    
    
    $resultado->closeCursor();
    
    $sql_limite= "SELECT NOMBRE, PAIS, PRECIO FROM ARTICULOS LIMIT $empezar_desde, $registrosPorPagina";
    
    $resultado= $base->prepare($sql_limite);
    
    $resultado->execute(array());
    
     while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
     echo "Nombre art: " . $registro["NOMBRE"] . " Pais: " . $registro["PAIS"] . " Precio: $ " . $registro["PRECIO"] ." <br>" ;
     }
     
     
       
    
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "<br>";
    echo "Linea de error: " . $e->getLine();
}


//-----------------PAGINACION--------------------------//

for ($i = 1; $i <= $totalPaginas; $i++) {
    
    echo "<a href='?pagina=" . $i . "'>" . $i . "</a>     " ;
    
}







?>


</body>

</html>