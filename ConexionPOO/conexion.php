
<?php 

    require("config.php");
    
    class conexion{
        protected $conexion_db;
        
        public function conexion() {
            $this->conexion_db=new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
            
            if($this->conexion_db->connect_errno){
                
                echo "Fallo al conectar con BBDD: " . $this->conexion_db->connect_error;
                return;
            }
            
            $this->conexion_db->set_charset(DB_CHARSET);
        }
    }

?>