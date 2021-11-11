<?php
session_start();
include "config.php";
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
	<link rel="stylesheet" href="styles.css">
</head>

<body>
<main id="main">
<?php include "header.php"; ?>
		<h1 class="ets-users">ETS Users</h1>
	<div class="users">
	<?php foreach($result as $users): ?>
		<div>
			<h1><?= $users['first_name'] . ' ' . $users['last_name']; ?> <br> <img src="<?= $users["profile_pic"]; ?>"></h1>
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