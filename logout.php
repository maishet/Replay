<?php
// Include FB config file
if(!isset($_SESSION['user_is_login']) || @$_SESSION['user_is_login']==false){

    session_start();
    session_destroy();
    header("location: home.php");
  }
  else{
        require_once 'config.php';

    session_destroy();
    // Remove access token from session
    //unset($_SESSION['facebook_access_token']);

    // Remove user data from session
    //unset($_SESSION['userData']);

    // Redirect to the homepage
    header("Location: home.php");
  }

?>