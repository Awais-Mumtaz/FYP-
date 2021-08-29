<?php
include './Header.php';

if (isset($_POST['user_name'])) {
	
	$uname = mysqli_real_escape_string($connection ,$_POST['user_name']);
	$uemail = mysqli_real_escape_string($connection ,$_POST['user_email']);
	$upwd = mysqli_real_escape_string($connection ,$_POST['user_pwd']);
	$udob = mysqli_real_escape_string($connection ,$_POST['user_dob']);
	
	$sql = "INSERT INTO clients (name, email, password, date_of_birth)
	VALUES ('$uname', '$uemail', '$upwd', '$udob')";
	$result = mysqli_query($connection,$sql);
	if ($result) {
		echo '        <div class="page-height">';
        echo '<div class="col card alert-success mt-2 p-1">
        <p class="p-2"><b>Success!</b> Registration Completed. <i>again.</i></p>
            </div>';
            echo '<a class="p-3 mt-3" href="./Index.php">Return Home</a>
             </div>';
	}
	else{
		echo '        <div class="page-height">';
        echo '<div class="col card alert-danger mt-2 p-1">
        <p class="p-2"><b>ERROR!</b> Somehow an <i>Error.</i> occured.</p>
            </div>';
            echo '<a class="p-3 mt-3" href="./Index.php">Return Home</a>
            </div>';
	}

	}
include './Footer.php';
?>