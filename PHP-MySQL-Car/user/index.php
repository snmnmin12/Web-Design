<?php
session_start();
if (!$_SESSION['username']) {
  session_unset();
  header('location: ../project/index.php');
  exit();
} 
else {
// $con = mysqli_connect('database2.cse.tamu.edu','snmnmin','song','snmnmin-Car') or die('Connection is not established!');
$con = mysql_connect('localhost','root','song') or die('Connection is not established!');
mysql_select_db('Car', $con);
require_once('../header.php')
?>
<script type="text/javascript"> $('#hidden')[0].style.display = 'block';</script>
<script type="text/javascript"> $('title').html("UserView");</script>

<body>
<div class = "container">

        <h3>Get a vehicle model by its Vehicle Maker name and Model name</h3><hr/>
        
        <form class="form-inline" method = "post" id = header enctype="multipart/form-data" action = "index.php">
           <input type = "hidden" name = "form" value ="maker">
           <div class="form-group">
           <label>Maker:</label>
           <select name = "maker"  id = "maker" class = form-control>
            <option value = "" selected hidden>Choose here</option>
            <option value="Honda">Honda</option>
            <option value="Toyota">Toyota</option>
            <option value="Audi">Audi</option>
            <option value="BMW">BMW</option>
           </select>
           </div>

          <div class="form-group">
            <label>Model:</label>
            <select name = "model" id = "models" class = form-control>
              <option value="">Choose here</option>
            </select>
         </div>

          <div class="form-group"> 
            <label>Year:</label>
            <input type="text" class="form-control" name = "year" placeholder="Car Year">
          </div>

          <div class="form-group"> 
            <button type="submit" class="btn btn-info" name = "action" id = "search" value = "search">Search</button>
          </div>
           
           <div class="form-group">
           <input class="btn btn-info" value="Collapse" id="collapse" style="display: none" readonly />
           </div>
        </form>
  <?php
       if (isset($_POST["action"]) and "maker" == $_POST["form"]) {
        echo '<script>$("#collapse")[0].style.display = "block"</script>';
        $maker =  mysql_real_escape_string($_POST['maker']);
        $model = ucfirst(strtolower(mysql_real_escape_string($_POST['model'])));
        $year  = mysql_real_escape_string($_POST['year']);
        $i = 1;
        $flag = false;

        $query = "select Makername, Modelname, year, carModel.styleId as styleId, stylename,usedPriParty, usedRetail, Country, picture from carMaker,carModel,styles,price where carMaker.MakerId = carModel.MakerId and styles.styleId = carModel.styleId and styles.styleId = price.styleId "; 

        if (!(empty($maker) and empty($model) and empty($year))) {
            $maker .= "%";
            $model .= "%";
            $year  .= "%";
            $query = "select Makername, Modelname, year, carModel.styleId as styleId, stylename, usedPriParty, usedRetail, Country, picture
            from carMaker,carModel,styles, price
            where Makername LIKE '$maker' and carMaker.MakerId = carModel.MakerId and styles.styleId = carModel.styleId
            and styles.styleId = price.styleId and Modelname LIKE '$model' and year LIKE '$year' ";
        }

        $run = mysql_query($query);

        if ($run) {
              echo '<table class = "table table-bordered" id = "table">';
              echo '<thead>';
              echo '<tr>';
              echo '<th>Id</th>';
              echo '<th>Maker</th>';
              echo '<th>Model</th>';
              echo '<th>Year</th>';
              echo '<th>StyleId</th>';
              echo '<th>Style</th>';
              echo '<th>Esti Third Party</th>';
              echo '<th>Esti REtail</th>';
              echo '<th>Country</th>';
              echo '<th>Image</th>';
              echo '</tr></thead><br>';

        while($row = mysql_fetch_assoc($run)) { 
              $flag = true;
              echo "<tr>";
              echo "<td>".$i."</td>";
              echo "<td>".$row['Makername']."</td>";
              echo "<td>".$row['Modelname']."</td>";
              echo "<td>".$row['year']."</td>";
              echo "<td><a href='../details?styleid=".$row["styleId"]."' target = '_blank'>".$row['styleId']."</a></td>";
              echo "<td>".$row['stylename']."</td>";
              echo "<td>".$row['usedPriParty']."</td>";
              echo "<td>".$row['usedRetail']."</td>";
              echo "<td>".$row['Country']."</td>";
              echo "<td><img src=".$row['picture']." alt='car' style='width:150px;height:100px;'></td>";
              echo "</tr>";
              $i += 1;
            }
           echo '</table>'; 
           if (!$flag) { echo "<h4>No data found for this query, please use a different one</h4>"; }
        }
        else { echo "<h4>Error in search query</h4>"; }
      }
      ?>
      <hr>
</div>

<div class = "container">
        <h3>Get a vehicle model by its Vehicle Maker name and Zip Code</h3><hr/>
        <form class="form-inline" method = "post" enctype="multipart/form-data" action = "index.php">
          <input type = "hidden" name = "form" value = "dealer">
          <div class="form-group">
          <label>Maker:</label>
          <input name = "maker2"  id = "maker2" class = form-control>
         </div>

         <div class="form-group">
           <label>City</label>
            <select name = "city" id = "city" class = form-control>
            <option value = "" selected>Choose Here</option>
            <option value = "Brenham">Brenham</option>
            <option value = "Bryan">Bryan</option>
            <option value = "Caldwell">Caldwell</option>
            <option value = "Cameron">Cameron</option>
            <option value = "College Station">College Station</option>
            <option value = "Hearne">Hearne</option>
            <option value = "Huntsville">Huntsville</option>
            <option value = "Industry">Industry</option>
            <option value = "Madisonville">Madisonville</option>
            <option value = "Navasota">Navasota</option>
            <option value = "Rockdale">Rockdale</option>
            </select>
         </div>

         <div class="form-group">
           <label>Zip Code</label>
            <input name = "zip" id = "zip" class = form-control>
         </div>
          
          <div class="form-group"> 
            <button type="submit" class="btn btn-info" name = "action" value = "search">Search</button>
          </div>

          <div class="form-group">
            <input class="btn btn-info" value="Collapse" id="collapse1" style="display: none" readonly />
          </div>
      </form>

       <?php
       if (isset($_POST["action"]) and "dealer" == $_POST["form"]) {
        echo '<script>$("#collapse1")[0].style.display = "block"</script>';
        $maker =  ucfirst(strtolower(mysql_real_escape_string($_POST['maker2'])));
        $city  =  ucfirst(strtolower(mysql_real_escape_string($_POST['city'])));
        $zip   =  mysql_real_escape_string($_POST['zip']);
        $maker .= "%";
        $city  .= "%";
        $zip  .= "%";
        $i = 1;
        $flag = false;

        $query = "select * from dealer where make LIKE '$maker' and city LIKE '$city' and zipcode LIKE '$zip' "; 

        $run = mysql_query($query);

        if ($run) {
              echo '<table class = "table table-bordered" id = "dealers">';
              echo '<thead>';
              echo '<tr>';
              echo '<th>SN.</th>';
              echo '<th>DealerID</th>';
              echo '<th>DealerName</th>';
              echo '<th>Brand</th>';
              echo '<th>Distance</th>';
              echo '<th>Street</th>';
              echo '<th>City</th>';
              echo '<th>StateName</th>';
              echo '<th>ZipCode</th>';
              echo '</tr></thead><br>';

        while($row = mysql_fetch_assoc($run)) { 
              $flag = true;
             echo "<tr>";
             echo "<td>" .$i. "</td>";
             echo "<td>" .$row['dealerid']. "</td>";
             echo "<td>" .$row['name']. "</td>";
             echo "<td>" .$row['make']. "</td>";
             echo "<td>" .$row['distance']. "</td>";
             echo "<td>" .$row['street']. "</td>";
             echo "<td>" .$row['city']. "</td>";
             echo "<td>" .$row['stateName']. "</td>";
             echo "<td>" .$row['zipcode']. "</td>";
              echo "</tr>";
              $i += 1;
            }
           echo '</table>'; 
           if (!$flag) { echo "<h4>No data found for this query, please use a different one</h4>"; }
        }
        else { echo "<h4>Error in search query</h4>"; }
      }
      ?>
      <h2>Finish the data loading !</h2>
</div>
</body>

<?php
  mysql_close($con);
 require_once('../footer.php');
}
?>