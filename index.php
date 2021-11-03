<?php 
error_reporting(0); 
require_once "config.php";    
	 $username =  stripslashes(trim($_POST["username"]));
	 $password =  stripslashes(trim($_POST["password"]));
	 
	 $mysql = "SELECT * FROM users WHERE username = '$username' AND password = '$password';";
	 $query = mysqli_query($conn, $mysql); 
	  
	 if (isset($_POST["submit"])) { 
		 if (empty($username)) {
			$username_error_message = "Enter username..";
		 } elseif (empty($password)) {
			 $password_error_message = "Enter password..";
		 } else {
			 $wrong_password_error = "Wrong username/password..";
		 }
	 }
	 
	 if(mysqli_num_rows($query) == 1) {
		session_start();
		$_SESSION['auth'] = 'true';
		$_SESSION["loggedin"] = true;
		$_SESSION["id"] = $id;
		$_SESSION["username"] = $username;
		$_SESSION["password"] = $password; 
		 header('location: profile.php'); 
	 } 
?>
 
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<title>ETS - Log In</title> 
	<style>
		#main {
			display: none;
		}
	
		#top-nav li:first-child {
			background: var(--background);
		}
        <link rel="stylesheet" href="styles.css">
	</style>
</head>

<body> 

<?php include "page-loader.php";
?>
<main id="main">

<?php include "header.php"; 
?>

	<div id="login-wrapper">
			<h1>Log In</h1>
		<div id="login-content">
			<div id="sign-up-img">
				<img src="sign-in-img.jpg">
			</div>
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"> 
				<div id="form-wrapper"> 
					<span><?= $wrong_password_error; ?></span> <br> <br>
					<label>Email</label>  <br>
					<input type="text" name="username" value="<?php echo $username; ?>"> <br>
					<span><?= $username_error_message; ?></span>  <br><br>
					
					<label for="password">Password</label> <br>
					<input type="password" name="password"> <br> <span><?= $password_error_message; ?></span><br> 
					
					<button type="submit" name="submit">Log In</button>
					
					<p>Don't have an account? <strong><a href="sign-up.php">Sign Up</a></strong></p>
				</div>
			</form>
		</div>
	</div>

<?php include "footer.html"; 
	  include "page-loader-script.php";
?>
</main>
</body>

</html>
