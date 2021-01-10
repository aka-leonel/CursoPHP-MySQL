<?php 
    //pido datos conexion
    require "conexion.php";
    
    class devuelveProductos extends conexion{
        public function devuelveProductos() {
            
            parent::conexion();
            
        }
        
        public function get_productos($dato) {
            
            $sql="SELECT * FROM PRODUCTOS WHERE PAIS = '" . $dato . "'";
            
            $sentencia=$this->conexion_db->prepare($sql);
            
            $sentencia->execute();
            
            
            $resultado=$sentencia->fetchAll(PDO::FETCH_ASSOC);
            
            $sentencia->closeCursor();
            
            return $resultado;
            
            $this->conexion_db=NULL;
           
            
            /*
            $resultado=$this->conexion_db->query('SELECT * FROM ARTICULOS WHERE PAIS ="'. $dato . '"');           
            $productos=$resultado->fetch_all(MYSQLI_ASSOC);            
            return $productos;
            */
            
            
        }
    }

?>