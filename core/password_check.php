<?php 
   require_once 'functions.php';
   $connected = connectDB();

   if (isset($_POST['oldPassword'])) {
     $oldPassword = htmlspecialchars($_POST['oldPassword']);

     //checking if not empty && query return a number to check if nickname exist.
     if (!empty($oldPassword)) {
     	    $select = "SELECT * FROM user WHERE password = '$oldPassword'";
        	$password_query = mysqli_query($connected, $select);
            $info = $select->num_rows;
            $row = $select->fetch_array();
            print_r($row);
            die();

            if ($username_result > 0) {
            	echo "sorry someone has already taken that username";
            } else {
            	echo "Username available!";
            }
        	
        }else {
            
        	   }  	   
   }else {

   }
    $connected->close();


?>