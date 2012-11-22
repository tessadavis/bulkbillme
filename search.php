
<?php
   
if(isset($_POST['formSubmit']))
	{
		$varGPSurg = $_POST['gpsurg'];
	  	$varAdd1 = $_POST['add1'];
	    $varAdd2 = $_POST['add2'];
	    $varAdd3 = $_POST['add3'];
	    $varSuburb = $_POST['suburb'];
	    $varPostcode = $_POST['postcode'];
	    $varState = $_POST['state'];
	    $varPhone = $_POST['phone'];
	    $varBulkbill = $_POST['bulkbill'];
	    
   $con = mysql_connect("localhost","tessadavis","password");
   if(!$con)
    {
   die('Could not connect:'. mysql_error());
    }
    
    mysql_select_db("BulkBillMe", $con);

    $query = "Insert into BulkBillMe (GPSurg,Add1,Add2, Add3, Suburb, Postcode, State, Phone, Bulkbill, ) 
    VALUES ('".$varGPSurg."','".$varAdd1."','".$varAdd2."','".$varAdd3."','".$varSuburb."','".$varPostcode."','".$varState."','".$varPhone."','".$varBulkbill."')";

    if(!mysql_query($query,$con))
    {
    	die('Error:'. mysql_error());
    }

    echo "<div class='alert'>Record Entered Successfully</div>";
    mysql_close($con);

    }

 
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--Next comes the beginning html tag-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	 <link href="bootstrap.css" rel="stylesheet" type="text/css"/>
	 
	 <title>Bulk Bill Me</title>


</head>
<body>

<div class="navbar navbar-inverse">
  <div class="navbar-inner">
    <a class="brand" href="index1.php">BulkBillMe</a>
    <ul class="nav">
      <li><a href="index1.php">Home</a></li>
      <li><a href="#">About Us</a></li>
      <li class="active"><a href="search.php">Search for a GP</a></li>
      <li><a href="add.php">Add a GP</a></li>
    </ul>
  </div>
</div>
<div class="container">

<h1> Bulk Bill Me database</h1><br/><br/>
<form name="bulkbillme" class="form-horizontal" action="search.php" method="post" onsubmit="return validate_form();">

    
      
<div class="control-group">
	<legend>Search the Database</legend>
		<label class="control-label">GP Surgery Name: </label>
			<div class="controls"><input type="text" name="gpsurg"  id="gpsurg"/></div>

	
</div>

<div class="control-group">
	<div class="controls">
		<input name="formSubmit" class="btn btn-success btn-large" type="Search by Name" />
	</div>




<div class="control-group">
		<label class="control-label">Suburb: </label>
			<div class="controls"><input type="text" name="suburb"  id="suburb"/></div>
	
</div>

<div class="control-group">
		<label class="control-label">Postcode: </label>
			<div class="controls"><input type="text" name="postcode"  id="postcode"/></div>
	
</div>

<div class="control-group">
		<label class="control-label">State: </label>
			<div class="controls"><input type="text" name="state"  id="state"/></div>
	
</div>

<div class="control-group">
	<div class="controls">
		<input name="formSubmit" class="btn btn-success btn-large" type="Search by Address" />
	</div>

<div class="control-group">
		<label class="control-label">Phone Number: </label>
			<div class="controls"><input type="text" name="phone"  id="phone"/></div>
	
</div>

<div class="control-group">
		<label class="control-label">Bulk Billing Details</label>
			<div class="controls"><input type="text"area rows="3"" name="bulkbill"  id="bulkbill"/>
	
</div>



<div class="control-group">
	<div class="controls">
		<input name="formSubmit" class="btn btn-success btn-large" type="submit" />
	</div>
</div>

</form>
</div>
</body>
</html>