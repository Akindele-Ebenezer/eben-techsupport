 
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<title>Message Us</title>
	<link rel="stylesheet" href="styles.css">
	<style>
		body {
			background-image: linear-gradient(to right, #fff, #333);
		}
	
		#contact-wrapper {
			background: #fff;
		}
		
		#contact-form {
			display: flex;  
			justify-content: center; 
		}
		
		#contact-wrapper {
			display: flex; 
			border-radius: 2rem;	 	
			justify-content: center;
			margin-top: 10rem;
			margin-bottom: 2rem;
			padding: 2rem;
			width: 80vw;
		}
		
		#contact-wrapper h1 {
			text-align: center;
		}
		
		textarea {
			border: 3px solid #ddd;
			border-radius: 1rem;
			font-size: 1.3rem;
			min-width: 40rem;
			max-width: 40rem;
			min-height: 12rem;
			max-height: 12rem; 
			padding: .5rem;
		}
		
		#top-nav li:nth-child(5) {
				background: var(--background);
		}
		
		@media (max-width: 820px) {
			#contact-wrapper {
				margin-top: 5rem;
			}
		
			textarea {
				min-width: 20rem;
				max-width: 20rem; 
			} 
		}
	</style>
</head>
	<?php include "header.html"; ?>
<form id="contact-form" action="mail-message.php" method="post">
	<div id="contact-wrapper">
		<div id="contact-content">
			<h1>Send Us a Message</h1>
			<p>We will get back to you as soon as possible...</p>
			<br>
			<input type="text" name="name" placeholder="Enter your name" required> 
			<input type="email" name="email" placeholder="Enter your email" required> <br><br>
			<input type="number" name="phone_no" placeholder="Phone no." required> 
			<input type="text" name="subject" placeholder="Subject" required> <br><br>
			<textarea name="message" placeholder="Write your message..." required></textarea> <br><br>
			<button type="submit" name="contact_btn">Send Message</button>
		</div>
	</div>
</form>

<?php include "footer.html"; ?>
