<?php
session_start(); // Start the session

// Destroy the session to log out the user
session_destroy();

// Redirect to login page after logout
header("Location: login.php");
exit();
?>
