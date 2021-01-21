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
    
    //$conexion=$base->query("SELECT * FROM datos_usuarios");
    //$registros=$conexion->fetchAll(PDO::FETCH_OBJ);
    //en una linea se hace lo que en las dos comentadas
    $registros=$base->query("SELECT * FROM datos_usuarios")->fetchAll(PDO::FETCH_OBJ);
?>

<h1>CRUD<span class="subtitulo">Create Read Update Delete</span></h1>

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
  </table>

<p>&nbsp;</p>
</body>
</html>