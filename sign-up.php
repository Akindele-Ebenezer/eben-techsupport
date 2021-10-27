<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<title>ETS - Sign Up</title>
	<link rel="stylesheet" href="styles.css">
	<style>
		body {
			background-image: linear-gradient(to right, #fff, #333);
		}
	</style>
</head>

<body>

<main id="main">
<?php include "header.php" ?>
	<form id="sign-up-form" action="registration-successful.php" method="post" enctype="multipart/form-data">
		<div id="sign-up-wrapper">
			<div id="sign-up-content">
				<h1>Sign Up</h1>
				<p>It's quick and easy</p> 
				<hr>
				
				<input type="text" name="first_name" placeholder="First name (Username)" required>
				<input type="text" name="last_name" placeholder="Last name" required> <br>
				<input type="email" name="email" placeholder="Email" required> <br>
				<input type="password" name="new_password" placeholder="New Password" required>
				<input type="password" name="confirm_password" placeholder="Confirm Password" required> <br>
				
				<h1>REGISTRATION</h1>
				<hr>
					  
					<input type="text" name="age" placeholder="Age / Optional"> 
					 
					<input type="text" name="gender"  placeholder="Gender" required> <br>
					
					 
					<input type="text" name="occupation"  placeholder="Occupation" required> 
					 
					<input type="text" name="department"  placeholder="Department" required> <br>
					 
					 
					<input type="number" name="mobile"  placeholder="Mobile" required>
					
					<input type="number" name="office_line"  placeholder="Office Line" required> <br>
					
					<center>
					<label for="date_of_birth">Date of Birth / Optional:</label>
					<input type="date" name="date_of_birth" > <br> 
					</center>
					 
					<input type="email" name="email"  placeholder="Email" required> <br>
					 
					<input type="text" name="interest"  placeholder="Interest / Optional"> 
					 
					<input type="text" name="country"  placeholder="Country" required> <br>
					 
					<center>
					<label for="date_of_hire">Date of Hire / Optional:</label>
					<input type="date" name="date_of_hire" > <br>
					</center> 
					
					Profile Picture: <input type="file" name="profile_pic" required>
					
					<center>
					<label for="employee_type">Employee Type / Optional:</label> 
						<select name="employee_type">
							<option value="active">Active</option>
							<option value="overtime">Overtime</option>
							<option value="regular">Regular</option>
						</select>
					</center>
					<br>
				<button type="submit">Create Account</button>
			</div>
		
		</div>
	</form>
	
<?php include "footer.html" ?>
</main>
</body>

</html>
