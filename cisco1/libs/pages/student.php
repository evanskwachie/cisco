<?php

	require_once 'libs/functions/connection.php';
	require_once 'libs/functions/DUtil.php';

	function clearance_data($studid){
		$dbase = dbase();
		$data = $dbase->select(
			"SELECT * FROM clear WHERE stud_id = :studid", 
			array('studid' => $studid)
		);
		
		return $data;
	}