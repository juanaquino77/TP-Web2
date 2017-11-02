<?php

class partidoModel extends Model
{
	//private $db;
	
	function __construct()
	{

	}
	function getPartidos()
	{
		$sentencia = $this->db->prepare( "select * from partido");
  		$sentencia->execute();
  		return $sentencia->fetchAll(PDO::FETCH_ASSOC);
	}
}
?>