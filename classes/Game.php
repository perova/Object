<?php

/**
* 
*/
class Game 
{
	
	private $db;

	function __construct(Database $db)
	{
		$this->db = $db;
	}
	
}