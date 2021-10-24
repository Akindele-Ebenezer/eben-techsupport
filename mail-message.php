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

<?php include "page-loader.php"; ?>
<?php include "header.html"; ?>
<main id="main">
<?php
$name = stripslashes(trim($_POST["name"])); 
$email = stripslashes(trim($_POST["email"])); 
$phone_no = stripslashes(trim($_POST["phone_no"])); 
$subject = stripslashes(trim($_POST["subject"])); 
$message = stripslashes(trim($_POST["message"]));


//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require './vendor/autoload.php';
 

try {
//Create an instance; passing `true` enables exceptions
	$mail = new PHPMailer(true);
    //Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'tobi.akindele@gmail.com';                     //SMTP username
    $mail->Password   = 'ebenkeyz1*';                               //SMTP password
    $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('tobi.akindele@gmail.com', 'Ebenezer');
    $mail->addAddress('tobi.akindele@gmail.com', 'Ebenezer');  

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $message;
    $mail->AltBody = 'Stay Bleesed!';

    $mail->send();
		echo '
				<div id="mail-message-wrapper">
					<div id="mail-message-content">
						<h1>Message sent successfully...</h1>
						<br>
						<p>Thanks for reaching out to us, ' . ucwords($name) . '. We will get back to you as soon as possible.</p>
						<p>Go back to <a href="index.php">Home Page</a></p>
					</div>
				</div>';
} 	catch (Exception $e) {
		echo ' 
				<div id="mail-message-wrapper">
					<div id="mail-message-content">
						<h1>Message could not be sent...</h1>
						<br> 
						<p>Go back to <a href="index.php">Home Page</a></p>
					</div>
				</div>';
	}
?>

<?php include "footer.html"; ?>
</main>
<?php include "page-loader-script.php"; ?>