<?php
include "config.php";
session_start();
$sql = "SELECT * FROM users";
$query = mysqli_query($conn, $sql);
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ETS | Users</title>
	<style>
		
		.users {
			display: flex;
			flex-wrap: wrap;
			justify-content: center; 
			padding: .2rem;
		} 
		 
		.users div {
			border: 1px solid #ddd;
			border-radius: 1rem;
			margin: .2rem;
			padding: 1rem;
			width: 30rem;
		} 
		   
		.users div ul li h3 {
			background: #f0f0f0;
			padding-inline: .3rem;
			text-indent: .2rem;
		} 
		 
		.ets-users {
			border-bottom: 1px solid #ccc;
			margin-top: 9rem;
			letter-spacing: .2rem;
			text-align: center; 
		} 
		 
		.users h1 {
			text-transform: capitalize;	
		}
		
		.users img {
			border-radius: 3rem;
			width: 4rem;
		} 
		 
		.users li {
			border: 1px solid #ddd;
			border-radius: 0 0 1rem 1rem;
			justify-content: center;
			margin: .3rem;
			padding-bottom: 1rem; 		
		} 
		 
		.users span {
			padding-inline: .5rem;
			word-wrap: break-word;
		} 
		  
		.users span#email {
			text-transform: lowercase;
		} 
		 
		.users ul {
			display: flex;
			flex-wrap: wrap;
			list-style: none;
		}  
		 
		@media (max-width: 818px) {
			.ets-users {
				margin-top: 5rem;
			}
		}
		
		@media (max-width: 500px) {
			.users li {
				width: 80vw;
			}
		}
		
	</style>
	<link rel="stylesheet" href="styles.css">
</head>

<body>
<main id="main">
<?php include "header.php"; ?>
		<h1 class="ets-users">ETS Users</h1>
	<div class="users">
	<?php foreach($result as $users): ?>
		<div>
			<h1><?= $users['first_name'] . ' ' . $users['last_name']; ?> <br> <img src="<?= $users['profile_pic']; ?>"></h1>
			<ul>
				<li><h3>SCHOOL</h3> <br><br> <span><?= $users["school"]; ?></span></li>
				<li><h3>CLASS</h3> <br><br> <span><?= $users["class"]; ?></span></li> 
				<li><h3>GENDER</h3> <br><br> <span><?= $users["gender"]; ?></span></li>
				<li><h3>OCCUPATION</h3> <br><br> <span><?= $users["occupation"]; ?></span></li>
				<li><h3>DEPARTMENT</h3> <br><br> <span><?= $users["department"]; ?></span></li>
				<li><h3>PHONE NO.</h3> <br><br> <span><?= $users["mobile"]; ?></span></li>
				<li><h3>INTEREST</h3> <br><br> <span><?= $users["interest"]; ?></span></li>
				<li><h3>COUNTRY</h3> <br><br> <span><?= $users["country"]; ?></span></li>
				<li><h3>EMAIL</h3> <br><br> <span id="email"><?= $users["email"]; ?></span></li>
			</ul>
		</div>	
	<?php endforeach; ?>
	</div>

<?php include "footer.html"; ?>
</main>
</body>

</html>
