<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?= $page_title; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<link rel="stylesheet" href="styles.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">  
 	<link rel="icon" href="images/company-logo.PNG">
</head>
     
<body>
	<header id="lg-screen-header">
		<div id="top-info-wrappper">
			<div id="top-info"> 
				<a href="index.php">
					<div id="logo">
						<span>E</span><span>TS</span>
					</div>
				</a>
					<div id="address">
						<img src="images/address.PNG">
						<p><strong>ADDRESS</strong> <br> LAGOS, NIGERIA</p>
					</div>
					<div id="call-us">
						<a href="tel:09052757805"><img id="call" src="images/call.PNG"></a>
						<p><a href="tel:09052757805"><strong>CALL US</strong></a> <br> 09052757809</p> 
					</div>
					<div id="social-links">
						<a href='mailto:tobi.akindele@gmail.com' target='_blank'><img src="images/mail.png"></a>
						<a href='https://www.facebook.com/akindele.ebenezer/' target='_blank'><img src="images/fb.png" id="fb"></a>
						<a href='#'><img src="images/ws.png"></a>
						<a href='https://www.instagram.com/ebenezer__/?hl=en' target='_blank'><img src="images/ig.jpg"></a>
					</div>
			</div>
		</div>
		
		<nav>
			<ul id="top-nav">
				<li><a href="index.php">HOME</a></li>
				<li><a href="profile.php">DASHBOARD</a></li>
				<li><a href="notification.php">NOTIFICATION</a></li>
				<li><a href="location.php">LOCATION</a></li>
				<li><a href="contact.php">CONTACT</a></li> 
				<li><a href="logout.php">LOG OUT</a></li>
			</ul>
		</nav>
	</header>
	
	<?php include "header-sm-screen.html"; 
	      include "config.php"; 
	?>
 
