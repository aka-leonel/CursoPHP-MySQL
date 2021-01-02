<?php 
class automovil{
    var $color;
    protected $motor;
    protected $ruedas;
    
    function __construct() {
        $this->color="colorDefectoAuto";
        $this->motor=1600;
        $this->ruedas=4;
    }
    //funciones GETTERs
    function get_ruedas(){
        return $this->ruedas;
    }
    function get_motor(){
        return $this->motor;
    }
    //funciones SETTERs
    function set_color($colorRecibido,$nombreVehiculo) {
        $this->color=$colorRecibido;
        echo "El color del " . $nombreVehiculo . " se establecio: " . $colorRecibido . "<br>";
    }
    function encenderMotor() {
        echo "Rum Rum! Motor encendido!<br>";
    }
    
}

class motocicleta extends automovil{
    //private ruedas;
    
    function __construct() {
        $this->color="colorDefectoMoto";
        $this->motor=150;
        $this->ruedas=2;
    }
    function encenderMotor() {
        parent::encenderMotor();
        echo "No Olvides Usar Siempre Casco!<br>";
        
    }
}






















?>