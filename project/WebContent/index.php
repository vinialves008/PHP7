<?php

	require_once '../../Composer/vendor/autoload.php';

spl_autoload_register(function($class_name)
{
	$filename = $class_name.".php";

	if (file_exists($filename)) {
		require_once $filename;
	}
});

	$tpl = new RainTpl();
	// $tpl->assign("name", "Vinícius Alves Modesto e Silva");
	// $tpl->assign("date", date("d/F/Y h:m:s"));
	$tpl->draw("head");
	$tpl->draw("header");
	$tpl->draw("scripts");
	$tpl->draw("index");
	$tpl->draw("footer");


?>