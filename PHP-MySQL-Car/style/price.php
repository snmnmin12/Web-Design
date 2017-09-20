<?php

$con = mysql_connect('localhost','root','song') or die('Connection is not established!');
mysql_select_db('Car', $con) or die("Can't connect to this database!");

$styleid =   mysql_real_escape_string($_POST['priceid']);
$baseInvoice =   mysql_real_escape_string($_POST['baseinvoice']);
$usedPriParty =   mysql_real_escape_string($_POST['thirdparty']);
$usedRetail   =   mysql_real_escape_string($_POST['retail']); 
$usedTradeIn    =   mysql_real_escape_string($_POST['tradein']);

$styleid = !strlen($styleid)?"NULL":"'$styleid'";
$baseInvoice = !strlen($baseInvoice)?"NULL":"'$baseInvoice'";
$usedPriParty = !strlen($usedPriParty)?"NULL":"'$usedPriParty'";
$usedRetail = !strlen($usedRetail)?"NULL":"'$usedRetail'";
$usedTradeIn = !strlen($usedTradeIn)?"NULL":"'$usedTradeIn'";


$action   = $_POST['action'];
$key = explode(',',$_POST['key']);
// echo "<script>alert('$action',)</script>";

if ("Add" == $action) {

    if (!empty($styleid)) 
    {     
          echo "<script>alert('$styleid')</script>";
          $query = "insert into price values(".$styleid.",".$baseInvoice.",".$usedPriParty.",".$usedRetail.",".$usedTradeIn.")";
          $run = mysql_query($query);
          if (!$run) {
            echo"<script>alert('Styleid name exists or incomplete information!')</script>";
          }
    }
}

else if ("Update" == $action) {

    if (!empty($styleid)) 
    {
          $query = "update price set styleId = ".$styleid.",baseInvoice=".$baseInvoice.", usedPriParty=".$usedPriParty.", usedRetail= ".$usedRetail.", usedTradeIn = ".$usedTradeIn." where styleId = '".$key[0]."'"; 
          $run = mysql_query($query);
          if (!$run) 
          {
            echo"<script>alert('Can not be Updated!')</script>";
          }
    }

}
else if ("Delete" == $action) {

    // echo "<script> alert('delete is submited') </script>";
    $query = "delete from price where styleId = ".$styleid; 
    $run = mysql_query($query);
    if (!$run) 
    {
      echo"<script>alert('styleId can not be changed!')</script>";
    }

}
mysql_close($con);
?>