<?php
session_start();
// initializing variables
$StaffName = "";
$Staff_Id    = "";
$Sub_Code = "";
$Dept_Id = "";
$Sem = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('127.0.0.1', 'root', '', 'project');
if (isset($_POST['reg_staff'])) {
  // receive all input values from the form
  $StaffName = mysqli_real_escape_string($db, $_POST['StaffName']);
  $Staff_Id = mysqli_real_escape_string($db, $_POST['Staff_Id']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
    $Sub_Code = mysqli_real_escape_string($db, $_POST['Sub_Code']);
    $Dept_Id = mysqli_real_escape_string($db, $_POST['Dept_Id']);
	 // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($StaffName)) { array_push($errors, "StaffName is required"); }
  if (empty($Staff_Id)) { array_push($errors, "Staff_Id is required"); }
 if (empty($Sub_Code)) { array_push($errors, "Sub_Code is required"); }
 if (empty($Dept_Id)) { array_push($errors, "Dept_Id is required"); }
    if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }
 
  // first check the database to make sure 
  // a user does not already exist with the same StaffName and/or Staff_Id
  $user_check_query = "SELECT * FROM staff WHERE StaffName='$StaffName' OR Staff_Id='$Staff_Id' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['StaffName'] === $StaffName) {
      array_push($errors, "StaffName already exists");
    }

    if ($user['Staff_Id'] === $Staff_Id) {
      array_push($errors, "Staff_Id already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = $password_1;//encrypt the password before saving in the database

  	$query = "INSERT INTO staff (StaffName, Staff_Id, password, Sub_Code, Dept_Id) 
  			  VALUES('$StaffName', '$Staff_Id', '$password', '$Sub_Code', '$Dept_Id')";
  	mysqli_query($db, $query);
  	$_SESSION['StaffName'] = $StaffName;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index.php');
  }
}
//
if (isset($_POST['login_user'])) {
  $StaffName = mysqli_real_escape_string($db, $_POST['StaffName']);
  $Sem = mysqli_real_escape_string($db, $_POST['Sem']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  if (empty($StaffName)) {
  	array_push($errors, "StaffName is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }
  if (count($errors) == 0) {
  	$query = "SELECT * FROM staff WHERE StaffName='$StaffName' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['StaffName'] = $StaffName;
  	  $_SESSION['Sem'] = $Sem;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: index.php');
  	}else {
  		array_push($errors, "Wrong StaffName/password combination");
  	}
  }
}
if(isset($_POST['attsub'])){
	//$Name = mysqli_real_escape_string($db, $_POST['Name']);
	$query = "UPDATE students SET Attended='$_POST[Attended]', MaximumClass='$_POST[MaximumClass]' WHERE ID='$_POST[ID]'"; 
  	if(mysqli_query($db, $query)){
	header('location: index.php');
	}else
	echo "Not Updated";
}
?>