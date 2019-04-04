<?php
include ('server.php');
if (!isset($_SESSION['StaffName'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['StaffName']);
  	header("location: login.php");
  }
 
?>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<nav class="navbar navbar-dark bg-primary" style="height:80px">
  <!-- Navbar brand -->
  <a class="navbar-brand" href="#">Online Attendence System</a>
  <a class="navbar-brand" href="#">Hello!! <?php echo  $_SESSION['StaffName']; ?> Welcome to Online Attendence</a>
   <button class="btn btn-danger"><a href="index.php?logout='1'" style="color: white;">Logout</a></button>
  <?php echo $_SESSION['Sem']; ?>
 </span>
</nav>
<body>
<?php
	$sql = "SELECT * from students WHERE Sem='$_SESSION[Sem]'";
	$result = mysqli_query($db, $sql);
	$resultCheck = mysqli_num_rows($result);
	?>
	<table class="table" border="1px">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Reg.No</th>
      <th scope="col">Sem</th>
      <th scope="col">Dept. ID</th>
      <th scope="col">Classes Attended</th>
      <th scope="col">Classes Taken</th>
	  <th scope="col1">Empty</th>
	  <th scope="col1">Submit</th>
    </tr>
  </thead>
  <?php
	if($resultCheck > 0){
		while($row = mysqli_fetch_assoc($result)){
			while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
			echo "<tr><form method=post action=server.php>";
				echo "<td>".$row['Fname']."</td>";
				echo "<td>".$row['Reg_No']."</td>";
				echo "<td>".$row['Sem']."</td>";
				echo "<td>".$row['Dept_Id']."</td>";
				echo "<td><input type='number' name=Attended value'".$row['Attended']."'></td>";
				echo "<td><input type='number' name=MaximumClass value'".$row['MaximumClass']."'></td>";
				//echo "<td>".$row['MaximumClass']."</td>";
				echo "<td><input type='hidden' name='ID' value='".$row['ID']."'></td>";
				echo"<td><button type='submit' class='btn btn-success' name=attsub>Submit</button></td>";
				echo "</form></tr>";
			} 
		}
	}
?>

</table>
</body>
</html>
