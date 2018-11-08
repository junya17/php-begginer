<?php

class Car {

    static $wheels = 4;
    var $hood = 1;
   

    function MoveWheels(){
     
        echo Car::$wheels = 10;

    }

}


// $bmx->wheels;


Car::MoveWheels();

?>