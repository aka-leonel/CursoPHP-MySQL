<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>CRUD</title>
<link rel="stylesheet" type="text/css" href="hoja.css">

<style>

table{
    width:50%;
}


</style>
</head>

<body>

<?php 
    //lo tipeo xq no conecta :(
    //include 'conexion.php';
try {
    
    $base= new PDO("mysql:host=localhost; dbname=test", "root", "");
    
    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $base->exec("SET CHARACTER SET UTF8");
    
} catch (Exception $e) {
    die("Error ".  $e->getMessage() . "<br>");
    echo "Linea del error: " . $e->getLine() . "<br>";
    
}

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
    //$conexion=$base->query("SELECT * FROM datos_usuarios");
    //$registros=$conexion->fetchAll(PDO::FETCH_OBJ);
    //en una linea se hace lo que en las dos comentadas
    $registros=$base->query("SELECT * FROM datos_usuarios LIMIT $empezar_desde, $registrosPorPagina")->fetchAll(PDO::FETCH_OBJ);
    
    
    if(isset($_POST["cr"])){
        
        $nombre = $_POST["Nom"];
        $apellido =$_POST["Ape"];
        $direccion = $_POST["Dir"];
        
        $sql = "INSERT INTO datos_usuarios (nombre, apellido, direccion) VALUES (:nom, :ape, :dir)";
        
        $resultado = $base->prepare($sql);
        
        $resultado->execute(array(":nom"=>$nombre, ":ape"=>$apellido, ":dir"=>$direccion));
        
        header("Location:index.php");
    }
?>

<h1>CRUD<span class="subtitulo">Create Read Update Delete</span></h1>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
  <table >
    <tr >
      <td class="primera_fila">Id</td>
      <td class="primera_fila">Nombre</td>
      <td class="primera_fila">Apellido</td>
      <td class="primera_fila">Dirección</td>
      <td class="sin">&nbsp;</td>
      <td class="sin">&nbsp;</td>
      <td class="sin">&nbsp;</td>
    </tr> 
   
		
	<?php 
	foreach ($registros as $persona):?>	
   	<tr>
      <td><?php echo $persona->id?></td>
      <td><?php echo $persona->nombre?></td>
      <td><?php echo $persona->apellido?></td>
      <td><?php echo $persona->direccion?></td>
 <!-- NOTA: SENSIBLE a mAyÚsCuLaS, 'id' != 'ID' -->
      <td class="bot"><a href="borrar.php?id=<?php echo $persona->id?>"><input type='button' name='del' id='del' value='Borrar'></a></td>
      <td class='bot'><a href="editar.php?id=<?php echo $persona->id?>&nom=<?php echo $persona->nombre?>&ape=<?php echo $persona->apellido?>&dir=<?php echo$persona->direccion?>"><input type='button' name='up' id='up' value='Actualizar'></a></td>
    </tr> 
    <?php 
    endforeach;
    ?>
  
          
	<tr>
	<td></td>
      <td><input type='text' name='Nom' size='10' class='centrado'></td>
      <td><input type='text' name='Ape' size='10' class='centrado'></td>
      <td><input type='text' name=' Dir' size='10' class='centrado'></td>
      <td class='bot'><input type='submit' name='cr' id='cr' value='Insertar'></td></tr>    
  	<tr><td>
  		<?php 
        //-----------------PAGINACION--------------------------//
        for ($i = 1; $i <= $totalPaginas; $i++) {
            
            echo "<a href='?pagina=" . $i . "'>" . $i . "</a> " ; 
        }
        ?>          		
  	</td></tr>
  	
  </table>
  
</form>


<p>&nbsp;</p>
</body>
</html>