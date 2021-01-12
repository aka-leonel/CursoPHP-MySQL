<?php 

    require "conexion.php";
    
    class devuelveArticulos extends conexion{
        
        public function __construct() {
            
            parent::conexion();
        }
        
        public function get_articulos($dato) {
            
            $sql="SELECT * FROM articulos WHERE PAIS='" . $dato . "'";
            
            $sentencia=$this->conexion_db->prepare($sql);
            
            $sentencia->execute(array());
            
            $resultado=$sentencia->fetchAll(PDO::FETCH_ASSOC);
            
            $sentencia->closeCursor();
            
            return $resultado;
            
            $this->conexion_db=NULL;
            /*
            $resultado=$this->conexion_db->query("SELECT * FROM ARTICULOS WHERE PAIS='". $dato . "'");
            
            $articulos=$resultado->fetch_all(MYSQLI_ASSOC);
           return $articulos;
           */
        }
        
    }
?>