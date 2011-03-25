<?php
	/**
	 * PHP Basic MVC Framework Part 6 - Request
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

	$request = new Request;	

	echo '<pre>'.print_r($request,1).'</pre>';	
	
