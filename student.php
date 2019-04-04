<?php
include ('server.php');
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
  <table class="table" border="1px">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Reg.No</th>
      <th scope="col">Classes Attended</th>
      <th scope="col">Classes Taken</th>
    </tr>
  </thead>
  <?php
	$sql = "SELECT * from students ";
	$result = mysqli_query($db, $sql);
	$resultCheck = mysqli_num_rows($result);
	if($resultCheck > 0){
		while($row = mysqli_fetch_assoc($result)){
			while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
				?>
			<tr>
				<td><?php echo $row['Fname'];?></td>
				<td><?php echo $row['Reg_No'] ; ?></td>
				<td><?php echo $row['Attended'] ; ?></td>
				<td><?php echo $row['MaximumClass']; ?></td>
				</tr>
			<?php
	}}}
			?>
			</table>
</body>
</html>