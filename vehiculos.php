<?php 
class Coche{
    var $color;
    var $año;
    var $motor;
    
    function __construct() {
        //print"En el metodo constructor<br>";
        //echo"En el metodo constructor\n \n<br>";
        $this->año=1999;
        $this->color="ColorDefectoCoche";
        $this->motor=1600;
        $this->velocidad=230;
    }
    
    function encenderMotor() {
        echo "Rum Rum! Motor encendido!\n" . "<br>";
    }
    
    function establecerColor($colorRecibido, $nombreCoche){
        $this->color=$colorRecibido;
        echo "El color del " . $nombreCoche . " se establecio en " . $colorRecibido . "<br>";
    }
}
/*
$volkswagen = new Coche();
$volkswagen->encenderMotor();
$volkswagen->establecerColor("rojo", "volkswagen");
echo $volkswagen->año . "<br>";
$volkswagen->año=2015;
echo   $volkswagen->año;
//PHP es muy flexible!
*/
//--------------------------------------
class Camion{
    var $color;
    var $año;
    var $motor;
    
    function __construct() {
        //print"En el metodo constructor<br>";
        //echo"En el metodo constructor\n \n<br>";
        $this->año=1980;
        $this->color="Color defecto camion";
        $this->motor=3600;
        $this->velocidad=120;
    }
    
    function encenderMotor() {
        echo "Raaaam! Camion encendido!\n" . "<br>";
    }
    
    function establecerColor($colorRecibido, $nombreCamion){
        $this->color=$colorRecibido;
        echo "El color del " . $nombreCamion . " se establecio en " . $colorRecibido . "<br>";
    }
}

echo "DEBBUGGINNNGINGNGKI";




?>