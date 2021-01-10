<?php 

    require ("config.php");
    
    class conexion{
        
        protected $conexion_db;
        
        public function conexion() {
            
            try {
                
                $this->conexion_db=new PDO('mysql:host=localhost; dbname=pruebas', 'root', '');
                
                $this->conexion_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                $this->conexion_db->exec("SET CHARACTER SER utf8");
                
                return $this->conexion_db;
                
            } catch (Exception $e) {
                echo "La linea del error es: " . $e->getLine();
            }
            
            /*------------------------------------------------
            $this->conexion_db= new mysqli(DB_HOST, DB_USUARIO, DB_PASS, DB_NOMBRE);
            
            if($this->conexion_db->connect_errno){
                
                echo "Fallo al conectar a Mysql: " . $this->conexion_db->connect_error;
                
                return;
            }
            $this->conexion_db->set_charset(DB_CHARSET);
            */
        }
        
        
        
        
    }
?>