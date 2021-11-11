<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<title>ETS - My Dashboard</title>
	<style> 
		#about {
			font-size: .98rem;	
		}
	 
		#connect-btn {  
			letter-spacing: .5rem; 
		}
		  
		 #connect a { 
			color: #fff;
			text-decoration: none;
		 }
		 
		.dashboard li {
			background-color: #fff; 
		}
		 
		#email-span {  
            text-transform: lowercase;
		}
		 
		.profile-bg {
			position: absolute;
			width: 100vw;
			height: 220rem;
			background: steelblue;
			top: 0;
			z-index: -10;
			transform: rotate(241deg);
		}
		
		#profile-details span {
			word-wrap: break-word;	
		}
		
		#profile-img a {
			color: #333;
			margin-left: 2.5rem;
		}
		
		#profile-img img:first-child {
			border-radius: 50%;
			position: absolute;
			width: 15rem;
			z-index: -1;
		}
		 
		#profile-picture-note {
		    background: #fff;
		    border-radius: 1rem;
		    margin-top: 7.5rem;
		    padding: 1rem;
		}
		
		#profile-picture-note a {
			color: #000;
		}
		
		#profile-wrapper h2:first-child { 
			background: #f0f0f0;
			font-family: verdana;
			font-size: 1.2rem;
			padding: .5rem;
		}
		
		#profile-wrapper h2:nth-child(2) {
			border-radius: 1rem; 
			font-family: verdana;
		}
		
		#welcome-text { 
			letter-spacing: .04rem; 
			line-height: 1.5rem;
		}
		 
		#welcome-text p:first-child {
			letter-spacing: .2rem;	
			transform: translateY(-1.5rem);	
			text-align: center; 		
		}
		  
		#welcome-text p:last-child {    
			transform: translateY(-1.5rem);		
		}
		 
		#footer {
			margin-top: -18rem;
			position: relative;
		}
		
		#top-nav li:nth-child(2) { 
			background: var(--background);  
		}   

		@media (max-width: 1188px) {  
			#footer {
				margin-top: -18rem; 
			} 
		} 
		 
		@media (min-width: 562px) { 
			#profile-details li {   
				margin: .5rem .2rem; 
			}
			
			#profile-details ul {  
				display: flex;
				flex-wrap: wrap;
				width: 30rem;
			}  
		} 

        @media (max-width: 643px) {
            #welcome-text {
                transform: translateY(2rem);
            }
        }
		
	</style>
	<link rel="stylesheet" href="styles.css"> 
</head>

<body>

<div id="main">

<?php
error_reporting(0);
include "login.php";
include "config.php";   
$username = $_SESSION["username"];  
$sql2 = "SELECT * FROM users WHERE username = '$username';";
$query = mysqli_query($conn, $sql2);  
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);
   
//print_r($result[0]["first_name"]); 
 
	class Employee {
		public $username;
		public $first_name;
		public $last_name;
		public $age;
		public $gender;
		public $occupation;
		public $department;
		public $mobile;
		public $school;
		public $date_of_birth;
		public $email;
		public $interest;
		public $country;
		public $class;
		public $status; 
		public $profile_pic;
		private $new_password;
		private $confirm_password;
	}
	$user = new Employee();
	$user->username = $result[0]["username"];  
	$user->first_name = $result[0]["first_name"];  
	$user->last_name = $result[0]["last_name"];  
	$user->email = $result[0]["email"];  
	$user->age = $result[0]["age"];  
	$user->gender = $result[0]["gender"]; 
	$user->occupation = $result[0]["occupation"];  
	$user->department = $result[0]["department"];  
	$user->mobile = $result[0]["mobile"];  
	$user->school = $result[0]["school"];  
	$user->date_of_birth = $result[0]["date_of_birth"];  
	$user->interest = $result[0]["interest"];  
	$user->country = $result[0]["country"];  
	$user->class = $result[0]["class"];  
	$user->status = $result[0]["employee_status"];    
	$user->profile_pic = $result[0]["profile_pic"]; 	
	$date = date('l jS \of F Y');

?>

<?php include "header.php"; ?>

	
	<div id="welcome-wrapper"> 
			<img src="images/bg.jpg">
			<img src="images/bg.jpg">
			 
			<div id="welcome-text">
				<p><strong>Welcome <?= "$user->first_name $user->last_name"; ?></strong></p>
				<br>
				
				<p id="about"> Our team is responsible for keeping students productive, helping them via telephone or verbally. We ensure that their devices are working properly and every data is secure. We are also responsible for updating and installing new software, typing/printing soft copy assignments and providing technical support.</p>
				 
			</div>
			
			<div id="connect">
				<p>If you're having any issues on your DASHBOARD, <a href="contact.php"><em>contact us...</em></a></p> 
				<button id="connect-btn"><a href="contact.php">Connect</a></button>
			</div> 
	</div>

	<div id="profile-wrapper">
		<h2>Today is <?= $date; ?></h2>
		<h2><?= $user->email; ?></h2>
			<div id="profile-content">
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
				
				<div id="profile-details"> 
					<h1>STUDENT PROFILE</h1> 
					
					<ul>
						<li><h2>NAME</h2> <br><br> <span><?= "$user->first_name $user->last_name"; ?></span></li>
						<li><h2>SCHOOL</h2> <br><br> <span><?= "$user->school"; ?></span></li>
						<li><h2>CLASS</h2> <br><br> <span><?= "$user->class"; ?></span></li>
						<li><h2>AGE</h2> <br><br> <span><?= "$user->age"; ?></span></li>
						<li><h2>GENDER</h2> <br><br> <span><?= "$user->gender"; ?></span></li>
						<li><h2>OCCUPATION</h2> <br><br> <span><?= "$user->occupation"; ?></span></li>
						<li><h2>DEPARTMENT</h2> <br><br> <span><?= "$user->department"; ?></span></li>
						<li><h2>MOBILE</h2> <br><br> <span><?= "$user->mobile"; ?></span></li> 
						<li><h2>EMAIL</h2> <br><br> <span id="email-span"><?= "$user->email"; ?></span></li>
						<li><h2>INTEREST</h2> <br><br> <span><?= "$user->interest"; ?></span></li>
						<li><h2>COUNTRY</h2> <br><br> <span><?= "$user->country"; ?></span></li> 
						<li><h2>USER ID</h2><br><br> <span><?php print_r($result[0]["id"]); ?> </span></li>
					</ul>  
				</div>  
		 

				<div id="profile-img">	
					<img src="images/default-profile-pic.jpg">
					<img src="<?= $user->profile_pic ?>">
					<p><?= "$user->first_name $user->last_name"; ?></p> 
				</div> 
				<div id="profile-picture-note">
						<p><strong>NOTE:</strong> You can upload your Profile Picture by clicking <a href="change-profile-picture.php">Change Profile Picture</a>. Your <strong>User Id</strong> is on your dashboard. Click on choose file, then choose the picture you want then upload the picture. Though, this is temporary and will be removed in an hour.
						<br> <br>
						But if you want your Picture to always show in your profile, send your picture to this whatsapp no: <ins><strong>09052757805</strong></ins>. You will pay small cash for that, and changes will be made instantly.<br> <br> - For every other <strong>comments/messages/complaints</strong>, click <a href="contact.php">HERE</a> to send your messages.</p>
				</div>
			</div> 
			<div class="profile-bg"></div>
	</div>	
	
	 
</div>
<?php include "footer.html"; ?>
</body>

</html>
