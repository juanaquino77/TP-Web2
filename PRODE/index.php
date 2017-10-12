<?php
include_once 'tareas.php';
include_once 'libs/Smarty.class.php';
define('HOME', 'http://'.$_SERVER['SERVER_NAME'].dirname($_SERVER['PHP_SELF']).'/prode');

function finalizarTarea($params){
  markCompletedTarea($params[0]);
  header('Location: '.HOME);
}

function borrarTarea($params){
  deleteTarea($params[0]);
  header('Location: '.HOME);
}

function agregarResultados(){
  $id_tarea = array();
  $res_local = array();
  $res_visitante = array();
  for ($i = 1; $i <= 14; $i++) {
    $resultadoLocal = 'resultadoLocal_'.$i;
    $res_local[$i] = $_POST[$resultadoLocal];
    $resultadoVisita = 'resultadoVisitante_'.$i;
    $res_visitante[$i] = $_POST[$resultadoVisita];
    $id_tarea[$i] = $i;
  }
  insertResultados($res_local, $res_visitante);
  header('Location: '.HOME);
}
function mostrarEquipos(){
  $equipos = getEquipos();
  $smarty = new Smarty();
  $smarty->assign('equipos', $equipos);
  $smarty->display('templates/equipos.tpl');
}
function agregar(){
  $id = $_POST['idClub'];
  $nombreEstadio = $_POST['nombreEstadio'];
  insertEstadio($id, $nombreEstadio);
  header('Location: '.HOME);
}
function agregarPartido(){
  $jornada = getJornada(1);
  $equipos = getEquipos();
  $usuario = getUsuario();
  $smarty = new Smarty();
  $smarty->assign('jornada', $jornada);
  $smarty->assign('equipos', $equipos);
  $smarty->display('templates/agregarPartido.tpl');
}
function agregarEstadio(){
  $jornada = getJornada(1);
  $equipos = getEquipos();
  $usuario = getUsuario();
  $titulo = 'PRODE CLUB UNION';
  $cabecera = 'PRODE UNION';
  $smarty = new Smarty();
  $smarty->assign('titulo', $titulo);
  $smarty->assign('cabecera', $cabecera);
  $smarty->assign('jornada', $jornada);
  $smarty->assign('equipos', $equipos);
  $smarty->display('templates/agregarEstadio.tpl');
}

function home()
{
  $jornada = getJornada(1);
  $usuario = getUsuario();
  $equipos = getEquipos();
  //print_r($equipos);

  $titulo = 'PRODE CLUB UNION';
  $cabecera = 'PRODE UNION';
  $smarty = new Smarty();
  $smarty->assign('titulo', $titulo);
  $smarty->assign('cabecera', $cabecera);
  $smarty->assign('jornada', $jornada);
  $smarty->assign('equipos', $equipos);
  $smarty->display('templates/index.tpl');
}  
?>
