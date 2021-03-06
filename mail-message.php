<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<title>Message</title>
	<style>
			
			#mail-message-wrapper {
				display: flex;
				justify-content: center;
				margin-block: 12rem;
				padding: 1rem;
			}	
			
			#mail-message-wrapper h1 {
				color: steelblue;	 
			}	
			
			#mail-message-wrapper p {
				line-height: 2rem;
			}	
			
			#main {
				display: none;	
			}
	</style>
</head>

<body>
<?php include "page-loader.php"; ?>
<main id="main">
<?php  
	include "config.php"; 
	include "header.php";
	
	//error_reporting(0); 

	if(isset($_POST["contact_btn"])) {
		
		$name = $_POST["name"];	
		$email = $_POST["email"];
		$phone_no = $_POST["phone_no"];
		$subject = mysqli_real_escape_string($conn, $_POST["subject"]);
		$message = mysqli_real_escape_string($conn, $_POST["message"]);
		$sql = "INSERT INTO admin_inbox (name, email, phone_no, subject, message, time) VALUES ('$name', '$email', '$phone_no', '$subject', '$message', now());";
		$query = mysqli_query($conn, $sql);

		echo $name;
	}
?>

	<div id="mail-message-wrapper">
		<div id="mail-message-content">
			<h1>Message sent successfully...</h1>
			<br>
			<p>Thanks for reaching out to us, <?= ucwords($name); ?>. We will get back to you as soon as possible.</p>
			<p>Go back to <a href="index.php">Home Page</a> or Send another <a href="contact.php">message here</a></p>
		</div>
	</div> 
	
<?php include "footer.html"; ?>
</main>
<?php include "page-loader-script.php"; ?>
</body>
</html>
