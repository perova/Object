<?php

/**
* 
*/

class Database
{
	private $hostname = "localhost";
	private $database = "dice_game";
	private $username = "root";
	private $password = "";
	private $connection;
	
	function __construct()
	{
		try {
	$this->connection = new PDO("mysql:host=" .$this->hostname . ";dbname=". $this->database . ";charset=utf8", $this->username ,$this->password);
        // set the PDO error mode to exception
	$this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

echo "Connected <br>";


} catch (PDOException $e) {
	//$response['message'] = ['type' => 'danger', 'body' => $e->getMessage()];
	echo $e->getMessage();
}

	}

	public function select(string $sql, array $param = []){
		$statement = $this->connection->prepare($sql);
		
		$statement->execute($param);
		return $statement->fetchAll(PDO::FETCH_ASSOC);
	}
	public function insert(string $sql, array $param = []){
		$statement = $this->connection->prepare($sql);
		
		$statement->execute($param);
		return $this->connection->lastInsertId();
	}
	function __destruct(){
		$this->connection = null;
	}
}