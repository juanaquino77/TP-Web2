<?php
include_once 'libs/Smarty.class.php';

class prodeView extends View
{
	//private $smarty;
	//private $cabecera;
	//private $titulo;
	
	function __construct()
	{
		//$this->smarty = new Smarty();
		//$this->cabecera = 'PRODE UNION';
		//$this->titulo = 'PRODE CLUB UNION';
	}
	function mostrar()
	{
		//$this->smarty->assign('titulo', $this->titulo);
		//$this->smarty->assign('cabecera', $this->cabecera);
  		$this->smarty->display('templates/index.tpl');
	}
}
?>