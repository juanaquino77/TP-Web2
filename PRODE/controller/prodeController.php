<?php
//include_once 'model/prodeModel.php';
include_once 'view/prodeView.php';
include_once 'model/equipoModel.php';
include_once 'view/equipoView.php';

//define('HOME', 'http://'.$_SERVER['SERVER_NAME'].dirname($_SERVER['PHP_SELF']).'/');

class prodeController extends Controller
{
	//private $view;
	//private $model;
	
	
	function __construct()
	{
		$this->view = new prodeView();
		//$this->equipoView = new equipoView();
	//	$this->model = new prodeModel();
	//	$this->equipoModel = new equipoModel();
	//	$this->partidoModel = new partidoModel();
	//	$this->partidoView = new partidoView();
		
	}
	public function index()
	{
		//die(HOME);
  		//$equipos = $this->model->getEquipos();
		$this->view->mostrar();
	}

//	public function mostrarEquipos()
//	{
  //		$equipos = $this->equipoModel->getEquipos();
	//	$this->equipoView->mostrarEquipos($equipos);
//	}
//	public function mostrarPartidos()
//	{
//  		$partidos = $this->partidoModel->getPartidos();
//		$this->partidoView->mostrarPartidos($partidos);
//	}
}


?>