<?php

include_once 'libs/Smarty.class.php';

class View
{
  protected $smarty;
  protected	$cabecera = 'PRODE UNION';
  protected	$titulo = 'PRODE CLUB UNION';

  function __construct()
  {
    $this->smarty = new Smarty();
	$this->smarty->assign('cabecera', 'PRODE UNION');
    $this->smarty->assign('titulo', 'PRODE CLUB UNION');
  }
}
 ?>