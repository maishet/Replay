<?php
// Include FB config file
require_once 'config.php';

session_destroy();
// Remove access token from session
//unset($_SESSION['facebook_access_token']);

// Remove user data from session
//unset($_SESSION['userData']);

// Redirect to the homepage
header("Location:./");
?>