<?php 
    //pido datos conexion
    require "conexion.php";
    
    class devuelveProductos extends conexion{
        public function devuelveProductos() {
            
            parent::conexion();
            
        }
        
        public function get_productos() {
            $resultado=$this->conexion_db->query('SELECT * FROM ARTICULOS');
            
            $productos=$resultado->fetch_all(MYSQLI_ASSOC);
            
            return $productos;
        }
    }

?>