<?php
session_start();
if (!$_SESSION['username']) {
  session_unset();
  header('location: ../');
  exit();
} 
// $con = mysqli_connect('database2.cse.tamu.edu','snmnmin','song','snmnmin-Car') or die('Connection is not established!');
$con = mysql_connect('localhost','root','song') or die('Connection is not established!');
mysql_select_db('Users', $con) or die("Can't connect to this database!");
require_once('../header.php')
?>

<script type="text/javascript"> $('#hidden')[0].style.display = 'block';</script>
<script src ="../js/nav.js"></script>
<script type="text/javascript"> 
$('title').html("ModelView");
$('li.active').removeClass('active');
$("a:contains('Modelview')").parent().addClass('active');
</script>
<!-- <script type="text/javascript"> document.getElementById('hidden').style.display = 'block';</script> -->

<body id = 'top'>
<div class = "container">
    <h3>Vehicle Model Information Management System</h3><hr/>
        <!-- <div class = "models" id = "models">  -->
              <form id = 'formmodel' method = 'post' class = "form form-inline">
                   <input type = "hidden" name = "form" value = "model" readonly>
                    <div class = "form-group">
                     <label class = "form" for = "modelid">ModelId </label>
                     <input type="text" id = "modelid" class="form-control" name = "modelid" required>
                    </div>
                    <div class = "form-group">
                      <label class = "form" for = "modelname">Modelname</label>
                      <input type="text" id = "modelname" class="form-control" name = "modelname">
                    </div>
                    <div class = "form-group">
                      <label class = "form" for = "makerid2">MakerId</label>
                      <input type="text" id = "makerid2" class="form-control" name = "makerid" >
                    </div>
                    <div class = "form-group">
                      <label  class = "form" for = "modelyear">Year</label>
                      <input type="text" id = "modelyear" class="form-control" name = "year"  required>
                    </div>
                    <div class = "form-group">
                      <label class = "form" for = "styleid"> StyleId</label>
                      <input type="text" id = "styleid" class="form-control" name = "styleid" required>
                    </div>
                    <div class = "form-group">
                      <label class = "form" for = "picture"> Picture Link </label>
                      <input type="text" id = "picture" class="form-control" name = "picture">
                    </div>

                    <div class = "form-group">
                      <label class = "form" for = "save3"></label><br>
                      <input id="save3" type = 'submit' class = "btn btn-info" name = "action" value = "Add" readonly>
                    </div>
                    
                    <div class = "form-group">
                      <label class = "form" for = "collapse3"></label><br>
                      <input class="btn btn-info" value="Collapse" id="collapse3" readonly>
                    </div>
                    <div class = "form-group">
                      <label class = "form" for = "cancel3"></label><br>
                      <a href="index.php" class="btn btn-info cancel" id="cancel3">Cancel</a>
                    </div>
                    <input type = "hidden" name = "key" value = "" readonly>
              </form>
        <!-- </div> -->
      <div id = "models">
         <table class = "table table-bordered">
                <thead>
                  <tr>
                    <th>SN.</th>
                    <th>ModelId</th>
                    <th>ModelName</th>
                    <th>MakerId</th>
                    <th>Year</th>
                    <th>StyleId</th>
                    <th>PictureLink</th>
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
                </thead> <br/>
                <?php  
                   //echo "I am here";
                   $con = mysql_connect('localhost','root','song') or die('Connection is not established!');
                   mysql_select_db('Car', $con) or die("Can't connect to this database!");
                   $query = "select * from carModel";
                   $run = mysql_query($query);
                   $i = 1;
                   if ($run) {
                       while($row = mysql_fetch_assoc($run)) {
                         echo "<tr>";
                         echo "<td>" .$i. "</td>";
                         foreach ($row as $key => $value) {
                          if ($key == 'picture')
                            echo "<td><img src=".$row['picture']. " alt='car' style='width:150px;height:100px;'></td>";
                          else 
                           echo "<td>" .trim($row[$key]). "</td>";
                         }
                         $element = implode(',', array_values($row));
                         // echo "<td>" .mysql_escape_string($row['ModelId']). "</td>";
                         // echo "<td>" .mysql_escape_string($row['Modelname']). "</td>";
                         // echo "<td>" .$row['MakerId']. "</td>";
                         // echo "<td>" .$row['year']. "</td>";
                         // echo "<td>" .$row['styleId']. "</td>";
                         echo "<td><a data-id ='".$element."' id = 'editmodel' class = 'edit'> <i class='material-icons'>mode_edit</i></a></td>";
                         echo "<td><a data-id ='".$element."' id = 'deletemodel' class = 'delete'> <i class='material-icons'>delete</i></a></td>";
                         // echo "<td><img src=".$row['picture']. " alt='car' style='width:150px;height:100px;'></td>";
                         // echo "<td><a data-id =".$row['ModelId'].",".$row['year'].",".$row['styleId']." id = 'editmodel' class = 'edit'> <i class='material-icons'>mode_edit</i></a></td>";
                         // echo "<td><a data-id =".$row['ModelId'].",".$row['year'].",".$row['styleId']." id = 'deletemodel' class = 'delete'> <i class='material-icons'>delete</i></a></td>";

                         echo "</tr>";
                         $i = $i + 1;
                       }
                    }
                    mysql_close($con);
                ?>
         </table> <hr/>
      </div>
      <h2>Finished the dataloading!<h2>
      <br>
</div>



</body>

<?php
       if (isset($_POST["action"])) {
         
        if ("model" ==$_POST["form"]) 
        {
            echo "<script> $('#cancel3').show();</script>";
            require_once("model.php");
        }
       echo "<script>window.open('index.php','_self')</script>";
    }
   require_once('../footer.php');
?>