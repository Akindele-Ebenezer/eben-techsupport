<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<title>Registration Successful</title> 
	<style>
		#main {
			display: none;
		} 
	</style>
</head>

<?php
include "config.php";
include "profile-pic.php"; 

error_reporting(0);
$username = $_POST["first_name"];
$password = $_POST["confirm_password"];
$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];
$age = $_POST["age"];
$gender = $_POST["gender"];
$occupation = $_POST["occupation"];
$department = $_POST["department"];
$mobile = $_POST["mobile"];
$school = $_POST["school"];
$date_of_birth = $_POST["date_of_birth"];
$email = $_POST["email"];
$interest = $_POST["interest"];
$country = $_POST["country"];
$class = $_POST["class"];
$status = $_POST["status"]; 
$profile_pic = $target_file; 

$query = "INSERT INTO users (username, first_name, last_name, age, gender, occupation, department, mobile, interest, country, profile_pic, password, email, school, class) 
							VALUES
							('$username', '$first_name', '$last_name', '$age', '$gender', '$occupation', '$department', '$mobile', '$interest', '$country', '$profile_pic', '$password', '$email', '$school', '$class');";
		
$result = mysqli_query($conn, $query);
//echo $office_line;
	
?>
<body> 
<?php include "page-loader.php"; ?>
<main id="main">
<?php include "header.php";
 ?>
	<div id="reg-success-wrapper">
		<div id="reg-success-content">
			<h1>Registration Successful..</h2>
			<p>Hello <?=  ucwords($first_name) . " " . ucwords($last_name); ?>, you're registered.</p>
			<p>Go to <a href="index.php">Home Page</a> to Login</p>
		</div>
	</div>
<?php include "footer.html"; ?>
<?php include "page-loader-script.php"; ?>
</main>
</body>

</html>
