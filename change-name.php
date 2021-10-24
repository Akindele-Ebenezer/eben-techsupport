	<title>Change Name</title> 
 <main>
 <?php 
error_reporting(0);
	include "config.php";
	include "login.php";
	$title = "Change Name";
	include "page.php"; 
	
	error_reporting(0);
	
	$id = $_POST["id"];
	$username = $_SESSION["username"];
	$change_first_name = $_POST["change_first_name"];
	$change_last_name = $_POST["change_last_name"];
	$email = $_POST["email"];
	$tel_no = $_POST["tel_no"];
	
	$sql = "UPDATE users SET first_name = '$change_first_name', last_name = '$change_last_name' WHERE id = $id;";
	$query = mysqli_query($conn, $sql);
	//$result = mysqli_fetch_all($query, MYSQLI_ASSOC);
	
 ?>
 <div class="content-wrapper">
	<div class="dashboard">
		<ul>
			<li><a href="profile.php">My Dashboard</a></li>
			<li><a href="contact.php">Contact</a></li>
			<li><a href="notification.php">Notification</a></li>
			<li><a href="change-name.php">Change Name</a></li>
						<li><a href="change-profile-picture.php">Change Profile Picture</a></li>
			<li><a href="change-password.php">Change Password</a></li>
			<li><a href="email-correction.php">Email Correction</a></li>
			<li><a href="logout.php">Log Out</a></li>
		</ul>
	</div> 
	<form action="<?php $_SERVER["PHP_SELF"]; ?>" method="post">
		<div id="change-name-wrapper">
			<div id="change-name-content">
				<h1>Change Name</h1>
				<p>It's quick and easy</p> 
				<hr>
				<input type="number" name="id" placeholder="User Id"> 
				<input type="text" name="change_first_name" placeholder="First name (New)">
				<input type="text" name="change_last_name" placeholder="Last name (New)"> <br>
				<input type="email" name="email" placeholder="Email"> 
				<input type="number" name="tel_no" placeholder="Tel No.">  <br>
				<button type="submit">Change Name</button> 
			</div> 
		</div>
	</form>
 </div>
 <?php
	include "footer.html";
?>
</main>