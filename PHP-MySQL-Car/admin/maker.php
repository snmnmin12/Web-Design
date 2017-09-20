<?php
$con = mysql_connect('localhost','root','song') or die('Connection is not established!');
mysql_select_db('Car', $con) or die("Can't connect to this database!");

$makerid =   mysql_real_escape_string($_POST['makerid']);
$maker =   mysql_real_escape_string($_POST['maker']);
$country    =   mysql_real_escape_string($_POST['country']);
$manu    =   mysql_real_escape_string($_POST['manu']);
$address    =   mysql_real_escape_string($_POST['address']);
$action   = $_POST['action'];
$key = explode(',',$_POST['key']);
// echo "<script>alert('$makerid')</script>";
$makerid =  !strlen($makerid)?"NULL":"'$makerid'";
$maker =    !strlen($maker)?"NULL":"'$maker'";
$country =  !strlen($country)?"NULL":"'$country'";
$manu    =  !strlen($manu)?"NULL":"'$manu'";
$address =  !strlen($address)?"NULL":"'$address'";


if ("Add" == $action) {

    if (!empty($makerid) and  !empty($maker)) 
    {
          $query = "insert into carMaker values(".$makerid.",".$maker.",".$country.",".$manu.",".$address.")"; 
          $run = mysql_query($query);
          if (!$run) {
            echo"<script>alert('Makerid already exists!')</script>";
          }
    }
}

else if ("Update" == $action) {

    if (!empty($makerid) and  !empty($maker)) 
    {
          $query = "update carMaker set MakerId = ".$makerid.", Makername = ".$maker.", country = ".$country.",
          manufactuer= ".$manu.", address = ".$address." where MakerId = '".$key[0]."'"; 
          $run = mysql_query($query);
          if (!$run) {
            echo"<script>alert('username can not be changed!')</script>";
          }
    }

}
else if ("Delete" == $action) {

    // echo "<script> alert('delete is submited') </script>";
    // echo "<script> alert('$makerid') </script>";
    $query =  "delete from carMaker where MakerId = ".$makerid; 
    $run = mysql_query($query);
    if (!$run) { echo"<script>alert('Can not be Deleted!')</script>";}

}
mysql_close($con);
?>