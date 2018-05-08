<?php
  require_once 'functions.php';

  @session_start();
  if(isset($_SESSION['login_user'])){
  header("location: ../dashBoard.php");
  }else{
   header("location: ../index.php");
  }

  $connected = connectDB();
  if(isset($_POST['btn-login'])){
    if (isset($_POST['username']) && isset($_POST['password'])) {
      if (!empty($_POST['username']) || !empty($_POST['password'])) {
        $username = mysqli_real_escape_string($connected, $_POST['username']);
        $password = mysqli_real_escape_string($connected, $_POST['password']);
        $username = trim($username);
        $password = trim($password);
        $password = hash_value('md5', $_POST['password'], SECRET_KEY);
        // $email;
        login($username, $password);

      }
  }
  //for registeration
}elseif (isset($_POST['register'])) {
  if(! get_magic_quotes_gpc() ) {
    // $fname = addslashes($_POST['fname']);
    // $lname = addslashes($_POST['lname']);
    $username = addslashes($_POST['username']);
    $email = addslashes($_POST['email']);
    $contact = addslashes($_POST['contact']);
    $password = $_POST['password'];
    $confirmPassword = addslashes($_POST['confirmPassword']);

  }else {
    //  $fname = $_POST['fname'];
    // $lname = $_POST['lname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $contact = addslashes($_POST['contact']);
    $password = $_POST['password'];
    $confirmPassword = $_POST['password'];
  }


  if($password === $confirmPassword){
      $password = hash_value('md5', $password, SECRET_KEY);
  } else{
      $_SESSION['error'] = true;
      $_SESSION['errorMessage'] = "The passwords must match";
      redirect('../register.php');
  }

  if (!empty($username) && !empty($email) && !empty($contact) && !empty($password)) {
    signUp($username, $password, $email, $contact);
  } else {
     $_SESSION['error'] = true;
      $_SESSION['errorMessage'] = "All input fills should be filled";
      redirect('../register.php');
  }

  
}

?>
