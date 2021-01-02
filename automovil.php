<?php 
class automovil{
    var $color;
    var $motor;
    private $ruedas;
    
    function __construct() {
        $this->color="colorDefectoAuto";
        $this->motor=1600;
        $this->ruedas=4;
    }
    
    function encenderMotor() {
        echo "Rum Rum! Motor encendido!<br>";
    }
    function establecerColor($colorRecibido,$nombreVehiculo) {
        $this->color=$colorRecibido;
        echo "El color del " . $nombreVehiculo . " se establecio: " . $colorRecibido . "<br>";
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