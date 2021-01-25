<?php
//llama al modelo
require_once 'model/Personas_model.php';

$persona = new Personas_model();

$matrizPersonas =$persona->get_personas();

//llamada a la vista
require_once 'view/Personas_view.php';

?>