<?php


abstract class Car {
   public $name;
    function __construct($name){
        $this->name = $name;
    
    }
    abstract function audi();
    abstract function mehran();
}

class AudiCar extends Car{
    function audi() {
        echo "Name: $this->name ";
    }

    function mehran() {
        echo "Name: $this->name";
    }
}
$result = new AudiCar("Audi");
$result->audi();
echo "<br/>";
$result = new AudiCar("Mehran");
$result->mehran();

?>