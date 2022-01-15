<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<title>ADMIN LOGIN</title> 
</head>

<body>
<?php //include "page-loader.php"; ?>
<main id="main">
<?php  
	include "config.php"; 
	include "header.php";

    if(isset($_POST["submit"])) {
        $email = $_POST["email"];
        $password = $_POST["password"];
        
        $sql = "SELECT * FROM users WHERE username = 'tobi.akindele@gmail.com' and password = '$password';";
        $query = mysqli_query($conn, $sql); 

        if(mysqli_num_rows($query) == 1) {
            session_start();
            $_SESSION["loggedin"] = true;
            $_SESSION["email"] = $email;
            header('location: admin.php');
        }
    }
?>

<form class="admin-login" action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
    <div>
        <h1>Admin Login</h1>
        <input type="email" name="email" placeholder="Email"><br><br>
        <input type="password" name="password" placeholder="Password"><br><br>
        <button type="submit" name="submit">Login</button>
    </div>
</form>

	
<?php include "footer.html"; ?>
</main>
<?php //include "page-loader-script.php"; ?>
</body>
</html>
