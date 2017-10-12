<?php
include_once 'libs/Smarty.class.php';

class prodeView 
{
	private $smarty;

	function __construct(argument)
	{
		  $this->smarty = new Smarty();

	}
	function mostrar()
	{
		$cabecera = 'PRODE UNION';
		$this->smarty->assign('cabecera', $cabecera);
  		$this->smarty->display('templates/index.tpl');
		# code...
	}
}


?>