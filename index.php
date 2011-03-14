<?php
	/**
	 * PHP Basic MVC Framework Part 4 - Loading Models
	 * By John White (@Jontyy)
	 */

	define('SITE_PATH',realpath(dirname(__FILE__)).'/');

	/*Require necessary files.*/
	require_once(SITE_PATH.'application/request.php');
	require_once(SITE_PATH.'application/router.php');
	require_once(SITE_PATH.'application/baseController.php');
	require_once(SITE_PATH.'application/baseModel.php');
	require_once(SITE_PATH.'application/load.php');
	require_once(SITE_PATH.'application/registry.php');
	require_once(SITE_PATH.'controllers/indexController.php');

	
	$controller = new indexController;	
	call_user_func(array($controller,'index'));

?>

