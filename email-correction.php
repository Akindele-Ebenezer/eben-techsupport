<?php 
error_reporting(0);
	include "config.php";
	include "login.php";
	$title = "Email Correction";
	$page_title = $title;
	include "page.php"; 
	$title = "Email Correction";
		
	$id = $_POST["id"];
	$username = $_SESSION["username"];  
	$new_email = $_POST["new_email"];
	$tel_no = $_POST["tel_no"];
	
	$sql = "UPDATE users SET email = '$new_email' WHERE id = '$id';";
	$query = mysqli_query($conn, $sql);
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
	<form action="<?php $_SERVER["PHP_SELF"]; ?>" method="post">
		<div id="email-correction-wrapper">
			<div id="email-correction-content">
				<h1>Change Email</h1>
				<p>It's quick and easy</p> 
				<hr>
				
				<input type="number" name="id" placeholder="User Id">
				<input type="email" name="old_email" placeholder="Old Email">
				<input type="email" name="new_email" placeholder="New Email"> <br> 
				<input type="number" name="tel_no" placeholder="Tel No.">  <br>
				<button type="submit">Change Email</button>
			</div> 
		</div>
	</form> 
 </div>
 <?php
	include "footer.html";
?>
 
