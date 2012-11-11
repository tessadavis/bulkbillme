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

		$query = "Insert into BulkBillMe (GPSurg,add1,add2, add3, suburb, postcode, state, phone, bulkbill) 
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
<div class="container">

<h1> Form for building Bulk Bill Me database</h1><br/><br/>
<form name="bulkbillme" class="form-horizontal" action="index.php" method="post" onsubmit="return validate_form();">


  
<div class="control-group">
		<label class="control-label">GP Surgery Name: <input type="text" name="gpsurg"  id="gpsurg"/></label>
	</div>
</div>

<div class="control-group">
		<label class="control-label">Address Line 1: <input type="text" name="add1"  id="add1"/></label>
	</div>
</div>

<div class="control-group">
		<label class="control-label">Address Line 2: <input type="text" name="add2"  id="add2"/></label>
	</div>
</div>

<div class="control-group">
		<label class="control-label">Address Line 3: <input type="text" name="add3"  id="add3"/></label>
	</div>
</div>

<div class="control-group">
		<label class="control-label">Suburb: <input type="text" name="suburb"  id="suburb"/></label>
	</div>
</div>

<div class="control-group">
		<label class="control-label">Postcode: <input type="text" name="postcode"  id="postcode"/></label>
	</div>
</div>

<div class="control-group">
		<label class="control-label">State: <input type="text" name="state"  id="state"/></label>
	</div>
</div>

<div class="control-group">
		<label class="control-label">Phone Number: <input type="text" name="phone"  id="phone"/></label>
	</div>
</div>

<div class="control-group">
		<label class="control-label">Bulk Billing Details: <input type="text" name="bulkbill"  id="bulkbill"/></label>
	</div>
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