<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change password</title>

    <link rel="stylesheet" href="../styles/login.css">

</head>
<body>

    <div class="alert-box">
        <p class="alert"></p>
    </div>
    <form action="../phpscripts/change-password.php" method = "post"> 
    <div class="form">
        <h1 class="heading">Password changing</h1>
        <input type="email" name="email" placeholder="Your current email" autocomplete="off" autocapitalize="off" class="email" required>
        <input type="password" name="old-password" placeholder="Your current password" autocomplete="off" class="password" autocapitalize="off" required>
        <input type="password" name="new-password" placeholder="Your new password" autocomplete="off" class="password" autocapitalize="off" required>
        <input type="password" name="new-password-confirmed" placeholder="Confirm new password" autocomplete="off" class="password" autocapitalize="off" required>
        <input type="submit" value="Change password" class="submit-btn">
        <?php
            session_start();
            if(isset($_GET['message']))
            {
                $message = $_GET['message'];
                if($message == 'registered')
                    echo 'Your account has successfully been created. Your password was sent on your email. Please, check the spam folder.';
                else
                    echo $message;
            }
        ?>
    </div>
    </form>
    <script src="../scripts/login.js"></script>