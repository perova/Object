<pre>
<?php
$start = microtime(true);
require "vendor/autoload.php";

$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();




//bet kai composer, tai nelabai gerai su :
// spl_autoload_register(function($class_name){
// 	include "classes/" . $class_name . ".php";
// });

//pl_autoload_register-tada nereikia siu 
// require "classes/TransportInterface.php";
// require "classes/Car.php";
// require "classes/ElectricCar.php";


// $petro_automobilis = new Car(4,2,900,1199);
// $jono_automobilis = new ElectricCar(3,1,300,550);

// var_dump($jono_automobilis);

// $petro_automobilis->go();
// $jono_automobilis->go();

$db = new Database();
$user = new User($db);
$game = new Game($db);

require "app/index.php";

print_r($db->select("SELECT * FROM users WHERE username = :username", ["username" =>"Rasa"]));

// echo $db->insert("INSERT INTO players(username,password) VALUES(:username, :password)", ["username" => "Jonas" . rand(500,5000), 
// "password"=>password_hash("labas",PASSWORD_DEFAULT)
// ]);
//by default
// echo $petro_automobilis->doorCount;

// //change parameter

// $petro_automobilis->doorCount=8;

// //new value
// echo $petro_automobilis->doorCount;

// $petro_automobilis->go();

// $petro_automobilis->stop();

// $petro_automobilis->getWeight();
// echo "<div style='position:absolute; right: 0; top:0; padding:10px; bacground-color:black;'>";
// echo round(("It took" . microtime(true)-$start)*1000, 2);
// echo round( memory_get_usage()/(1023*1024),2) . "MB";
// echo "</div>";
?>