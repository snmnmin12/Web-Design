<?php
$con = mysql_connect('localhost','root','song') or die('Connection is not established!');
mysql_select_db('Car', $con) or die("Can't connect to this database!");

$modelid =   mysql_real_escape_string($_POST['modelid']);
$modelname =   mysql_real_escape_string($_POST['modelname']);
$makerid    =   mysql_real_escape_string($_POST['makerid']);
$year    =   mysql_real_escape_string($_POST['year']);
$styleid    =   mysql_real_escape_string($_POST['styleid']);
$picture    =   mysql_real_escape_string($_POST['picture']);


$action   = $_POST['action'];
$key = explode(',',$_POST['key']);
// echo "<script>alert('$key[0]')</script>";

$modelid   =   !strlen($modelid)?"NULL":"'$modelid'";
$modelname =   !strlen($modelname)?"NULL":"'$modelname'";
$makerid   =   !strlen($makerid)?"NULL":"'$makerid'";
$year      =   !strlen($year)?"NULL":"'$year'";
$styleid   =   !strlen($styleid)?"NULL":"'$styleid'";
$picture   =   !strlen($picture)?"NULL":"'$picture'";
// echo "<script>alert('$picture')</script>";

if ("Add" == $action) {

    // if (!empty($modelid) and  !empty($modelname)) 
    // {
          $query = "insert into carModel values(".$modelid.",".$modelname.",".$makerid.",".$year.",".$styleid.",".$picture.")";
          $run = mysql_query($query);
          echo $query;
          if (!$run) {echo"<script>alert('Insertion is unsuccessful!')</script>";}
    // }
}

else if ("Update" == $action) {

    // if (!empty($modelid) and  !empty($modelname)) 
    // {
         // echo "<script> alert('Update is clicked!') </script>";
          $query = "update carModel set ModelId=".$modelid.",Modelname = ".$modelname.", MakerId = ".$makerid.", year=".$year.",styleId =".$styleid.",
           picture = ".$picture." where ModelId = '".$key[0]."' and year = '".$key[3]."' and styleId = '".$key[4]."'"; 
           // echo $query;
          $run = mysql_query($query);
          if (!$run) {
             echo"<script>alert('model can not be updated due to reference issue!')</script>";
           }
    // }

}
else if ("Delete" == $action) {
    // echo "<script> alert('delete is submited') </script>";
    // echo "<script> alert('$modelid') </script>";
    $query =  "delete from carModel where ModelId = ".$modelid." and year = ".$year." and styleId = ".$styleid;  
    echo $query;
    $run = mysql_query($query);
    if (!$run) { echo"<script>alert('Can not be Deleted!')</script>";}
}
mysql_close($con);
?>