<?php
/**
* @author      Desmond Evans Kwachie Junior <ekwachie@gmail.com>
* @copyright   Copyright (C), 2016 Evans Kwachie
* @license     MIT LICENSE (https://opensource.org/licenses/MIT)
*              Refer to the LICENSE file distributed within the package.
*
* @todo PDO exception and error handling
* @category  functions
* @example
*    //function to connect to database
*      function connectDB(){
*    $con = mysqli_connect(HOST, USER, PASS, HOST_DB);
*
*    if (mysqli_connect_errno()) {
*       return false;
*     }else {
*        return $con;
*   }
*}
*/
  require_once 'config.php';
  @session_start();
  $_SESSION['error'] = false;
  $_SESSION['errorMessage'] = "";
  $_SESSION['success'] = false;
  $_SESSION['successMessage'] = "";

  //function to connect to database
  function connectDB(){
      $con = mysqli_connect(HOST, USER, PASS, HOST_DB);

      if (mysqli_connect_errno()) {
         die('<span class="alert alert-danger">Could not connect to database</span>');
       }else {
          return $con;
       }
  }

  // a function for redirecting webpages
  function redirect($url){
    header("Location: {$url}");
    exit(0);
  }

//creating the login function
  function login($email, $password, $section){
    $connected = connectDB();

    $query = "SELECT admin_id FROM admin WHERE username = '{$email}' AND password = '{$password}'";
        $run = $connected->query($query);
       $num_rows = $run->num_rows;
       
      if ($num_rows > 0) {
        #check if section selected is true
       $query_sec = "SELECT * FROM admin WHERE username = '{$email}' AND status = '{$section}'";
        $run = $connected->query($query_sec);
       $num = $run->num_rows;
       
       if ($num > 0) {
         # code...
        while ($data = mysqli_fetch_assoc($run)) {
          # code...
          $admin_id = $data['admin_id'];
          $section = $data['status'];
          $email = $data['username'];

          $_SESSION['user'] = $admin_id;

          $_SESSION['section'] = $section;

          $_SESSION['username'] = $email;

          redirect('template.php');
        }

       }else{

        echo "
              <div align='center'>
               <div class='col-md-6 alert alert-danger' >
                <p align='center'>Wrong Department / section</p>
              </div>
              </div>
            ";

       }

      }else {
              echo "
              <div align='center'>
               <div class='col-md-6 alert alert-danger' >
                <p align='center'>Wrong Email or Password</p>
              </div>
              </div>
            ";
      }

    
  }
  
  // authenticate if user is logged in
  function authenticate_user(){
    if (isset($_SESSION['user'])) {
      # code...
      return true;

    }else {

      return false;

    }
  }

  // updating the clearance Form
  function update_clearance($stud_id, $rmks, $val, $section){

    $connected = connectDB();

    switch ($section) {
      case 1:
        # faculty officer
          $query = "UPDATE clear SET stud_id = '{$stud_id}', faculty_officer = '{$val}', 
            faculty_rmks = '{$rmks}' WHERE stud_id = '{$stud_id}'";

            $run = $connected->query($query);

            if ($run) {
              # code...
             echo "<script>alert('clearance updated succesfully')</script>";
            }else {

              echo "<script>alert('something went wrong')</script>";
            }

        break;

      case 2:
        # faculty library
        $query = "UPDATE clear SET stud_id = '{$stud_id}', faculty_lib = '{$val}', 
            faculty_lib_rmks = '{$rmks}' WHERE stud_id = '{$stud_id}'";

            $run = $connected->query($query);

            if ($run) {
              # code...
             echo "<script>alert('clearance updated succesfully')</script>";
            }else {

              echo "<script>alert('something went wrong')</script>";
            }
       
        
        break;

       case 3:
        # main library
        $query = "UPDATE clear SET stud_id = '{$stud_id}', main_lib = '{$val}', 
            main_lib_rmks = '{$rmks}' WHERE stud_id = '{$stud_id}'";

            $run = $connected->query($query);

            if ($run) {
              # code...
             echo "<script>alert('clearance updated succesfully')</script>";
            }else {

              echo "<script>alert('something went wrong')</script>";
            }
       
        break;

      case 4:
        # audit section
      $query = "UPDATE clear SET stud_id = '{$stud_id}', audit_section = '{$val}', 
            audit_rmks = '{$rmks}' WHERE stud_id = '{$stud_id}'";

            $run = $connected->query($query);

            if ($run) {
              # code...
             echo "<script>alert('clearance updated succesfully')</script>";
            }else {

              echo "<script>alert('something went wrong')</script>";
            }
        
        break;
      
      case 5:
        # accounts section
      $query = "UPDATE clear SET stud_id = '{$stud_id}', acc_section = '{$val}', 
            acc_rmks = '{$rmks}' WHERE stud_id = '{$stud_id}'";

            $run = $connected->query($query);

            if ($run) {
              # code...
             echo "<script>alert('clearance updated succesfully')</script>";
            }else {

              echo "<script>alert('something went wrong')</script>";
            }
        
        break;

      case 6:
        # sports coach office
        $query = "UPDATE clear SET stud_id = '{$stud_id}', sports_coach = '{$val}', 
            sports_rmks = '{$rmks}' WHERE stud_id = '{$stud_id}'";

            $run = $connected->query($query);

            if ($run) {
              # code...
              echo "<script>alert('clearance updated succesfully')</script>";
            }else {

              echo "<script>alert('something went wrong')</script>";
            }
        break;

      case 7:
        # hall bursar
      $query = "UPDATE clear SET stud_id = '{$stud_id}', hall_bursar = '{$val}', 
            hall_rmks = '{$rmks}' WHERE stud_id = '{$stud_id}'";

            $run = $connected->query($query);

            if ($run) {
              # code...
             echo "<script>alert('clearance updated succesfully')</script>";
            }else {

              echo "<script>alert('something went wrong')</script>";
            }
      
        break;

      default:
        # code...
        break;
    }

    
  }
  
//creating a registeration function
  function register_admin($email, $password, $section){

     $connected = connectDB();

     $query = "INSERT INTO `admin` (`username`, `password`, `status`) 
     VALUES ('{$email}', '{$password}', '{$section}')";

      $results = $connected->query($query);

      if(!$results) {

          echo "
           <div align='center'>
             <div class='col-md-6 alert alert-danger' >
              <p align='center'>Email or number already exist</p>
            </div>
            </div>

        ";
    }else {
                  
         echo "
            <div align='center'>
             <div class='col-md-6 alert alert-success' >
              <p align='center'>Acount registere successfully. Please Login Here.<a href='admin.php'><button class='btn btn-primary'>Login</button></a></p>
            </div>
            </div>

        ";      
                  
                   
        }
    }

 /**********/
//an algorithm for password hashing
  function hash_value($algo, $data, $salt = null) {
        if(is_null($salt) === true) {
            $context = hash_init($algo);
            hash_update($context, $data);
            return hash_final($context);
        } else {
            $context = hash_init($algo, HASH_HMAC, $salt);
            hash_update($context, $data);
            return hash_final($context);
        }
    }
?>