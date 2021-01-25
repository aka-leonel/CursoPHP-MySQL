<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>


</head>

<body>

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
	foreach ($matrizPersonas as $persona):?>	
   	<tr>
      <td><?php echo $persona["ID"]?></td>
      <td><?php echo $persona["NOMBRE"]?></td>
      <td><?php echo $persona["APELLIDO"]?></td>
      <td><?php echo $persona["EDAD"]?></td>
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
</body>

</html>