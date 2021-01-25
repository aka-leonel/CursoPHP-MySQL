<?php 

require_once 'Conectar.php';
$base= Conectar::conexion();

//--------------------paginacion-------//

//esta variable determina la cantidad de registros a mostrar por pagina
$registrosPorPagina=2;

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
$sql_total = "SELECT * FROM datos_usuarios";

$resultado= $base->prepare($sql_total);

$resultado->execute(array());

$numeroDeFilas=$resultado->rowCount();

//totalPag = redondear( numFilas / regXpagina )
$totalPaginas = ceil($numeroDeFilas / $registrosPorPagina);

//--------------------fin paginacion-------------------

?>