<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div id="page">
  <div id="toolbar" data-0="height:192px" data-128="height: 64px">
    <div id="actions">
      <div class="icon">
        <svg viewBox="0 0 24 24" x="0px" y="0px" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
          <g id="menu">
            <path d="M3,18h18v-2H3V18z M3,13h18v-2H3V13z M3,6v2h18V6H3z"></path>
          </g>
        </svg>
      </div>
      <div class="spacer"></div>
      <div class="icon">
      <svg viewBox="0 0 24 24" x="0px" y="0px" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
          <g id="search">
            <path d="M15.5,14h-0.8l-0.3-0.3c1-1.1,1.6-2.6,1.6-4.2C16,5.9,13.1,3,9.5,3C5.9,3,3,5.9,3,9.5S5.9,16,9.5,16c1.6,0,3.1-0.6,4.2-1.6l0.3,0.3v0.8l5,5l1.5-1.5L15.5,14z M9.5,14C7,14,5,12,5,9.5S7,5,9.5,5C12,5,14,7,14,9.5S12,14,9.5,14z"></path>
          </g>
        </svg>
      </div>
      <div class="icon">
      <svg viewBox="0 0 24 24" x="0px" y="0px" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
          <g id="more-vert">
            <path d="M12,8c1.1,0,2-0.9,2-2s-0.9-2-2-2c-1.1,0-2,0.9-2,2S10.9,8,12,8z M12,10c-1.1,0-2,0.9-2,2s0.9,2,2,2c1.1,0,2-0.9,2-2S13.1,10,12,10z M12,16c-1.1,0-2,0.9-2,2s0.9,2,2,2c1.1,0,2-0.9,2-2S13.1,16,12,16z"></path>
          </g>
        </svg>
      </div>
    </div>
    <div id="title" data-0="font-size: 48px; padding: 0 0 24px 12px;" data-128="font-size: 18px; padding: 0 0 21px 60px;">
Attendance Management System</div>
    </div>
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
      <h1>FACULTY SIGN UP</h1>
  	  <input type="text" class="input1" name="StaffName" placeholder="Staff Name*" value="<?php echo $StaffName; ?>" required>
  	  <input type="text" name="Staff_Id" class="input1" placeholder="Staff Id*" value="<?php echo $Staff_Id; ?>" required>
  	  <input type="password" class="input1" name="password_1" placeholder="Password*" required>
  	  <input type="password" class="input1" name="password_2" placeholder="Confirm Password*" required>
	  <input type="text" class="input1" name="Sub_Code" placeholder="Subject Code*" required>
	  <input type="text" class="input1" name="Dept_Id" placeholder="Department Id*" required>
  	  <button type="submit" name="reg_staff">Submit</button>
  	<p id="already">
  		Already a member? <a href="login.php">Sign in</a><br/><br/>
		<a href="student.php"><strong>Click here for Student portal</a>
	</p>
	
  </form>
<link href='https://fonts.googleapis.com/css?family=Roboto:400' rel='stylesheet' type='text/css'>
        </div>
<script src="https://www.gstatic.com/firebasejs/5.4.1/firebase.js"></script>
</body>
</html>