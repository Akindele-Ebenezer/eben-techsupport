<?php
include "page.php";
include "config.php";
include "login.php";
$title = "Change Password";
$page_title = $title;
?>
<?php 
/*
error_reporting(0);
	include "config.php";
	include "login.php";
	$title = "Change Password";
	$page_title = $title;
	include "page.php"; 
		
	error_reporting(0);	
	$id = $_POST["id"];
	$username = $_SESSION["username"]; 
	$new_password = $_POST["new_password"];
	$email = $_POST["email"];
	$tel_no = $_POST["tel_no"];
	
	$sql = "UPDATE users SET password = '$new_password' WHERE id = $id;";
	$query = mysqli_query($conn, $sql);
*/
 ?>


 <div class="content-wrapper">
	<div class="dashboard">
		<ul>
			<li><a href="profile.php">My Dashboard</a></li>
			<li><a href="contact.php">Contact</a></li>					
			<li><a href="users.php">Students</a></li>
			<li><a href="notification.php">Notification</a></li>
			<li><a href="change-name.php">Change Name</a></li>
			<li><a href="change-password.php">Change Password</a></li>
						<li><a href="change-profile-picture.php">Change Profile Picture</a></li>
			<li><a href="email-correction.php">Email Correction</a></li>
			<li><a href="logout.php">Log Out</a></li>
		</ul>
	</div> 
	<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
		<div id="change-password-wrapper">
			<div id="change-password-content">
				<h1>Change Password</h1>
				<p>It's quick and easy</p> 
				<hr>
				
				<input type="number" name="id" placeholder="User Id">
				<input type="password" name="old_password" placeholder="Old Password">
				<input type="password" name="new_password" placeholder="New Password"> <br>
				<input type="email" name="email" placeholder="Email"> 
				<input type="number" name="tel_no" placeholder="Tel No.">  <br>
				<button type="submit">Change Password</button>
			</div>
		</div>
	</form>
 </div> 
 <?php
	include "footer.html";
?>
 
