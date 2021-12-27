<?php 
error_reporting(0);
	include "config.php";
	include "login.php";
	$title = "Change Profile Pic";
	$page_title = $title;
	include "page.php"; 
	include "change-profile-pic.php"; 
	$id = $_POST["id"];
	$new_profile_picture = $target_file;
	
	$sql = "UPDATE users SET profile_pic = '$new_profile_picture' WHERE id = $id;"; 
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
						<li><a href="change-profile-picture.php">Change Profile Picture</a></li>
			<li><a href="change-password.php">Change Password</a></li>
			<li><a href="email-correction.php">Email Correction</a></li>
			<li><a href="logout.php">Log Out</a></li>
		</ul>
	</div> 
	<form action="<?php $_SERVER["PHP_SELF"]; ?>" method="post" enctype="multipart/form-data">
		<div id="change-name-wrapper">
			<div id="change-name-content">
				<h1>Change Profile Picture</h1>
				<p>It's quick and easy</p> 
				<hr>
				
				<input type="number" name="id" placeholder="User Id">
				<input type="text" name="first_name" placeholder="First name">
				<input type="text" name="last_name" placeholder="Last name"> <br>
				<input type="email" name="email" placeholder="Email"> 
				<input type="file" name="new_profile_picture">  <br>
				<button type="submit">Upload</button> 
			</div> 
		</div>
	</form>
 </div>
 <?php
	include "footer.html";
?>
 