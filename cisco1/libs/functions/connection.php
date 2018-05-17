<?php
    require_once 'Database.php';

    function dbase(){

    	$db_config = array(
	        'type' => 'mysql',
	        'host' => 'localhost',
	        'name' => 'clearance',
	        'user' => 'root',
	        'passwd' => 'programmer422'
	    );

    	$db = new Database($db_config);
    	return $db;
    }

?>