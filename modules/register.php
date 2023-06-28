<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>

    <link rel="stylesheet" href="../styles/login.css">

    <script>
        
      </script>

</head>
<body>

    <div class="alert-box">
        <p class="alert"></p>
    </div>
    <div class="form">
        <form action="../phpscripts/createaccount.php" method="post" target="_self" >
            <h1 class="heading">Register</h1>
            <input type="text" name = "username" placeholder="username" autocomplete="off" class="name" autocapitalize="off" required>
            <input type="email" name = "email" placeholder="email" autocomplete="off" class="email" autocapitalize="off" required>
            <!-- <input type="password" name = "password" placeholder="password" autocomplete="off" autocapitalize="off" class="password" required> -->
            <!-- It's stated, that the user can't set password before email is confirmed.-->
            
            <input type="submit" value="Register" class="submit-btn">
            <?php
            if(isset($_GET['error']))
              echo '<p style="color=red">'.$_GET['error'].'</p>';

            ?>
            <a href="login.php" class="link">already have an account ? log in here</a>
        </form>
    </div>

    <script src="../scripts/login.js"></script>

</body>
</html>
