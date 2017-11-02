<pre>
<?php

spl_autoload_register(function($class_name){
	include "classes/" . $class_name . ".php";
});

//tada nereikia siu 
// require "classes/TransportInterface.php";
// require "classes/Car.php";
// require "classes/ElectricCar.php";


$petro_automobilis = new Car(4,2,900,1199);
$jono_automobilis = new ElectricCar(3,1,300,550);

var_dump($jono_automobilis);

$petro_automobilis->go();
$jono_automobilis->go();

//by default
// echo $petro_automobilis->doorCount;

// //change parameter

// $petro_automobilis->doorCount=8;

// //new value
// echo $petro_automobilis->doorCount;

// $petro_automobilis->go();

// $petro_automobilis->stop();

// $petro_automobilis->getWeight();