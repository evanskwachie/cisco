<?php

  require_once 'libs/functions/connection.php';
  require_once 'libs/functions/DUtil.php';

  function authenticate_user($username, $password, $section){

    $dbase = dbase();

    $password = DUtil::hash_value('md5', $password, SECRET_KEY);

    $data = $dbase->select(
      "SELECT  admin_id FROM admin WHERE username = :username AND password = :password", array('username' => $username , 'password' => $password) 
    );

    // echo $dbase->showQuery();
    $num = $data->num_rows;

    echo $num;

    print_r($data);

    echo $username .' '.$password;
    die();

    // print_r($data);

    // die();

  }




?>