<?php session_start(); 
// destroy session 
session_destroy(); 
// assign null value to varibles
$_SESSION['fname'] = null; 
// sending the user to the index page after destroy has been run
header('location:index.php'); 
?>