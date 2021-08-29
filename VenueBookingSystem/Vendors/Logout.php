<?php
session_start();
// session_destroy();
unset($_SESSION["vendorname"]);
unset($_SESSION["vendorid"]);
//echo 'You have been logged out. <a href="./Index.php">Home</a>';
header("Location: ../Index.php");
?>