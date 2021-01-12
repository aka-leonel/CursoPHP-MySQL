<?php 

    require "conexion.php";
    
    class devuelveArticulos extends conexion{
        
        public function __construct() {
            
            parent::conexion();
        }
        
        public function get_articulos() {
            $resultado=$this->conexion_db->query("SELECT * FROM ARTICULOS");
            
            $articulos=$resultado->fetch_all(MYSQLI_ASSOC);
            
            return $articulos;
        }
        
    }
?>