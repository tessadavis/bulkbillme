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
      <li><a href="index1.php">Home</a></li>
      <li><a href="about.php">About Us</a></li>
      <li><a href="search.php">Search for a GP</a></li>
      <li><a href="add.php">Add a GP</a></li>
	  <li class="active"><a href="admin.php">Admin</a></li>
    </ul>
	
	
  </div>
</div>
<div class="container">

<h1>Administration Login</h1>
<hr />

<form action="login.php" method="post" class="form-horizontal" onsubmit="return valid_login()">
  <div class="control-group">
    <label class="control-label" >Username</label>
    <div class="controls">
      <input type="text" id="username" name="username" placeholder="Username">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="password">Password</label>
    <div class="controls">
      <input type="password" id="password" name="password" placeholder="Password">
    </div>
  </div>
  <div class="control-group">
    <div class="controls">
      <button type="submit" class="btn btn-inverse btn-large">Sign in</button>
    </div>
  </div>
</form>
</div>
</body>
</html>