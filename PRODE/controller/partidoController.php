<?php
include_once 'model/partidoModel.php';
include_once 'view/partidoView.php';
include_once 'model/equipoModel.php';

class partidoController extends Controller
{
	//private $view;
	//private $model;
	private $equipoModel;
	private $id;
	
	function __construct()
	{
		$this->view = new partidoView();
		$this->model = new partidoModel();
		$this->equipoModel = new equipoModel();
		
	}
	public function mostrarPartidos()
	{
  		$partidos = $this->model->getPartidos();
		$this->view->mostrarPartidos($partidos);
	}
	public function mostrarPartido($id)
	{
  		$equipos = $this->model->getEquipos();
		//$this->view->agregarEstadio();
	}
	public function agregarPartido()
	{
  		$equipos = $this->equipoModel->getEquipos();
		$this->view->agregarPartido($equipos);
	}
}
?>