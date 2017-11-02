<?php
phpinfo();
class Model
{
  protected $db;

  function __construct()
  {

   	$this->db = new PDO('mysql:host=localhost;'.'dbname=db_prode;charset=utf8', 'root', '');
  }
}
?>
	