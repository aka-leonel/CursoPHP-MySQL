<?php

require_once 'model/Productos_modelo.php';
//instanciar la clase productosModelo, o sea se llamo al constructor
$producto = new Productos_modelo();
//almaceno datos en un array-matriz
$matrizProductos = $producto->get_productos();

require_once 'view/productosView.php';



?>