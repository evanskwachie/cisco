<?php
    require_once 'libs/functions/Session.php';
    require_once 'libs/functions/DUtil.php';
    Session::init();
    Session::set('hello', "Hello there");
?>

<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="static/css/bootstrap.min.css">
        <title>University of Cape Coast | Clearance System</title>
    </head>
    	