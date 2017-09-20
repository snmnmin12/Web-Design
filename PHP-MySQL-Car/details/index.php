<?php 
require_once('../header.php');

$styleid = $_GET['styleid'];

if (empty($styleid)) {
	echo "<div class= 'container'>";
	echo "<h3>We can't provide your more information because no styles has been selected right now!</h3>";
	echo "</div>";
	require_once('footer.php');
	exit();
}
$con = mysql_connect('localhost','root','song') or die('Connection is not established!');
mysql_select_db('Car', $con) or die("Can't connect to this database!");


$query = "select * from styles where styles.styleId = $styleid";
$run = mysql_query ($query);
$row = mysql_fetch_assoc($run);

$engineid = '';

if ($run){
    $keys = array_keys($row);
    // print_r($keys);
	$stylename = $row["stylename"];
	$numDoors = $row["numDoors"];
	$mCode = $row["mCode"];
	$body = $row["body"];
	$transmission = $row["transmission"];
	$trim = $row["trim"];
	$engineid = $row["engineid"];
	$drivenWheels = $row["drivenWheels"];
	$MPG = $row["MPG"];
}
?>
<script type="text/javascript"> $('#hidden')[0].style.display = 'block';</script>
<script type="text/javascript"> $('title').html("Details");</script>
<script type="text/javascript"> $('input').attr('readonly','readonly');</script>
<body>
<div class = "container">
   <div class = 'row'>
    <div class = 'col-md-5 col-md-offset-1'>
    <h2>Style Information</h2>
    <?php
      foreach($row as $key=>$value){
      	 echo "<label>".ucwords(strtolower($key)).": </label>";
		 echo "<span>  ".$row[$key]." </span><br>";
      }
    ?>
	<!-- <form class = "form-horizontal">
		<div class="form-group">
		 <label>Style Id: </label>
		 <input type = "text" class = "form-control" value= <?php echo $styleid ?> >
		</div>

		<div class="form-group">
		 <label>Style Name:</label>
		 <input type="text" class="form-control" value= <?php echo $stylename ?> >
		</div>

		<div class="form-group">
		 <label>Number of Doors:</label>
		 <input type="text" class="form-control" value= <?php echo $numDoors ?> >
		</div>

		<div class="form-group">
		 <label>mCode:</label>
		 <input type="text" class="form-control" value= <?php echo $mCode ?> >
		</div>

		<div class="form-group">
		 <label>Body:</label>
		 <input type="text" class="form-control" value= <?php echo $body ?>>
		</div>

		<div class="form-group">
		 <label>Transimission:</label>
		 <input type="text" class="form-control" value= <?php echo $transmission ?>>
		</div>

		<div class="form-group">
		 <label>Trim:</label>
		 <input type="text" class="form-control" value= <?php echo $trim ?> >
		</div>

		<div class="form-group">
		 <label>Engine Id:</label>
		 <input type="text" class="form-control" value= <?php echo $engineid ?> >
		</div>

		<div class="form-group">
		 <label>Diven Wheels:</label>
		 <input type="text" class="form-control" value= <?php echo $drivenWheels ?> >
		</div>
		
		<div class="form-group">
		 <label>MPG:</label>
		 <input type="text" class="form-control" value= <?php echo $MPG ?> >
		</div>		 -->
		<!-- </form> -->
   </div>
 <!--  <div class = 'col-md-1'></div> -->

   <div class = "col-md-4">
    <h2>Engine Information</h2>
	<?php
	if (!empty($engineid)) {

		$query2 = "select * from engine where engineid = $engineid";
		$run2 = mysql_query ($query2);
	    $row2 = null;
		if ($run2) { 
			 $row2 = mysql_fetch_assoc($run2);
	         foreach($row2 as $key=>$value){
	      	 echo "<label>".ucwords(strtolower($key)).": </label>";
			 echo "<span>  ".$row2[$key]." </span><br>";
      }
       ?>
    </div>
    </div>
	<?php 
     }
 }
	?>
</div>

</body>


<?php
require_once('../footer.php');
?>