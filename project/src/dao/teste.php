<?php 

require_once 'autoload.php';

$crud = new CrudSql();
$user = new Usuario();
$user->setIdusuario(32);
$user->setNome("Jujuba");

$crud->update($user);


 ?>