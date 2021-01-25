<?php 

class Personas_model{
    
    private $db;
    private $personas;
    
    public function __construct(){
        
        require_once 'model/Conectar.php';
        
        $this->db=Conectar::conexion();
        
        $this->personas=array();
    }
    
    public function get_personas(){
        
        $consulta=$this->db->query("SELECT * FROM datospersonales");
        
        while($filas=$consulta->fetch(PDO::FETCH_ASSOC)){
            
            $this->personas[]=$filas;
            
        }
        return $this->personas;
    }
}




?>