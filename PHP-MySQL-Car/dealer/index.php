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
require_once('../header.php');
?>
<script src = "../js/nav.js"></script>
<script type="text/javascript"> 
$('title').html("Dealer Info");
$('li.active').removeClass('active');
$("a:contains('DealerView')").parent().addClass('active');
</script>

<body id = 'top'>
<div class = "container">
        <h3>Engine Info System</h3><hr/>
              <form id = 'formdealer' method = 'post' class = "form form-inline">
                   <input type = "hidden" name = "form" value = "dealer" readonly>
                   <div class = "form-group">
                     <label class = "form" for = "dealerid">Dealer Id</label>
                     <input type="text" id = "dealerid" class="form-control" name = "dealerid" required>
                   </div>
                   <div class = "form-group">
                      <label class = "form" for = "dealername">Dealer Name</label>
                      <input type="text" id = "dealername" class="form-control" name = "dealername" >
                   </div>
                   <div class = "form-group">
                      <label class = "form" for = "brand">Brand</label>
                      <input type="text" id = "brand" class="form-control" name = "brand" >
                    </div>
                    <div class = "form-group">
                      <label  class = "form" for = "distance">Distance</label>
                      <input type="text" id = "distance" class="form-control" name = "distance" >
                    </div>
                    <div class = "form-group">
                      <label class = "form" for = "street">Street</label>
                      <input type="text" id = "street" class="form-control" name = "street">
                    </div>
                      <div class = "form-group">
                      <label class = "form" for = "city">City</label>
                      <input type="text" id = "city" class="form-control" name = "city">
                    </div>
                    <div class = "form-group">
                      <label class = "form" for = "stateName">State Name</label>
                      <input type="text" id = "stateName" class="form-control" name = "stateName">
                    </div>
                      <div class = "form-group">
                      <label class = "form" for = "zipcode">Zip Code</label>
                      <input type="text" id = "zipcode" class="form-control" name = "zipcode">
                    </div>
                    <div class = "form-group">
                      <label class = "form" for = "save6"></label><br>
                      <input id = 'save6' type = 'submit' class = "btn btn-info" name = "action" value = "Add" readonly>
                    </div>
                    <div class = "form-group">
                      <label class = "form" for = "collapse"></label><br>
                      <input class="btn btn-info" value="Collapse" id="collapse" readonly>
                    </div>
                    <div class = "form-group">
                      <label class = "form" for = "cancel1"></label><br>
                      <a href = "index.php" class="btn btn-info cancel" id="cancel1">Cancel</a>
                    </div>
                    <input type = "hidden" name = "key" value = "" readonly>
                    </form>
        <!--     <div class = "engines" id = "engines">  -->
              <table class = "table table-bordered" id = "dealers">
                <thead>
                <tr>
                    <th>SN.</th>
                    <th>DealerID</th>
                    <th>DealerName</th>
                    <th>Brand</th>
                    <th>Distance</th>
                    <th>Street</th>
                    <th>City</th>
                    <th>StateName</th>
                    <th>ZipCode</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <br>
                <?php  
                   $query = "select * from dealer" ;
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
                         // echo "<td>" .$row['dealerid']. "</td>";
                         // echo "<td>" .$row['name']. "</td>";
                         // echo "<td>" .$row['make']. "</td>";
                         // echo "<td>" .$row['distance']. "</td>";
                         // echo "<td>" .$row['street']. "</td>";
                         // echo "<td>" .$row['city']. "</td>";
                         // echo "<td>" .$row['stateName']. "</td>";
                         // echo "<td>" .$row['zipcode']. "</td>";
                         echo "<td><a data-id ='".$element."' id = 'editdealer'  class = 'edit'><i class='material-icons'>mode_edit</i></a></td>";
                         echo "<td><a data-id ='".$element."' id = 'deletedealer' class = 'delete'><i class='material-icons'>delete</i></a></td>";
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
         
         if ("dealer" ==$_POST["form"]) 
         {
          require_once('dealer.php');
         }
        echo "<script>window.open('index.php','_self')</script>";
    }
    require_once('../footer.php');
?>