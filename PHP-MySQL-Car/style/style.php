<?php

$con = mysql_connect('localhost','root','song') or die('Connection is not established!');
mysql_select_db('Car', $con) or die("Can't connect to this database!");

$styleid =   mysql_real_escape_string($_POST['styleid']);
$stylename =   mysql_real_escape_string($_POST['stylename']);
$numDoors   =   mysql_real_escape_string($_POST['numDoors']); 
$mCode    =   mysql_real_escape_string($_POST['mCode']);
$body    =   mysql_real_escape_string($_POST['body']);
$transimission    =   mysql_real_escape_string($_POST['transimission']);
$trim =   mysql_real_escape_string($_POST['trim']);
$engineid =   mysql_real_escape_string($_POST['engineid']);
$drivenWheels   =   mysql_real_escape_string($_POST['drivenWheels']); 
$MPG    =   mysql_real_escape_string($_POST['MPG']);

$styleid = !strlen($styleid)?"NULL":"'$styleid'";
$stylename = !strlen($stylename)?"NULL":"'$stylename'";
$numDoors = !strlen($numDoors)?"NULL":"'$numDoors'";
$mCode = !strlen($mCode)?"NULL":"'$mCode'";
$body = !strlen($body)?"NULL":"'$body'";
$transimission = !strlen($transimission)?"NULL":"'$transimission'";
$trim = !strlen($trim)?"NULL":"'$trim'";
$engineid = !strlen($engineid)?"NULL":"'$engineid'";
$drivenWheels = !strlen($drivenWheels)?"NULL":"'$drivenWheels'";
$MPG = !strlen($MPG)?"NULL":"'$MPG'";

$action   = $_POST['action'];
$key = explode(',',$_POST['key']);
// echo "<script>alert('$action',)</script>";

if ("Add" == $action) {
    
    if (!empty($styleid)) 
    {
          // echo "<script>alert('$styleid')</script>";    
          $query = "insert into styles values(".$styleid.",".$stylename.",".$numDoors.",".$mCode.",".$body.",".$transimission.",".$trim.",".$engineid.",".$drivenWheels.",".$MPG.")";
          // echo $query;
          $run = mysql_query($query);
          if (!$run) {
            echo "<script>alert('Can't be inserted in the table!')</script>";
          }
    }
}

else if ("Update" == $action) {

    if (!empty($styleid)) 
    {
          // echo "<script>alert('$trim')</script>";
          $query = "update styles set styleId =".$styleid.", stylename=".$stylename.",numDoors = ".$numDoors.", mCode = ".$mCode.",
          body = ".$body.", transmission =". $transimission.", trim = ".$trim.", engineid = ".$engineid.", drivenWheels =".$drivenWheels.", MPG =".$MPG." where styleId = '".$key[0]."'"; 
          // echo $query;
          $run = mysql_query($query);
          if (!$run) {
            echo"<script>alert('Can not be updated!')</script>";
          }
    }

}
else if ("Delete" == $action) {

    // echo "<script> alert('delete is submited') </script>";
    $query = "delete from styles where styleId = ".$styleid; 
    $run = mysql_query($query);
    if (!$run) 
    {
      echo"<script>alert('styleId can not be changed!')</script>";
    }

}
mysql_close($con);
?>