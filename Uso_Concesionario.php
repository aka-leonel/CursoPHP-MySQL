<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>

<?php

	include 'Compra_vehiculo.php';

	$compra_antonio=new Compra_vehiculo("compacto");
	//$compra_antonio->climatizador();
	//$compra_antonio->tapiceria_cuero("blanco");
	echo "La compra de antonio fue: $" . $compra_antonio->precio_final() . " <br>";
	
	
	$compra_Ana= new Compra_vehiculo("compacto");
	$compra_Ana->climatizador();
	$compra_Ana->tapiceria_cuero("rojo");
	echo "La compra de Ana fue: $" . $compra_Ana->precio_final() . "<br>";
    
	$compra_Leonel = new Compra_vehiculo("berlina");
	$compra_Leonel->climatizador();
	$compra_Leonel->navegador_gps();
	$compra_Leonel->tapiceria_cuero("violeta oscuro");
	echo "La compra de leonel es de " . $compra_Leonel->precio_final() . " pesos <br>";
	
	

?>
</body>
</html>