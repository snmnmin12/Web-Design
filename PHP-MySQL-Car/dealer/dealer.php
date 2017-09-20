<?php

$con = mysql_connect('localhost','root','song') or die('Connection is not established!');
mysql_select_db('Car', $con) or die("Can't connect to this database!");

$dealerid = mysql_real_escape_string($_POST['dealerid']);
$name  =    mysql_real_escape_string($_POST['dealername']);
$make  =    mysql_real_escape_string($_POST['brand']);
$distance = mysql_real_escape_string($_POST['distance']);
$street  =  mysql_real_escape_string($_POST['street']);
$city    =  mysql_real_escape_string($_POST['city']);
$stateName = mysql_real_escape_string($_POST['stateName']);
$zipcode =  mysql_real_escape_string($_POST['zipcode']);


$dealerid  = !strlen($dealerid)?"NULL":"'$dealerid'";
$name      = !strlen($name)?"NULL":"'$name'";
$make      = !strlen($make)?"NULL":"'$make'";
$distance  = !strlen($distance)?"NULL":"'$distance'";
$street    = !strlen($street)?"NULL":"'$street'";
$city      = !strlen($city)?"NULL":"'$city'";
$stateName = !strlen($stateName)?"NULL":"'$stateName'";
$zipcode   = !strlen($zipcode)?"NULL":"'$zipcode'";


$action   = $_POST['action'];
$key = explode(',',$_POST['key']);
// echo "<script>alert('$key[1]')</script>";

if ("Add" == $action) {
    $query = "insert into dealer values(".$dealerid.",".$make.",".$name.",".$distance.",".$street.",".$city.",".$stateName.",".$zipcode.")";
    $run = mysql_query($query);
    if (!$run) { echo "<script>alert('Dealer can't be inserted!')</script>"; }
}
else if ("Update" == $action) {
   // echo "<script> alert('Update is clicked!') </script>";
    $query = "update  dealer set dealerid =".$dealerid.", make = ".$make.", name = ".$name.", distance = ".$distance.", street = ".$street.",city = ".$city.",stateName = ".$stateName.",zipcode = ".$zipcode." where dealerid = '".$key[0]."' and make ='".$key[2]."'"; 
     echo $query;
    $run = mysql_query($query);
    // if (!$run) { echo"<script>alert('Dealer can not be updated due to reference issue!')</script>";}
}
else if ("Delete" == $action) {
    // echo "<script> alert('delete is submited') </script>";
    // echo "<script> alert('$modelid') </script>";
    $query =  "delete from dealer where dealerid = ".$dealerid; 
    $run = mysql_query($query);
    if (!$run) { echo"<script>alert('Can not be Deleted!')</script>";}
}

mysql_close($con);
?>