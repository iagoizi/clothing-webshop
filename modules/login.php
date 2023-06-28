<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>

    <link rel="stylesheet" href="../styles/login.css">

</head>
<body>

    <div class="alert-box">
        <p class="alert"></p>
    </div>
    <form action="../phpscripts/login.php" method = "post"> 
    <div class="form">
        <h1 class="heading">login</h1>
        <input type="email" placeholder="email" autocomplete="off" name="email" autocapitalize="off" class="email" required>
        <input type="password" placeholder="password" autocomplete="off" name="password" class="password" autocapitalize="off" required>
        <input type="submit" value="Log in" class="submit-btn">
        <?php
            if(isset($_GET['message']))
            {
                $message = $_GET['message'];
                if($message == 'registered')
                    echo 'Your account has successfully been created. Your password was sent on your email. Please, check the spam folder.';
                else
                    echo $message;
            }
        ?>
        <a href="register.php" class="link">don't have an account? Register one</a>
    </div>
    </form>
    <script src="../scripts/login.js"></script>

</body>
</html>
