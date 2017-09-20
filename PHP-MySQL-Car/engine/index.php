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
$('title').html("Engine Info");
$('li.active').removeClass('active');
$("a:contains('EngineView')").parent().addClass('active');
</script>

<style>
th{
  background:  #800000;
  color: white;
}
th,td {
  max-width: 150px;
}
</style>
<body id = 'top'>
<div class = "container">
        <h3>Engine Info System</h3><hr/>
              <form id = 'formengine' method = 'post' class = "form form-inline">
                   <input type = "hidden" name = "form" value = "engine" readonly>
                   <div class = "form-group">
                     <label class = "form" for = "engineid">EngineId</label>
                     <input type="text" id = "engineid" class="form-control" name = "engineid" required>
                   </div>
                   <div class = "form-group">
                      <label class = "form" for = "enginename">EngineName</label>
                      <input type="text" id = "enginename" class="form-control" name = "enginename" >
                   </div>
                   <div class = "form-group">
                      <label class = "form" for = "code">Code</label>
                      <input type="text" id = "code" class="form-control" name = "code" >
                    </div>
                    <div class = "form-group">
                      <label  class = "form" for = "comRatio">Compression Ratio</label>
                      <input type="text" id = "comRatio" class="form-control" name = "comRatio" >
                    </div>
                    <div class = "form-group">
                      <label class = "form" for = "comType">Compression Type</label>
                      <input type="text" id = "comType" class="form-control" name = "comType">
                    </div>
                      <div class = "form-group">
                      <label class = "form" for = "configuration">Configuration</label>
                      <input type="text" id = "configuration" class="form-control" name = "configuration">
                    </div>
                    <div class = "form-group">
                      <label class = "form" for = "cylinder">Cylinder</label>
                      <input type="text" id = "cylinder" class="form-control" name = "cylinder">
                    </div>
                      <div class = "form-group">
                      <label class = "form" for = "displacement">Displacement</label>
                      <input type="text" id = "displacement" class="form-control" name = "displacement">
                    </div>
                      <div class = "form-group">
                      <label class = "form" for = "fuelType">Fuel Type</label>
                      <input type="text" id = "fuelType" class="form-control" name = "fuelType">
                    </div>
                      <div class = "form-group">
                      <label class = "form" for = "horsepower">Horse Power</label>
                      <input type="text" id = "horsepower" class="form-control" name = "horsepower">
                    </div>
                    <div class = "form-group">
                      <label class = "form" for = "rpm">RPM</label>
                      <input type="text" id = "rpm" class="form-control" name = "rpm">
                    </div>
                    <div class = "form-group">
                      <label class = "form" for = "size">Size</label>
                      <input type="text" id = "size" class="form-control" name = "size">
                    </div>
                    <div class = "form-group">
                      <label class = "form" for = "type"> Type</label>
                      <input type="text" id = "type" class="form-control" name = "type">
                    </div>
                    <div class = "form-group">
                      <label class = "form" for = "save5"></label><br>
                      <input id = 'save5' type = 'submit' class = "btn btn-info" name = "action" value = "Add" readonly>
                    </div>
                    <div class = "form-group">
                      <label class = "form" for = "collapse"></label><br>
                      <input class="btn btn-info" value="Collapse" id="collapse" readonly>
                    </div>
                    <div class = "form-group">
                      <label class = "form" for = "cancel1"></label><br>
                      <a href= "index.php" class="btn btn-info cancel" id="cancel1">Cancel</a>
                    </div>
                    </form>
        <!--     <div class = "engines" id = "engines">  -->
              <table class = "table table-bordered" id = "engines">
                <thead>
                <tr>
                    <th>SN.</th>
                    <th>EngineId</th>
                    <th>EngineName</th>
                    <th>Code</th>
                    <th>Comp Ratio</th>
                    <th>Comp Type</th>
                    <th>Config</th>
                    <th>Cylinder</th>
                    <th>Disp</th>
                    <th>Fuel Type</th>
                    <th>Horse Power</th>
                    <th>RPM</th>
                    <th>Size</th>
                    <th>Type</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <br>
                <?php  
                   $query = "select * from engine" ;
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
                         // echo "<td>" .$row['engineid']. "</td>";
                         // echo "<td>" .$row['name']. "</td>";
                         // echo "<td>" .$row['code']. "</td>";
                         // echo "<td>" .$row['comRatio']. "</td>";
                         // echo "<td>" .$row['comType']. "</td>";
                         // echo "<td>" .$row['configuration']. "</td>";
                         // echo "<td>" .$row['cylinder']. "</td>";
                         // echo "<td>" .$row['displacement']. "</td>";
                         // echo "<td>" .$row['fuelType']. "</td>";
                         // echo "<td>" .$row['horsepower']. "</td>";
                         // echo "<td>" .$row['rpm']. "</td>";
                         // echo "<td>" .$row['size']. "</td>";
                         // echo "<td>" .$row['type']. "</td>";
                         echo "<td><a data-id ='".$element."' id = 'editengine'  class = 'edit'><i class='material-icons'>mode_edit</i></a></td>";
                         echo "<td><a data-id ='".$element."' id = 'deleteengine' class = 'delete'><i class='material-icons'>delete</i></a></td>";
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
         
         if ("engine" ==$_POST["form"]) 
         {
          require_once('engine.php');
         }
         echo "<script>window.open('index.php','_self')</script>";
    }
 require_once('../footer.php');
?>