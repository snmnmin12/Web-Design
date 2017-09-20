<?php

$con = mysql_connect('localhost','root','song') or die('Connection is not established!');
mysql_select_db('Users', $con) or die("Can't connect to this database!");

$username =   mysql_real_escape_string($_POST['username']);
$userpass =   mysql_real_escape_string($_POST['userpass']);
$email    =   filter_var($_POST['email'], FILTER_SANITIZE_EMAIL); 
$fname    =   mysql_real_escape_string($_POST['fname']);
$lname    =   mysql_real_escape_string($_POST['lname']);
$action   = $_POST['action'];
$key = explode(',',$_POST['key']);

$username =   !strlen($username)?"NULL":"'$username'";
$userpass =   !strlen($userpass)?"NULL":"'$userpass'";
$email    =   !strlen($email)?"NULL":"'$email'";
$fname    =   !strlen($fname)?"NULL":"'$fname'";
$lname    =   !strlen($lname)?"NULL":"'$lname'";

$action   = $_POST['action'];

// echo "<script>alert('$action',)</script>";

if ("Add" == $action) {

          // echo "<script>alert('$action')</script>";
          $query = "insert into users values(".$username.",".$userpass.",".$email.",".$fname.",".$lname.")"; 
          echo $query;
          $run = mysql_query($query);
          if (!$run) {
            echo"<script>alert('User name exists!')</script>";
          }
}

else if ("Update" == $action) {
    // if (!empty($userpass) and  !empty($email)) 
    // {
          $query = "update users  set username = ".$username.", userpass=".$userpass.",email = ".$email.", fname = ".$fname.",
          lname = ".$lname." where username = '".$key[0]."'"; 
          $run = mysql_query($query);
          if (!$run) {
            echo"<script>alert('Can not be updated!')</script>";
          // }
    }
}
else if ("Delete" == $action) {

    // echo "<script> alert('delete is submited') </script>";
    $query = "delete from users where username = ".$username; 
    $run = mysql_query($query);
    if (!$run) 
    {
      echo"<script>alert('username can not be changed!')</script>";
    }

}
mysql_close($con);
?>