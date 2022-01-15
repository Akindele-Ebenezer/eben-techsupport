<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<title>ADMIN</title> 
</head>

<body>
<?php //include "page-loader.php"; ?>
<main id="main">
<?php  
	include "config.php"; 
	include "header.php";
?>
 
  <div class="admin-inbox">
        <div>
          <table>
            <tr>
              <th>NAME</th>
              <th>EMAIL</th>
              <th>PHONE_NO</th>
              <th>SUBJECT</th>
              <th>MESSAGE</th>
              <th>TIME</th>
            </tr>
            
            <?php

        $sql = "SELECT * FROM admin_inbox;";
        $query = mysqli_query($conn, $sql);
        $result = mysqli_fetch_all($query, MYSQLI_ASSOC); 

        foreach($result as $message): ?>
            <tr>
              <td><?= $message["name"]; ?></td>
              <td><?= $message["email"]; ?></td>
              <td><?= $message["phone_no"]; ?></td>
              <td><?= $message["subject"]; ?></td>
              <td><?= $message["message"]; ?></td>
              <td><?= $message["time"]; ?></td>
            </tr>
            <?php endforeach; ?>
          </table>
        </div>
      </div>

      <div class="sm-screen-admin-inbox">
      <?php foreach($result as $message): ?>
          <div>
            <h1><?= $message["name"]; ?></h1>
            <ul>
              <li>Email <span><?= $message["email"]; ?></span></li>
              <li>Phone_no <span><?= $message["phone_no"]; ?></span></li>
              <li>Subject <span><?= $message["subject"]; ?></span></li>
              <li>Message <span><?= $message["message"]; ?></span></li>
              <li>Time <span><?= $message["time"]; ?></span></li>
            </ul>
          </div>
        <?php endforeach; ?>
      </div>
	
<?php include "footer.html"; ?>
</main>
<?php //include "page-loader-script.php"; ?>
</body>
</html>
