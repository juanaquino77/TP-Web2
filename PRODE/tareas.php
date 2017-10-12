<?php
function connect() {
  return new PDO('mysql:host=localhost;'
  .'dbname=db_prode;charset=utf8'
  , 'root', '');
}
function markCompletedTarea($id_tarea) {
  $db = connect();
  $sentencia = $db->prepare("UPDATE `tarea` SET `finalizada`=1 WHERE `id_tarea`=?");
  $sentencia->execute([$id_tarea]);
}
function deleteTarea($id_tarea) {
  $db = connect();
  $sentencia = $db->prepare( "delete from tarea where id_tarea=?");
  return $sentencia->execute([$id_tarea]);
}
function getEquipos() {
  $db = connect();
  $sentencia = $db->prepare( "select * from equipos");
  $sentencia->execute();
  return $sentencia->fetchAll(PDO::FETCH_ASSOC);
}
function getJornada($fecha) {
  $db = connect();
  $sentencia = $db->prepare( "select * from partido where id_fecha=?");
  $sentencia->execute([$fecha]);
  return $sentencia->fetchAll(PDO::FETCH_ASSOC);
}
function getUsuario() {
  $db = connect();
  $sentencia = $db->prepare( "select * from usuario");
  $sentencia->execute();
  return $sentencia->fetchAll(PDO::FETCH_ASSOC);
}
function insertResultados($res_local, $res_visitante) {
  $db = connect();
  for ($i = 1; $i <= sizeof($res_local); $i++) {  
    $sentencia = $db->prepare("UPDATE fecha SET res_local=$res_local[$i], res_visitante=$res_visitante[$i] WHERE $i=id");
    $sentencia->execute();
  }
}
function insertEstadio($id, $nombreEstadio) {
  $db = connect();
  $sentencia = $db->prepare( "UPDATE `equipos` SET `Estadio`='$nombreEstadio' WHERE Id_equipo='$id'");
  $sentencia->execute([$nombreClub, $nombreEstadio]);
}

 ?>
 