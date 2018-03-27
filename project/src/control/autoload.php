<?php 

spl_autoload_register(function ($class_name)
{
	$filename = $class_name.".php";

	if (file_exists($filename)) {
		require_once $filename;
	}
});

spl_autoload_register(function ($class_name)
{
	$filename = "../dao/".$class_name.".php";

	if (file_exists($filename)) {
		require_once $filename;
	}
});
spl_autoload_register(function ($class_name)
{
	$filename = "../model/".$class_name.".php";

	if (file_exists($filename)) {
		require_once $filename;
	}
});
spl_autoload_register(function ($class_name)
{
	$filename = "../interface/".$class_name.".php";

	if (file_exists($filename)) {
		require_once $filename;
	}
});


 ?>