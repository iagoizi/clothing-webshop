<?php
session_start();
$email = $_POST['email'];
$oldpassword = $_POST['old-password'];
$new_password = $_POST['new-password'];
$new_password_confirmed = $_POST['new-password-confirmed'];

if($email != $_SESSION['email'])
{
    header('location: ../modules/change-password.php?message=EMAIL_DOESNT_MATCH');
    exit;
}

$encrpassword = hash_init('sha512');
hash_update($encrpassword, $oldpassword);
$password_encryption = hash_final($encrpassword);


$connection = mysqli_connect('localhost', 'Webshop_user', 'Webshop_password', 'webshop');
$check_query = "SELECT * FROM USERS WHERE EMAIL = '$email' AND PASSWORD = '$password_encryption'";

$result = mysqli_query($connection, $check_query);

if(mysqli_num_rows($result) == 0)
{
    header('location: ../modules/change-password.php?message=ERROR_WRONG_PASSWORD');
    exit;
}

if($new_password != $new_password_confirmed)
{
    header('location: ../modules/change-password.php?message=ERROR_WRONG_CONFIRMATION');
    exit;
}
$id = $_SESSION['id'];

$encrpassword_new = hash_init('sha512');
hash_update($encrpassword_new, $new_password);
$password_encryption_new = hash_final($encrpassword_new);

$update_query = "UPDATE `users` SET `PASSWORD` = '$password_encryption_new', `IS_VERIFIED` = '1' WHERE `users`.`ID` = '$id' ";
mysqli_query($connection, $update_query);

header('location: ../modules/index.php')

?>