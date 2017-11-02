<?php

/**
* 
*/

interface UserInterface{
	public function getAllUsers() : array;
	public function getUsersById(int $id) : array;
	 public function getUsersByUsername(string $username) : array;
	 public function addUser(string $username, string $password) : int;
	// public function removeUser(int, $id) : bool;
}
class User implements UserInterface
{
	private $db;

	function __construct(Database $db)
	{
		$this->db = $db;
	}

	public function getAllUsers() : array {

	return	$this->db->select("SELECT id, username FROM players");
	}

	public function getUsersById(int $id) : array{
		return	$this->db->select(("SELECT * FROM players WHERE id = :id"), ["id" => $id]);
	}

	public function getUsersByUsername(string $username) : array{
		return $this->db->select(("SELECT * FROM players WHERE username = :username"), ["username" => $username]);
	}
	public function addUser(string $username, string $password) : int{
	return $this->db insert("INSERT INTO players(username,password) VALUES(:username, :password)", ["username" => $username,  "password"=>$password]);
// "password"=>password_hash("labas",PASSWORD_DEFAULT)
// ]);
	}
}