<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<title>My Dashboard - DEPASA</title>
	<link rel="stylesheet" href="styles.css">
	<style> 
		#welcome-text { 
			letter-spacing: .04rem;
		}
		
		#welcome-text h1 {   
			color: #eee;
			font-size: 3.5rem;  
		}
		
		#welcome-wrapper {     
			margin-top: 7rem;	 		
		} 
		
		@media (max-width: 820px) {
			#welcome-wrapper {     
				margin-top: 3rem;	 		
			} 
		}
        	 
		@media (max-width: 646px) {
			#welcome-text h1, p {
				transform: translateY(-1.5rem);	
			}	
		}
		
		@media (max-width: 362px) { 
            		#welcome-text {
			    transform: translateY(-1rem);
			} 
		}  	 
	</style>
</head>

<body>

<?php include "header.php"; ?>
 
	
	<div id="welcome-wrapper">
		<img src="images/bg.jpg">
		<img src="images/bg.jpg">
		
		<div id="welcome-text"> 
			<h1><?= $title; ?></h1>
			<p>We are also available to help you build and implement pleasant/responsive websites. <br> <strong><a href="https://akindele-ebenezer.herokuapp.com" target="_blank">Click Here</a></strong> to know more..</p>			
		</div> 
	</div>

 
	 
 
</body>

</html>
