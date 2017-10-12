<?php

class prodeModel 
{
	private $db;
	
	function __construct(argument)
	{
		$this->db = new PDO('mysql:host=localhost;'
  		.'dbname=db_prode;charset=utf8', 
  		'root', '');
	}
}


?>