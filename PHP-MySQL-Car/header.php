<?php
$url = $_SERVER['SERVER_NAME'] . dirname(__FILE__);
// echo "<script>alert('$url')</script>"
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content=" Songmingmin">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/~snmnmin/project/css/login.css" >
    <script src= "/~snmnmin/project/js/login.js"> </script>

   <title>Car Search</title>
    <style>

    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    a.active {
        color: #029f5b;
        font-size: 18px;
    }

    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    #hidden{
      display:none;
    }
   th {
      background:  #800000;
     color: white;
    }
   th,td {
      max-width: 150px;
   }
    label.form {
      display: block
    }
    a.cancel{
      display: none;
    }
/*    button.active{
      display: block;
    }
    button.inactive{
      display: none;
    }*/
    /* Set black background color, white text and some padding */
    footer {
/*      position: fixed;
      right: 0;
	    bottom: 0;
	    left: 0;*/
      text-align: center;
/*      background-color: #555;*/
      color: white;
      padding: 5px;
    }
    </style>

  </head>
  
<nav class="navbar navbar-inverse">
  <div class="container-fluid">

    <div class="navbar-header">
      <a class="navbar-brand" href="#">Car Info</a>
    </div>

    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="/~snmnmin/project">Home</a></li>
        <li><a href="../model" style="display: none;">Modelview</a></li>
        <li><a href="/~snmnmin/project/about.php">About</a></li>
        <li><a href="http://faculty.cs.tamu.edu/chen/" target="_blank">Projects</a></li>
        <li><a href="/~snmnmin/project/contact.php">Contact</a></li>
        <li><a href="../logout" id = 'hidden'>Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
