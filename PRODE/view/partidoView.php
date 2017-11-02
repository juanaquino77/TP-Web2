<?php
include_once 'libs/Smarty.class.php';

class partidoView extends View
{
	
	function __construct()
	{
		$this->smarty = new Smarty();
		$this->cabecera = 'PRODE UNION';
		$this->titulo = 'PRODE CLUB UNION';
	}
	function mostrarPartidos($partidos)
	{
		$this->smarty->assign('titulo', $this->titulo);
		$this->smarty->assign('cabecera', $this->cabecera);
		$this->smarty->assign('partidos', $partidos);
  		$this->smarty->display('templates/mostrarPartidos.tpl');
	}
	function mostrarPartido()
	{
		$this->smarty->assign('titulo', $this->titulo);
		$this->smarty->assign('cabecera', $this->cabecera);
  		$this->smarty->display('templates/index.tpl');
	}
	function agregarPartido($equipos)
	{
//		$jornada = getJornada(1);
//		$equipos = getEquipos();
//		$this->smarty->assign('titulo', $this->titulo);
//		$this->smarty->assign('cabecera', $this->cabecera);
//		$this->smarty->assign('jornada', $jornada);
		$this->smarty->assign('equipos', $equipos);
		$this->smarty->display('templates/agregarPartido.tpl');
	}
	function agregarPartidos()
	{
		$jornada = getJornada(1);
		$equipos = getEquipos();
		$this->smarty->assign('titulo', $this->titulo);
		$this->smarty->assign('cabecera', $this->cabecera);
		$this->smarty->assign('jornada', $jornada);
		$this->smarty->assign('equipos', $equipos);
		$this->smarty->display('templates/agregar.tpl');
	}
}
?>