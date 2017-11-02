<?php


class ElectricCar extends Car
{
	public $maxRange;
	public $effSpeed;
	public $chargeTime;

	public function charge(){
		echo "Charging.<br>";
	}
	//polimorfizmas- 

	public function go(){
		echo "This electric  car is floating ..<br>";
	}
}