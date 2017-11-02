<?php
include_once 'libs/Smarty.class.php';

class equipoView extends View
{


	
	function __construct()
	{
		$this->smarty = new Smarty();
		$this->smarty->assign('titulo', $this->titulo);
		$this->smarty->assign('cabecera', $this->cabecera);
		//$this->smarty = new Smarty();
	}
	//function mostrarEquipos(){
  //$equipos = getEquipos();
  //$smarty = new Smarty();
  //smarty->assign('equipos', $equipos);
  //$smarty->display('templates/equipos.tpl');
//}
	function mostrarEquipos($equipos)
	{
		$this->smarty->assign('equipos', $equipos);
  		$this->smarty->display('templates/mostrar.tpl');
	}
	function mostrarEquipo($id)
	{
  		$this->smarty->display('templates/equipos.tpl');
	}
	function agregarEstadio($equipos)
	{
		//$jornada = getJornada(1);
		//$equipos = getEquipos();
		//$this->smarty->assign('jornada', $jornada);
		$this->smarty->assign('equipos', $equipos);
		$this->smarty->display('templates/agregar.tpl');
	}
}
?>