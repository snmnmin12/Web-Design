<?php
$con = mysql_connect('localhost','root','song') or die('Connection is not established!');
mysql_select_db('Car', $con) or die("Can't connect to this database!");

$engineid   = mysql_real_escape_string($_POST['engineid']);
$enginename = mysql_real_escape_string($_POST['enginename']);
$code = mysql_real_escape_string($_POST['code']);
$comRatio = mysql_real_escape_string($_POST['comRatio']);
$comType = mysql_real_escape_string($_POST['comType']);
$configuration =mysql_real_escape_string($_POST['configuration']);
$cylinder = mysql_real_escape_string($_POST['cylinder']);
$displacement = mysql_real_escape_string($_POST['displacement']);
$fuelType  = mysql_real_escape_string($_POST['fuelType']);
$horsepower = mysql_real_escape_string($_POST['horsepower']);
$rpm = mysql_real_escape_string($_POST['rpm']);
$size =  mysql_real_escape_string($_POST['size']);
$type = mysql_real_escape_string($_POST['type']);

$action   = $_POST['action'];

$engineid   = !strlen($engineid)?"NULL":"'$engineid'";
$enginename = !strlen($enginename)?"NULL":"'$enginename'";
$code = !strlen($code)?"NULL":"'$code'";
$comRatio = !strlen($comRatio)?"NULL":"'$comRatio'";
$comType = !strlen($comType)?"NULL":"'$comType'";
$configuration = !strlen($configuration)?"NULL":"'$configuration'";
$cylinder = !strlen($cylinder)?"NULL":"'$cylinder'";
$displacement = !strlen($displacement)?"NULL":"'$displacement'";
$fuelType  = !strlen($fuelType)?"NULL":"'$fuelType'";
$horsepower = !strlen($horsepower)?"NULL":"'$horsepower'";
$rpm = !strlen($rpm)?"NULL":"'$rpm'";
$size = !strlen($size)?"NULL":"'$size'";
$type = !strlen($type)?"NULL":"'$type'";

// echo "<script>alert('$rpm')</script>";

if ("Add" == $action) {

    $query = "insert into engine values(".$engineid.",".$enginename.",".$code.",".$comRatio.",".$comType.",".$configuration.",".$cylinder.",".$displacement.",".$fuelType.",".$horsepower.",".$rpm.",".$size.",".$type.")"; 
    // echo $query;
    $run = mysql_query($query);
    if (!$run) {echo"<script>alert('Engine can't be inserted!');</script>";}
}

else if ("Update" == $action) {
         // echo "<script> alert('Update is clicked!') </script>";
    $query = "update engine set name= ".$enginename.", code = ".$code.",
     comRatio = ".$comRatio.", comType=".$comType.", configuration = ".$configuration.", cylinder = ".$cylinder.",displacement=".$displacement.",fuelType = ".$fuelType.",horsepower=".$horsepower.",rpm =".$rpm.", size = ".$size.", type =".$type." where engineid =".$engineid; 
    $run = mysql_query($query);
    if (!$run) {
       echo"<script>alert('Engine can not be updated due to reference issue!')</script>";
     }
}
else if ("Delete" == $action) {
    // echo "<script> alert('delete is submited') </script>";
    // echo "<script> alert('$modelid') </script>";
    $query =  "delete from engine where engineid = ".$engineid; 
    $fhrun = mysql_query($query);
    if (!$run) { echo"<script>alert('Can not be Deleted!')</script>";}
}
mysql_close($con);
?>