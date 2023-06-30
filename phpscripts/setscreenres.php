<?php
$screenWidth = $_POST['width'];
$screenHeight = $_POST['height'];
session_start();
$_SESSION['height'] = $screenHeight;
$_SESSION['width'] = $screenWidth;
header('location: ../modules/index.php');
?>