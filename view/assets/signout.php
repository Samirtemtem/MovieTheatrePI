<?php
session_start();
error_reporting(E_ERROR | E_WARNING);


// Unset all session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Redirect to the login page
header("Location: ../LoginView.php");
exit();
?>
