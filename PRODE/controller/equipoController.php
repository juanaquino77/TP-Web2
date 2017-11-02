<?php
include_once 'model/equipoModel.php';
include_once 'view/equipoView.php';

class equipoController extends Controller
{
	//private $view;
	//private $model;
	//private $id;
	
	function __construct()
	{
		$this->view = new equipoView();
		$this->model = new equipoModel();
		
	}
	public function mostrarEquipos()
	{
  		$equipos = $this->model->getEquipos();
		$this->view->mostrarEquipos($equipos);
	}
	public function mostrarEquipo($id)
	{
  		$equipos = $this->model->getEquipos();
		//$this->view->agregarEstadio();
	}
	public function agregarEstadio()
	{
  		$equipos = $this->model->getEquipos();
		$this->view->agregarEstadio($equipos);
	}
	public function guardarEstadio()
	{
		$idClub = $_POST['idClub'];
		$nombreEstadio = $_POST['nombreEstadio'];
  		$this->model->insertEstadio($idClub, $nombreEstadio);
  		header('Location: '.HOME.agregarEstadio);
	}

	function agregar(){
	  $id = $_POST['idClub'];
	  $nombreEstadio = $_POST['nombreEstadio'];
	  insertEstadio($id, $nombreEstadio);
	  //header('Location: '.HOME);
	}
}
?>