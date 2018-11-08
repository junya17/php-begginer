<?php

class Car {

    public $wheels = 4;
    protected $hood = 1;
    private $engine = 1;
    var $doors = 4;

    function showProperty(){
     
        echo $this->engine;
 
     }


    function CreateDoors(){

        $this->doors = 6;

    }

}

$bmw = new Car();
$semi = new Semi();

// $bmw->showProperty();

class Semi extends Car{

    
}

echo $bmw->showProperty();

?>