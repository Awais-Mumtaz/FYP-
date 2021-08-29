<?php
require '../Includes/db_connect.php';

if (isset($_POST['vendor_name'])) {
	
	$uname = mysqli_real_escape_string($connection ,$_POST['vendor_name']);
	$uemail = mysqli_real_escape_string($connection ,$_POST['vendor_email']);
	$upwd = mysqli_real_escape_string($connection ,$_POST['vendor_pwd']);
	$udob = mysqli_real_escape_string($connection ,$_POST['vendor_dob']);
	
	$sql = "INSERT INTO vendors (name, email, password, date_of_birth)
	VALUES ('$uname', '$uemail', '$upwd', '$udob')";
	$result = mysqli_query($connection,$sql);
	if ($result) {
		echo "Data Uploaded";
	}
	else{
		echo "Error";
	}

	}
?>