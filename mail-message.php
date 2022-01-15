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
<?php include "header.php"; ?>

	<div id="mail-message-wrapper">
		<div id="mail-message-content">
			<h1>Message sent successfully...</h1>
			<br>
			<p>Thanks for reaching out to us, '"<?= ucwords($name); "'. We will get back to you as soon as possible.</p>
			<p>Go back to <a href="index.php">Home Page</a> or Send another <a href="contact.php">message here</a></p>
		</div>
	</div> 
	
<?php include "footer.html"; ?>
</main>
<?php include "page-loader-script.php"; ?>
</body>
</html>
