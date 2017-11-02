<?php

class equipoModel 
//extends Model
{
	private $db;
	
	function __construct()
	{
   	$this->db = new PDO('mysql:host=localhost;'.'dbname=db_prode;charset=utf8', 'root', '');

	}
	function getEquipos()
	{
		$sentencia = $this->db->prepare( "select * from equipos");
  		$sentencia->execute();
  		return $sentencia->fetchAll(PDO::FETCH_ASSOC);
	}
	function insertEstadio($id, $nombreEstadio) {
	  $sentencia = $this->db->prepare( "UPDATE `equipos` SET `Estadio`='$nombreEstadio' WHERE Id_equipo='$id'");
	  $sentencia->execute([$id, $nombreEstadio]);
	}
}
?>