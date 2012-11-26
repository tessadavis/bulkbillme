<?php
  $con = mysql_connect("localhost","root","");
   if(!$con)
    {
   die('Could not connect:'. mysql_error());
    }
 
    mysql_select_db("BulkBillMe", $con);

if(isset($_POST['quickSearch']))
	{
		$varGPSurg = $_POST['gpsurg'];
		
    }
	
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
    }
	mysql_close($con);
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
    <a class="brand" href="index.php">BulkBillMe</a>
    <ul class="nav">
      <li><a href="index.php">Home</a></li>
      <li><a href="about.php">About Us</a></li>
      <li class="active"><a href="search.php">Search for a GP</a></li>
      <li><a href="add.php">Add a GP</a></li>
    </ul>
  </div>
</div>

<div class="container">
<div class="row">
<div class="span4">
<h3>Search</h3>
<div class="control-group">
	<legend>Search the Database</legend>

		<label class="control-label">GP Surgery Name: </label>
			<div class="controls"><input type="text" name="gpsurg"  id="gpsurg"/></div>
			<input name="quickSearch" class="btn btn-inverse btn-large" type="submit" value="Search"/>
</div>


<div class="control-group">
	<legend>Advanced Search</legend>
		<label class="control-label">Suburb: </label>
			<div class="controls"><input type="text" name="suburb"  id="suburb"/></div>
	
</div>

<div class="control-group">
		<label class="control-label">Postcode: </label>
			<div class="controls"><input type="text" name="postcode"  id="postcode"/></div>
	
</div>

<div class="control-group">
		<label class="control-label">Choose a state: </label>
			<div class="controls">
						<select>
						  <option>NSW</option>
						  <option>NT</option>
						  <option>QLD</option>
						  <option>TAS</option>
						  <option>VIC</option>
						  <option>WA</option>
						</select></div>
	
</div>

<div class="control-group">
		<label class="control-label">Phone Number: </label>
			<div class="controls"><input type="text" name="phone"  id="phone"/></div>
	
</div>

<div class="control-group">
		<label class="control-label">Bulk Billing Details</label>
			<div class="controls"><input type="text"area rows="3"" name="bulkbill"  id="bulkbill"/>
	
</div>

<div class="controls">
		<input name="formSubmit" class="btn btn-inverse btn-large" type="submit" value="Search"/>
	</div>
<br>

</form>
</div>
</div>
<div class="span7">
<h1> Bulk Bill Me database</h1><br/><br/>
<form name="bulkbillme" class="form-horizontal" action="search.php" method="post" onsubmit="return validate();">

    
      

</div>
</div>
</body>
</html>