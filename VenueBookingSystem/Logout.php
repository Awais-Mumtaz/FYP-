<?php
session_start();
unset($_SESSION["username"]);
unset($_SESSION["userid"]);
// session_destroy();
//echo 'You have been logged out. <a href="./Index.php">Home</a>';
header("Location: ./Index.php");
?>