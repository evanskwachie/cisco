<?php

@session_start();

  include('includes/head.php'); 

  include('core/functions.php');

  if (empty($_SESSION['admin_user'])) {
    # code...
    header("Location: admincms.php");

  }else {
    
  }

$connected = connectDB();

$output = '';

$output .= '

  <table class="table table-responsive">
            <tr class="w3-green">
            <th>Trans_id</th>
            <th>ph_user_id</th>
            <th>ph_amount</th>
            <th>Date Created</th>
            <th>Date Released</th>
            <th>Pay To</th>
            <th>Gh User1</th>
            <th>Gh User1 Amt</th>
            <th>Gh User2</th>
            <th>Gh User2 Amt</th>
            <th>GH Amount</th>
            <th>Paid</th>
            <th>Status1</th>
            <th>Status2</th>
            </tr>

            
            <tr>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
            </tr>
';

echo $output;








?>