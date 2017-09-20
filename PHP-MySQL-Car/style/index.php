<?php
session_start();
if (!$_SESSION['username']) {
  session_unset();
  header('location: ../');
  exit();
} 
// $con = mysqli_connect('database2.cse.tamu.edu','snmnmin','song','snmnmin-Car') or die('Connection is not established!');
$con = mysql_connect('localhost','root','song') or die('Connection is not established!');
mysql_select_db('Car', $con) or die("Can't connect to this database!");
require_once('../header.php')
?>
<script src = "../js/nav.js"></script>
<script type="text/javascript"> 
$('title').html("Style Info");
$('li.active').removeClass('active');
$("a:contains('StyleView')").parent().addClass('active');
</script>

<style>
th{
  background:  #800000;
  color: white;
}
th,td {
  max-width: 200px;
}
</style>
<body id = 'top'>
<div class = "container">
        <h3>Style Info System</h3><hr/>
              <form id = 'formstyle' method = 'post' class = "form form-inline">
                   <input type = "hidden" name = "form" value = "style" readonly>
                   <div class = "form-group">
                     <label class = "form" for = "styleid">StyleId</label>
                     <input type="text" id = "styleid" class="form-control" name = "styleid" required>
                   </div>
                   <div class = "form-group">
                      <label class = "form" for = "stylename">StyleName</label>
                      <input type="text" id = "stylename" class="form-control" name = "stylename" required>
                   </div>
                   <div class = "form-group">
                      <label class = "form" for = "numDoors">Door No.</label>
                      <input type="text" id = "numDoors" class="form-control" name = "numDoors" >
                    </div>
                    <div class = "form-group">
                      <label  class = "form" for = "mCode"> mCode</label>
                      <input type="text" id = "mCode" class="form-control" name = "mCode" >
                    </div>
                    <div class = "form-group">
                      <label class = "form" for = "body"> Body</label>
                      <input type="text" id = "body" class="form-control" name = "body">
                    </div>
                      <div class = "form-group">
                      <label class = "form" for = "transimission"> Transmission</label>
                      <input type="text" id = "transimission" class="form-control" name = "transimission">
                    </div>
                    <div class = "form-group">
                      <label class = "form" for = "trim"> Trim</label>
                      <input type="text" id = "trim" class="form-control" name = "trim">
                    </div>
                      <div class = "form-group">
                      <label class = "form" for = "engineid"> EngineID</label>
                      <input type="text" id = "engineid" class="form-control" name = "engineid">
                    </div>
                      <div class = "form-group">
                      <label class = "form" for = "drivenWheels"> Driven Wheels</label>
                      <input type="text" id = "drivenWheels" class="form-control" name = "drivenWheels">
                    </div>
                      <div class = "form-group">
                      <label class = "form" for = "MPG"> MPG</label>
                      <input type="text" id = "MPG" class="form-control" name = "MPG">
                    </div>
                    <div class = "form-group">
                      <label class = "form" for = "save4"></label><br>
                      <input id = 'save4' type = 'submit' class = "btn btn-info" name = "action" value = "Add" readonly>
                    </div>
                    <div class = "form-group">
                      <label class = "form" for = "collapse"></label><br>
                      <input class="btn btn-info" value="Collapse" id="collapse">
                    </div>
                      <div class = "form-group">
                      <label class = "form" for = "cancel1"></label><br>
                      <a href = "index.php" class="btn btn-info cancel" id="cancel1">Cancel</a>
                    </div>
                    <input type = "hidden" name = 'key' value = '' readonly> 
                    </form>
       <!--      <div class = "styles" id = "styles">  -->
              <table class = "table table-bordered" id = "styles">
              <!-- style="display: none"> -->
                <thead>
                <tr>
                    <th>SN.</th>
                    <th>StyleId</th>
                    <th>StyleName</th>
                    <th>Doors</th>
                    <th>mCode</th>
                    <th>Body</th>
                    <th>Transmission</th>
                    <th>Trim</th>
                    <th>EngineID</th>
                    <th>DrivenWheels</th>
                    <th>MPG</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <br>
                <?php  
                   $query = "select * from styles" ;
                   $run = mysql_query($query);
                   $i = 1;
                   if ($run) {
                       while($row = mysql_fetch_assoc($run)) {
                         echo "<tr>";
                         echo "<td>" .$i. "</td>";
                         foreach ($row as $key => $value) {
                           echo "<td>" .trim($row[$key]). "</td>";
                         }
                         $element = implode(',', array_values($row));
                         // echo "<td>" .$i. "</td>";
                         // echo "<td>" .$row['styleId']. "</td>";
                         // echo "<td>" .$row['stylename']. "</td>";
                         // echo "<td>" .$row['numDoors']. "</td>";
                         // echo "<td>" .$row['mCode']. "</td>";
                         // echo "<td>" .$row['body']. "</td>";
                         // echo "<td>" .$row['transmission']. "</td>";
                         // echo "<td>" .$row['trim']. "</td>";
                         // echo "<td>" .$row['engineid']. "</td>";
                         // echo "<td>" .$row['drivenWheels']. "</td>";
                         // echo "<td>" .$row['MPG']. "</td>";
                         //echo "<script>alert('$element')</script>";
                         echo "<td><a data-id ='".$element."' id = 'editstyle'  class = 'edit'><i class='material-icons'>mode_edit</i></a></td>";
                         echo "<td><a data-id ='".$element."' id = 'deletestyle' class = 'delete'><i class='material-icons'>delete</i></a></td>";
                         echo "</tr>";
                         $i = $i + 1;
                       }
                    }
                ?>
            </table>
</div>

<div class = "container">
        <h3>Price Info System</h3><hr/>
              <form id = 'formprice' method = 'post' class = "form form-inline">
                   <input type = "hidden" name = "form" value = "price" readonly>
                   <div class = "form-group">
                     <label class = "form" for = "priceid">Style Id</label>
                     <input type="text" id = "priceid" class="form-control" name = "priceid" required>
                   </div>
                   <div class = "form-group">
                      <label class = "form" for = "baseinvoice">Base Invoice</label>
                      <input type="text" id = "baseinvoice" class="form-control" name = "baseinvoice" >
                   </div>
                   <div class = "form-group">
                      <label class = "form" for = "thirdparty">Third Party Price</label>
                      <input type="text" id = "thirdparty" class="form-control" name = "thirdparty" >
                    </div>
                    <div class = "form-group">
                      <label  class = "form" for = "retail">Retail Price</label>
                      <input type="text" id = "retail" class="form-control" name = "retail" >
                    </div>
                    <div class = "form-group">
                      <label class = "form" for = "tradein">Trade-in Price</label>
                      <input type="text" id = "tradein" class="form-control" name = "tradein">
                    </div>

                    <div class = "form-group">
                      <label class = "form" for = "save7"></label><br>
                      <input id = 'save7' type = 'submit' class = "btn btn-info" name = "action" value = "Add" readonly>
                    </div>
                    <div class = "form-group">
                      <label class = "form" for = "collapse7"></label><br>
                      <input class="btn btn-info" value="Expand" id="collapse7" readonly>
                    </div>
                    <div class = "form-group">
                      <label class = "form" for = "cancel2"></label><br>
                      <a href = "index.php" class="btn btn-info cancel" id="cancel2">Cancel</a>
                    </div>
                     <input type = "hidden" name = 'key' value = '' readonly> 
                    </form>
        <!--     <div class = "engines" id = "engines">  -->
              <table class = "table table-bordered" id = "price" style="display: none">
               <!-- style= "display: none"> -->
                <thead>
                <tr>
                    <th>SN.</th>
                    <th>StyleId</th>
                    <th>BaseInvoice</th>
                    <th>UsedThirdParty</th>
                    <th>UsedRetail</th>
                    <th>UsedTradeIn</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <br>
                <?php  
                   $query = "select * from price" ;
                   $run = mysql_query($query);
                   $i = 1;
                   if ($run) {
                       while($row = mysql_fetch_assoc($run)) {
                         echo "<tr>";
                         echo "<td>" .$i. "</td>";
                         foreach ($row as $key => $value) {
                           echo "<td>" .trim($row[$key]). "</td>";
                         }
                         $element = implode(',', array_values($row));
                         echo "<td><a data-id ='".$element."' id = 'editprice'  class = 'edit'><i class='material-icons'>mode_edit</i></a></td>";
                         echo "<td><a data-id ='".$element."' id = 'deleteprice' class = 'delete'><i class='material-icons'>delete</i></a></td>";
                         echo "</tr>";
                         $i = $i + 1;
                       }
                    }
                    mysql_close($con);
                ?>
            </table>

            <h2>Finished Data Loading!</h2>
</div>


</body>

<?php
       if (isset($_POST["action"])) {
         if ("style" ==$_POST["form"]) 
         { require_once('style.php');}
         if ("price" ==$_POST["form"]) 
         { require_once('price.php');}
         //header("Refresh:0;");
         echo "<script>location.reload();</script>";
         //echo "<script>window.open('index.php','_self')</script>";
    }
 require_once('../footer.php');
?>