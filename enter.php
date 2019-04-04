<?php
include ('server.php');
?>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
</head>
<nav class="navbar navbar-dark bg-primary" style="height:80px">
  <!-- Navbar brand -->
  <a class="navbar-brand" href="#">Online Attendence System</a>
 </span>
</nav>
<body>
<br>
<form method="post" action="enter.php">
<label>Enter the Register Number:</label>
	<input type="number" class='input1' name="studreg" placeholder="Register Number" required>
	<div class="input-group">
	<input type="submit" class="btn btn-primary" name="studregsub" value="Submit">
	</div>
	</form>
</body>