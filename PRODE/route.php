<?php

  define('ACTION', 0);
  define('PARAMS', 1);
  include_once 'config/ConfigApp.php';
  include_once 'model/model.php';
  include_once 'controller/controller.php';
  include_once 'view/view.php';
  include_once 'controller/prodeController.php';
  include_once 'controller/equipoController.php';
  include_once 'controller/partidoController.php';
  include_once 'controller/loginController.php';

   
  //$controller = new prodeController();
  //$equipoController = new equipoController();
  //$partidoController = new partidoController();


  //include_once 'index.php';

  function parseURL($url)
  {
    $urlExploded = explode('/', $url);
    $arrayReturn[ConfigApp::$ACTION] = $urlExploded[ACTION];
    $arrayReturn[ConfigApp::$PARAMS] = isset($urlExploded[PARAMS]) ? array_slice($urlExploded,1) : null;
    return $arrayReturn;
  }

  if(isset($_GET['action'])){
    $urlData = parseURL($_GET['action']);
    $action = $urlData[ConfigApp::$ACTION];
    if(array_key_exists($action,ConfigApp::$ACTIONS)){
        $params = $urlData[ConfigApp::$PARAMS];
        $action = explode('#',ConfigApp::$ACTIONS[$action]); //Array[0] -> TareasController [1] -> index
        $controller =  new $action[0]();
        $metodo = $action[1];
        if(isset($params) &&  $params != null){
            echo $controller->$metodo($params);
        }
        else{
            echo $controller->$metodo();
        }
    }
  }
  else{
    echo $equipoController->mostrarEquipos();
  }
?>
