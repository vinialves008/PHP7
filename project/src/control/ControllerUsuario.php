<?php
	require_once 'autoload.php';
	/**
	* 
	*/
	class ControllerUsuario extends CrudController{


	}
				
		
	$ControllerUsuario = new ControllerUsuario();
	$usuario = new Usuario();
	$users = $ControllerUsuario->select($usuario,2);

	echo $users;
?>