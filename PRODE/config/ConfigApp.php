<?php

class ConfigApp
  {
    public static $ACTION = 'action';
    public static $PARAMS = 'params';
    public static $ACTIONS = [
      ''=> 'prodeController#index',
      'index'=> 'equipoController#mostrarEquipos',
      'agregarResultados'=> 'agregarResultados',
      'agregarEstadio'=> 'equipoController#agregarEstadio',
      'guardarEstadio'=> 'equipoController#guardarEstadio',
      'agregar'=> 'agregar',
      'mostrarEquipos'=> 'equipoController#mostrarEquipos',
      'mostrarPartidos'=> 'partidoController#mostrarPartidos',
      'agregarPartido'=> 'partidoController#agregarPartido',
      'borrarTarea' => 'borrarTarea',
      'finalizarTarea' => 'finalizarTarea',
      'login' => 'LoginController#index',
      'verificarUsuario' => 'LoginController#verify',
      'logout' => 'LoginController#destroy'
    ];
  }
?>
