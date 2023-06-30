<?php
session_start();

// Check if session variables are set
$loggedIn = isset($_SESSION['name']);

// Return the response
echo $loggedIn ? 'true' : 'false';
echo '-';
echo isset($_SESSION['name'])? $_SESSION['name'] : 'undefined';
?>
