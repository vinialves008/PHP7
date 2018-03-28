<?php 

use Rain\Tpl;
	/**
	* 
	*/
class RainTpl extends Tpl
{
	

	protected $config = array(
		"tpl_dir" => "view/",
		"cache_dir" => "cache/"
	);
	
	function __construct()
	{
		Tpl::configure($this->config);
	}
}

 ?>