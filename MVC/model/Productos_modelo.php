<?php

class Productos_modelo{
    
  private $db;
  
  private $productos;
  //constructor
  public function __construct(){
      //conecta con BBDD
      require_once "Conectar.php";
      
      $this->db=Conectar::conexion();
      //crea un array de producos
      $this->productos=array();      
  }
  
  //metodo GETTER: funcion q devuelva prod
  public function get_productos(){
      
      $consulta=$this->db->query("SELECT * FROM articulos");
      //recorro el array $consulta y lo almaceno en $fila
      while($filas=$consulta->fetch(PDO::FETCH_ASSOC)){
          $this->productos[]=$filas;
      }
      
      return $this->productos;
      
  }
}








?>