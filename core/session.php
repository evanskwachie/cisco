<?php
 require_once 'functions.php';
    $connected = connectDB();

@session_start();// Starting Session

      $connected->close();

       
?>