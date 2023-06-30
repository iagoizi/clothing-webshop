<?php
$email = $_POST['email'];
$password = $_POST['password'];

$encrpassword = hash_init('sha512');
hash_update($encrpassword, $password);
$password_encryption = hash_final($encrpassword);


$connection = mysqli_connect('localhost', 'Webshop_user', 'Webshop_password', 'webshop');
$check_query = "SELECT * FROM USERS WHERE EMAIL = '$email' AND PASSWORD = '$password_encryption'";

$result = mysqli_query($connection, $check_query);

if(mysqli_num_rows($result) == 0)
{
    header('location: ../modules/login.php?message=ERROR_WRONG_LOGIN_OR_PASSWORD');
    exit;
}
$user = mysqli_fetch_assoc($result);

session_start();
$_SESSION['email'] = $user['EMAIL'];
$_SESSION['name'] = $user['USERNAME'];
$_SESSION['id'] = $user['ID'];
$_SESSION['date'] = $user['LAST_ONLINE'];
if($user['IS_VERIFIED'])
{
    header('location: ../modules/index.php');
    exit;
}
else
{
    header('location: ../modules/change-password.php');
}

?>