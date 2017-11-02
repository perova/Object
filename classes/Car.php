<?php
//kodinimo standarai - PSR-0, PSR-4
/**
* 
*/
//class Car
/**
 * 
 */
 class Car implements TransportInterface
{
	//atributai
	private $wheelCount;
	private $doorCount;
	public $weight;
	public $engineVolume;

	function __construct(int $wheelCount, int $doorCount,int $weight, int $engineVolume ){
		$this->wheelCount=$wheelCount;
		$this->doorCount=$doorCount;
		$this->weight=$weight;
		$this->engineVolume=$engineVolume;
		echo "new car created<br>";
	}
	//getter - grazina bet kur atributa
	function __get($parameter){
		return $this->$parameter;

	}
	//setter - $parameter i ka bando, ir $value reiksme kuria bando irasyti.
	function __set($parameter, $value){
		echo "Someone is changing $parameter or $value";
		return $this->$parameter;
		if ($parameter =="doorCount" && $value >5) {
			echo "This car has to omany doors";
			$this->doorCount=$value;
		}

	}

	function __destruct(){
		echo "this car destroyed.<br>";
	}
	// jei bando isspausdinti stringa, pvz echo $petro_automobilis; 
	function __toString(){
		$string = "This is car!";
		return "the car";
	}

	public function getWheels(){
		return $this->wheelCount;

	}
	public function go(){
		echo "This car is going ..<br>";
	}

	public function stop(){
		echo "This car has stopped.<br>";
	}

	public function getWeight(){
		echo "Weight is" . $this->weight;
	}

	public function break(){
		echo "Broken";
	}

}