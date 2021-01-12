
<?php 

    require("config.php");
    
    class conexion{
        protected $conexion_db;
        
        public function conexion(){
            
            try {
                
                $this->conexion_db = new PDO("mysql:host=localhost; dbname=test", "root", "");
                
                $this->conexion_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                $this->conexion_db->exec("SET CHARACTER SET utf8");
                
                RETURN $this->conexion_db;
                
            } catch (Exception $e) {
                
                echo "La linea de error es: " . $e->getLine();
            }
            
        }
            
            /*
            $this->conexion_db=new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
            
            if($this->conexion_db->connect_errno){
                
                echo "Fallo al conectar con BBDD: " . $this->conexion_db->connect_error;
                return;
            }
            
            $this->conexion_db->set_charset(DB_CHARSET);
            */
        
    }

?>