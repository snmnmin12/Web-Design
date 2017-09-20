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
$('title').html("AdminView");
$('li.active').removeClass('active');
$("a:contains('AdminView')").parent().addClass('active');
</script>
<!-- <script type="text/javascript"> document.getElementById('hidden').style.display = 'block';</script> -->

<body id = 'top'>
<div class = "container">
        <h3>User Management System</h3><hr/>
              <form id = 'formuser' method = 'post' class = "form form-inline">
                   <input type = "hidden" name = "form" value = "user" readonly = true>
                   <div class = "form-group">
                     <label class = "form" for = "user">User Name</label>
                     <input type="text" id = "user" class="form-control" name = "username" required>
                   </div>
                   <div class = "form-group">
                      <label class = "form" for = "userpass">Password</label>
                      <input type="password" id = "userpass" class="form-control" name = "userpass" >
                   </div>
                   <div class = "form-group">
                      <label class = "form" for = "email">Email</label>
                      <input type="email" id = "email" class="form-control" name = "email" >
                    </div>
                    <div class = "form-group">
                      <label  class = "form" for = "firstn"> First Name</label>
                      <input type="text" id = "firstn" class="form-control" name = "fname" >
                    </div>
                    <div class = "form-group">
                      <label class = "form" for = "lastn"> Last Name</label>
                      <input type="text" id = "lastn" class="form-control" name = "lname">
                    </div>
                    <div class = "form-group">
                      <label class = "form" for = "save"></label><br>
                      <input id = 'save' type = 'submit' class = "btn btn-info" name = "action" value = "Add" readonly>
                    </div>
                    <div class = "form-group">
                      <label class = "form" for = "collapse"></label><br>
                      <input class="btn btn-info" value="Collapse" id="collapse" readonly>
                    </div>
                    <div class = "form-group">
                      <label class = "form" for = "cancel1"></label><br>
                      <a href="index.php" class="btn btn-info cancel" id="cancel1">Cancel</a>
                    </div>
                    <input type = "hidden" name = "key" value ="" readonly>
                    </form>
              <table class = "table table-bordered" id = "user">
                <thead>
                <tr>
                    <th>SN.</th>
                    <th>User Name</th>
                    <th>User Pass</th>
                    <th>Email</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <br>
                <?php  
                   $query = "select * from users" ;
                   $run = mysql_query($query);
                   if ($run) {
                       $i = 1;
                       while($row = mysql_fetch_assoc($run)) {
                         echo "<tr>";
                         echo "<td>" .$i. "</td>";
                         foreach ($row as $key => $value) {
                           echo "<td>" .trim($row[$key]). "</td>";
                         }

                         $element = implode(',', array_values($row));
                         echo "<td><a data-id ='".$element."' id = 'edituser' class = 'edit'><i class='material-icons'>mode_edit</i></a></td>";
                         echo "<td><a data-id ='".$element."' id = 'deleteuser' class = 'delete'><i class='material-icons'>delete</i></a></td>";
                         // echo "<td><a data-id =".$row['username']." id = 'edituser' class = 'edit'><i class='material-icons'>mode_edit</i></a></td>";
                         // echo "<td><a data-id =".$row['username']." id = 'deleteuser' class = 'delete'><i class='material-icons'>delete</i></a></td>";
                         echo "</tr>";
                         $i += 1;
                       }
                    }
                    mysql_close($con);
                ?>
          </table>
          <hr/>
</div>

<div class = "container">
    <h3>Manufacturing Information Management System</h3><hr/>
        <div class = "makers" id = "makers"> 
              <form id = 'formmanu' method = 'post' class = "form form-inline">
                   <input type = "hidden" name = "form" value = "maker" readonly>
                    <div class = "form-group">
                     <label class = "form" for = "manu">MakerId </label>
                     <input type="text" id = "makerid" class="form-control" name = "makerid" required>
                    </div>
                    <div class = "form-group">
                      <label class = "form" for = "maker">Maker</label>
                      <input type="text" id = "maker" class="form-control" name = "maker">
                    </div>
                    <div class = "form-group">
                      <label class = "form" for = "country">Country</label>
                      <input type="text" id = "country" class="form-control" name = "country" >
                    </div>
                    <div class = "form-group">
                      <label  class = "form" for = "manu"> Manufacturer</label>
                      <input type="text" id = "manu" class="form-control" name = "manu" >
                    </div>
                    <div class = "form-group">
                      <label class = "form" for = "address"> Address</label>
                      <input type="text" id = "address" class="form-control" name = "address">
                    </div>
                    <div class = "form-group">
                      <label class = "form" for = "save2"></label><br>
                      <input id="save2" type = 'submit' class = "btn btn-info" name = "action" value = "Add" readonly>
                    </div>
                    <div class = "form-group">
                      <label class = "form" for = "collapse2"></label><br>
                      <input class="btn btn-info" value="Collapse" id="collapse2" readonly>
                    </div>
                    <div class = "form-group">
                      <label class = "form" for = "cancel2"></label><br>
                      <a href="index.php" class="btn btn-info cancel" id="cancel2">Cancel</a>
                    </div>
                    <input type = "hidden" name = "key" value ="" readonly>
              </form>
        </div>
      <table class = "table table-bordered" id = "makers">
            <thead>
                <tr> 
                    <th>SN.</th>
                    <th>MakerId</th>
                    <th>Maker</th>
                    <th>Country</th>
                    <th>Manufacturer</th>
                    <th>Address</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead> <br>
                <?php  
                   $con = mysql_connect('localhost','root','song') or die('Connection is not established!');
                   mysql_select_db('Car', $con) or die("Can't connect to this database!");
                   $query = "select * from carMaker" ;
                   $run = mysql_query($query);
                   if ($run) {
                       $i = 1;
                       while($row = mysql_fetch_assoc($run)) {
                         echo "<tr>";
                          echo "<td>" .$i. "</td>";
                         foreach ($row as $key => $value) {
                           echo "<td>" .trim($row[$key]). "</td>";
                         }
      
                        $element = implode(',', array_values($row));
                        // echo "<script>alert('$element')</script>";
                        echo "<td><a data-id ='".$element."' id = 'editmaker' class = 'edit'> <i class='material-icons'>mode_edit</i></a></td>";
                         echo "<td><a data-id ='".$element."' id = 'deletemaker' class = 'delete'> <i class='material-icons'>delete</i></a></td>";
   
                         $i += 1;
                       }
                    }
                    mysql_close($con);
                ?>
        </table><hr>
      <h2>Finished the dataloading!<h2>
      <br>
</div>



</body>

<?php
       if (isset($_POST["action"])) {
         
         if ("user" ==$_POST["form"]) 
         {
          require_once('user.php');
         }
        else if ("maker" == $_POST["form"])
        {  
             echo "<script> $('#cancel2').show();</script>";
             require_once('maker.php');
        }
        else if ("model" ==$_POST["form"]) 
        {
            echo "<script> $('#cancel3').show();</script>";
            require_once("model.php");
        }
        echo "<script>window.open('index.php','_self')</script>";
    }
  require_once('../footer.php');
?>