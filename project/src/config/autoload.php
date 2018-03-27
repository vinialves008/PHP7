<?php

function includeVSrcModel($nameClass){
	if (file_exists( ".." .DIRECTORY_SEPARATOR . "src". DIRECTORY_SEPARATOR. "model" . DIRECTORY_SEPARATOR . $nameClass . ".php")) {
		require_once ".." .DIRECTORY_SEPARATOR . "src". DIRECTORY_SEPARATOR. "model" . DIRECTORY_SEPARATOR . $nameClass . ".php";
	}
}
function includeModel($nameClass){
	if (file_exists( "model" . DIRECTORY_SEPARATOR . $nameClass . ".php")) {
		require_once "model" . DIRECTORY_SEPARATOR . $nameClass . ".php";
	}
}
function includeView($nameClass){
	if (file_exists( "view"  . DIRECTORY_SEPARATOR. $nameClass . ".php")) {
		require_once "view"  . DIRECTORY_SEPARATOR. $nameClass . ".php";
	}
}
function includeControl($nameClass){
	if (file_exists( "view"  . DIRECTORY_SEPARATOR. $nameClass . ".php")) {
		require_once "view"  . DIRECTORY_SEPARATOR. $nameClass . ".php";
	}
}
function includeVSrcControl($nameClass){
	if (file_exists( ".." .DIRECTORY_SEPARATOR . "src". DIRECTORY_SEPARATOR. "control" . DIRECTORY_SEPARATOR . $nameClass . ".php")) {
		require_once ".." .DIRECTORY_SEPARATOR . "src". DIRECTORY_SEPARATOR. "control" . DIRECTORY_SEPARATOR . $nameClass . ".php";
	}
}
function includeViewControl($nameClass){
	if (file_exists( "view"  . DIRECTORY_SEPARATOR. $nameClass . ".php")) {
		require_once "view"  . DIRECTORY_SEPARATOR. $nameClass . ".php";
	}
}
function includeDao($nameClass){
	if (file_exists( "dao"  . DIRECTORY_SEPARATOR. $nameClass . ".php")) {
		require_once "dao"  . DIRECTORY_SEPARATOR. $nameClass . ".php";
	}
}

spl_autoload_register("includeModel");
spl_autoload_register("includeVSrcModel");


spl_autoload_register("includeView");

spl_autoload_register("includeControl");
spl_autoload_register("includeVSrcControl");

spl_autoload_register("includeViewControl");

spl_autoload_register("includeDao");

?>