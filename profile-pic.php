<?php
	$target_dir = "uploads/";
	$target_file = $target_dir . basename($_FILES["profile_pic"]["name"]);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	 
	  if (move_uploaded_file($_FILES["profile_pic"]["tmp_name"], $target_file)) {
    //echo "The file ". htmlspecialchars( basename( $_FILES["profile_pic"]["name"])). " has been uploaded.";
	echo "<span class='upload'>File Uploaded</span>";
  } else {
    //echo "Sorry, there was an error uploading your file.";
	echo "<span class='upload'>Error Upload</span>";
  } 
?>